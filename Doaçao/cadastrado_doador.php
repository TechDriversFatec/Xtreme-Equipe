<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Doaçao/cadastrado_com_sucesso.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css">
    <title>Cadastro Concluído</title>
</head>

<body>

    <div id="container">
        <!-- Início container -->

        <header>
            <div class="center">
                <div class="vó-fundo">
                    <h2>VÓ MARIA FÉLIX - FUNDO</h2>
                </div>
                <!--vó-fundo-->
            </div>
            <!--center-->

        </header>

        <nav>
            <div class="center">
                <div class="logo">
                    <a href="../Home/index.php">
                        <img src="../Home/imagem/Vó-logo.jpeg">
                    </a>
                </div>
                <!--logo-->

                <ul class="menu">
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Sobre/sobre.php">Sobre</a></li>
                    <li><a href="../Projetos/projetos.php">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="../Contato/contato.php">Contato</a></li>
                    <li><a class="btn-menu" href="../Doaçao/formulario_doador.php">Doações</a></li>
                </ul>
                <!--menu-->

            </div>
            <!--center-->
        </nav>
        <a href="..//Home/index.php">
            <div class="imagem_check">
                <img src="accept-icon.png" alt="Imagem check">
            </div>
        </a>
        <h1 class="h1">SUCESSO!</h1>

        <div class="h2_h3">
            <h2>Seu cadastro foi enviado!</h2>

            <div class="imagem_maos">
                <img src="../Participantes/mãos_cadastrado_com_sucesso.jpeg" alt="Imagem de mÃ£os coloridas">

            </div>

            <h3>AGRADECEMOS A SUA PARTICIPAÇÃO!</h3>

        </div>
        <div class="sucesso">
            <div class="footer">
                <div class="footer-inline">
                    <div class="footer-left">
                        <p>Telefone:(12)3966-2833</p>
                        <p>Email:administracao@aamu.org.br</p>
                        <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
                    </div>

                    <div class="footer-right">
                        <span>Você pode nos ajudar compartilhando nossa causa</span>
                        <span>
                            <span>
                                <a target="_blank" href="javascript:void(0)" onclick="share()">
                                    <img class="vó-icons-share" src="../Home/imagem/compartilhar.png" />
                                </a>

                                <img class="vó-icons-share vó-icons-share-insta"
                                    src="../Home/imagem/logo-instagram.png" />

                                <a target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-face"
                                        src="../Home/imagem/logo-facebook.png">
                                </a>

                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-whats"
                                        src="../Home/imagem/logo-whatsapp.png" />
                                </a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="footer-center">
                    <p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
                </div>

                <script>
                    function share() {
                        if (navigator.share !== undefined) {
                            navigator.share({
                                title: 'Maria Vó Félix',
                                text: 'Um texto de resumo',
                                url: 'https://www.facebook.com/fatecjessenvidal/',
                            })
                                .then(() => console.log('Successful share'))
                                .catch((error) => console.log('Error sharing', error));
                        }
                    }
                </script>
            </div>
        </div>

</body>
   
<?php
            $conexao = mysqli_connect("localhost","root","","bd_doacao");

            $nome         = isset($_POST['nome'])?$_POST['nome']:"";
            $cpf          = isset($_POST['cpf'])?$_POST['cpf']:"";
            $tel_number   = isset($_POST['tel_number'])?$_POST['tel_number']:"";
            $celular      = isset($_POST['celular'])?$_POST['celular']:"";
            $endereco     = isset($_POST['endereco'])?$_POST['endereco']:"";
            $anonimo      = isset($_POST['anonimo'])?$_POST['anonimo']:"";
                    
            $sql_doacao = "insert into tb_doacao (nome,cpf,tel_number,celular,endereco,anonimo) values ('$nome','$cpf','$tel_number','$celular','$endereco','$anonimo')";
            $salvar = mysqli_query($conexao,$sql_doacao);
            
        ?>

</html>