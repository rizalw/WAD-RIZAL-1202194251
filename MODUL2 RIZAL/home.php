<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="booking.php?convention=<?php echo 'kosong' ?>" class="nav-link">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mb-5">
        <div class="text-center m-2 display-6">
            WELCOME TO ESD VENUE RESERVATION
        </div>
        <div class="text-center bg-dark text-white p-2">
            Find your best deal for your event, here! 
        </div>
        <div class="tipe-gedung d-flex justify-content-evenly p-3">
            <div class="card">
                <img src="assets/convention-1.jpg" class="card-img-top" alt="..." width="400" height="200">
                <div class="card-body">
                    <p class="card-text"><b>Nusantara Hall</b><br>$2000 / hour<br>5000 capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center text-success">Free Parking</li>
                    <li class="list-group-item text-center text-success">Full AC</li>
                    <li class="list-group-item text-center text-success">Cleaning Service</li>
                    <li class="list-group-item text-center text-success">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-header p-2">
                    <a href="booking.php?convention=<?php echo 'convention-1.jpg' ?>&number=<?php echo "1" ?>">
                        <button class="d-block btn btn-primary p-1 mx-auto">Book Now</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="assets/convention-2.jpg" class="card-img-top" alt="..." width="400" height="200">
                <div class="card-body">
                    <p class="card-text"><b>Garuda Hall</b><br>$1000 / hour<br>2000 capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center text-success">Free Parking</li>
                    <li class="list-group-item text-center text-success">Full AC</li>
                    <li class="list-group-item text-center text-danger">Cleaning Service</li>
                    <li class="list-group-item text-center text-success">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-header p-2">
                    <a href="booking.php?convention=<?php echo 'convention-2.jpg' ?>&number=<?php echo "2" ?>">
                        <button class="d-block btn btn-primary p-1 mx-auto">Book Now</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="assets/convention-3.jpg" class="card-img-top" alt="..." width="400" height="200">
                <div class="card-body">
                    <p class="card-text"><b>Nusantara Hall</b><br>$500 / hour<br>500 capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center text-danger">Free Parking</li>
                    <li class="list-group-item text-center text-danger">Full AC</li>
                    <li class="list-group-item text-center text-danger">Cleaning Service</li>
                    <li class="list-group-item text-center text-success">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-header p-2">
                    <a href="booking.php?convention=<?php echo 'convention-3.jpg' ?>&number=<?php echo "3" ?>">
                        <button class="d-block btn btn-primary p-1 mx-auto">Book Now</button>
                    </a>
                </div>
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