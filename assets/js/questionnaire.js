$(document).ready(function(){	
	
	$("#add_row").click(function(){		
		
		$("#row_container").append(row_html());
	});
    $("#row_container").on('click','#remove_row',function(){
        $(this).parent().parent().parent().remove();		
    });
	
	function row_html(){
		return '<div class="row align-items-center"><div class="col-lg-5 mb-4"><input type="text" name="name[]" class="form-control" placeholder="Enter your name"></div><div class="col-lg-3 col-md-6 mb-4"><select class="form-select" name="year[]"><option data-display="Select Year">Select Year</option><option value="1">2000</option><option value="2">2001</option><option value="3">2002</option></select></div><div class="col-lg-3 col-md-6 mb-4"><select class="form-select" name="month[]"><option data-display="Select Month">Select Month</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></div><div class="col-lg-1 mb-4 ps-lg-0"><button type="button" class="icon-box bg-extralight text-dark shadow-md"><i class="icon-minus" id="remove_row"></i></button></div></div>';	
	}
	
});