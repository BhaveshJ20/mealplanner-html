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
                        <div class="title mb-4">
                            <h1 class="title-sm fw-bold">What do you want to have for breakfast?</h1>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioBreakfast" id="flexRadioJuice" checked>
                            <label class="form-check-label lead fw-medium" for="flexRadioJuice">
                                Juice
                            </label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioBreakfast" id="flexRadioSmoothie">
                            <label class="form-check-label lead fw-medium" for="flexRadioSmoothie">
                                Smoothie
                            </label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="flexRadioBreakfast" id="flexRadioBoth">
                            <label class="form-check-label lead fw-medium" for="flexRadioBoth">
                                Both at the same breakfast with a time gap
                            </label>
                        </div>
                    </div>
                </div>
                <div class="cust-table-wrap pt-4">
                    <div class="title mb-4">
                        <h2 class="title-sm fw-bold">Approximately what percentage of your daily food intake should be raw food?</h2>
                    </div>
                    <div class="table-responsive cust-table mb-4">
                        <table class="table bg-white">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col text-small">Percentage</th>
                                    <th scope="col text-small">John Cooper</th>
                                    <th scope="col text-small">Wade Warren</th>
                                    <th scope="col text-small">Robert Fox</th>
                                    <th scope="col text-small">Jenny Wilson</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">50 - 60 %</th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">80 %</th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">100 %</th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" >
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire8.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire9.php" class="btn btn-primary">Next</a>
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