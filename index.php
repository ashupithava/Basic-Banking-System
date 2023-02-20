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

    <title>Welcome to Asics Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            background: #f7f7f7;
        }

        #lock {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background: rgb(255, 255, 255) center no-repeat;
            text-align: center;
            width: 50%;
            margin-top: 50%;
        }

        @media screen and (orientation: landscape) {
            #lock {
                display: none;
            }

            #container {
                display: block;
            }
        }


        @media screen and (orientation:portrait) {
            #lock {
                display: block;
            }

            #container {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div id="lock"><img src="" alt=""><br>
        <h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
    </div>

    <div id="container">

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
                            <a class="nav-link active text-nowrap" aria-current="page" href="#" style="color:#49c3d8;">Home</a>
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
            .zoomfont {
                margin-top: 8%;
                overflow: hidden;
                border-right: .15em solid orange;
                white-space: nowrap;
                /* font-size: 40px; */
                /* letter-spacing: .15em; */
                animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
            }

            @keyframes typing {
                from {
                    width: 0
                }

                to {
                    width: 100%
                }
            }

            @keyframes blink-caret {

                from,
                to {
                    border-color: transparent
                }

                50% {
                    border-color: #212558
                }
            }
        </style>
        <div class="container-large" style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%; background-image: url('statics/background.png');">
            <div class="row">
                <div class="col" style="margin-left: 5%;">
                    <br><br>&nbsp;<p class="zoomfont" style="font-size:0px; text-align:center;color:#332885;"><b>Welcome to Asics Bank!</b></p>
                </div>
                <div class="col" style="margin:2% 0% 0% 5%; text-align:center;">
                    &nbsp;<img src="statics/home.png" class="zoomin" alt="" style="width:0px;">
                </div>
            </div>
        </div>
        <!-- <img src="statics/abstbg2.png" alt="" style="width:100%; position:absolute; z-index:-1"> -->

        <center style="margin:60px 0px 20px 0px;">
            <div class="container">
                <h1 style="color:#212558;margin-left:4%;"><b>Features and Benefits</b></h1>
                <style>
                    .sc_services_columns_wrap {
                        position: absolute;
                        display: flex;
                        flex-wrap: wrap;
                        align-items: center;
                        justify-content: space-between;
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                    }

                    img {
                        max-width: 100%;
                        height: auto;
                        vertical-align: top;
                    }

                    .post_featured {
                        margin-top: 10%;
                        margin-left: 20%;
                        margin-bottom: 0.3em;
                        position: relative;
                        display: inline-block;
                        z-index: 3;
                        width: 140px;
                        height: 150px;
                    }

                    .post_featured img {
                        width: 4em;
                        height: 4em;
                        line-height: 4em;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        -webkit-transform: translateX(-50%) translateY(-50%);
                        -ms-transform: translateX(-50%) translateY(-50%);
                        transform: translateX(-50%) translateY(-50%);
                    }

                    .post_featured:before {
                        content: '';
                        position: absolute;
                        z-index: -1;
                        left: -3%;
                        top: -4%;
                        background-image: url(//creditcard.axiomthemes.com/wp-content/themes/creditcard/images/icon-bg-1.png);
                        width: 140px;
                        height: 140px;
                        opacity: 1;
                        -webkit-transition: all .3s ease;
                        -moz-transition: all .3s ease;
                        -ms-transition: all .3s ease;
                        -o-transition: all .3s ease;
                        transition: all .3s ease;
                    }

                    .post_featured:after {
                        content: '';
                        position: absolute;
                        z-index: -1;
                        left: -3%;
                        top: -4%;
                        background-image: url(//creditcard.axiomthemes.com/wp-content/themes/creditcard/images/icon-bg-1-hover.png);
                        width: 140px;
                        height: 140px;
                        opacity: 0;
                        -webkit-transition: all .3s ease;
                        -moz-transition: all .3s ease;
                        -ms-transition: all .3s ease;
                        -o-transition: all .3s ease;
                        transition: all .3s ease;
                    }

                    .post_featured:hover:before {
                        opacity: 0;
                    }

                    .post_featured:hover:after {
                        opacity: 1;
                    }

                    .sc_services_item_title a {
                        margin-top: 10%;
                        margin-left: 20%;
                        color: #212558;
                        font-size: 1.25em;
                        font-weight: bolder;
                        text-decoration: none;
                    }

                    .sc_services_item_title a:hover {
                        color: #00b4da;
                        transition: all .3s ease;
                    }

                    .sc_services_item_content p {
                        display: block;
                        width: 80%;
                        height: 30px;
                        font-size: .938em;
                        font-weight: 500;
                        margin-top: 0.5em;
                        padding: 0 2em;
                        margin-left: 20%;
                        color: #84848c;
                    }
                </style>
                <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_3 trx_addons_columns_wrap columns_padding_bottom">
                    <div class="trx_addons_column-1_3">
                        <div class="sc_services_item with_content with_image sc_services_item_featured_top">
                            <div class="post_featured">
                                <img width="512" height="512" src="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth.png" class="attachment-trx_addons-thumb-full size-trx_addons-thumb-full wp-post-image" alt="Rewards" decoding="async" srcset="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth.png 512w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth-150x150.png 150w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth-300x300.png 300w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth-370x370.png 370w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/006-growth-90x90.png 90w" sizes="(max-width: 512px) 100vw, 512px">
                            </div><!-- .post_featured -->

                            <div class="sc_services_item_info">
                                <div class="sc_services_item_header">
                                    <h6 class="sc_services_item_title"><a href="all_cust.php">View Customers</a></h6>
                                    <!--<div class="sc_services_item_subtitle">--><!--</div>-->
                                </div>
                                <div class="sc_services_item_content">
                                    <p>Here, you can watch every customer of the bank.</p>
                                </div>
                                <!--			<div class="sc_services_item_button sc_item_button">Buy<a href="--><!--" class="sc_button sc_button_simple">--><!--</a></div>-->
                            </div>
                        </div>
                    </div>
                    <div class="trx_addons_column-1_3">
                        <div class="sc_services_item with_content with_image sc_services_item_featured_top">
                            <div class="post_featured">
                                <img width="512" height="512" src="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2.png" class="attachment-trx_addons-thumb-full size-trx_addons-thumb-full wp-post-image" alt="Cash Back" decoding="async" loading="lazy" srcset="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2.png 512w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2-150x150.png 150w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2-300x300.png 300w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2-370x370.png 370w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/011-money-2-90x90.png 90w" sizes="(max-width: 512px) 100vw, 512px">
                            </div><!-- .post_featured -->

                            <div class="sc_services_item_info">
                                <div class="sc_services_item_header">
                                    <h6 class="sc_services_item_title"><a href="check_blc.php">Check Balance</a></h6>
                                    <!--<div class="sc_services_item_subtitle">--><!--</div>-->
                                </div>
                                <div class="sc_services_item_content">
                                    <p>Here, you can check the remaining balance in your account.</p>
                                </div>
                                <!--			<div class="sc_services_item_button sc_item_button"><a href="--><!--" class="sc_button sc_button_simple">--><!--</a></div>-->
                            </div>
                        </div>
                    </div>
                    <div class="trx_addons_column-1_3">
                        <div class="sc_services_item with_content with_image sc_services_item_featured_top">
                            <div class="post_featured">
                                <img width="512" height="512" src="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7.png" class="attachment-trx_addons-thumb-full size-trx_addons-thumb-full wp-post-image" alt="Balance Transfer" decoding="async" loading="lazy" srcset="https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7.png 512w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7-150x150.png 150w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7-300x300.png 300w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7-370x370.png 370w, https://creditcard.axiomthemes.com/wp-content/uploads/2017/07/027-business-7-90x90.png 90w" sizes="(max-width: 512px) 100vw, 512px">
                            </div><!-- .post_featured -->

                            <div class="sc_services_item_info">
                                <div class="sc_services_item_header">
                                    <h6 class="sc_services_item_title"><a href="send_money.php">Balance Transfer</a></h6>
                                    <!--<div class="sc_services_item_subtitle">--><!--</div>-->
                                </div>
                                <div class="sc_services_item_content">
                                    <p>Here, you can send money from your account.</p>
                                </div>
                                <!--			<div class="sc_services_item_button sc_item_button"><a href="--><!--" class="sc_button sc_button_simple">--><!--</a></div>-->
                            </div>
                        </div>
                    </div>



                </div>


            </div>
            <style>
                .footer {
                    position: relative;
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
        <script>
            $(document).ready(function() {

                $(".zoomin").animate({
                    width: '400px'
                }, '5000', 'linear');
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>
</body>

</html>