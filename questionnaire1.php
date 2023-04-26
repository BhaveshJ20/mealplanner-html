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
                            <p>Who would like to be included in the Meal Planner? Please enter your first name and current age (month/year).</p>
                        </div>
                        <div class="my-4">
                            <p class="text-small text-secondary fw-medium">Babies up to the age of 12 months are not included in the MealPlanner, as complementary feeding is very individual. </p>
                        </div>
                    </div>
                </div>
                <div class="row">					
                    <div class="col-lg-10" id="row_container">
						<div class="row align-items-center">
                            <div class="col-lg-5 mb-4">
                                <input type="text" class="form-control" placeholder="Enter your name" name="name[]">
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <select class="form-select" name="year[]">
                                    <option data-display="Select Year">Select Year</option>
                                    <option value="1">2000</option>
                                    <option value="2">2001</option>
                                    <option value="3">2002</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <select class="form-select" name="month[]">
                                    <option data-display="Select Month">Select Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-4 ps-lg-0">
                                <button type="button" class="icon-box bg-extralight text-dark shadow-md"><i class="icon-plus" id="add_row"></i></button>
                            </div>
                        </div>
					</div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire-welcome.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire2.php" class="btn btn-primary">Next</a>
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