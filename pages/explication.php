<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
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

                    <div id="modulo" class="text-content program_module">

                        <h2>O que é programação?</h2>
                        <p>Programação é como aprender um novo idioma para comunicar-se com máquinas e computadores. Ao programar, você dá instruções específicas sobre o que as máquinas devem fazer. Com isso, é possível criar aplicativos, jogos, sites e controlar robôs, ensinando as máquinas a realizar tarefas de acordo com suas necessidades e desejos.</p>

                        <h2>Linguagens de Programação</h2>
                        <p>Assim como há diferentes idiomas no mundo, há várias linguagens de programação, cada uma com seu próprio modo de escrever comandos. Linguagens como Python e Scratch são mais fáceis para iniciantes, enquanto C++ e Java são mais complexas. A escolha da linguagem depende do que você deseja criar e do seu nível de habilidade.</p>

                        <h2>Comandos</h2>
                        <p>Na programação, damos comandos à máquina para orientá-la, como se estivéssemos seguindo uma receita. Esses comandos são escritos de forma que a máquina possa entender e executar. Seguir a ordem correta é essencial para garantir que o resultado final seja o esperado e funcione corretamente.</p>

                        <h2>Algoritmos</h2>
                        <p>Um algoritmo é uma lista de comandos que a máquina segue para alcançar um objetivo, como mover um personagem ou atualizar a pontuação em um jogo. Entender e criar algoritmos é crucial na programação para orientar a execução de tarefas específicas.</p>

                        <button class="btn login">
                            Próximo módulo
                        </button>
                    </div>
                    
                    <div id="modulo" class="text-content style_module">
                        
                        <h2>Oque é programação?</h2>
                        <p>Programação é como aprender um novo idioma para comunicar-se com máquinas e computadores. Ao programar, você dá instruções específicas sobre o que as máquinas devem fazer. Com isso, é possível criar aplicativos, jogos, sites e controlar robôs, ensinando as máquinas a realizar tarefas de acordo com suas necessidades e desejos.</p>
                        
                        <h2>Linguagens de Programação</h2>
                        <p>Assim como há diferentes idiomas no mundo, há várias linguagens de programação, cada uma com seu próprio modo de escrever comandos. Linguagens como Python e Scratch são mais fáceis para iniciantes, enquanto C++ e Java são mais complexas. A escolha da linguagem depende do que você deseja criar e do seu nível de habilidade.</p>
                        
                        <h2>Comandos</h2>
                        <p>Na programação, damos comandos à máquina para orientá-la, como se estivéssemos seguindo uma receita. Esses comandos são escritos de forma que a máquina possa entender e executar. Seguir a ordem correta é essencial para garantir que o resultado final seja o esperado e funcione corretamente.</p>
                        
                        <h2>Algoritmos</h2>
                        <p>Um algoritmo é uma lista de comandos que a máquina segue para alcançar um objetivo, como mover um personagem ou atualizar a pontuação em um jogo. Entender e criar algoritmos é crucial na programação para orientar a execução de tarefas específicas.</p>
                        
                        <!-- <button class="btn login" onclick="trocaModulo()">
                            Próximo módulo
                        </button> -->
                    </div>
                </div>
            </div>
        </main>
        
        <script src="../assets/script/light-mode.js"></script>
        <script src="../assets/script/switch-module.js"></script>
</body>

</html>