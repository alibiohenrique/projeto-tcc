<?php
session_start();

// Checa se o usuário não está logado, se não estiver, então manda para a página de não logado
if (!isset($_SESSION['username'])) {
    header("Location: unlogged.php");
    exit();
}

$username = $_SESSION['username'];
$email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Email não disponível';
$age = isset($_SESSION['user_age']) ? $_SESSION['user_age'] : 'Idade não disponível';
$name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Nome não disponível";
$picture = isset($_SESSION['user_picture']) ? $_SESSION['user_picture'] : '../assets/images/user.png';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../components/footer/footer.css">
    <link rel="stylesheet" href="../styles/profile.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <meta charset="UTF-8">
    <title>KidScript | Meu perfil</title>
    <script src="../assets/script/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <script src="../assets/script/change-picture.js"></script>

    <?php include '../components/header/header.php'; ?>

    <main>
        <div class="section profile" id="section">
            <div class="logo-profile">
                <img src="../assets/images/logo.png" alt="Logo Kidscript" width="250px">
            </div>

            <div class="profile-card">
                <h2><?php echo htmlspecialchars($name); ?></h2>

                <div class="profile-picture">
                    <img src="<?php echo htmlspecialchars($picture); ?>" alt="Imagem meu usuário" onclick="changeProfileMenu()">
                    <svg onclick="changeProfileMenu()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                    </svg>

                </div>

                <form name="file" method="post" enctype="multipart/form-data">
                    <label for="file-upload" class="custom-file-upload btn">Escolher arquivo</label>
                    <input id="file-upload" type="file" name="file">
                    <input type="submit" class="btn" name="upload" value="Upload" id="upload">
                </form>

                <h3><?php echo htmlspecialchars($age); ?> anos</h3>
                <h4><?php echo htmlspecialchars($username); ?></h4>

                <div class="profile-text">
                    <p><strong>E-mail: </strong><span><?php echo htmlspecialchars($email); ?></span></p>
                    <p><strong>Senha: </strong><span>********</span></p>
                </div>

                <a href="logout.php">Sair</a>
            </div>
        </div>
    </main>
</body>

<?php include '../components/footer/footer.php'; ?>

</html>
