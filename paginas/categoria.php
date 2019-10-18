<?php 
	$categ = $_GET['pagina'];
	$explode = explode('/', $categ);
    $categoria = $explode[1];
    $subcategoria = $explode[2];
    $produtos = $conectar->prepare("SELECT * FROM produto WHERE categoria = :categ and subcategoria = :subcat");
	$produtos -> bindParam(':categ', $categoria, PDO::PARAM_STR);
	$produtos -> bindParam(':subcat', $subcategoria, PDO::PARAM_STR);
    $produtos->execute(); 
    $verifica = $produtos -> rowCount();
?>
<header><?php include "includes/header.php" ?></header>

<main>
    <?php
        
    ?>
    <div class="container catCss">
        <div class="row">
            <?php
            if($verifica <= 0){ 
				echo "<h1 class='display-4 mt-5'>NÃO HÁ ITENS PARA ESTA CATEGORIA</h1>";
			}else{	
                while ($detl=$produtos->fetch(PDO::FETCH_OBJ)){ 
                    $img = $detl->img;
                    $titulo = $detl->titulo;
                    $idprod = $detl->idprod;
                    $preco = $detl->preco;
                    $preco = number_format($preco, 2, ',','.');
                    $codigo = $detl->codigo;
                    $detalhes = $detl->detalhes;
                    $conteudo = $detl->conteudo;
        ?>
            <div class="col-md-3 col-sm-6 col-6 grid">
            <a class="linkCard" href="http://localhost/ACCIO%202.0/produto/<?=$idprod ?>">
                <div class="card" id="card">
                    <div class="card-image">
                        <img class="card-img-top" src="http://localhost/ACCIO%202.0/assets/img/produtos/<?=$img ?>" width="100%">
                    </div>
                    <div class="card-content">
                        <p class="titulo"><?=$titulo ?></p>
                        <p class="font-weight-normal preco">Avista:
                            <span class="text-center text-danger font-weight-bold">R$ <?=$preco ?></span></p>
                    </div>
                    </a>
                    <div class="card-footer text-center" id="cardfoot">
                        <a class="btn btn-warning btn-sm">Comprar</a>
                        <a href="carrinho.php?idprod=<?=$idprod ?>" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-cart-plus"></i> Add Carinho
                        </a>
                    </div>
                </div>
            </a>
            </div>

            <?php }}?>
        </div>
    </div>
</main>