<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-navigate.php"); ?>
</header>
<!-- Header End -->

<!--  Shopping List Start -->
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
            <div class="shopping-list-row-wrap my-5">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="shopping-list-row bg-primary rounded d-md-flex align-items-center justify-content-md-between w-100">
                        <div class="title mb-3 mb-md-0">
                            <h2 class="title-sm fw-bold">Shopping list _ 1</h2>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="lead fw-medium">Meals 15</p>
                            <div class="vr text-black mx-3"></div>
                            <p class="lead fw-medium">created at 31/03</p>
                        </div>
                    </div>
                    <div class="btn-group custom-dropdown flex-shrink-1 ms-4">
                        <button type="button" class="icon-box-md bg-primary shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="./edit-shopping-list.php" class="dropdown-item">Edit</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Export</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="shopping-list-row bg-primary rounded d-md-flex align-items-center justify-content-md-between w-100">
                        <div class="title mb-3 mb-md-0">
                            <h2 class="title-sm fw-bold">Shopping list _ 2</h2>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="lead fw-medium">Meals 15</p>
                            <div class="vr text-black mx-3"></div>
                            <p class="lead fw-medium">created at 31/03</p>
                        </div>
                    </div>
                    <div class="btn-group custom-dropdown flex-shrink-1 ms-4">
                        <button type="button" class="icon-box-md bg-primary shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="./edit-shopping-list.php" class="dropdown-item">Edit</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Export</a></li>
                        </ul>
                    </div>
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