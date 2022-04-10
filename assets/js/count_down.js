// /**** file for order.js ***/
// const id_ujian = $('#id_ujian').data('id');
// function startTimer(duration, display) {
//     var timer = duration, hours, minutes, seconds;
    
//     if (duration  > 0){

// 	    setInterval(function () {
// 	    	hours = parseInt(timer / 3600, 10);
// 	        minutes = parseInt((timer / 60) % 60, 10);
// 	        seconds = parseInt(timer % 60, 10);

// 	        hours = hours < 10 ? "0" + hours : hours;
// 	        minutes = minutes < 10 ? "0" + minutes : minutes;
// 	        seconds = seconds < 10 ? "0" + seconds : seconds;

// 	        display.text(hours + ":" + minutes + ":" + seconds);

// 	        if (--timer < 0) {
// 	            timer = duration;
// 	        }
// 	    }, 1000);
// 	}else{
// 		document.location.href = BASE_URL+'examination/submit_jawaban/'+id_ujian;
// 	}
// }

// jQuery(function ($) {
//     var fiveMinutes = 60 * 60 * jam,
//         display = $('#time_exam');
//     startTimer(fiveMinutes, display);
// });


$(document).ready(function () {
			String.prototype.toHHMMSS = function () {
			    var sec_num = parseInt(this, 10);
			    var hours   = Math.floor(sec_num / 3600);
			    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
			    var seconds = sec_num - (hours * 3600) - (minutes * 60);

			    if (hours   < 10) {hours   = "0"+hours;}
			    if (minutes < 10) {minutes = "0"+minutes;}
			    if (seconds < 10) {seconds = "0"+seconds;}
			    return hours+':'+minutes+':'+seconds;
			}
			var sisa_detik = jam;
			setInterval(function(){
				sisa_detik = sisa_detik - 1;
				if(sisa_detik <= 0){
					$('#time_exam').html('00:00:00');
					document.location.href = BASE_URL+'examination/submit_jawaban/'+id_ujian;

				}else{
					$('#detik').val(sisa_detik);
					$('#time_exam').html($('#detik').val().toHHMMSS());
				}
			}, 1000);


		})