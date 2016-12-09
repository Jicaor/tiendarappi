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
                            <button class="btn"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>
    <br><br><br>
</section>

<!--script>


    $(document).ready(function () {

        // Assign handlers immediately after making the request,
        // and remember the jqxhr object for this request

        var jqxhr = $.getJSON("<?= base_url()?>assets/json/data.json", function (data) {

                var products_cont = $('#products-content');
                var content = products_cont.html();

                for (var x in data.products) {

                    var categories = "";
                    for (var i in data.products[x].categories) {
                        categories += data.products[x].categories[i] + " ";
                    }

                    var price = parseInt((data.products[x].price).replace(".", ""));

                    if (price <= 10000) {
                        classPrice = "less10";
                    }

                    if (price >= 30000) {
                        classPrice = "greater30";
                    }

                    if (data.products[x].available) {
                        classAvailable = "available";
                        classAvailableFa = "check";
                    } else {
                        classAvailable = "not-available";
                        classAvailableFa = "times";
                    }

                    if (data.products[x].best_seller) {
                        classBestSeller = "best-seller";
                        classBestSellerFa = "check";
                    } else {
                        classBestSeller = "not-best-seller";
                        classBestSellerFa = "times";
                    }

                    content += '<div class="product-item col-xs-12 col-sm-4 col-md-3 ' + categories + ' ' + classPrice + ' ' + classAvailable + ' ' + classBestSeller + '">' +
                        '    <div class="pricing">' +
                        '        <div class="pricing-head">' +
                        '            <h3 class="name">' + data.products[x].name + '</h3>' +
                        '            <img src="' + data.products[x].img + '" alt="" width="100%">' +
                        '            <h4>$ <span class="price">' + data.products[x].price + '</span></h4>' +
                        '        </div>' +
                        '        <ul class="pricing-content list-unstyled">' +
                        '            <li><i class="fa fa-' + classAvailableFa + '"></i><span class="available"> Available</span></li>' +
                        '            <li><i class="fa fa-' + classBestSellerFa + '"></i><span class="best-seller"> Best seller</span></li>' +
                        '       </ul>' +
                        '        <div class="pricing-footer">' +
                        '            <p>' + data.products[x].description + '</p>' +
                        '            <button class="btn" data-ember-action="" data-ember-action-347="347"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>' +
                        '        </div>' +
                        '    </div>' +
                        '</div>';
                }
                products_cont.html(content);

            })
            .done(function () {
                //console.log( "second success" );
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                //console.log("complete");
            });

        // Perform other work here ...

        // Set another completion function for the request above

        jqxhr.complete(function () {
            console.log("second complete");
        });

    });
</script-->