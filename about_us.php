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

    <title>About us - Sparks Bank</title>
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
                        <a class="nav-link active text-nowrap" href="index.php" style="color:#49c3d8;">Home</a>
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



    <center>
        <div class="container" style="margin-top: 9%; padding:10px 80px 10px 80px; ">
            <div style="width:80%;padding:5px 5px 5px 5px;">
                <h1 style="font-weight:bolder; color:#212558;">About Us</h1>
            </div>
            <br><br>
            <img src="statics/usericon.png" alt="" style="border-radius: 50%;width:20%; box-shadow:2px 2px 15px black;">
            <br><br>
            <p style="color:white;">This website is created by</p>
            <h1 style="color:#212558; text-shadow:2px 2px 2px gray;">Ashish Pithava</h1>
            <p style="color:#252525;"><b>Intern at Sparks Foundation <br> Gyanmanjari Institute Of Technology, Bhavnagar.</b></p>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                }

                .title {
                    text-align: center;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 1.5em;
                    font-weight: bolder;
                    color: #212558;
                }

                .socialicons {
                    display: flex;
                    margin-top: 25px;
                    margin-left: 25%;
                }

                .socialicons .icon {
                    width: 50px;
                    height: 50px;
                    box-shadow: 0 0 5px 10px rgba(0, 0, 0, 0.05);
                    margin: 0 30px;
                    text-align: center;
                    line-height: 50px;
                    font-size: 20px;
                    text-decoration: none;
                    color: #000;
                    border-radius: 50%;
                    position: relative;
                    overflow: hidden;
                }

                .icon:after {
                    content: '';
                    width: 80px;
                    height: 80px;
                    z-index: -1;
                    position: absolute;
                    bottom: -80px;
                    left: 0;

                    background: linear-gradient(to bottom, rgb(158, 0, 231), rgb(57, 1, 211));
                    transition: 0.2s;
                }

                .socialicons .icon:hover {
                    color: #fff;
                }

                a:hover::after {
                    bottom: 0;
                }
            </style>
            <div class="wrapper">
            <h2 class="title">Follow us on </h2>
                <div class="socialicons">
                    <a href="#" title="Facebook" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Twitter" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="GitHub" class="icon"><i class="fab fa-github"></i></a>
                    <a href="#" title="LinkedIn" class="icon"><i class="fab fa-linkedin-in"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>