<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-navigate.php"); ?>
</header>
<!-- Header End -->

<!-- Shopping List Start -->
<section class="shopping-list-wrap">
    <div class="container">
        <div class="card-box bg-white shopping-list-contentarea">
            <div class="weekly-planner-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="icon-prev text-primary fs-2"></a>
                            <a href="#CurrentWeekChangeModal" class="current-week flex-fill text-small fw-semibold text-dark bg-extralight border rounded text-center d-block mx-4" data-bs-toggle="modal" data-bs-whatever="Week 1">Week 1 ( 12/03/ 2023 -19/03/2023 )</a>
                            <a href="javascript:void(0);" class="icon-next text-primary fs-2"></a>
                        </div>
                    </div>
                    <div class="col-md-3 ms-md-auto my-4 my-md-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="icon-box-md bg-primary text-white shadow-around ms-auto"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center my-5">
                    <div class="title text-center mb-4">
                        <h1 class="title-xs fw-bold">Create your first shopping list with us</h1>
                    </div>
                    <a href="./prev-shopping-list.php" class="btn btn-primary w-sm-50 my-2">Create Shopping list</a>
                </div>
            </div>
        </div>
    </div>
    <div class="shopping-list-bg"><img src="assets/images/Shopping_list.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Shopping List End -->

<?php
    include("footer_common.php");
?>