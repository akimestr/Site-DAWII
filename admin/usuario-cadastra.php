<html>
    <head><title> MARKAELA </title>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="sortcut icon" href="assets/img/icon.ico" type="image/x-icon"/>
        <meta charset="utf-8">
    </head>
    <body>
    <header>
        <nav id="horizontal">
            <ul>
                <li><a href="home.php"><img src="assets/img/logo.png" width="150x"> </a></li>
                <li style="float:right"><a class="active" href="login.php">Sair</a></li>
                <li style="float:right"><a class="active" href="usuario-lista.php">Minha conta</a></li>
            </ul>
        </nav>

        <nav id="vertical"> 
            <ul>
                 <li><a href="home.php">Home</a></li>
                <li><a href="portfolio-lista.php">Portfólio</a></li>
                <li><a href="servico-lista.php.">Serviços</a></li>
                <li><a href="curriculo-lista.php">Currículo</a></li>
                <li><a href="mensagem-lista.php">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
<section id="content">
        
        <h2> Cadastre-se </h2>
        <div id="form">
                <h3> Insira as informações:  </h3>
                <div class="areaform">
                    <form action="usuario-cadastra-ok.php" method="POST"> 
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Insira seu nome">
        
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Insira seu nome">

                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="Insira sua senha">
                        
                        <label for="senha">Confirme sua senha:</label>
                        <input type="password" id="senha" name="nsenha" placeholder="Confirme sua senha">

                        <button class="button"> Confirmar cadastro </button>
                    </form><br><br>
                </div>
        </div>
</section>
    <footer>
        
    </footer>
</body>
</html>