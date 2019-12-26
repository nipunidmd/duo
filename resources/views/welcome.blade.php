<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            ul {
              text-align: left;
              color: #000
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
               <div class="content">
                <div class="title m-b-md">
                    Sense Laravel Strater
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://sensefeelit.com">Sense</a>
                </div>
                <div class="text-center">
                  <h3>Installation Guide</h3>
                  <code>
                    <ul>
                      <li>download the zip file repo</li>
                      <li>rename the folder</li>
                      <li>go inside the project folder</li>
                      <li>open a `CMD` and run `php artisan sense:start`</li>
                      <li>complete the wizad.</li>
                      <li>run `php artisan sense:clear`</li>
                      <li>run `php artisan migrate` (in admin folder if any unless in current direcotry)</li>
                      <li>run `php artisan db:seed` (in admin folder if any unless in current direcotry)</li>
                    </ul>
                  </code>
                </div>
            </div>
        </div>
    </body>
</html>
