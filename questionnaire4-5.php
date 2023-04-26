<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Questionnaire Start -->
<section class="questionaire-wrap">
    <div class="questionaire-bg"><img src="assets/images/questionnaire-bg.webp" class="img-fluid" alt=""/></div>
    <div class="container">
        <div class="questionaire-container">
            <div class="questionnaire-header">
                <div class="ques-progress-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:34%"></div></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-end mt-4 mt-lg-0">
                                <a href="#" class="lead text-gray fw-bold">Skip</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questionnaire-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold">What do you generally prefer for lunch?</h1>
                        </div>
                        <p class="text-small text-gray fw-medium mb-4"><span class="text-primary">Info:</span> We recommend to choose leftovers for lunch, because it is much more time-saving. Each meal is nutritious in itself, so you don't have to worry about not getting enough nutrients by choosing the leftover option</p>
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioNewMeal" id="flexRadioNewMeal" checked>
                            <label class="form-check-label lead fw-normal" for="flexRadioNewMeal">
                                for each lunch a new meal
                            </label>
                        </div>
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioNewMeal" id="flexRadioPreviousDinner">
                            <label class="form-check-label lead fw-normal" for="flexRadioPreviousDinner">
                                leftover from the previous dinner
                            </label>
                        </div>
                        <div class="title pt-4 mb-4">
                            <h2 class="title-sm fw-bold">What do you want to eat for dinner ?</h2>
                        </div>
                        
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioEatDinner" id="flexRadioProperMeal" checked>
                            <label class="form-check-label lead fw-normal" for="flexRadioProperMeal">
                                Proper Meal
                            </label>
                        </div>
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioEatDinner" id="flexRadioEatBread">
                            <label class="form-check-label lead fw-normal" for="flexRadioEatBread">
                                Bread
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire3.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire6.php" class="btn btn-primary">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Questionnaire End -->


<?php
    include("footer_common.php");
?>