<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-navigate.php"); ?>
</header>
<!-- Header End -->

<!--  Shopping List Start -->
<section class="shopping-list-wrap">
    <div class="container">
        <div class="card-box bg-white shopping-list-contentarea">
            <div class="shopping-list-row-wrap">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="shopping-list-row bg-primary rounded d-md-flex align-items-center justify-content-md-between w-100">
                        <div class="title mb-3 mb-md-0">
                            <h2 class="title-sm fw-bold">Shopping list _ 1</h2>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="lead fw-medium">Meals 15</p>
                            <div class="vr text-black mx-3"></div>
                            <p class="lead fw-medium">created at 31/03</p>
                        </div>
                    </div>
                    <div class="btn-group custom-dropdown flex-shrink-1 ms-4">
                        <button type="button" class="icon-box-md bg-primary shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="javascript:void(0);" class="dropdown-item">Edit</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Export</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="switch-tabs">
                <ul class="nav-pills my-3" id="pills-tab01" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ingredients</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Stock Ingredients</button>
                    </li>
                </ul>
                <div class="tab-content pt-3" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="ingredients-heading bg-light rounded my-4">
                            <div class="title">
                                <h2 class="title-sm fw-bold">Spices</h2>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Cinnamon</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">cumin</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="ingredients-heading bg-light rounded my-4">
                            <div class="title">
                                <h2 class="title-sm fw-bold">Oil</h2>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Olive oil</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Musterd Oil</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Sunflower Oil</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ingredients-heading bg-light rounded my-4">
                            <div class="title">
                                <h2 class="title-sm fw-bold">Spices</h2>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Cinnamon</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">cumin</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Peprika</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ingredients-heading bg-light rounded my-4">
                            <div class="title">
                                <h2 class="title-sm fw-bold">Spices</h2>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Black Pepper</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Cinnamon</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">cumin</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ingredients-row">
                            <div class="col-8 col-sm-9">
                                <div class="title ps-3">
                                    <h4 class="title-xs text-gray text-capitalize fw-normal w-sm-75">Peprika</h4>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 ms-sm-auto">
                                <div class="title">
                                    <h4 class="title-xs text-gray fw-normal">680gm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shopping-list-bg"><img src="assets/images/Shopping_list.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Shopping List End -->

<?php
    include("footer_common.php");
?>