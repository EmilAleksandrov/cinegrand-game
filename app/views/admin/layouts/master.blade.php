﻿
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Justified Nav Template for Bootstrap</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    </head>

    <body>

        <div class="container">

            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <nav>
                    <ul class="nav nav-justified">
                        <li><a href="{{URL::route('getAdminHome')}}">Начало</a></li>
                        <li><a href="{{URL::route('getAdminQuestions')}}">Въпроси</a></li>
                        <li><a href="{{URL::route('getUsers')}}">Потребители</a></li>
                        <li><a href="{{URL::route('home')}}">Към сайта</a></li>
                    </ul>
                </nav>
            </div>
            @if(Session::has('success'))
            <div class='row'>
                <div class='col-md-12'>
                    <br >
                    <div class='alert alert-success'>
                        {{Session::get('success')}}
                    </div>
                </div>
            </div>
            @elseif(Session::has('fail'))
            <div class='row'>
                <div class='col-md-12'>
                    <br >
                    <div class='alert alert-danger'>
                        {{Session::get('fail')}}
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
            <!-- Site footer -->
            <footer class="footer">
                <p>&copy; BeShared - 2015</p>
            </footer>

        </div> <!-- /container -->



        <style>
            body {
                padding-top: 20px;
            }

            .footer {
                padding-top: 40px;
                padding-bottom: 40px;
                margin-top: 40px;
                border-top: 1px solid #eee;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
                text-align: center;
                background-color: transparent;
            }
            .jumbotron .btn {
                padding: 14px 24px;
                font-size: 21px;
            }

            /* Customize the nav-justified links to be fill the entire space of the .navbar */

            .nav-justified {
                background-color: #eee;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .nav-justified > li > a {
                padding-top: 15px;
                padding-bottom: 15px;
                margin-bottom: 0;
                font-weight: bold;
                color: #777;
                text-align: center;
                background-color: #e5e5e5; /* Old browsers */
                background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e5e5e5));
                background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
                background-image:      -o-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
                background-image:         linear-gradient(to bottom, #f5f5f5 0%,#e5e5e5 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */
                background-repeat: repeat-x; /* Repeat the gradient */
                border-bottom: 1px solid #d5d5d5;
            }
            .nav-justified > .active > a,
            .nav-justified > .active > a:hover,
            .nav-justified > .active > a:focus {
                background-color: #ddd;
                background-image: none;
                -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
                box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
            }
            .nav-justified > li:first-child > a {
                border-radius: 5px 5px 0 0;
            }
            .nav-justified > li:last-child > a {
                border-bottom: 0;
                border-radius: 0 0 5px 5px;
            }

            @media (min-width: 768px) {
                .nav-justified {
                    max-height: 52px;
                }
                .nav-justified > li > a {
                    border-right: 1px solid #d5d5d5;
                    border-left: 1px solid #fff;
                }
                .nav-justified > li:first-child > a {
                    border-left: 0;
                    border-radius: 5px 0 0 5px;
                }
                .nav-justified > li:last-child > a {
                    border-right: 0;
                    border-radius: 0 5px 5px 0;
                }
            }

            /* Responsive: Portrait tablets and up */
            @media screen and (min-width: 768px) {
                /* Remove the padding we set earlier */
                .masthead,
                .marketing,
                .footer {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
        </style>
    </body>
</html>
