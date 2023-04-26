$('#OtpVerification').find('input').each(function() {
	$(this).attr('maxlength', 1);
	$(this).on('keyup', function(e) {
		var parent = $($(this).parents().eq(2));		
		if(e.keyCode === 8 || e.keyCode === 37|| e.keyCode === 46) {
			var prev = parent.find('input#' + $(this).data('previous'));
			
			if(prev.length) {
				$(prev).select();
				if(isValid()){				
					$("#btn_submit").prop('disabled', false);
				}else{
					$("#btn_submit").prop('disabled', true);
				}
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));
			
			if(next.length) {
				$(next).select();
				if(isValid()){
					$("#btn_submit").prop('disabled', false);
				}else{
					$("#btn_submit").prop('disabled', true);
				}
			} else {				
				if(isValid()){
					$("#btn_submit").prop('disabled', false);
				}else{					
					$("#btn_submit").prop('disabled', true);
				}
			}
			
		}
	});
});

function isValid(){
	var isValid = 0;
	$("#OtpVerification").find("input").each(function() {
	var element = $(this);
	if (element.val() !== "") {
		isValid = isValid +1;
	}				
	});	
	if(isValid ===6){				
		return true;
	}else{
		return false;
	}
}

$("#send_again").click(function(){
	initTimer();
});

const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = {
  info: {
	color: "green"
  },
  warning: {
	color: "orange",
	threshold: WARNING_THRESHOLD
  },
  alert: {
	color: "red",
	threshold: ALERT_THRESHOLD
  }
};

function initTimer(){

	const TIME_LIMIT = 20;
	let timePassed = 0;
	let timeLeft = TIME_LIMIT;
	let timerInterval = null;
	let remainingPathColor = COLOR_CODES.info.color;

	document.getElementById("mealapp").innerHTML = `
	<div class="base-timer">
	  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
		<g class="base-timer__circle">
		  <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
		  <path
			id="base-timer-path-remaining"
			stroke-dasharray="283"
			class="base-timer__path-remaining ${remainingPathColor}"
			d="
			  M 50, 50
			  m -45, 0
			  a 45,45 0 1,0 90,0
			  a 45,45 0 1,0 -90,0
			"
		  ></path>
		</g>
	  </svg>
	  <span id="base-timer-label" class="base-timer__label">${formatTime(
		timeLeft
	  )}</span>
	</div>
	`;
	startTimer(0,20);
}
initTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer(timePassed, time_limit) {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = time_limit - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray(time_limit);
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `0${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction(time_limit) {
  const rawTimeFraction = timeLeft / time_limit;
  return rawTimeFraction - (1 / time_limit) * (1 - rawTimeFraction);
}

function setCircleDasharray(time_limit) {
  const circleDasharray = `${(
    calculateTimeFraction(time_limit) * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
