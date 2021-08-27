<?php
    require_once('dados/produtos.php');

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($produtos[$id]))
            $id = null;
    }
    
    if(is_null($id)){
?>
    <div>
        O código nulo ou não existente.
    </div>
<?php
    }else{
?>
    <div class="prod-cl">
        <img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
    </div>
    <div class="prod-cr">
        <p>
            <?php echo $produtos[$id]['descricao']?>
        </p>
        <a href="index.php?page=contato" class="button">
            Fazer Reserva
        </a>
    </div>
<?php
    }
?>