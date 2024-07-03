<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Configurações </title>
    <!-- HTML5 default configs -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../styles/components/header.css">
    <link rel="stylesheet" href="../styles/utils/utils.css">
    <link rel="stylesheet" href="../styles/components/main.css">
    <link rel="stylesheet" href="../styles/components/settings.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <script defer src="../script/settings.js"></script>


    <!-- Page styles -->
</head>

<body>

    <header>
        <ul class="navbar">
            <li class="logo">
                <img src="../assets/logo.png" alt="" width="120px">
            </li>

            <li class="icons">
                <a href="index.php" class="navlink">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <p>Início</p>
                </a>
            </li>
            <li class="icons">
                <a href="./pages/about.php" class="navlink">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p>Sobre</p>
                </a>
            </li>
            <li class="icons">
                <a href="./pages/game.php" class="navlink">
                    <span class="material-symbols-outlined">
                        play_circle
                    </span>
                    <p>Jogue</p>
                </a>
            </li>
            <li class="icons">
                <a href="./pages/settings.php" class="navlink">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    <p>Configurações</p>
                </a>
            </li>
            <li class="icons">
                <a href="./pages/profile.php" class="navlink">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </li>
        </ul>
    </header>

    <div class="section">

        <div class="settings">
            <h2>
                <div class="config-title">
                    Configurações
                </div>
            </h2>
            <div class="options">

                <div class="option">
                    <p>Modo escuro :</p>
                    <label class="switch">
                    <input type="checkbox" id="toggle">
                    <span class="slider"></span>
                    </label>
                </div>
                <div class="option">
                    <p>Ajuda :</p>
                    <button class="btn">
                        <a href="Redirect">></a>
                    </button>
                </div>
                <div class="option">
                    <p>Controle parental :</p>
                    <button class="btn">
                        <a href="Redirect">></a>
                    </button>
                </div>

            </div>
        </div>

    </div>



</body>

</html>