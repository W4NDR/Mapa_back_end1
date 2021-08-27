<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caramelo - Doces Artesanais</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.php">
            <img src="images/logo_white.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="index.php?page=quem_somos">Quem somos</a>
            </li>
            <li>
                <a href="index.php?page=contato">Contato</a>    
            </li>
            <li>Localização</li>
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer>
        Dados acadêmicos
    </footer>
</body>
</html>