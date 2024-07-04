<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/components/header.css">
    <link rel="stylesheet" href="../styles/components/about.css">
    <link rel="stylesheet" href="../styles/utils/utils.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />

    <meta charset="UTF-8">
    <title>kidscript</title>
</head>

<body>
    <header>
        <ul class="navbar">
            <li class="logo">
                <img src="../assets/logo.png" alt="" width="120px">
            </li>

            <li class="icons">
                <a href="../index.php" class="navlink">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <p>Início</p>
                </a>
            </li>
            <li class="icons">
                <a href="./about.php" class="navlink">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p>Sobre</p>
                </a>
            </li>
            <li class="icons">
                <a href="./game.php" class="navlink">
                    <span class="material-symbols-outlined">
                        play_circle
                    </span>
                    <p>Jogue</p>
                </a>
            </li>
            <li class="icons">
                <a href="./settings.php" class="navlink">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    <p>Configurações</p>
                </a>
            </li>
            <li class="icons">
                <a href="./profile.php" class="navlink">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </li>
        </ul>
    </header>

    <main>

        <div class="section" id="CDSection">
            <div class="cardSection" id="CDSection">
                <div data-aos="flip-left" class="card-inform">

                    <h2>Missão</h2>
                    <p>Nosso propósito é transformar a forma como as crianças interagem com a tecnologia, oferecendo uma abordagem lúdica e educativa para o aprendizado de programação. Buscamos otimizar o tempo dedicado a dispositivos eletrônicos, transformando-o em uma experiência de aprendizado significativa e estimulante.</p>

                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#fff" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>

                </div>

                <div class="card-inform" data-aos="flip-right">

                    <h2>Visão</h2>
                    <p>Nossa visão é inspirar uma nova geração de jovens programadores, capacitando-os para um futuro digital brilhante e promovendo uma abordagem inovadora e divertida no aprendizado de habilidades tecnológicas essenciais.
                    </p>

                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#fff" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>
                </div>
                <div class="card-inform" data-aos="flip-left">

                    <h2>Valores</h2>
                    <p>Em nosso projeto, temos como valores fundamentais a educação de qualidade, a responsabilidade digital, a inclusão e a diversão no aprendizado.</p>

                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#fff" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>
                </div>

                <div class="us">
                    <div class="card-inform">
                        
                        <h2>Sobre nós</h2>
                        <iframe src="https://www.youtube.com/embed/wMTnjSJGWCs?si=ZkHGBrhkyhx6DwqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            
                            <div class="btnSection"><button class="btn login">Entrar</button> <button class="btn sign-in">cadastre-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>