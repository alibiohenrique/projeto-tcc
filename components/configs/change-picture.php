

<?php

// Lidar com o arquivo
if (isset($_POST['upload'])) {
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_contents = addslashes(file_get_contents($file_tmp)); // Ler o arquivo

    // Inserir no banco de dados
    $sql = "UPDATE users SET user_picture='$file_contents' WHERE username='$username'";
    if ($db->query($sql) === TRUE) {
        echo "Inserção da imagem foi sucesso.";
    } else {
        echo "Erro: " . $db->error;
    }
}
