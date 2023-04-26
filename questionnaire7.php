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
                            <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:43%"></div></div>
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
                            <h1 class="title-sm fw-bold">How would you like to do the meal prep?</h1>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="radio" name="flexRadioPrepSession" id="flexRadioPrepSession1" checked>
                            <label class="form-check-label lead fw-medium mb-2" for="flexRadioPrepSession1">
                                All meals will be fully prepared by the next preparation session.
                            </label>
                            <p class="text-small text-gray fw-medium mb-3"><span class="text-secondary fw-bold">Advantage:</span> Once prepared, you may only need to re-heat the meals on the corresponding days.Maximum time spent in the kitchen during the day about 10 min.</p>
                            <p class="text-small text-gray fw-medium mb-4"><span class="text-secondary fw-bold">Disadvantage:</span> The meal preparation takes time - up to 2 hours</p>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioPrepSession" id="flexRadioPrepSession2">
                            <label class="form-check-label lead fw-medium mb-2" for="flexRadioPrepSession2">
                            The basic components, such as potatoes, rice, pasta, lentils, chickpeas, basic salad, sauces, etc. will be cooked / prepared.
                            </label>
                            <p class="text-small text-gray fw-medium mb-3"><span class="text-secondary fw-bold">Advantage:</span> The other fresh ingredients, which have not yet been prepared yet, have a higher nutritional content, since they are only prepared for the respective meal.</p>
                            <p class="text-small text-gray fw-medium mb-4"><span class="text-secondary fw-bold">Disadvantage:</span> This variant saves the less time.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire6.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire8.php" class="btn btn-primary">Next</a>
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