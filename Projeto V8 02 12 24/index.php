Código html ->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FIM GOOGLE FONTS-->
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- FIM BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="style.css">
    <title>Nome da empresa</title>
</head>
<body>

    <header>
        <div class = "interface">
            <div class = "logo">
                <a href="#">
                    <img src = "images/foguetao.png" alt = "By Triangle Squad" class="imagem-foguetao">
                </a>
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#" onclick="scrollToSection('separatora')">Especialidades</a></li>
                    <li><a href="#" onclick="scrollToSection('separatorb')">Sobre</a></li>
                    <li><a href="#">Projetos</a></li>
                </ul>
            </nav>
            
            <div class="btn-contato">
                <a href="#">
                    <button onclick="scrollToSeparator()">Cadastre-se</button>
                </a>
            </div><!-- botão de login -->

            <div class="menu-mobile">
                <div class="btn-fechar">
                    
                </div>
            </div><!-- menu-mobile -->

        </div> <!-- Interface -->
    </header>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>PROBLEMAS TÉCNICOS? CONHEÇA A EQUIPE <span class="equipe">JUNO</span><span>!</span></h1>
                        <p>Temos uma equipe de especialistas para solucionar seus problemas de TI com eficiência e segurança. Sua tecnologia merece o melhor cuidado. Oferecemos assistência completa para garantir o funcionamento ideal de seus sistemas.</p>
                        
                        <div class="btn-login">
                            <button onclick="scrollToSection('separatorc')">Login</button>
                        </div><!-- botão de login -->
                    </div> <!-- txt-topo-site -->
                    
                    <div class="img-topo-site">
                            <img src="images/compiuter.png" alt="">
                    </div>
                </div>
            </div>
        </section> <!-- Topo do site -->

        <div id="separatora" class="bordadois">
        </div> <!-- Linha entre sobre e formulário -->

        <section class="especialidades">
            <div class="interface">
                <h2 class="titulo">NOSSAS <span>ESPECIALIDADES.</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-robot"></i> <!-- Link do icone do site Bootstrap -->
                        <h3>Chatbot de Suporte TI</h3>
                        <p>Nosso assistente virtual está disponível 24/7 para responder dúvidas rapidamente.</p>
                    </div> <!-- Especialidades box 1 -->

                    <div class="especialidades-box">
                        <i class="bi bi-shield-fill-check"></i> <!-- Link do icone do site Bootstrap -->
                        <h3>Eficiência e Segurança</h3>
                        <p>Oferecemos soluções rápidas e precisas, garantindo sempre a segurança dos seus dados.</p>
                    </div> <!-- Especialidades box 2 -->

                    <div class="especialidades-box">
                        <i class="bi bi-house-heart-fill"></i></i> <!-- Link do icone do site Bootstrap -->
                        <h3>Atendimento Flexível</h3>
                        <p>Suporte técnico prestado presencialmente ou através de atendimento online.</p>
                    </div> <!-- Especialidades box 3 -->
                </div> <!-- Flex -->
            </div> <!-- Interface -->
        </section> <!-- Especialidades -->

        <div id="separatorb" class="bordadois">
        </div> <!-- Linha entre sobre e formulário -->

        <section class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/img_robo.png" alt="">
                    </div> <!-- img-sobre -->

                    <div class="txt-sobre">
                        <h2>MUITO PRAZER, <span>SOU SHELBY</span></h2>
                        <p>Olá! Meu nome é Shelby, sua assistente virtual especializada em suporte técnico de TI. Estou aqui para ajudá-lo(a) a encontrar respostas rápidas e práticas para as questões mais comuns relacionadas a tecnologia.

                            Seja para solucionar problemas de conexão, dúvidas sobre configurações de dispositivos, segurança de dados, ou manutenção de sistemas, estarei ao seu lado para orientar e fornecer informações. </p>
                        <div class="btn-social">
                            <a href="#"><button><i class="bi bi-chat-heart-fill"></i></button></a>
                        </div> <!-- btn-social -->
                    </div> <!-- txt-sobre -->
                </div> <!-- flex -->
            </div> <!-- interface -->
        </section> <!-- sobre -->

        <div id="separatorc" class="borda"> 
        </div> <!-- Linha entre sobre e formulário -->

        <section class="portfolio" hidden>
            <div class="interface">
                <h2 class="titulo">XIXI <span>COCÔ</span></h2>
                
                <div class="flex">
                    <div class="img-port" style="background-image: url(images/imagem.png);">
                        <div class="overlay">X</div>
                    </div>
                    <div class="img-port" style="background-image: url(images/imagem.png);">
                        <div class="overlay">Y</div>
                    </div>
                    <div class="img-port" style="background-image: url(images/imagem.png);">
                        <div class="overlay">Z</div>
                    </div>
                </div>
            </div> <!-- interface -->
        </section> <!-- portfolio -->

        <section class="formulario">
            <div class="interface">
                <h2 class="titulo">FALE <span>CONOSCO.</span></h2>
                <form class="form-signin" action="logar.php" method="POST">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu e-mail:" required>
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Sua senha:" required>
                    <label><input type="checkbox" name="x" id="inputX" class="form-control">Lembre-me</label>
                    <div class="btn1">
                        <div class="btn-enviar">
                            <button type="submit">ENVIAR</button>
                        </div> 
                    </div> <!-- botão -->
                </form> <!-- form -->
            </div> <!-- interface -->
        </section> <!-- formulario -->
        
    </main>

    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img src="images/foguetao.png" alt="Logotipo empresa X">
                    </div> <!-- logo-footer-->
                    <div class="btn-social">
                        <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                        <a href="#"><button><i class="bi bi-youtube"></i></button></a>
                        <a href="#"><button><i class="bi bi-linkedin"></i></button></a>
                    </div> <!-- btn-social -->
                </div> <!--  -->
            </div> <!-- line-footer-->

            <div class="line-footer borda">
                <p><i class="bi bi-envelope-fill"></i> <a href="mailto:contato@ficticio.com.br"></a></p>
            </div> <!-- line-footer-->
        </div> <!-- interface -->
    </footer>

    <script src="script.js"></script>
    <!-- ACESSA ARQUIVO JAVASCRIPT -->
</body>
</html>



        