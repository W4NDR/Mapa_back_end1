<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo das Festas</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img src="images/mundo.jpeg" alt="Logo" class="logo">
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
        Courso: Sistemas para Internet
        RA: 1894960-5
    </footer>
</body>
</html>