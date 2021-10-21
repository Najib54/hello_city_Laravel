<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us | Hello City</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <p>Built by Najib SEKKOUR ! It was my first site with Laravel</p>
        <p><a href='/'>Retour à l'accueil</a></p>


    <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/about_us'>About us</a></p>
    </footer>
    </body>
</html>
