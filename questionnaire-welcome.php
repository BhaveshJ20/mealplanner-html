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
                                <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:1%"></div></div>
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
                            <div class="title mb-4">
                                <h1 class="title-sm fw-bold">Welcome to our Meal Planner Questionnaire!</h1>
                            </div>
                            <div class="lead fw-semibold">
                                <p>To provide you with a personalised meal plan that aligns with your goals, preferences, and restrictions, we need to understand more about your dietary needs. </p>
                                <p>We offer a 7-day free trial for our meal planning services, followed by monthly and annual subscription options.</p>
                            </div>
                            <div class="mt-4 mb-5">
                                <p class="text-small text-secondary fw-medium">Customise your plan according to your dietary needs and taste. It's easy to make changes later.</p>
                            </div>
                            <div class="welcome-start-que-btn mb-4"><a href="./questionnaire1.php" class="btn btn-primary w-100">Start Questionnaire</a></div>
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