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
            <div class="weekly-planner-header">
                <div class="mb-4">
                    <input type="text" name="" class="form-control" placeholder="Type shopping list name here" />
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="icon-prev text-primary fs-2"></a>
                            <a href="#CurrentWeekChangeModal" class="current-week flex-fill text-small fw-semibold text-dark bg-extralight border rounded text-center d-block mx-4" data-bs-toggle="modal" data-bs-whatever="Week 1">Week 1 ( 12/03/ 2023 -19/03/2023 )</a>
                            <a href="javascript:void(0);" class="icon-next text-primary fs-2"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mealday-select">
                <div class="meal-owltab owl-carousel">
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 5 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Today <span class="lead">12/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 6 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Tuesday <span class="lead">13/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 7 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Wednesday <span class="lead">14/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 8 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Thursday <span class="lead">15/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 9 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Friday <span class="lead">16/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 2 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Saturday <span class="lead">17/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday">
                            <div class="selected-day"><p class="text-small fw-medium text-dark text-center">1 of 3 Meals </p><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="day-name">Sunday <span class="lead">18/ 03 </span><div class="text-small fw-semibold rounded-2 btn-day-select">Select</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mealday-select">
                <div class="meal-owltab owl-carousel">
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/RecipeEintopf.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/RecipeKasespatzle.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                            <div class="added-meal-overlay">
                                <p class="text-small fw-bold">Already added in shopping list _ 1 </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/Recipe7.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/RecipeKurbissuppe.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/Recipe8.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/Recipe9.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mealday-img">
                            <img src="assets/images/Recipe5.jpg" class="edit-shopping-img rounded-top" alt=""/>
                            <div class="selected-day"><span class="selected-day-check"><i class="icon-checkmark"></i></span></div><div class="text-vsmall fw-semibold btn-day-select">Kürbissuppe</div>
                        </div>
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
            <div class="text-center my-4">
                <button type="button" class="btn btn-primary max-w-360 w-100">Create</button>
            </div>
        </div>
    </div>
    <div class="shopping-list-bg"><img src="assets/images/Shopping_list.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Shopping List End -->

<?php
    include("footer_common.php");
?>