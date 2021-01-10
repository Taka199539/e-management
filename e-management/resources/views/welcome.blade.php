<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Management</title>

        <!-- Fonts -->
        <link href="<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #0b8;
                font-family: 'Oswald', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url(https://i.gyazo.com/b5842a934bd95625db004747ec0a779c.jpg);
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
                opacity: 1;
            }
            
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 95px;
            }

            .links > a {
                color: #0b8;
                padding: 0 25px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="flex-center position-ref full-height">

                <div class="content">
                    <div class="title m-b-md">
                        E-Management
                    </div>
    
                    <div class="links">
                        <a href="{{ action('User\AttendanceController@index') }}">ユーザーとしてログイン</a>
                        <a href="{{ action('Admin\ManagementController@dashboard') }}">管理者としてログイン</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
