<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/profile.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <meta charset="UTF-8">
    <title>kidscript</title>
    <script src="script/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php include '../components/header/header.php'; ?>
    <main>

        <div class="section profile" id="section">

            <div class="unlogged">
                <div class="profile-card">
                    <h2>Ops!! Você ainda não tem cadastro</h2>
                    <p>Cadastre-se no nosso site e desbloqueie o aprendizado divertido!!</p>
                    <div class="btnSection">
                        <a href="login.php"><button class="btn login"><strong>Entrar</strong></button></a>
                     <a href="sign-in.php"><button class="btn sign-in"><strong>Cadastre-se</strong></button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>