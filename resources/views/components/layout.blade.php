<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vinicius Aragão - Front-end - Developer</title>
    <link rel="stylesheet" href="/app.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@100;300;600&display=swap"
        rel="stylesheet" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EQFHW7T756"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EQFHW7T756');
    </script>

</head>

<body>
    {{ $slot }}

    <script src="/app.js"></script>
</body>
