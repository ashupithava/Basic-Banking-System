<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Send money - Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-image: url('statics/background.png'); padding-top:8%;">




    <?php include 'spin.php'; ?>
    <style>
        .navbar-dark .navbar-nav .nav-link:active {
            color: #49c3d8;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #212558;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #49c3d8;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed fixed-top" style="font-family:candara; font-size:18px; box-shadow: 0 2px 10px 0 rgb(0 0 0 / 20%);height:12%;">
        <div class="container-fluid">
            <a href="index.php"><img src="statics\banklogo.png" alt="" style="height:125px; margin-left:20px; margin-top:5px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php" style="color:#49c3d8;">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;

            font-weight: bold;
            color: #212558;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }

        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

    <center>

        <div class="container" style="margin-top:2%;">
            <div style="width:80%;padding:5px 5px 5px 5px;">
                <h1 style=" color:#212558;">Transfer Money</h1>
            </div>
            <br><br>
            <div class="">
                <form action="send_money.php" method="post">
                    <table>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno1" id="" placeholder="Sender's Account Number" value="<?php if (isset($_GET['reads'])) {
                                                                                                                                                    echo $_GET['reads'];
                                                                                                                                                } ?>"></td>
                        <tr>
                        <tr>
                            <td><input type="number" class="formin form-control" name="amount" id="" placeholder="Amount to Transfer"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno2" id="" placeholder="Reciever's Account Number"></td>
                        </tr>
                    </table>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br><br>
                    <p style="color:#252525;">Want to check your balance? check <a href="check_blc.php" style="color:black;">here</a></p>
                </form>
            </div>
        </div>


        <?php

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection not established: " . mysqli_connect_error());
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                $sender = $_POST['accno1'];
                $amount = $_POST['amount'];
                $reciever = $_POST['accno2'];


                $checkblcquery = "SELECT blc FROM users where accno='$sender'";
                $checkblc = mysqli_query($conn, $checkblcquery);
                $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

                if ($ava_blc >= $amount) {
                    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
                    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
                    $result1 = mysqli_query($conn, $sql1);
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result1 && $result2) {
                        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

                        $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
                        $sqltransact = mysqli_query($conn, $sqltran);
                    } else {
                        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
                        $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
                        $sqltransact = mysqli_query($conn, $sqltran);
                    }
                } else {
                    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
                    $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
                    $sqltransact = mysqli_query($conn, $sqltran);
                }
            }
        }
        ?>
        <style>
            .footer {
                position: relative;
                display: block;
                width: 100%;
                height: 100px;
                background: #212558;
                bottom: -150px;
                left: 0;
                color: #f7f7f7;
            }

            .footer p {
                position: absolute;
                margin-top: 35px;
                margin-left: 35em;

            }
        </style>
        <div class="footer">
            <p><a href="#" target="_blank" rel="noopener noreferrer nofollow">Ashu Pithava</a> © 2023 All rights reserved. <a href="#" target="_blank" rel="noopener noreferrer nofollow">Terms of use</a> and <a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a></p>

        </div>
    </center>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>