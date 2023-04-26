<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-navigate.php"); ?>
</header>
<!-- Header End -->

<!-- Weekly Planner Start -->
<section class="weekly-planner-wrap">
    <div class="container">
        <div class="card-box bg-white">
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
                            <a href="javascript:void(0);" class="icon-box-md bg-primary text-white me-1"><i class="icon-rotate-right"></i></a>
                            <a href="javascript:void(0);" class="icon-box-md bg-primary text-white ms-1"><i class="icon-rotate-left"></i></a>
                            <a href="javascript:void(0);" class="icon-box-md bg-primary text-white shadow-around ms-auto"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mealTab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <div class="meal-owltab owl-carousel">
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-today-tab" data-bs-toggle="pill" data-bs-target="#pills-today" type="button" role="tab" aria-controls="pills-today" aria-selected="true"><span class="day-selected"><i class="icon-checkmark"></i></span>Today <span class="lead">12/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tuesday-tab" data-bs-toggle="pill" data-bs-target="#pills-tuesday" type="button" role="tab" aria-controls="pills-tuesday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Tuesday <span class="lead">13/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-wednesday-tab" data-bs-toggle="pill" data-bs-target="#pills-wednesday" type="button" role="tab" aria-controls="pills-wednesday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Wednesday <span class="lead">14/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-thursday-tab" data-bs-toggle="pill" data-bs-target="#pills-thursday" type="button" role="tab" aria-controls="pills-thursday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Thursday <span class="lead">15/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-friday-tab" data-bs-toggle="pill" data-bs-target="#pills-friday" type="button" role="tab" aria-controls="pills-friday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Friday <span class="lead">16/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-saturday-tab" data-bs-toggle="pill" data-bs-target="#pills-saturday" type="button" role="tab" aria-controls="pills-saturday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Saturday <span class="lead">17/ 03 </span></button>
                            </li>
                        </div>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sunday-tab" data-bs-toggle="pill" data-bs-target="#pills-sunday" type="button" role="tab" aria-controls="pills-sunday" aria-selected="false"><span class="day-selected"><i class="icon-checkmark"></i></span>Sunday <span class="lead">18/ 03 </span></button>
                            </li>
                        </div>
                    </div>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab" tabindex="0">   
                        <div class="wp-day-recipe-wrap">
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <div class="badge-name bg-tertiary lead fw-bold text-center position-absolute top-0 left-0 pt-11 pb-11 px-3">Ingredient Prepping</div>
                                    <a href="javascript:void(0);"><img src="assets/images/Eintopf.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Breakfast</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Eintopf</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <a href="javascript:void(0);"><img src="assets/images/Apfelstrudel.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Lunch</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Apfelstrudel</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <a href="javascript:void(0);"><img src="assets/images/Brezel.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Snack</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Brezel</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <div class="badge-name bg-primary lead fw-bold text-center position-absolute top-0 left-0 pt-11 pb-11 px-3">Leftover</div>
                                    <a href="javascript:void(0);"><img src="assets/images/Kurbissuppe.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Dinner</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Kürbissuppe</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <div class="badge-name bg-secondary lead fw-bold text-center position-absolute top-0 left-0 pt-11 pb-11 px-3">Meal Prepping</div>
                                    <a href="javascript:void(0);"><img src="assets/images/Kasespatzle.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Meal Prepping</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Käsespätzle</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab" tabindex="0">
                        <div class="wp-day-recipe-wrap">
                            <div class="card-mini-box add-recipe-box d-flex flex-column justify-content-md-center position-relative">
                                <div class="add-recipe-leaf d-none d-md-block"><img src="assets/images/Vector_leaf.webp" width="296" height="280" alt="" /></div>
                                <div class="title text-center my-4">
                                    <h2 class="title-xs fw-bold text-primary">Breakfast</h2>
                                </div>
                                <div class="text-center pt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#WPAddYourMealModal" data-bs-whatever="Add recipes">Add recipes</button>
                                </div>
                                <div class="add-recipe-avocado"><img src="assets/images/Vector_Avacado.webp" width="260" height="195" alt="" /></div>
                            </div>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <a href="javascript:void(0);"><img src="assets/images/Apfelstrudel.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Lunch</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Apfelstrudel</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <a href="javascript:void(0);"><img src="assets/images/Brezel.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Snack</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Brezel</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <div class="badge-name bg-primary lead fw-bold text-center position-absolute top-0 left-0 pt-11 pb-11 px-3">Leftover</div>
                                    <a href="javascript:void(0);"><img src="assets/images/Kurbissuppe.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Dinner</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Kürbissuppe</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="product-box bg-white d-md-flex">
                                <div class="product-img position-relative">
                                    <div class="badge-name bg-secondary lead fw-bold text-center position-absolute top-0 left-0 pt-11 pb-11 px-3">Meal Prepping</div>
                                    <a href="javascript:void(0);"><img src="assets/images/Kasespatzle.jpg" class="prod-img rounded-start-2" alt=""/></a>
                                </div>
                                <figcaption class="product-details p-3 d-flex flex-column">
                                    <div class="product-head">
                                        <div class="title mb-3">
                                            <h2 class="title-xs fw-bold text-primary">Meal Prepping</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8">
                                                <div class="title mb-3">
                                                    <a href="javascript:void(0);" class="title-sm text-dark fw-bold mb-3">Käsespätzle</a>
                                                    <p class="text-small text-gray fw-semibold mb-4">A short description about recipe will look good here, do let me know if we can add it or not.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                                    
                                                    <div class="btn-group custom-dropdown">
                                                        <a href="javascript:void(0);" class="icon-box-md bg-white shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                                            <li><button class="dropdown-item" type="button">Delete</button></li>
                                                            <li><button class="dropdown-item" type="button">View</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-timer text-gray fs-4 me-3"></i>
                                            <span class="lead text-primary fw-bold">30 Min</span>
                                        </div>
                                        <div class="vr text-gray mx-2"></div>
                                        <div class="d-flex align-items-center">
                                            <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                            <span class="lead text-primary fw-bold">2.5</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab" tabindex="0"><div class="fw-bold text-center">This is Wednesday</div></div>
                    <div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab" tabindex="0"><div class="fw-bold text-center">This is Thursday</div></div>
                    <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab" tabindex="0"><div class="fw-bold text-center">This is Friday</div></div>
                    <div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-saturday-tab" tabindex="0"><div class="fw-bold text-center">This is Saturday</div></div>
                    <div class="tab-pane fade" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab" tabindex="0"><div class="fw-bold text-center">This is Sunday</div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Weekly Planner End -->



<!-- Add your meal Modal -->
<div class="custom-modal">
    <div class="modal fade" id="WPAddYourMealModal" tabindex="-1" aria-labelledby="WPAddYourMealModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="title text-center mb-4">
                        <h2 class="title-sm fw-bold">Add your meal</h2>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-md-7">
                            <form class="cmxform" id="AddYourMealForm" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="daterange-box mb-4">
                                            <input id="showOut" class="form-control" placeholder="DD/MM" />
                                            <i id="dateOpen" class="icon-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="calendar-area position-relative">
                                            <div id="calendar" class="calendar-wrap"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <select class="form-select mb-4" id="selectcategory" name="scategory" required>
                                        <option data-display="Select Category">Select Category</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3">Option</option>
                                    </select>
                                </div>
                                <div class="position-relative">
                                    <select class="form-select mb-4" id="selectrecipe" name="srecipe" required>
                                        <option data-display="Select Recipe">Select Recipe</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3">Option</option>
                                    </select>
                                </div>
                                <div class="text-center mb-lg-5 mb-4"><button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Add</button></div>
                            </form>
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