<section class="container col-12 col-md-11" id="slides">
    <div class="swiper-container">
        <div class="swiper-wrapper">
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
            <div class="swiper-slide" id="card-itens" data-swiper-autoplay="5000">
                <a href="produto/<?=$idprod ?>">
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
                    <a class="btn btn-warning btn-sm" href="produto/<?=$idprod ?>">Comprar</a>
                    <a href="carrinho.php?idprod=<?=$idprod ?>" class="btn btn-outline-warning btn-sm">
                        <i class="fas fa-cart-plus"></i> Add Carinho
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="controls">
        <div class="voltar"><i class="fas fa-angle-left"></i></div>
        <div class="proximo"><i class="fas fa-angle-right"></i></div>
    </div>
</section>
<section>
    <div class="container text-center">
        <div class="row sm-8 mt-4" id="prop">
            <iframe src="assets/img/accio.gif" frameBorder="0"></iframe>
        </div>
    </div>
</section>