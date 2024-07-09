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
    $password_input_validation = mysqli_real_escape_string($conn, $_POST['password-input-validation']);
    $email_input = mysqli_real_escape_string($conn, $_POST['email-input']);

    // Checar se as senhas são as iguais
    if ($password_input !== $password_input_validation) {
        echo "Erro: As senhas não coincidem.";
    } else {
        // Encriptografar a senha que acabou de ser recebida
        $hashed_password = password_hash($password_input, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user_name, user_password, user_email) VALUES (?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $username_input, $hashed_password, $email_input);

            if (mysqli_stmt_execute($stmt)) {

                echo "Usuário inserido com sucesso!";
                header("Location: login.php");

            } else {
                echo "Erro: Não foi possível inserir a consulta desse usuário: $sql. " . mysqli_error($conn);
            }
        } else {
            echo "Erro: A preparação da consulta falhou: $sql. " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Cadastre </title>
    <!-- HTML5 default configs -->
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/sign-in.css">
</head>

<body>
    
    <?php include '../components/header/header.php'; ?>

    <div class="container">

        <div class="pop-up sign-in">

            <div class="sign-in-title">
                <h2>FAÇA SEU CADASTRO</h2>
            </div>

            <form action="" method="POST" class="sign-in-form">
                <div class="input">
                    <label for="nome">Usuário:</label>
                    <input type="text" id="username-input" name="username-input" required><br><br>

                </div>
                <div class="input">
                    <label for="senha">Senha:</label>
                    <input type="password" id="password-input" name="password-input" required><br><br>

                </div>
                <div class="input">
                    <label for="senha">Confirmar senha:</label>
                    <input type="password" id="password-input-validation" name="password-input-validation"
                        required><br><br>

                </div>
                <div class="input">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email-input" name="email-input" required><br><br>

                </div>

                <div class="btn-submit input">
                    <input type="submit" value="Cadastrar" class="btn btn-submit">
                </div>

            </form>
            <div class="input login">
                <a href="login.php">Ja tenho login?</a>

            </div>

        </div>

    </div>
</body>

</html>