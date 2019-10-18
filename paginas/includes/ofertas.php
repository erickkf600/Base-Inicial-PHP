<section class="container ofertasSection">
    <h1 class="h2 text-center mt-5">Melhores Ofertas</h1>
    <div class="container">
        <div class="row">
        <?php 
            $buscar = $conectar->prepare("SELECT * from produto limit 6");
            $buscar->execute();
            while ($produto=$buscar->fetch(PDO::FETCH_OBJ)){ 
            $img = $produto->img;
            $titulo = $produto->titulo;
            $idprod = $produto->idprod;
            $preco = $produto->preco;
            $preco = number_format($preco, 2, ',','.');
        ?>
            <div class="col-md-4 col-sm-6 col-6 grid">
            <a class="linkCard" href="http://localhost/ACCIO%202.0/produto/<?=$idprod ?>">
                <div class="card" id="card">
                    <div class="card-image">
                        <img class="card-img-top" src="assets/img/produtos/<?=$img ?>" width="100%">
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
            <?php }?>
        </div>
    </div>
</section>