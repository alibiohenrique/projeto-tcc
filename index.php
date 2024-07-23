<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <title>KidScript | Início</title>
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->
    <!-- HTML5 default configs -->

    <!-- Page styles -->
    <link rel="stylesheet" href="styles/utils.css">
    <link rel="stylesheet" href="components/header/header.css">
    <link rel="stylesheet" href="styles/main.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Knewave&display=swap');
    </style>

    <!-- Page styles -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <header>
        <ul class="navbar">
            <li class="logo">
                <img src="assets/images/logo.png" alt="" width="180px">
            </li>

            <li class="icons">
                <a href="index.php" class="navlink">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <p class="highlight-hover">Início</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/about.php" class="navlink">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p class="highlight-hover">Sobre</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/select-game.php" class="navlink">
                    <span class="material-symbols-outlined">
                        play_circle
                    </span>
                    <p class="highlight-hover">Jogue</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/unlogged.php" class="navlink">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </li>
        </ul>
    </header>

    <main>
        <div class="landing-page">
            <div class="top-texts">
                <h2>
                    Aprenda programação
                    <br>
                    <span> COM DIVERSÃO! </span>
                </h2>
            </div>

            <div class="btnSection">
                <a href="pages/login.php"><button class="btn login"><strong>Entrar</strong></button></a>
                <a href="pages/sign-in.php"><button class="btn sign-in"><strong>Cadastre-se</strong></button></a>

            </div>
        </div>

        <div class="images">
            <img src="./assets/images/mascoteInvert.png" alt="">
        </div>

        <div class="section landing-seguiment">
            <iframe src="https://www.youtube.com/embed/eIEPOiuk-Gs?si=wSboZT3AJj4EQNFs" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <h2 class="section-title" data-aos="fade-left">Aprenda Jogando
            <hr>
        </h2>
        <div class="learn-playing">
            <div class="card">

                <h3 data-aos="fade-left">Quem somos</h3>
                <hr>
                <p data-aos="fade-left">
                    A Kidscript é uma plataforma gratuita de ensino de programação voltada para crianças de 8 a
                    12 anos. Nosso objetivo é ensinar programação de maneira divertida e acessível, utilizando jogos
                    intuitivos que tornam o aprendizado lúdico e envolvente.
                </p>
            </div>
            <div class="card">

                <h3 data-aos="fade-left">Como Ensinamos</h3>
                <hr>
                <p data-aos="fade-left">
                    As crianças aprendem programação, lógica, algoritmos e resolução de problemas por meio de jogos
                    interativos. Utilizamos uma linguagem básica e exercícios práticos para garantir que o aprendizado
                    seja simples e eficaz. Além disso, promovemos o desenvolvimento do pensamento computacional e
                    habilidades para lidar com frustrações. </p>
            </div>
            <div class="card">
                <h3 data-aos="fade-left">Nosso Compromisso</h3>
                <hr>
                <p data-aos="fade-left">
                    Estamos comprometidos em fornecer suporte contínuo e garantir o uso saudável da tecnologia.
                    Limitamos o tempo de uso das crianças na plataforma para evitar que fiquem online por períodos
                    prolongados. Na Kidscript, acreditamos que aprender programação pode ser divertido e acessível para
                    todas as crianças.
                </p>
            </div>
        </div>


        <h2 class="section-title">Mais sobre esta jornada
            <hr>
        </h2>

        <div class="journey">

            <div class="journey-card">
                <img src="./assets/images/nestor.png" alt="" width="180px">
                <h3>Plataforma Gamificada</h3>

            </div>
            <div class="journey-card">
                <img src="./assets/images/carol.png" alt="" width="180px">
                <h3>2ª a 8ª série</h3>

            </div>
            <div class="journey-card">
                <img src="./assets/images/gabriel.png" alt="" width="180px">
                <h3>Texto baseado em programação</h3>

            </div>
            <div class="journey-card">
                <img src="./assets/images/alibio.png" alt="" width="180px">
                <h3>Controle de Tempo</h3>

            </div>

        </div>

        <div class="call-to-action">
            <div class="cta-asset">
                <img src="assets/images/misael_marlon.png" alt="" width="400px" class="misael">
               
            </div>
            <div class="calling-to-action">
                <h2>
                    Junte-se à <span>KidScript</span>
                </h2>
                <br>
                <h3>
                    Aprenda programação de forma interativa e divertida.
                </h3>
                <a href="pages/sign-in.php">
                    <button class="btn login">
                        <strong>Comece Hoje</strong>
                    </button>
                </a>
            </div>
        </div>
    </main>

    <script>
        AOS.init();
    </script>
</body>

</html>