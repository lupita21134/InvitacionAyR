$(document).ready(function(){
document.oncontextmenu = function(){return false}
    $(this).scrollTop(0);
});
var sonido = document.getElementById("sonido2");

function playVid() {
    sonido.play();
}

function pauseVid() {
    sonido.pause();
}
function des(){

		document.getElementById("intro").className ='desaparecer';

		}
		function scroll(){

		document.getElementById("html").className ='con-scroll';

		}
		function funciones()

		{

		des();

		scroll();
		
		playVid();

		}
const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

let countDown = new Date("August 26, 2023 13:00:00").getTime(),
  x = setInterval(function() {
    let now = new Date().getTime(),
      distance = countDown - now;

    (document.getElementById("days").innerText = Math.floor(distance / day)),
      (document.getElementById("hours").innerText = Math.floor(
        (distance % day) / hour
      )),
      (document.getElementById("minutes").innerText = Math.floor(
        (distance % hour) / minute
      )),
      (document.getElementById("seconds").innerText = Math.floor(
        (distance % minute) / second
      ));
  }, second);
wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };

document.oncontextmenu = function(){return false}


		


