<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="wrapper">
    <div class="container">
        <div class="row m-t-10 m-b-10">
            <div class="col-sm-6">
                <form role="form">
                    <div class="form-group contact-search m-b-0">
                        <input type="text" id="search" class="form-control product-search" placeholder="Search here...">
                        <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="h5 m-0 text-right">
                    <label class="vertical-middle m-r-10">Sort By:</label>
                    <div class="btn-group vertical-middle " data-toggle="buttons">
                        <label class="btn btn-default btn-md waves-effect active btn-sm">
                            <input type="radio" autocomplete="off" checked=""> Status
                        </label>
                        <label class="btn btn-default btn-md waves-effect btn-sm">
                            <input type="radio" autocomplete="off"> Type
                        </label>
                        <label class="btn btn-default btn-md waves-effect btn-sm">
                            <input type="radio" autocomplete="off"> Name
                        </label>
                    </div>
                    <a class="btn btn-pink waves-effect waves-light">
                        <i class="fa fa-heart"></i>
                    </a>
                    <span class="badge badge-xs badge-danger">3</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="m-b-15">
                <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/1.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $16
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 other">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/2.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $10
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/3.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $14
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 desktops">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/4.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $18
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/5.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $38
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 other">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/6.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $98
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 tablets">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/7.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $35
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 col-md-4 desktops">
                    <div class="product-list-box thumb">
                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                            <img src="<?= Url::to('@web/menu/assets/images/products/big/8.jpg') ?>" class="thumb-img" alt="work-thumbnail">
                        </a>

                        <div class="product-action">
                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                        </div>

                        <div class="price-tag">
                            $76
                        </div>
                        <div class="detail">
                            <h4 class="m-t-0"><a href="" class="text-dark">Samsung Gallaxy</a> </h4>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star" href=""></a></li>
                                    <li><a class="fa fa-star-o" href=""></a></li>
                                </ul>
                            </div>
                            <h5 class="m-0"> <span class="text-muted"> Stock :98pcs.</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">
                    <ul class="pagination">
                        <li class="paginate_button previous disabled" aria-controls="datatable-fixed-header" tabindex="0" id="datatable-fixed-header_previous"><a href="#">Previous</a></li>
                        <li class="paginate_button active" aria-controls="datatable-fixed-header" tabindex="0"><a href="#">1</a></li>
                        <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">2</a></li>
                        <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">3</a></li>
                        <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">4</a></li>
                        <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">5</a></li>
                        <li class="paginate_button " aria-controls="datatable-fixed-header" tabindex="0"><a href="#">6</a></li>
                        <li class="paginate_button next" aria-controls="datatable-fixed-header" tabindex="0" id="datatable-fixed-header_next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>