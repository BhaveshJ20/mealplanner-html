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
                            <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:8%"></div></div>
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
                            <h1 class="title-sm fw-bold">Please mark your respective name for the specific days and meals you would like to be scheduled for.</h1>
                        </div>
                    </div>
                </div>
                <div class="day-meals-schedule mb-4">
                    <div class="table-responsive cust-table bg-white">
                        <table class="table bg-white mb-0">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col text-small">Day</th>
                                    <th scope="col text-small">Jane cooper</th>
                                    <th scope="col text-small">Wade Warren</th>
                                    <th scope="col text-small">Robert Fox</th>
                                    <th scope="col text-small">Jenny Wilson</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="p-0">
                                        <div class="meal-accordion">   
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMonday" aria-expanded="false" aria-controls="collapseMonday">
                                                            Monday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseMonday" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTuesday" aria-expanded="false" aria-controls="collapseTuesday">
                                                            Tuesday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTuesday" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWednesday" aria-expanded="false" aria-controls="collapseWednesday">
                                                            Wednesday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseWednesday" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThursday" aria-expanded="true" aria-controls="collapseThursday">
                                                            Thursday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThursday" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="row justify-content-center">
                                                                <div class="col-10">
                                                                    <div class="d-flex flex-nowrap">
                                                                        <div class="card-mini-box mx-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckBreakfast" checked>
                                                                                <label class="form-check-label" for="flexCheckBreakfast">
                                                                                    Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckSnack">
                                                                                <label class="form-check-label" for="flexCheckSnack">
                                                                                    Snack
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckLunch">
                                                                                <label class="form-check-label" for="flexCheckLunch">
                                                                                Lunch
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDinner" checked>
                                                                                <label class="form-check-label" for="flexCheckDinner">
                                                                                Dinner
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-mini-box mx-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckBreakfast1" checked>
                                                                                <label class="form-check-label" for="flexCheckBreakfast1">
                                                                                    Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckSnack1">
                                                                                <label class="form-check-label" for="flexCheckSnack1">
                                                                                    Snack
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckLunch1">
                                                                                <label class="form-check-label" for="flexCheckLunch1">
                                                                                Lunch
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDinner1" checked>
                                                                                <label class="form-check-label" for="flexCheckDinner1">
                                                                                Dinner
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-mini-box mx-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckBreakfast2" checked>
                                                                                <label class="form-check-label" for="flexCheckBreakfast2">
                                                                                    Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckSnack2">
                                                                                <label class="form-check-label" for="flexCheckSnack2">
                                                                                    Snack
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckLunch2">
                                                                                <label class="form-check-label" for="flexCheckLunch2">
                                                                                Lunch
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDinner2" checked>
                                                                                <label class="form-check-label" for="flexCheckDinner2">
                                                                                Dinner
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-mini-box mx-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckBreakfast3" checked>
                                                                                <label class="form-check-label" for="flexCheckBreakfast3">
                                                                                    Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckSnack3">
                                                                                <label class="form-check-label" for="flexCheckSnack3">
                                                                                    Snack
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckLunch3">
                                                                                <label class="form-check-label" for="flexCheckLunch3">
                                                                                Lunch
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDinner3" checked>
                                                                                <label class="form-check-label" for="flexCheckDinner3">
                                                                                Dinner
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFriday" aria-expanded="false" aria-controls="collapseFriday">
                                                            Friday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFriday" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaturday" aria-expanded="false" aria-controls="collapseSaturday">
                                                            Saturday
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSaturday" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                            <a href="./questionnaire1.php" class="btn btn-outline-primary">Previous</a>
                            <a href="./questionnaire3.php" class="btn btn-primary">Next</a>
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