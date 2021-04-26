<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <title>Projetos</title>
    <script type="text/javascript">
        var onloadCallback = function() {
          grecaptcha.render('html_element', {
            'sitekey' : ' 6Lesd6caAAAAAOMb_uTxoAGkr7TS8bmKGJ31tc8S '
          });
        };
      </script>
</head>

<body>
    <header>
        <div class="center">
            <div class="vó-fundo">
            </div><!--vó-fundo-->
        </div><!--center-->
    </header>
    <nav>
        <div class="center">
            <div class="logo">
                <a href="../Home/index.php">
                <img src="../Home/imagem/Vó-logo.jpeg">
                </a>
            </div><!--logo-->

            <ul class="menu">
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Sobre/sobre.php">Sobre</a></li>
                    <li><a class="btn-menu" href="../Projetos/projetos.php">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="../Contato/Contato2.php">Contato</a></li>
                    <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
            </ul><!--menu-->

        </div><!--center-->
    </nav>
    <div class="cadastro_projetos">
        <div>
            <h1 id="titulo">Projetos</h1>

            <section class="conteudo">
                <div class="imagem">
                    <img src="imagens/imagem_de_futebol.JPG" title="Jogo Futebol" alt="Imagem do Jogo">
                </div>

                <div class="texto">
                    <p>orem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p><br>
                </div>   
            </section>
            
        </div>
        <br>
        <form class="formulario" method = "post" action="cadastrado_com_sucesso_projeto.php"> <!--Em um form so aceita uma action e entao sera enviado para cadstro_concluido e de la salvara as informaçoes no banco de dados, por isso teria que ter uma pagina para cada cadastro-->
            <h2 id="subtitulo">Cadastro de Projetos</h2>
            <br><br>
            <fieldset class="grupo">
                <div class="campo left">
                    <label for="nome"><strong>Nome do empreendedor</strong></label>
                    <input type="text" name="nome_empreendedor" id="nome" placeholder="Nome Completo" required>
                </div>
    
                <div class="campo right">
                    <label for="empresa"><strong>Nome da empresa</strong></label>
                    <input type="text" name="nome_empresa" id="empresa" placeholder="Insira o nome da empresa (opcional)">
                </div>
    
                <div class="campo left">
                    <label for="cpf"><strong>CPF/CNPJ</strong></label>
                    <input type="text" name="cpf" id="cpf" placeholder="Insira seu CPF ou CNPJ" required maxlength="11">
                </div>
    
                <div class="campo right">
                    <label class="email"><strong>Email</strong> </label>
                    <input type="email" name="email" id="email" placeholder="Insira seu email" required >
                    
                </div>
    
                <div class="campo left">
                    <label for="tel_number"><strong>Telefone de Contato</strong></label>
                    <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000" maxlength="14">
                </div>
    
                <div class="campo right">
                    <label for="celular"><strong>Celular de contato</strong></label>
                    <input type="tel" name="celular" id="celular" placeholder="(00) 00000-0000"required maxlength="15">
                </div>
    
                <div class="campo left">
                    <label for="cidade"><strong>Cidade</strong></label>
                    <input type="text" name="cidade" id="cidade" placeholder="Insira sua cidade" required>
                </div>
                <div class="campo right">
                    <label for="estado"><strong>Estado</strong></label>
                    <input type="text" name="estado" id="estado" placeholder="Insira seu estado"required maxlength="15">
                </div>
                <div class="campo right"><br><br><br><br></div>
                <div class="campo inline left">
                    <label>
                        <input type="radio" name="fisica_juridica" value="física" checked>Pessoa Física
                    </label>
                    <label>
                        <input type="radio" name="fisica_juridica" value="jurídica">Pessoa Jurídica
                    </label>
                    </div>
                <div class="campo center">
                    <label for="projeto"><strong>Descrição do projeto</strong></label>
                    <input type="text" name="projeto" id="projeto" placeholder="Descreva seu projeto aqui" required>  
                </div>
                <div class="campo center">
                <div id="html_element"></div>
                <br>
              </form>
              <div class="campo center">
              <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                  async defer>
              </script> 
              </fieldset>
              <button class="botao" type="submit">Enviar</button> 
        </form>
        <div class="footer">
            <div class="footer-inline">
                <div class="footer-left">
                    <p>Telefone:(12)3966-2833</p>
                    <p>Email:administracao@aamu.oemail.br</p>
                    <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
                </div>
        
                <div class="footer-right">
                    <span>Você pode nos ajudar compartilhando nossa causa</span>
                    <span>
                        <span>
                            <a taemailet="_blank" href="javascript:void(0)" onclick="share()">
                                <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                            </a>
                            
                            <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />
                
                            <a taemailet="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                            </a>
                
                            <a taemailet="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                                <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
                            </a>
                        </span>
                    </span>
                    
    
                </div>
            </div>
            
    
            <div class="footer-center">
                <p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
            </div>
    
            <script>
                function share(){
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

</html>