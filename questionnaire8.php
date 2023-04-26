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
                            <div class="progressbar bg-gray"><div class="progress-inner bg-primary" style="width:51%"></div></div>
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
                    <div class="col-lg-8">
                        <div class="title mb-4">
                            <h1 class="title-sm fw-bold">Do you want to put one or more focuses in your diet?</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-small text-gray fw-normal mb-4"><span class="text-secondary fw-bold">Gluten Free:</span> A gluten-free diet involves avoiding gluten, a protein in wheat, barley, and rye, and focusing on alternative grains, fresh produce, and unprocessed meats and dairy.</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-small text-gray fw-normal mb-4"><span class="text-secondary fw-bold">Whole Food:</span> Whole foods are natural foods that are not highly processed. This means whole, unrefined or minimally refined ingredients.</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-small text-gray fw-normal mb-4"><span class="text-secondary fw-bold">Raw Food:</span> Raw food refers to a type of diet that primarily consists of uncooked and unprocessed plant-based foods such as fruits, vegetables, nuts, and seeds.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cust-table-wrap mb-4">
                    <div class="table-responsive cust-table">
                        <table class="table bg-white">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col text-small">Categories</th>
                                    <th scope="col text-small">Jane cooper</th>
                                    <th scope="col text-small">Wade Warren</th>
                                    <th scope="col text-small">Robert Fox</th>
                                    <th scope="col text-small">Jenny Wilson</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="cat-name text-small fw-semibold">Gluten Free</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Whole Food</th>
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
                                    <th scope="row" class="cat-name text-small fw-semibold">Raw Food</th>
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
                            <a href="./questionnaire7.php" class="btn btn-outline-primary">Previous</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#breakfastMealModal" data-bs-whatever="next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Questionnaire End -->

<div class="custom-modal">
    <div class="modal fade" id="breakfastMealModal" tabindex="-1" aria-labelledby="breakfastMealModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">If you choose a raw food diet, it is highly recommend to opt for breakfast due to an enough calorie and nutrient intake.
                                Do you want to add breakfast as a meal?</h1>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-evenly justify-content-center pt-sm-5">
                        <div class="text-center mb-4 mb-md-0">
                            <a href="./questionnaire8-1-2.php" class="btn btn-outline-dark">Yes</a>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
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