!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
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
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="booking.php?convention=<?php echo 'kosong' ?>" class="nav-link">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="announce text-center fs-4 mt-2">Thank you rizal_1202194251 for Reserving<br>
            <span class="fs-5">Please double check your reservasion details</span>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Building Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Services</th>
                <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $date = $_GET['event_date'];
                    $start_time = $_GET['start_time'];
                    $check_in = date('d-m-y H:i:s', strtotime("$date $start_time"));
                    $duration = $_GET['duration'];
                    $check_out = date('d-m-y H:i:s', strtotime("$check_in +$duration hours"));
                    $building = $_GET['building'];
                    $number = $_GET['number'];
                    $isTrue = isset($_GET['services']);
                    if ($isTrue) {
                        $services = $_GET['services'];
                    } else {
                        $services = array();
                    }
                    
                    $total_price = 0;
                    // ini buat ngecek biaya sewa bangunan
                    if ($building === "Nusantara Hall") {
                        $total_price += 2000 * $duration; 
                    } elseif ($building === "Garuda Hall") {
                        $total_price += 1000 * $duration;
                    } elseif ($building === "Gedung Serba Guna") {
                        $total_price += 500 * $duration; 
                    }

                    // Ini buat masukin services
                    if (in_array("Catering", $services)) {
                        $total_price += 700;
                    };
                    if (in_array("Decoration", $services)) {
                        $total_price += 450;
                    };
                    if (in_array("Sound System", $services)) {
                        $total_price += 250;
                    };
                ?>
                <tr>
                    <td><?php echo(rand());?></td>
                    <td>rizal_1202194251</td>
                    <td><?php echo $check_in; ?>
                    </td>
                    <td><?php echo $check_out?></td>
                    <td><?php echo $building?></td>
                    <td><?php echo $number?></td>
                    <td>
                        <ul>
                        <?php
                        foreach ($services as $value) {
                            echo "<li>$value</li>";
                        }
                        ?>
                        </ul>
                    </td>
                    <td>$<?php echo $total_price?></td>
                </tr>
            <tbody>
        <table>
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