<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cadastro_participantes.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../Home/css/style.css" media="screen">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
        <title>Cadastro de alunos</title>
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
            <li><a  href="..//Home/index.php">Home</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
            <li><a href="contato">Contato</a></li>
            <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
        </ul><!--menu-->
    </div><!--center-->
</nav>
    <div class="cadastro_alunos">
        <div>
            <h1 class="titulo">Inscrição Aluno</h1>           
        </div>

        <div class="texto">
            <p>-Bem-vindo, a pré-inscrição online possibilita ao futuro estudante solicitar uma vaga para o ano vigente. Primeiramente solicitamos que preencha os campos abaixo.
                   Esses dados serão usados para chegarmos até você. <p>
                A sua pré-inscrição será realizada de modo on-line e será analisada, e entramemos em contato caso tenha vaga.</p>
            </p>
        </div>
        <form class="formulario" method = "post" action="participante_concluido.php"> <!--Em um form so aceita uma action e entao sera enviado para cadstro_concluido e de la salvara as informaçoes no banco de dados, por isso teria que ter uma pagina para cada cadastro-->
            <br><br>
            <fieldset class="grupo">
                <h2 id="subtitulo">Cadastro de Aluno</h2>
                <div class="campo left">
                    <label for="nome"><strong>Nome do candidato</strong></label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    <label for="nascimento"><strong>Data de nascimento</strong></label>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>

                <div class="campo right">
                    <label for="nome_pai"><strong>Nome do pai</strong></label>
                    <input type="text" name="nome_pai" id="nome_pai" placeholder="Nome Completo" required>
                        <label><b>Pai não declarado</b></label>
                        <input type="checkbox" id="pai_desconhecido" name="paternidade" value="Pai não declarado">
                </div>

                <div class="campo left">
                    <label for="nome_mae"><strong>Nome da mãe</strong></label>
                    <input type="text" name="nome_mae" id="nome_mae" placeholder="Nome Completo" required>
                </div>

                <div class="campo right">
                    <label for="cpf"><strong>CPF do responsável</strong></label>
                    <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required maxlength="11">
                </div>
    
                <div class="campo right">
                    <label for="tel_number"><strong>Telefone de Contato</strong></label>
                    <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000" maxlength="14">
                </div>
    
                <div class="campo left">
                    <label for="celular"><strong>Celular de contato</strong></label>
                    <input type="tel" name="celular" id="celular" placeholder="(00) 00000-0000"required maxlength="15">
                </div>
    
                <div class="campo right">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" placeholder="name@name.com" required>
                </div>
                <div class="campo right"><br><br><br><br></div>
                <div class="campo left"></div>
                <div>
                    <label><b>Como você conheceu a ONG?</b></label><br>
                    <input type="checkbox" id="redesocial" name="redesocial" value="Redes social">
                    <label for="Redes Sociais">Redes sociais</label>
                    <input type="checkbox" id="youtube" name="youtube" value="Youtube">
                    <label for="Youtube">Youtube</label>
                    <input type="checkbox" id="outros" name="outros" value="Outros">
                    <label for="outros">Outros</label>
                </div>
                <div class="checkbox">
                    <label>Especifique</label>
                    <textarea row="3" id="especifique" name="especifique"></textarea>
                </div>
                <br>
                <br>
                <br>
                    <button class="botao" type="submit">Enviar</button>
            </fieldset>  
        </form>
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
                                <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                            </a>
                
                            <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />
                
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                            </a>
                
                            <a target="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
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
    </body>
</html>