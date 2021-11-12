<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vinicius Aragão - Front-end - Developer</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>

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
    <header>
        <nav class="nav-home-page">
            <div class="brand-wrapper">
                <div class="textLogo">viniciusAragão</div>
                <div class="slogan"> Front-End Developer </div>
            </div>

            <ul class="menu-top">
                <li> Projetos </li>
                <li> Lab </li>
                <li> Sobre </li>
                <li> <button onclick="darkTheme()"> Tema Escuro </button> </li>
            </ul>
        </nav>
        <header>
            <section class="welcome-space">
                <h1> Apresentação </h1>
                <span> Contratar </span>
                <span> Marcar uma reunião </span>
            </section>
            <section>
                <div> Card 1 </div>
                <div> Card 2 </div>
                <div> Card 3 </div>
                <div> Todos Projetos </div>
            </section>
            <section>
                <div> Prova social </div>
                <span> Contratar </span>
                <span> Marcar uma reunião </span>
            </section>
            <footer>
                <div> Rodapé </div>
            </footer>


</body>

</html>
