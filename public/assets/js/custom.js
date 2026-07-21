(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();

	


	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        console.log(quantityAmount, quantityAmount.value);

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
	    }
	    
	    init();
		
	};
	sitePlusMinus();


})()
document.addEventListener('DOMContentLoaded', function () {

    if (document.getElementById('map')) {

        var lat = 9.6947;
        var lng = 76.6819;

        var map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors',
            maxZoom: 19
        }).addTo(map);

        var marker = L.marker([lat, lng]).addTo(map);
        marker.bindPopup('<b>Mr.door</b><br>Pala').openPopup();

        var directionControl = L.control({ position: 'topleft' });
        directionControl.onAdd = function () {
            var div = L.DomUtil.create('div', 'leaflet-bar');
            div.innerHTML =
                '<a href="https://www.google.com/maps/dir/?api=1&destination=' + lat + ',' + lng + '" ' +
                'target="_blank" ' +
                'style="background:#fff; padding:8px 12px; display:block; font-weight:bold; text-decoration:none; color:#000; border-radius:4px;">' +
                'Get Direction &#10148;</a>';
            return div;
        };
        directionControl.addTo(map);

        // ---- FIX: Force map to recalculate its size ----
        setTimeout(function () {
            map.invalidateSize();
        }, 300);

        // Page-inte ella images/content load aayathinu shesham vintum
        window.addEventListener('load', function () {
            map.invalidateSize();
        });

        // Window resize aavumbolum update cheyyuka
        window.addEventListener('resize', function () {
            map.invalidateSize();
        });
    }

});
(function () {
    var wrap = document.querySelector('.door-scroll-wrap');
    if (!wrap) return;

    var leftDoor = wrap.querySelector('.door-left');
    var rightDoor = wrap.querySelector('.door-right');
    var maxAngle = 100;
    var scrollThreshold = 400; // ith kuraccal, veg-athil open aavum
    var ticking = false;

    function updateDoors() {
        var progress = window.scrollY / scrollThreshold;
        progress = Math.max(0, Math.min(1, progress));

        var angle = progress * maxAngle;

        leftDoor.style.transform = 'rotateY(-' + angle + 'deg)';
        rightDoor.style.transform = 'rotateY(' + angle + 'deg)';

        ticking = false;
    }

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(updateDoors);
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll);
    updateDoors();
})();
 const track = document.getElementById('track');
  const bg = document.getElementById('bgLayer');
  const dotsWrap = document.getElementById('dots');
  const wrap = document.getElementById('sliderWrap');
  const slides = document.querySelectorAll('.slide');
  const total = slides.length;
  const AUTO_DELAY = 3500;

  let idx = 0;
  let timer = null;

  for (let i = 0; i < total; i++) {
    const d = document.createElement('div');
    d.className = 'dot' + (i === 0 ? ' active' : '');
    d.addEventListener('click', () => { idx = i; render(); resetTimer(); });
    dotsWrap.appendChild(d);
  }
  const dotEls = dotsWrap.querySelectorAll('.dot');

  function render() {
    track.style.transform = 'translateX(' + (-idx * 100) + '%)';
    bg.style.transform = 'translateX(' + (-idx * 20) + 'px)';
    dotEls.forEach((d, i) => d.classList.toggle('active', i === idx));
  }

  function next() { idx = (idx + 1) % total; render(); }
  function prev() { idx = (idx - 1 + total) % total; render(); }

  function startTimer() { timer = setInterval(next, AUTO_DELAY); }
  function resetTimer() { clearInterval(timer); startTimer(); }

  document.getElementById('prevBtn').addEventListener('click', () => { prev(); resetTimer(); });
  document.getElementById('nextBtn').addEventListener('click', () => { next(); resetTimer(); });

  wrap.addEventListener('mouseenter', () => clearInterval(timer));
  wrap.addEventListener('mouseleave', startTimer);

  render();
  startTimer();

  document.addEventListener('DOMContentLoaded', function () {
    var body = document.getElementById('profileDetailsBody');
    var btn = document.getElementById('profileReadMoreBtn');
    if (!body || !btn) return;
    btn.addEventListener('click', function () {
        var isExpanded = body.classList.toggle('expanded');
        btn.textContent = isExpanded ? 'Show Less' : 'Show More';
    });
});