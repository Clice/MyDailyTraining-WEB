<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Flat Pricing Tables Design</title>
        <link href="<?php echo base_url('assets/css/planos.css'); ?>" rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>        
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' 
              rel='stylesheet' type='text/css'>
    </head>

    <body>

        <script src="<?php echo base_url('assets/js/jquery.magnific-popup.js'); ?>" type="text/javascript"></script>
        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 

        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>                           
        <div style="color: " class="pricing-plans">
            <div class="wrap">
                <div class="pricing-grids">
                    <div class="pricing-grid1">
                        <div class="price-value">
                            <h4><a href="#">SIMPLES</a></h4>
                            <h5><span>R$ 50,00 / mês</span></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li><a href="#">Sistema Web (R$ 40,00)</a></li>
                                <li><a href="#">150 Licenças</a></li>
                                <li><a href="#">Valor Anual: R$ 600,00</a></li>
                                <li><a href="#">Pacotes Adicionais:<br>1 Pacote A ou 1 Pacote B</a></li>
                                <div class="cart1">
                                    <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                                </div>
                        </div>
                    </div>
                    <div class="pricing-grid2">
                        <div class="price-value two">
                            <h4><a href="#">MÉDIO</a></h4>
                            <h5><span>R$ 70,00 / mês</span></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li><a href="#">Sistema Web (R$ 40,00)</a></li>
                                <li><a href="#">300 Licenças</a></li>
                                <li><a href="#">Valor Anual: R$ 840,00</a></li>
                                <li><a href="#">Pacotes Adicionais:<br>1 Pacote A ou 1 Pacote B ou 1 Pacote C</a></li>
                            </ul>
                            <div class="cart2">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-grid3">
                        <div class="price-value three">
                            <h4><a href="#">PRO</a></h4>
                            <h5><span>R$ 90,00 / mês</span></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li><a href="#">Sistema Web (R$ 40,00)</a></li>
                                <li><a href="#">600 Licenças</a></li>
                                <li><a href="#">Valor Anual: R$ 1080,00</a></li>
                                <li><a href="#">Pacotes Adicionais:<br>Qualquer um dos pacotes (1 vez)</a></li>
                            </ul>
                            <div class="cart3">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-grid4">
                        <div class="price-value four">
                            <h4><a href="#">PACOTES</a></h4>
                            <h5><span>A partir de R$ 10,00 / mês</span></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li><a href="#">Pacote A: 50 Licenças (R$ 10,00)</a></li>      
                                <li><a href="#">Pacote B: 100 Licenças (R$ 17,00)</a></li>
                                <li><a href="#">Pacote C: 150 Licenças (R$ 25,00)</a></li>
                                <li><a href="#">Pacote D: 200 Licenças (R$ 30,00)<br><i style="color: white;">c</i></a></li>
                            </ul>
                            <div class="cart4">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>

                    <div id="small-dialog" class="mfp-hide">
                        <div class="pop_up">
                            <div class="payment-online-form-left">
                                <form>
                                    <h4><span class="shipping"> </span>Shipping</h4>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Frist Name';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Last Name';
                                                }"></li>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Email';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Company Name';
                                                }"></li>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Phone';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Address';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <div class="clear"> </div>
                                    <ul class="payment-type">
                                        <h4><span class="payment"> </span> Payments</h4>
                                        <li><span class="col_checkbox">
                                                <input id="3" class="css-checkbox1" type="checkbox">
                                                <label for="3" name="demo_lbl_1" class="css-label1"> </label>
                                                <a class="visa" href="#"> </a>
                                            </span>

                                        </li>
                                        <li>
                                            <span class="col_checkbox">
                                                <input id="4" class="css-checkbox2" type="checkbox">
                                                <label for="4" name="demo_lbl_2" class="css-label2"> </label>
                                                <a class="paypal" href="#"> </a>
                                            </span>
                                        </li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Card Number';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Name on card';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Expiration Date';
                                                }"><em class="pay-date"> </em></li>
                                        <li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Security Code';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul class="payment-sendbtns">
                                        <li><input type="reset" value="Cancel"></li>
                                        <li><input type="submit" value="Process order"></li>
                                    </ul>
                                    <div class="clear"> </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!--//End-pricingplans-->
        <!-- /start-copyright-->
        <div class="footer">
            <div class="wrap">
                <p>&copy; 2015  All rights  Reserved | Template by &nbsp;<a href="https://w3layouts.com">W3Layouts</a></p>
            </div>                          
        </div>

        <script src='https://preview.w3layouts.com/demos/flat_pricing_tables_design/web/js/jquery.magnific-popup.js'></script>
        <script src='https://preview.w3layouts.com/demos/flat_pricing_tables_design/web/js/modernizr.custom.53451.js'></script>

    </body>
</html>
