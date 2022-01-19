<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="/app.css">


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
    <script src="/app.js"></script>
    <title>Vinicius Aragão - Front-end - Developer</title>

</head>

<body>
    <header>
        <nav class="nav-home-page">
            <div class="brandWrapper">
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
    </header>
    <section class="welcome-space">
        <div class="hero">
            <div class="hero-txt">
                <h1> Apresentação </h1>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus ipsum amet quo, dignissimos
                    dolore repellat eaque? Sint ut natus possimus saepe eius, voluptatibus animi molestias iste
                    dignissimos sed consectetur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    minima ipsum, exercitationem recusandae inventore cum accusantium et magnam ex facilis sapiente
                    corrupti vel perferendis unde iusto labore voluptates aliquam maxime! </p>
                <button class="contact-btn">
                    <div> Contratar </div>
                </button>
                <button class="meeting-btn">
                    <div> Marcar uma reunião </div>
                </button>
            </div>
            <div class="hero-img">
                <img src="/assets/flatHero.jpg" alt="imagem da hero" loading="lazy">
            </div>
        </div>
    </section>
    <section>
        <h2> Proposta de valor </h2>
        <div class="card-wrapper">
            <div class="card"> Card 1</div>
            <div class="card"> Card 2</div>
            <div class="card"> Card 3</div>
        </div>

        <div> <span> Resumo da minha história como freelancer... Pode ser no formato de linha do tempo, já aproveito e
                faço um teste com aquela ideia de grids, e também posso testar uns elementos 3d </span> </div>
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
