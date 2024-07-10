<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Selecionar um Jogo </title>
    <!-- HTML5 default configs -->

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/select-game.css">
    <!-- Page styles -->
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <main>
        <section class="section">
            <div class="select-game-title">
                <h1>Vamos Jogar?</h1>
            </div>
            <div class="select-game">

                <div class="pop-up snake-game">

                    <h2>Snake Game</h2>
                    <img src="../assets/images/snake-transparent.png" alt="">
                    <a href="../pages/game.php"><button class="btn btn-exp">
                            Experimente
                        </button></a>
                    <button class="accordion btn">Conteúdos</button>
                    <div class="panel">
                        <p>
                            No Snake Game você irá aprender :<br>
                            1. <br>
                            2. <br>
                        </p>
                    </div>
                    <script src="../assets/script/select-game.js"></script>
                </div>

                <div class="pop-up monkey-game">
                    <h2>Monkey Script</h2>
                    <img src="../assets/images/funny-brown-monkey.png" alt="">
                    <button class="btn btn-blocked">
                        Indisponível
                    </button>
                </div>
            </div>
            <div class="time-limit">
                <h3>
                    Você excedeu o limite de tempo
                </h3>
                <br>
                Volte amanhã para seguir aprendendo
                <br>
                <button class="btn">
                    Encerrar
                </button>
                </h3>
            </div>
        </section>
    </main>
    <div id="blur" class="blur"></div>
    <script src="../assets/script/profile.js"></script>
</body>

</html>