<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Online izdavanje računa</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @page
            {
                size: A4;
                margin:10px 0 0 100px;
            }

            @media print {
                #printButtons {
                    display: none;
                }
            }

            body {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
             @yield('content')
    </body>
</html>