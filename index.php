<?php
    session_start();
    
    include 'init.php';

// echo count($_SESSION['bus1']);
    $passengers;
    if (isset($_POST['submit'])) {
        // print_r($_POST);

        $Number = $_POST['busNumber'];
        $busNumber = "bus$Number";

        // echo $busNumber;
        if (count($_SESSION[$busNumber]) < 5) {
            $_SESSION['sales'] += 50;
            $_SESSION['ticketNum'] += 1;

            $passengers = array(
                "name" => $_POST['name'],
                "dest" => $_POST['destination'],
                "ticketNum" => $_SESSION['ticketNum'],
                "bus" => $_POST['busNumber'],
                "fare" => 50,
            );

            switch($passengers['bus']) {
                case 1:
                        $_SESSION['bus1'][] = $passengers;
                    break;
                case 2:
                        $_SESSION['bus2'][] = $passengers;
                    break;
                case 3:
                        $_SESSION['bus3'][] = $passengers;
                  
                    break;
                case 4:
                        $_SESSION['bus4'][] = $passengers;    
                    break;
                case 5:
                        $_SESSION['bus5'][] = $passengers;
                    break;
            }
        } else {
            $error = "Bus $Number is FULL!!!";
        }
    }
?>
<html>
<head>
    <title>Premidterm | CESA</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<div class="topnav">
  <a class="active">Pre-Midterm Exam</a>
  <a style="float: right;">Hello, Passenger!</a>
</div>

    <h1 style="text-align: right;">Total Sales: <?php echo 'Php ' . htmlspecialchars($_SESSION['sales']) . '.00'?></h1>

    <?php include 'bookTicket.php' ?>

    <?php include 'bus.php' ?>
</body>
</html>