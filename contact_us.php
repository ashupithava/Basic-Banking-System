<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Contact us - Sparks Bank</title>
</head>

<body style="background-image:url('statics/background.png'); padding-top:8%;">
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


    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>



    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 1px 1px 5px rgb(0 0 0 / 50%);
            border-radius: 30px;
            font-weight: bold;
            color: white;
            background-color: #1977fc;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <center>
        <div class="container" style="padding:10px 80px 10px 80px; margin-top:2%;">
            <div
                style="width:80%; padding:5px 5px 5px 5px;">
                <h1 style="font-weight:bolder; color:#212558;">Contact Us</h1>
            </div>

            <div class="container"
                style="padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contact_us.php" method="post">
                    <input type="text" class="formin form-control" name="name" id="" placeholder="Name" style="border-radius:10px;"><br><br>
                    <input type="email" class="formin form-control" name="email" id="" placeholder="Email" style="border-radius:10px;"><br><br>
                    <textarea name="message" class="" style="border-radius:10px; padding: 5px 5px 5px 15px;"
                        placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                    <br><br><input class="btn mybtn btn-outline-dark" type="submit" value="Submit">
                </form>
            </div>
        </div>
        <style>
            .footer {
                position: absolute;
                display: block;
                width: 100%;
                height: 100px;
                background: #212558;
                bottom: -150px;
                left: 0;
                right: 0;
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>