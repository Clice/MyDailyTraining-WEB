<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Modal</h2>
            </div>
        </div>
        <div class="content-body"><!-- Basic Modals start -->
            <section id="basic-modals">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Modals</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div class="row my-2">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Default Modal</h5>
                                                <p>Toggle a modal via JavaScript by clicking the button above.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#default">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Modal With Icons</h5>
                                                <p> With some icons and success alert to give success message.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#iconModal">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel2"><i class="icon-road2"></i> Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5><i class="icon-arrow-right-c"></i> Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5><i class="icon-lightbulb-o"></i> Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                <div class="alert alert-success" role="alert">
                                                                    <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Disable Keyboard</h5>
                                                <p> By Default, closes the modal when escape key is pressed. Disable keyboard interaction using data-backdrop="false".</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-keyboard="false" data-target="#keyboard">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="keyboard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel3">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Disable Backdrop</h5>
                                                <p>Disable backdrop element using data-backdrop="false", it includes a modal-backdrop element. Alternatively, specify static for a backdrop which doesn't close the modal on outsidedata-backdrop="false" click.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel4">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Modal Show</h5>
                                                <p>Manually opens a modal. Returns to the caller before the modal has actually been shown.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-show="false" data-target="#show">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel5">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Disable Animation</h5>
                                                <p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal markup.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#animation">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal text-xs-left" id="animation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel6"><i class="icon-tree"></i> Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5><i class="icon-arrow-right-c"></i> Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5><i class="icon-lightbulb-o"></i> Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                <div class="alert alert-success" role="alert">
                                                                    <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Modals end -->

            <!-- Modal Sizes start -->
            <section id="modal-sizes">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Modal Sizes</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div class="row my-2">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Small Modal Size</h5>
                                                <p>Add class <code>.modal-sm</code> with <code>.modal-dialog</code> to use small size of modal.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#small">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel19">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Default Modal Size</h5>
                                                <p>For <code>default size</code>, modal markup doesn't require any additional sizing class.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#defaultSize">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel18"><i class="icon-tree"></i> Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5><i class="icon-arrow-right-c"></i> Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5><i class="icon-lightbulb-o"></i> Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                <div class="alert alert-success" role="alert">
                                                                    <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Large Modal</h5>
                                                <p>Add class <code>.modal-lg</code> with <code>.modal-dialog</code> to use large size of modal.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#large">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Sizes end -->

            <!-- Modal Events start -->
            <section id="modal-events">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Modal Events</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <p>Bootstrap’s modal class exposes a few events for hooking into modal functionality. All modal events are fired at the modal itself</p>
                                    <div class="row my-2">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>OnShow Modal Event</h5>
                                                <p>This event fires immediately when the show instance method is called. If caused by a click, the clicked element is available as the relatedTarget property of the event.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshowbtn" data-target="#onshow">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="onshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel21" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel21">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>OnShown Modal Event</h5>
                                                <p>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the relatedTarget property of the event.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshownbtn" data-target="#onshown">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="onshown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel22" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel22">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>OnHide Modal Event</h5>
                                                <p>This event is fired immediately when the hide instance method has been called.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhidebtn" data-target="#onhide">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="onhide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel23" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel23"><i class="icon-tree"></i> Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5><i class="icon-arrow-right-c"></i> Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5><i class="icon-lightbulb-o"></i> Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                <div class="alert alert-success" role="alert">
                                                                    <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>OnHidden Modal Event</h5>
                                                <p>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhiddenbtn" data-target="#onhidden">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="onhidden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel24" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel24">Basic Modal</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Check First Paragraph</h5>
                                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                <hr>
                                                                <h5>Some More Text</h5>
                                                                <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Events end -->

            <!-- Form Components start -->
            <section id="form-components">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Components</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div class="row my-2">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <h5>Login Form</h5>
                                                <p> Created Simple Login Form.</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#inlineForm">
                                                    Launch Modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-xs-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
                                                            </div>
                                                            <form action="#">
                                                                <div class="modal-body">
                                                                    <label>Email: </label>
                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="Email Address" class="form-control">
                                                                    </div>

                                                                    <label>Password: </label>
                                                                    <div class="form-group">
                                                                        <input type="password" placeholder="Password" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>