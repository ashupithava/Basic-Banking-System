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

    <title>All customers - Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-image: url('statics/background.png');">
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
        th,
        td {
            text-align: center;
        }
    </style>

    <center>



        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div style="width:80%; padding:5px 5px 5px 5px;">
                <h1 style=" color:#212558;font-weight:bolder;">All Customers</h1>
            </div>
            <?php



            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection not established: " . mysqli_connect_error());
            } else {

                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sql);
            ?>
                <table class="table" style="border-color:#fff;margin-top: 30px;">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Account No</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Send Money From</th>
                        </tr>
                    </thead>

                    <style>
                        .mybtn {
                            width: 50%;
                            /* height: 10px; */
                            box-shadow: 1px 1px 5px black;
                            border-radius: 30px;
                            font-weight: bold;
                            background-color: lightgreen;
                            color: green;
                        }

                        .mybtn:active {
                            background-color: green;
                            color: lightgreen;
                        }
                    </style>
                <?php
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo    '
            <tr>
              <th style="padding:20px 10px 10px 10px">' . $row['name'] . '</th>
              <th style="padding:20px 10px 10px 10px">' . $row['email'] . '</th>
              <th style="padding:20px 10px 10px 10px">' . $row['accno'] . '</th>
              <th style="padding:20px 10px 10px 10px">' . $row['blc'] . '</th>
              <td style="padding:10px 10px 10px 10px">
              <a href="send_money.php?reads=' . $row['accno'] . '"
              <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
              </a>
              </td>
            </tr>';
                }
            }
            echo "</tbody>";
                ?>
        </div>
        <style>
            .footer {
                position: absolute;
                display: block;
                width: 100%;
                height: 100px;
                background: #212558;
                bottom: -400px;
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