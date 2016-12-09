<script>
    var shopping = [];

    function deleteProduct(id){
        var panel = '.panel-'+id+'';
        var index = shopping.indexOf(id);
        if(index != -1)
            shopping.splice( index, 1 );
        $(panel).fadeOut();
    }

    function less(id){
        var sum = '.cant-'+id+'';
        if(parseInt($(sum).html())-1 == 0){
            deleteProduct(id)
        }else{
            $(sum).text((parseInt($(sum).html())-1));
        }
    }

    function plus(id){
        var sum = '.cant-'+id+'';
        $(sum).text((parseInt($(sum).html())+1));
    }

    function addShoppingCart(id, name, price){
        if(shopping.indexOf(id) == -1){
            shopping.push(id);

            var content = $('.modal-body').html();

            content +=  '<div class="panel panel-primary panel-rappi-shopping panel-'+id+'">' +
                '    <div class="panel-heading">'+name+'</div>' +
                '    <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">' +
                '    <div class="panel-body text-center">' +
                '        <h4 class="price text-center">$ '+price+'</h4>' +
                '    </div>' +
                '    <div class="text-center product-cant">' +
                '        <button class="btn btn-success" onclick="less('+id+')"><i class="fa fa-minus"></i></button>' +
                '        <span class="number cant-'+id+'">1</span>' +
                '        <button class="btn btn-success" onclick="plus('+id+')"><i class="fa fa-plus"></i></button>' +
                '    </div>' +
                '    <div class="text-center panel-btn-delete" onclick="deleteProduct('+id+')"><button class="btn btn-lg btn-danger text-center">Eliminar</button></div>' +
                '</div>';
            $('.modal-body').html(content);

            if($(window).width() < 576){
                $(".shopping-cart-rappi").animate({ bottom: "-120px"}, 800);
                $(".shopping-cart-check").animate({ bottom: "150px"}, 800);
                $(".shopping-cart-check").animate({ bottom: "-50px"}, 500);
                $(".shopping-cart-rappi").animate({ bottom: "-160px"}, 500);
            }else {
                $(".shopping-cart-rappi").animate({ bottom: "-120px"}, 200);
                $(".shopping-cart-check").animate({ bottom: "150px"}, 400);
                $(".shopping-cart-check").animate({ bottom: "-50px"}, 200);
                $(".shopping-cart-rappi").animate({ bottom: "-160px"}, 200);
            }


        }else{
            sum = '.cant-'+id+'';
            $(sum).text((parseInt($(sum).html())+1));
        }
    }
</script>

<section id="home" class="img-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <input type="text" id="quicksearch" placeholder="Buscar..." class="input-search">
            </div>

            <div id="filters" style="margin-bottom: 60px">
                <div class="col-xs-12 col-sm-4 ui-group">
                    <h3>Categorias</h3>

                    <div data-filter-group="categories" class="button-group js-radio-button-group">
                        <button data-filter="" class="button is-checked">Todas</button>

                        <?php foreach ($categories as $item): ?>
                            <button data-filter=".<?= $item->categori_id;?>" class="button"><?= $item->name;?></button>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 ui-group">
                    <h3>Tipo</h3>

                    <div data-filter-group="size" class="button-group js-radio-button-group">
                        <button data-filter="" class="button is-checked">Todos</button>
                        <button data-filter=".available" class="button">Disponibles</button>
                        <button data-filter=".not-available" class="button">Agotados</button>
                        <button data-filter=".best-seller" class="button">Mas vendidos</button>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 ui-group">
                    <h3>Precio</h3>

                    <div data-filter-group="color" class="button-group js-radio-button-group">
                        <button data-filter="" class="button is-checked">Todos</button>
                        <button data-filter=".greater30" class="button">Mayores a $ 30.000</button>
                        <button data-filter=".less10" class="button">Menores a $ 10.000</button>
                    </div>
                </div>
            </div>

            <div class="sort-panel">
                <h3>Ordenar</h3>
                <div class="button-group sort-by-button-group">
                    <button data-sort-value="original-order" class="button is-checked">Original</button>
                    <button data-sort-value="name" class="button">Nombre</button>
                    <button data-sort-value="price_low_high" class="button">De menor a mayor</button>
                    <button data-sort-value="price_high_low" class="button">Mayor a menor</button>
                </div>
            </div>

            <div id="products-content">
                <?php foreach ($products as $item): ?>
                <div class="product-item col-xs-12 col-sm-4 col-md-3 <?= ($item->available) ? "available" : "not-available";?> <?= ($item->best_seller) ? "best-seller" : "normal-sale";?> <?= ($item->best_seller) ? "best-seller" : "normal-sale";?> <?php foreach ($item->categories as $category) {echo $category." ";} ?> <?= (intval(str_replace(".", "", $item->price)) <= 10000)? "less10": ((intval(str_replace(".", "", $item->price)) >=30000)? "greater30": "");?>" style="height: 560px">
                    <div class="pricing">
                        <div class="pricing-head"><h3 class="name"><?= $item->name;?></h3>
                            <img src="<?= $item->img;?>" alt="" width="100%">
                            <h4>$ <span class="price"><?= $item->price;?></span></h4></div>
                        <ul class="pricing-content list-unstyled">
                            <li><i class="fa fa-<?= ($item->available) ? "check" : "times";?>"></i><span class="<?= ($item->available) ? "available" : "not-available";?>"><?= ($item->available) ? " Disponible" : " No disponible";?></span></li>
                            <li><i class="fa fa-<?= ($item->best_seller) ? "star" : "archive";?>"></i><span class="<?= ($item->best_seller) ? "best-seller" : "normal-sale";?>"><?= ($item->best_seller) ? " Mas vendido" : " Venta normal";?></span></li>
                        </ul>
                        <div class="pricing-footer"><p><?= $item->description;?></p>
                            <button class="btn" onclick="addShoppingCart(<?= $item->id?>, '<?= $item->name?>', '<?= $item->price?>')"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>

    <a class="btn-shopping-cart" data-toggle="modal" data-target="#shopping-cart-modal"><img class="shopping-cart-rappi" src="<?= base_url()?>assets/images/shopping_cart_up.png" alt=""></a>
    <img class="shopping-cart-check" src="<?= base_url()?>assets/images/check.png" alt="">
    <br><br><br>
</section>


<!-- Modal -->
<div id="shopping-cart-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Carrito de compras</h4>
            </div>
            <div class="width-infinity">
                <div class="modal-body">
                </div>
            </div>
        </div>

    </div>
</div>