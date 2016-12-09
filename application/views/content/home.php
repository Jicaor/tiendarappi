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
                        <button data-filter=".1" class="button">drinks</button>
                        <button data-filter=".2" class="button">lunch</button>
                        <button data-filter=".3" class="button">food</button>
                        <button data-filter=".4" class="button">sea</button>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 ui-group">
                    <h3>Tipo</h3>
                    <div data-filter-group="size" class="button-group js-radio-button-group">
                        <button data-filter="" class="button is-checked">Todos</button>
                        <button data-filter=".available" class="button">Disponibles</button>
                        <button data-filter=".not-available" class="button">Agotados</button>
                        <button data-filter=".best_seller" class="button">Mas vendidos</button>
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

            <div class="products-content">
                <div class="product-item col-xs-12 col-sm-4 col-md-3">

                    <div class="pricing">
                        <div class="pricing-head">
                            <h3 class="name">Lorem</h3>
                            <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                            <h4>$ <span class="price">60.000</span></h4>
                        </div>
                        <ul class="pricing-content list-unstyled">
                            <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                            <li><i class="fa fa-check"></i><span class="best-seller"> Best seller</span></li>
                        </ul>
                        <div class="pricing-footer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                            <button class="btn" data-ember-action="" data-ember-action-341="341"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </div>
                </div>
                <div id="ember343" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">ipsum</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">20.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-times"></i><span class="not-available"> Not available</span></li>
                                <li><i class="fa fa-check"></i><span class="worst-sold"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-344="344"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember346" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">dolor</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">10.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                                <li><i class="fa fa-check"></i><span class="best-seller"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-347="347"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember349" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">sit</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">35.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-times"></i><span class="not-available"> Not available</span></li>
                                <li><i class="fa fa-check"></i><span class="worst-sold"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-350="350"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember352" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">amet</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">12.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                                <li><i class="fa fa-check"></i><span class="best-seller"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-353="353"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember355" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">consectetur</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">120.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                                <li><i class="fa fa-check"></i><span class="worst-sold"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-356="356"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember358" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">adipiscing</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">50.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-times"></i><span class="not-available"> Not available</span></li>
                                <li><i class="fa fa-check"></i><span class="worst-sold"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-359="359"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember361" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">elit</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">2000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                                <li><i class="fa fa-check"></i><span class="worst-sold"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-362="362"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember364" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">Maecenas</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">150.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-check"></i><span class="available"> Available</span></li>
                                <li><i class="fa fa-check"></i><span class="best-seller"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-365="365"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ember367" class="ember-view"><div class="product-item col-xs-12 col-sm-4 col-md-3">

                        <div class="pricing">
                            <div class="pricing-head">
                                <h3 class="name">eu</h3>
                                <img src="http://lorempixel.com/200/100/food/" alt="" width="100%">
                                <h4>$ <span class="price">200.000</span></h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li><i class="fa fa-times"></i><span class="not-available"> Not available</span></li>
                                <li><i class="fa fa-check"></i><span class="best-seller"> Best seller</span></li>
                            </ul>
                            <div class="pricing-footer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.</p>
                                <button class="btn" data-ember-action="" data-ember-action-368="368"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>