<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,800;0,900;1,400;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style_sales.css">
    <link rel="stylesheet" href="css/style_about.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="js/script.js"></script>
    <!--<link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
</head>
<body>
@include('inc.header')

@yield('content')

@include('inc.footer_dark')
<script>menu();</script>
<script>showSlides1(1);</script>
</body>
</html>
