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
                            <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:100%"></div></div>
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
                <div class="title mb-4">
                    <h1 class="title-sm fw-bold">When do you want the Meal Planner to start?</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioStartMP" id="flexRadioTomorrow">
                            <label class="form-check-label lead fw-medium" for="flexRadioTomorrow">
                            Starts Tomorrow
                            </label>
                        </div>
                        <div class="form-check blk-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioStartMP" id="flexRadioSelectDate" checked>
                            <label class="form-check-label lead fw-medium" for="flexRadioSelectDate">
                            Date can be selected
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-5 mb-4">
                        <div class="daterange-box">
                            <input id="showOut" class="form-control" placeholder="DD/MM - DD/MM" />
                            <i id="dateOpen" class="icon-calendar"></i>
                        </div>
                        <!-- <button id="date-range12-open">Open</button>
                        <button id="date-range12-close">Close</button>
                        <input id="date-range12" size="60" value=""> -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div id="calendar" class="calendar-wrap"></div>
                        <!-- <button type="button" class="btn btn-primary btn-daterange" id="selectDate">Select</button> -->
                    </div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire10-11.php" class="btn btn-outline-primary">Previous</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Finish</a>
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