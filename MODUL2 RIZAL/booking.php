<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        *{
            box-sizing:border-box;
        }
        body{
            margin: 0;
            padding: 0;
        }
        .link{
            text-decoration: none;
            color: black;
        }
        .link:hover{
            color: black;
        }
        .unik{
            flex-direction:row;
        }
        .unik, .judul{
            width: 1000px;
        } 
        .book{
            width:100%
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mb-5">
        <div class="text-center bg-dark text-white p-2 my-3 mx-auto judul">
            Reserve your venue now!
        </div>
        <div class="card unik py-5  pe-5 mx-auto align-items-center">
            <div class="kiri flex-grow-1">
                <img src="assets/<?php
                 $convention = $_GET['convention'];
                 if ($convention === "kosong"){
                    echo "convention-1.jpg";
                 }else {
                    echo $convention;
                 }
                 ?>" alt="" width="400" height="200" class="d-block mx-auto">
            </div>
            <div class="kanan flex-grow-1">
                <form action="my_booking.php" method = "GET">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" value="rizal_1202194251" id="name" name="name" disabled><br>
                    <label for="" class="form-label">Event Date</label>
                    <input type="date" class="form-control" id="event_date" name="event_date"><br>
                    <label for="" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="start_time" name="start_time"><br>
                    <label for="" class="form-label">Duration (Hours)</label>
                    <input type="number" class="form-control" id="duration" name="duration"><br>
                    <label for="" class="form-label">Building Type</label>
                    <select class="form-select" name="building"id="inputGroupSelect01">
                    <?php
                    $choice = $_GET['number'];

                    if ($choice === "1") {
                        echo '<option></option>
                        <option value="Nusantara Hall" selected>Nusantara Hall</option>
                        <option value="Garuda Hall">Garuda Hall</option>
                        <option value="Gedung Serba Guna">Gedung Serba Guna</option>';
                    } elseif ($choice === "2") {
                        echo '<option></option>
                        <option value="Nusantara Hall">Nusantara Hall</option>
                        <option value="Garuda Hall" selected>Garuda Hall</option>
                        <option value="Gedung Serba Guna">Gedung Serba Guna</option>';
                    } elseif ($choice === "3") {
                        echo '<option></option>
                        <option value="Nusantara Hall">Nusantara Hall</option>
                        <option value="Garuda Hall">Garuda Hall</option>
                        <option value="Gedung Seba Guna" selected>Gedung Serba Guna</option>';
                    } else {
                        echo '<option selected></option>
                        <option value="Nusantara Hall">Nusantara Hall</option>
                        <option value="Garuda Hall">Garuda Hall</option>
                        <option value="Gedung Serba Guna">Gedung Serba Guna</option>';
                    }
                    ?>
                    </select><br>
                    <label for="" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number"><br>
                    <label for="" class="form-label">Add Services</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="services[]" value = "Catering">
                        <label class="form-check-label" for="flexCheckDefault" >
                            Catering / $700
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="services[]" value = "Decoration">
                        <label class="form-check-label" for="flexCheckChecked">
                            Decoration / $ 450
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="services[]" value = "Sound System">
                        <label class="form-check-label" for="flexCheckChecked">
                            Sound System / $250
                        </label>
                    </div><br>
                    <input type="submit" class="btn btn-primary book" value="Book">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <nav class="navbar fixed-bottom navbar-light bg-light ">
            <div class="container-fluid ">
                <a class="nav-link mx-auto link" href="#">Created by rizal_1202194251</a>
            </div>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>