<?php 
	$item = $_GET['pagina'];
	$explode = explode('/', $item);
    $id = $explode[1];
 	$produto = $conectar->prepare("SELECT * FROM produto WHERE idprod = :id");
	$produto -> bindParam(':id', $id, PDO::PARAM_INT);
    $produto->execute();  
?>
<header><?php include "includes/header.php" ?></header>
<?php
    while ($detl=$produto->fetch(PDO::FETCH_OBJ)){ 
        $img = $detl->img;
        $titulo = $detl->titulo;
        $idprod = $detl->idprod;
        $preco = $detl->preco;
        $preco = number_format($preco, 2, ',','.');
        $codigo = $detl->codigo;
        $detalhes = $detl->detalhes;
        $conteudo = $detl->conteudo;
?>
<main>
    <section class="container">
        <div class="row">
            <div class="card prodtlh">
                <div class="card-body detalhes">
                    <div class="imgProd">
                        <div class="imgs">
                            <div class="thumbnails">
                                <ol class="thumb list-unstyled">
                                    <li><img src="http://localhost/ACCIO%202.0/assets/img/produtos/<?=$img ?>"
                                            alt="produto"></li>
                                </ol>
                            </div>
                            <div class="imagem" data-toggle="modal" data-target="#lightbox">
                                <img src="http://localhost/ACCIO%202.0/assets/img/produtos/<?=$img ?>" alt="produto">
                            </div>
                        </div>
                        <!-- LIGHTBOX -->
                        <div class="modal fade" id="lightbox">
                            <div class="modal-dialog modal-lg modal-dialog lightbox">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="text-light">&timesb;</span>
                                </button>
                                <img src="http://localhost/ACCIO%202.0/assets/img/produtos/<?=$img ?>" alt="produto">
                            </div>
                        </div>
                    </div>
                    <div class="prodDetalhes">
                        <p class="text-muted"><small>145 vendidos</small></p>
                        <h1 class="mb-2 h4"><?=$titulo ?></h1>
                        <h2 class="display-4">R$ <?=$preco ?></h2>
                        <p class="text-success"><i class="fa fa-credit-card"></i> 12x sem juros</p>
                        <p class="mb-0"><i class="fa fa-truck"></i> Entrega para todo Brasil</p>
                        <div class="text-muted mb-2"><small>Compra garantida</small>
                        </div>
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" min="1" class="form-control mb-5"
                            placeholder="Digite a Quantidade">
                        <a href="#" class="btn btn-warning btn-lg btn-block">Comprar</a>
                        <a href="#" class="btn btn-outline-warning btn-block mt-2">Add Carinho <span><i
                                    class="fas fa-cart-plus"></i></span></a>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#dtl">Detalhes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#conteudo">Conteúdo da Caixa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#envio">Envio</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-4" id="dtl">
                        <p><?=$detalhes ?></p>
                    </div>
                    <div class="tab-pane fade p-4" id="conteudo">
                        <h2 class="h5">Descrição do Conteudo Incluso na Embalagem</h2>
                        <p><?=$conteudo ?></p>
                    </div>
                    <div class="tab-pane fade p-4" id="envio">
                        <h2 class="h5">Insira o CEP do endereço que deseja receber o produto.</h2>
                        <p style="font-size: 16px;">Assim você poderá calcular o frete e conhecer os serviços
                            disponíveis.</p>
                        <div class="form-group col-md-3">
                            <input min="0" type="number" class="form-control" placeholder="_ _ _ _ _ - _ _ _">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php }?>