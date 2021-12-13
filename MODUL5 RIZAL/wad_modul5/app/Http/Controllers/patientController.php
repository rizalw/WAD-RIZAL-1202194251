<?php

namespace App\Http\Controllers;

use App\Models\patients;
use App\Models\vaccine;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public function index()
    {
        $patients = patients::all();
        return view("patient", ['patients' => $patients]);
    }
    public function pickVaccine()
    {
        $vaccine = Vaccine::all();
        return view("pickVaccine", ['vaccine' => $vaccine]);
    }
    public function insertPatient($id)
    {
        $vacciness = Vaccine::find($id);
        return view("insertPatient", ['vaccine' => $vaccine]);
    }
    public function uploadPatient(Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $ImagePatient = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $ImagePatient);
            $files->move($lokasi, $ImagePatient);
            $patient = new patients();
            $patient->vaccine_id = $request->id_vaksin;
            $patient->name = $request->nama_patient;
            $patient->nik = $request->nik;
            $patient->alamat = $request->alamat;
            $patient->image_ktp = $pathImg;
            $patient->no_hp = $request->no_hp;
            $patient->save();
            return redirect(route('indexPatient'));
        }
    }
    public function updatePatient($id)
    {
        $patient = patients::find($id);
        return view('updatePatient', ['patient' => $patient]);
    }
    public function deletePatient($id)
    {
        $patient = patients::find($id);
        $patient->delete();
        return redirect(route('indexPatient'));
    }
    public function syncPatient($id, Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $ImagePatient = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $ImagePatient);
            $files->move($lokasi, $ImagePatient);
            $patients = patients::all();
            $patient = $patients->find($id);
            $patient->name = $request->nama_patient;
            $patient->nik = $request->nik;
            $patient->alamat = $request->alamat;
            $patient->image_ktp = $pathImg;
            $patient->no_hp = $request->no_hp;
            $patient->save();
            return redirect(route('indexPatient'));
        }
    }
}
