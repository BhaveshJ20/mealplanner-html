$(document).ready(function() {
    $(".form-select").niceSelect();

    $('#dateOpen').dateRangePicker({
        inline: true,
        format: 'DD-MM',
        container: '#calendar',
        singleMonth: true,
        showShortcuts: false,
        showTopbar: false,
    })
    .bind('datepicker-change', (e,data) => {
        $('#showOut').val(data.value);
    });

    // $('#date-range12').dateRangePicker({
    //     autoClose: false,
    //     format: 'DD-MM',
    //     singleMonth: true,
    //     showShortcuts: false,
    //     showTopbar: false,
    //     batchMode: 'week-range',
    //     stickyMonths: true,
    //     extraClass: 'date-range-picker12'
    // }).bind('datepicker-change', function(evt, obj) {
    //     $('#date-range12').data('dateRangePicker');
    // });

    // $('#date-range12-open').click(function(evt){
    //     evt.stopPropagation();
    //     $('#date-range12').data('dateRangePicker').open();
    // });

    // $('#date-range12-close').click(function(evt){
    //     evt.stopPropagation();
    //     $('#date-range12').data('dateRangePicker').close();
    // });

    $('.meal-owltab').owlCarousel({
        loop:false,
        margin:2,
        navText:["<div class='icon-prev'></div>","<div class='icon-next'></div>"],	
        responsiveClass:true,
        autoplayHoverPause:true,
        autoplay:false,
        slideSpeed: 400,
        paginationSpeed: 400,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1,
                nav:true,
                loop:false
            },
            480:{
                items:2,
                nav:true,
                loop:false
            },
            767:{
                items:3,
                nav:true,
                loop:false
            },
            992:{
                items:4,
                nav:true,
                loop:false
            },
            1200:{
                items:5,
                nav:true,
                loop:false
            },
            1366:{
                items:7,
                nav:true,
                loop:false
            }
        }
    })

    var li =  $(".meal-owltab .owl-item li ");
    $(".meal-owltab .owl-item li").click(function(){
        li.removeClass('active');
    });

    // Tooltip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    

    // Choose Payment Method
    $('#ChoosePaymentMethodModal .pay-card-select').click(function() {
        $('#ChoosePaymentMethodModal .pay-card-select').removeClass('selected');
        $('#ChoosePaymentMethodModal .pay-card-select').parents(1).removeClass('selected');
        $(this).addClass('selected');
        $(this).parents(1).addClass('selected');
    });	
	
    $('.payment_card_wrap .pay-card-select').click(function() {
        $('.payment_card_wrap .pay-card-select').removeClass('selected');
        $('.payment_card_wrap .pay-card-select').parents(1).removeClass('selected');
        $(this).addClass('selected');
        $(this).parents(1).addClass('selected');
    });	

    // Spinner
    $(window).on("load", function() {
        $(".preloader-icon")
          .delay(100)
          .fadeOut(),
          setTimeout(function() {
            $(".preloader").addClass("loaded"),
              setTimeout(function() {
                $(".preloader").hide();
              }, 1500);
          }, 800);
    });

    // Minus Plus Quantity
    var input = $(".quantity"),
    minValue =  parseInt(input.attr("min")),
    maxValue =  parseInt(input.attr("max"));
    
    $(".plus").on("click", function () {
    var inputValue = input.val();
    if (inputValue < maxValue) {
        input.val(parseInt(inputValue) + 1);
    }
    });

    $(".minus").on("click", function () {
        var inputValue = input.val();
            if (inputValue < maxValue) {
        input.val(parseInt(inputValue) - 1);
        }
    });

    // Edit Shopping List Day Select
    $('.mealday-select .mealday').click(function() {
        $('.mealday-select .mealday').removeClass('selected');
        $('.mealday-select .mealday').parents(1).removeClass('selected');
        $(this).addClass('selected');
        $(this).parents(1).addClass('selected');
    });	

    $('.mealday-select .mealday-img').click(function() {
        $('.mealday-select .mealday-img').removeClass('selected');
        $('.mealday-select .mealday-img').parents(1).removeClass('selected');
        $(this).addClass('selected');
        $(this).parents(1).addClass('selected');
    });	
});