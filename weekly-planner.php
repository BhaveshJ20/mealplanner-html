<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-navigate.php"); ?>
</header>
<!-- Header End -->

<!-- Page Loader Start -->
<section class="preloader">
    <div class="preloader-section preloader-right"></div>
    <div class="preloader-section preloader-left"></div>
    <div class="preloader-icon">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</section>
<!-- Page Loader End -->

<!-- Weekly Planner Start -->
<section class="weekly-planner-wrap">
    <div class="container">
        <div class="card-box bg-white">
            <div class="weekly-planner-header">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0);" class="icon-prev text-primary fs-2"></a>
                    <a href="#CurrentWeekChangeModal" class="current-week flex-fill text-small fw-semibold text-dark bg-extralight border rounded text-center d-block mx-4" data-bs-toggle="modal" data-bs-whatever="Week 1">Week 1 ( 12/03/ 2023 -19/03/2023 )</a>
                    <a href="javascript:void(0);" class="icon-next text-primary fs-2"></a>
                </div>
            </div>
            <div class="mealTab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <div class="meal-owltab owl-carousel">
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-today-tab" data-bs-toggle="pill" data-bs-target="#pills-today" type="button" role="tab" aria-controls="pills-today" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Today <span class="lead">12/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tuesday-tab" data-bs-toggle="pill" data-bs-target="#pills-tuesday" type="button" role="tab" aria-controls="pills-tuesday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Tuesday <span class="lead">13/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-wednesday-tab" data-bs-toggle="pill" data-bs-target="#pills-wednesday" type="button" role="tab" aria-controls="pills-wednesday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Wednesday <span class="lead">14/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-thursday-tab" data-bs-toggle="pill" data-bs-target="#pills-thursday" type="button" role="tab" aria-controls="pills-thursday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Thursday <span class="lead">15/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-friday-tab" data-bs-toggle="pill" data-bs-target="#pills-friday" type="button" role="tab" aria-controls="pills-friday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Friday <span class="lead">16/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-saturday-tab" data-bs-toggle="pill" data-bs-target="#pills-saturday" type="button" role="tab" aria-controls="pills-saturday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Saturday <span class="lead">17/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sunday-tab" data-bs-toggle="pill" data-bs-target="#pills-sunday" type="button" role="tab" aria-controls="pills-sunday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Sunday <span class="lead">18/ 03 </span></button>
                            </li>
                        </div>
                    </div>
                </ul>
                <div class="personalize-meal py-4 py-md-0">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center my-auto">
                            <div class="title text-center mb-4">
                                <h1 class="title-xs fw-bold">Personalize your meal plan by filling out our questionnaire and enjoy recipes tailored to your dietary preferences and restrictions.</h1>
                            </div>
                            <button type="button" class="btn btn-primary w-sm-50 my-2">Go to meal planner settings</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Weekly Planner End -->

<!-- Current Week Change Modal -->
<div class="custom-modal">
    <div class="modal fade" id="CurrentWeekChangeModal" tabindex="-1" aria-labelledby="CurrentWeekChangeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="title text-center mb-3">
                                <h1 class="title-sm fw-bold">Do you want to overwrite the changes from the current week?</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <p class="text-small text-secondary text-center mb-5">Please note that if you select "No", the changes will not be applied to the current week, but will instead be reflected in the upcoming week.</p>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">No</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#WPSuccessfullyUpdateModal" data-bs-whatever="Yes">Yes</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Weekly Planner Updating Message Modal -->
<div class="custom-modal">
    <div class="modal fade" id="WPSuccessfullyUpdateModal" tabindex="-1" aria-labelledby="WPSuccessfullyUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Congratulation your weekly planner, shopping list and recipe list have been successfully updated as per new configuration.</h1>
                            </div>
                            <div class="text-center"><button type="button" class="btn btn-primary w-75" data-bs-dismiss="modal">Continue</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<?php
    include("footer_common.php");
?>