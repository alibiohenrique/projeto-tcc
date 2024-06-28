<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/components/profile.css">
    <link rel="stylesheet" href="../styles/components/header.css">
    <link rel="stylesheet" href="../styles/utils/utils.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kidscript</title>
    <script src="./script/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>

    <main>

        <div class="section profile" id="section">

            <!-- <div class="unlogged">
                <div class="profile">
                    <h2>Ops!! Você ainda não tem cadastro</h2>
                    <p>Cadastre-se no nosso site e desbloqueie o aprendizado divertido!!</p>
                    <div class="btnSection"><button class="btn">Entrar</button> <button class="btn">cadastre-se</button>
                    </div>
                </div>
            </div> -->

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Alterar Senha:</h1>
                        </div>

                        <div class="modal-body">
                            <div class="password">
                                <label for="#">Senha Atual:</label>
                                <input type="text" name="" id=""><br>
                                <label for="#">Alterar senha:</label>
                                <input type="text" name="" id=""><br>
                                <label for="#">Repetir senha:</label>
                                <input type="text" name="" id="">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn close" data-bs-dismiss="modal">CANCELAR</button>
                            <button type="button" class="btn confirm"><strong>CONFIRMAR</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logged">
                <div class="perfil">

                    <h2>João Brown</h2>
                    <h3>08 anos</h3>
                    <img src="https://img.freepik.com/free-psd/3d-illustration-human-avatar-profile_23-2150671142.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1719187200&semt=ais_user"
                        alt="" width="100px">
                    <p><strong>Insignias: </strong><span>@ # % & * </span></p>
                    <p><strong>E-mail: </strong><span>joaobrown@gmail.com</span></p>
                    <p><strong>Senha: </strong><span>********</span></p>
                    <p><strong>Mudar Senha: </strong><button type="button" class="btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" onclick="activeBlur()">></button></p>
                    <p><strong>Sessão Atual: </strong><span>1h 26min 04s</span></p>

                    <div class="email">
                        <p><strong>E-mail Parental:</strong></p>
                        <p><span>maedojoaobrown@gmail.com</span></p>
                    </div>
                </div>
            </div>
            <div class="blur">
            </div>

    </main>

</body>

</html>