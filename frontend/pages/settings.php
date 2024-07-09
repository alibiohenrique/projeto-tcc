<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Configurações </title>
    <!-- HTML5 default configs -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/settings.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <script defer src="../script/settings.js"></script>


    <!-- Page styles -->
</head>

<body>

    <?php include '../components/header/header.php'; ?>


    <div class="section">

        <div class="settings">
            <h2>
                <div class="config-title">
                    Configurações
                </div>
            </h2>
            <div class="options">

                <div class="option">
                    <p>Modo escuro:</p>
                    <label class="switch">
                        <input type="checkbox" id="toggle">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="option">
                    <p>Ajuda:</p>
                    <button class="btn">
                        <a href="Redirect">></a>
                    </button>
                </div>
                <div class="option">
                    <p>Controle parental:</p>
                    <button class="btn">
                        <a href="Redirect">></a>
                    </button>
                </div>

            </div>
        </div>

    </div>



</body>

</html>