<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/explication.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />

    <meta charset="UTF-8">
    <title>kidscript</title>
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <main>

        <div class="section" id="CDSection">
            <div class="expSection" id="expSection">
                <div class="exp-inform">
                    <div class="video">
                        <div class="title-btn">

                            <h2>1. Introdução à programação</h2>
                            <label class="switch btn-exp">
                                <input type="checkbox" id="toggle">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <iframe src="https://www.youtube.com/embed/eIEPOiuk-Gs?si=wSboZT3AJj4EQNFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>


                    <div id="modulo" class="text-content">
                        <h2>O que é programação?</h2>
                        <!-- <p>Programação é como aprender um novo idioma para se comunicar com máquinas e computadores. Quando programamos, damos instruções especificas sobre o que as máquinas devem fazer. Com isso, é possível criar aplicativos, jogos, sites e controlar robôs, ensinando as máquinas a realizar tarefas de acordo com suas necessidades e desejos.</p> -->

                        <p>A programação é como falar com máquinas e computadores e foi criada para dizer o que queremos que as máquinas façam. Com a programação, é possível criar aplicativos, jogos, sites e controlar robôs, ensinando as máquinas a realizar tarefas de acordo com nossas necessidades</p>

                        <h2>Linguagens de Programação</h2>

                        <p>A programação tem diferentes linguagens, que são maneiras de falar com as máquinas e usamos essas linguagens para escrever comandos com palavras e símbolos. </p>

                        <h2>Comandos</h2>
                        <p>Os comandos são escritos com palavras e simbolos que dizem as máquinas o que elas devem fazer passo a passo e seguirem a ordem correta .</p>


                        <h2>Algoritmos</h2>
                        <p>Quando juntamos vários comandos, formamos um algoritmo, que é como uma lista de tarefas para as máquinas fazerem.</p>

                        <a href="./explication_copy.php"><button class="btn login">
                                Próximo módulo
                            </button></a>
                    </div>
                </div>
            </div>
    </main>

    <script src="../assets/script/explication.js"></script>
</body>

</html>