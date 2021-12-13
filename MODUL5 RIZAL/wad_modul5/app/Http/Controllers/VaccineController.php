<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccine;

class VaccineController extends Controller
{
    public function about()
    {
        return view("home");
    }
    public function index()
    {
        $vaccine = Vaccine::all();
        return view('vaccine', ['vaccine' => $vaccine]);
    }
    public function insertVaccine()
    {
        return view('insertVaccine');
    }
    public function uploadVaccine(Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $ImageVaksin = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $ImageVaksin);
            $files->move($lokasi, $ImageVaksin);
            $vaccine = new vaccine();
            $vaccine->name = $request->nama_vaksin;
            $vaccine->price = $request->harga;
            $vaccine->description = $request->deskripsi;
            $vaccine->image = $pathImg;
            $vaccine->save();
            return redirect('/vaccine');
        }
    }
    public function updateVaccine($id)
    {
        $vaccine = Vaccine::find($id);
        return view('updateVaccine', ['vaccine' => $vaccine]);
    }
    public function syncVaccine($id, Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $ImageVaksin = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            // $ImageVaksin = $files->getClientOriginalName() . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $ImageVaksin);
            $files->move($lokasi, $ImageVaksin);
            $vaccines = vaccine::all();
            $vaccine = $vaccines->find($id);
            $vaccine->name = $request->nama_vaksin;
            $vaccine->price = $request->harga;
            $vaccine->description = $request->deskripsi;
            $vaccine->image = $pathImg;
            $vaccine->save();
            return redirect('/vaccine');
        }
    }
    public function deleteVaccine($id)
    {
        $vaccine = Vaccine::find($id);
        $vaccine->de();
        return redirect('/vaccine');
    }
};
