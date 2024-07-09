<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "kidscript_db";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Checar conexão
if (!$conn) {
    die("Erro: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = mysqli_real_escape_string($conn, $_POST['username-input']);
    $password_input = mysqli_real_escape_string($conn, $_POST['password-input']);

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $username_input);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['user_password'];

                if (password_verify($password_input, $hashed_password)) {
                    // Autenticação do usuário
                    $_SESSION['username'] = $username_input;
                    echo "Login foi um sucesso. Bem vindo, " . $username_input . "!";
                    // Redirecionar para a página protegida
                    header("Location: profile.php");
                    exit();
                } else {
                    echo "Usuário ou senha inválido";
                }
            } else {
                echo "Usuário ou senha inválido";

            }
        } else {
            echo "ERRO: Não deu para executar a consulta SQL: $sql. " . mysqli_error($conn);
        }
    } else {
        echo "ERROR: Não foi possível preparar a consulta: $sql. " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Entrar </title>
    <!-- HTML5 default configs -->
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <div class="container">
        <div class="pop-up login">
            <div class="login-title">
                <h2>FAÇA SEU LOGIN</h2>

            </div>

            <form action="#" method="POST" class="login-form">
                <label for="nome">Usuário:</label>
                <input type="text" id="nome" name="username-input" required><br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="password-input" required><br><br>

                <div class="btn-login input">
                    <input type="submit" value="Entrar" class="btn btn-login">

                </div>

            </form>

            <div class="btn-sign-in">

                <a href="sign-in.php">Não tenho cadastro?</a>
            </div>

        </div>

    </div>

</body>

</html>