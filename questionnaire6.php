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
                    <div class="col-lg-9">
                        <div class="title mb-4">
                            <h1 class="title-sm fw-bold">Please indicate the day(s) and time(s) that are convenient for you, when you would like to prepare food.</h1>
                        </div>
                    </div>
                </div>
                <div class="cust-table-wrap indicate-days mb-4">
                    <div class="table-responsive cust-table">
                        <table class="table bg-white">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col text-small">Days</th>
                                    <th scope="col text-small">Morning</th>
                                    <th scope="col text-small">Noon</th>
                                    <th scope="col text-small">Afternoon</th>
                                    <th scope="col text-small">Evening</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">Monday</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Tuesday</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Wednesday</th>
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
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">Thursday</th>
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
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">Friday</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Saturday</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Sunday</th>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="questionnaire-footer mt-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                            <a href="./questionnaire4-5.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire7.php" class="btn btn-primary">Next</a>
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