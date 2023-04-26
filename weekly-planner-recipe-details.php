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
            <div class="recipe-badge-wrap d-lg-flex d-none mb-3">
                <div class="badge-name bg-tertiary lead fw-bold text-center position-relative top-0 left-0 pt-11 pb-11 px-3 me-3">Ingredient Prepping</div>
                <div class="badge-name bg-primary lead fw-bold text-center position-relative top-0 left-0 pt-11 pb-11 px-3">Leftover</div>
            </div>
            <div class="wp-recipe-header">
                <div class="row">
                    <div class="col-lg-5 order-lg-2">
                        <div class="recipe-detail-top-right bg-white rounded-circle">
                            <img src="assets/images/Recipe10.jpg" class="img-full rounded-circle" alt=""/>
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="card-box recipe-detail-top bg-white mb-4">
                            <div class="recipe-badge-wrap d-flex d-lg-none mb-3">
                                <div class="badge-name bg-tertiary lead fw-bold text-center position-relative top-0 left-0 pt-11 pb-11 px-3 me-3">Ingredient Prepping</div>
                                <div class="badge-name bg-primary lead fw-bold text-center position-relative top-0 left-0 pt-11 pb-11 px-3">Leftover</div>
                            </div>
                            <div class="d-md-flex justify-content-md-between">
                                <div class="title mb-4">
                                    <h1 class="title-sm fw-bold mb-3">Westphalian Rye Bread</h1>
                                    <h5 class="title-xs text-gray fw-medium">William Sonama</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-md-end mb-4 mb-md-0">
                                    <a href="javascript:void(0);" class="icon-heartfill text-dark fs-4 me-4"></a>
                                    <div class="btn-group custom-dropdown">
                                        <a href="javascript:void(0);" class="icon-box-md bg-primary shadow-around dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-menu-kebab text-dark fw-semibold"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><button class="dropdown-item" type="button">Change</button></li>
                                            <li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#removeMealModal" data-bs-whatever="remove">Remove</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-360 mb-5"><button type="button" class="btn btn-primary w-100">Add Recipe</button></div>
                            <div class="d-md-flex align-items-center">
                                <div class="d-flex align-items-center mb-4 mb-md-0">
                                    <i class="icon-CookedBowl text-gray fs-4 me-3"></i>
                                    <span class="lead text-primary fw-bold">1 hour</span>
                                </div>
                                <div class="vr text-gray mx-3 d-md-block d-none"></div>
                                <div class="d-flex align-items-center mb-4 mb-md-0">
                                    <i class="icon-timer text-gray fs-4 me-3"></i>
                                    <span class="lead text-primary fw-bold">30 Min</span>
                                </div>
                                <div class="vr text-gray mx-3 d-md-block d-none"></div>
                                <div class="d-flex align-items-center mb-4 mb-md-0">
                                    <i class="icon-coock-timer text-gray fs-3 me-3"></i>
                                    <div id="field1" class="quantity-wrap d-flex align-items-center">
                                        <button type="button" id="sub" class="minus"><i class="icon-minus"></i></button>
                                        <input type="number" id="1" value="1" min="1" class="quantity text-small text-gray" max="10" />
                                        <button type="button" id="add" class="plus"><i class="icon-plus"></i></button>
                                    </div>
                                </div>
                                <div class="ms-md-3"><button type="button" class="btn btn-primary">Apply Changes</button></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ms-lg-auto mt-2">
                                    <p class="error text-vsmall text-secondary">The servings are considering a leftover for tomorrow.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wp-recipe-details-wrap">               
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-mini-box cont-box-primary px-0 mb-4">
                            <div class="title title-primary-line-before my-3">
                                <h2 class="title-sm fw-bold text-primary">Ingredients Prepping</h2>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-50">Cracked wheat</h4>
                                <div class="d-flex align-items-center ms-sm-auto">
                                    <h4 class="title-xs text-gray text-uppercase fw-normal">140 gm </h4>
                                    <a href="javascript:void(0);" class="icon-Information-Circle text-gray fs-4 ms-1" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="recipe-custom-tooltip" data-bs-title="This ingredient has been already prepped on Monday."></a>
                                </div>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Burnt Sugar Syrup</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">66gm</h4>
                            </div>
                            <div class="title title-primary-line-before my-3">
                                <h2 class="title-sm fw-bold text-primary">Ingredients Meal</h2>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75"> Boiling water</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">680gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Malted Wheat Flakes or rolled oats, old-fashioned or quick-cooking</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">45gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">OrganicPumpernickel Flour</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">425gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Stone-Ground White Whole Wheat Flour</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">113gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Instant yeast</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">15gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Salt</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">15gm</h4>
                            </div>
                            <div class="title d-sm-flex align-items-center justify-content-between bg-extralight p-2 my-4 mx-3">
                                <h4 class="title-xs text-gray text-uppercase fw-normal w-sm-75">Vegetable Oil</h4>
                                <h4 class="title-xs text-gray text-uppercase fw-normal">25gm</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-4">
                        <div class="title mb-lg-5 mb-4">
                            <h3 class="title-sm fw-bold text-primary">Prepping Instructions</h3>
                        </div>
                        <div class="list1">
                            <ol class="lead fw-medium text-gray">
                                <li class="mb-4">Put the cracked wheat and malted wheat flakes or oats in a large mixing bowl, and pour in the boiling water. Stir in the burnt sugar or black cocoa. Allow the mixture to cool to lukewarm.</li>
                                <li class="mb-4">Weigh your flour; or measure it by gently spooning it into a cup, then sweeping off any excess. Stir in the pumpernickel flour, whole wheat flour, yeast, salt and vegetable oil. If you're looking for a typical yeast dough here, forget it; the mixture will be sticky and have about as much life as a lump of clay.</li>
                                <li class="mb-4">Place the dough in a greased bowl, cover it with a damp towel, and let it sit in a warm place (70-75°F) for at least 12 hours, and up to 24 hours.</li>
                                <li class="mb-4">After 6 to 8 hours, fold the mixture over once or twice, then cover it again and allow it to continue to mellow. (We hesitate to use the word "rise" here; though there is in fact a bit of yeast in the dough, it'll rise very little.</li>
                            </ol>
                        </div>
                        <div class="title mb-4">
                            <h3 class="title-sm fw-bold text-primary">Next Steps</h3>
                        </div>
                        <div class="list1">
                            <ol class="lead fw-medium text-gray">
                                <li class="mb-4">After the mellowing period is complete, grease two 8 1/2" x 4 1/2" pans. The dough will look "cracked" or "broken" at this point; that's OK.</li>
                                <li class="mb-4">Turn it out onto a floured or lightly greased work surface, knead until it holds together, then divide it in half.</li>
                                <li class="mb-4">Press each half into a loaf pan, smoothing the surface with wet hands.</li>
                                <li class="mb-4">Let the loaves sit, covered, for 1 1/2 hours; they'll rise just slightly.</li>
                                <li class="mb-4">Preheat the oven to 225°F.</li>
                                <li class="mb-4">Grease two pieces of aluminum foil, then cover the pans tightly with the foil, greased-side down.</li>
                                <li class="mb-4">Place the covered pans in the oven. Bake the bread for 5 hours.</li>
                                <li class="mb-4">After 5 hours, remove the foil from the pans, and check to see that the bread is firm and looks set — it should register 195°F on an instant-read thermometer inserted into the center of a loaf.</li>
                                <li class="mb-4">Remove the bread from the oven. Let it cool in the pans for 15 minutes to firm.</li>
                                <li class="mb-4">Remove it from the pans and allow to cool to lukewarm before wrapping in plastic wrap or a dishtowel. Cool for 8 hours or more before slicing.</li>
                                <li class="mb-4">Store, covered, at room temperature for a week. Freeze for up to 3 months.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card-mini-box cont-box-primary p-4 ps-0 mt-4">
                    <div class="d-sm-flex">
                        <div class="title title-secondary-line-before flex-shrink-0 h-25 ps-3 ps-sm-4">
                            <h2 class="title-sm fw-bold text-secondary">Note : </h2>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="lead fw-medium text-gray mb-4">Lorem ipsum dolor sit amet consectetur. Eu mi imperdiet mattis sed tellus. Sed magnis vel nibh interdum cursus morbi id massa. Sit viverra venenatis lectus velit montes. Id imperdiet suscipit fermentum egestas luctus vitae. Amet semper amet libero eget et.</p>
                            <p class="lead fw-medium text-gray">Lorem ipsum dolor sit amet consectetur. Eu mi imperdiet mattis sed tellus. Sed magnis vel nibh interdum cursus morbi id massa. Sit viverra venenatis lectus velit montes. Id imperdiet suscipit fermentum egestas luctus vitae. Amet semper amet libero eget et.Lorem ipsum dolor sit amet consectetur. Eu mi imperdiet mattis sed tellus. Sed magnis vel nibh interdum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Weekly Planner End -->

<!-- Remove Impact Delete Confirmation Modal -->
<div class="custom-modal">
    <div class="modal fade" id="removeMealModal" tabindex="-1" aria-labelledby="removeMealModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Are you sure you want to remove this meal? You can add another meal later again or just change it directly.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-evenly justify-content-center pt-sm-5">
                        <div class="text-center mb-4 mb-md-0">
                            <button type="button" class="btn btn-outline-dark">Yes</button>
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