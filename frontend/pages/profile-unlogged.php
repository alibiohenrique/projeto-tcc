<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/components/profile.css">
    <link rel="stylesheet" href="../styles/components/header.css">
    <link rel="stylesheet" href="../styles/utils/utils.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <meta charset="UTF-8">
    <title>kidscript</title>
    <script src="./script/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <main>

        <header>
            <ul class="navbar">
                <li class="logo">
                    <img src="../assets/logo.png" alt="" width="120px">
                </li>

                <li class="icons">
                    <a href="" class="navlink">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        <p>Início</p>
                    </a>
                </li>
                <li class="icons">
                    <a href="" class="navlink">
                        <span class="material-symbols-outlined">
                            info
                        </span>
                        <p>Sobre</p>
                    </a>
                </li>
                <li class="icons">
                    <a href="" class="navlink">
                        <span class="material-symbols-outlined">
                            play_circle
                        </span>
                        <p>Jogue</p>
                    </a>
                </li>
                <li class="icons">
                    <a href="" class="navlink">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        <p>Configurações</p>
                    </a>
                </li>
                <li class="icons">
                    <a href="/pages/profile.php" class="navlink">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                    </a>
                </li>
            </ul>
        </header>

        <div class="section profile" id="section">

            <div class="unlogged">
                <div class="profile-card">
                    <h2>Ops!! Você ainda não tem cadastro</h2>
                    <p>Cadastre-se no nosso site e desbloqueie o aprendizado divertido!!</p>
                    <div class="btnSection"><button class="btn login"><a href="./login.php">Entrar</a></button> <button class="btn sign-in"><a href="./sign-in.php">cadastre-se</a></button>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>