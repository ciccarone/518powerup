function updatecharge(battery) {
  var b = document.querySelector('.battery');
  var c = b.querySelector('.battery__charge');
  c.style.width = "calc(" + (.8 * 100) + "% - 8px)";

// document.getElementsByTagName("p")[0].innerHTML = battery.level*100 + "%";
	/*kleuren veranderen naargelang het level van je battery*/
  if (battery.level > 0.99) {
    c.classList.add('battery__charge--full');
  } else {
    c.classList.remove('battery__charge--full');
  }
  if (battery.level < 0.75) {
    c.classList.add('battery__charge--good');
  } else {
    c.classList.remove('battery__charge--full');
  }
  if (battery.level < 0.55) {
    c.classList.add('battery__charge--half');
  } else {
    c.classList.remove('battery__charge--full');
  }
  if (battery.level < 0.25) {
    c.classList.add('battery__charge--low');
  } else {
    c.classList.remove('battery__charge--full');
  }
  if (battery.level < 0.25) {
    c.classList.add('battery__charge--crit');
  } else {
    c.classList.remove('battery__charge--full');
  }

  if (battery.level) {
    b.classList.add('battery--connected');
  } else {
    b.classList.remove('battery--connected');
  }

}

navigator.getBattery().then(function(battery) {
  console.log(battery);
  updatecharge(battery);

  battery.addEventListener('levelchange', function(event) {
    console.log(event.target);
    updatecharge(battery);
  })

  battery.addEventListener('chargingchange', function(event) {
    console.log(event.target);
    updatecharge(battery);
  });
});

document.documentElement.style.setProperty('--animate-duration', '.5s');

jQuery(document).ready(function( $ ) {

  $(document).ready(function() {
    // Check if element is scrolled into view
    function isScrolledIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();

      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
    // If element is scrolled into view, fade it in
    $(window).scroll(function() {
      $('.contact__icon').each(function() {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('show animate__fadeInLeft');
        }
      });
      $('.step__icon').each(function() {
        if (isScrolledIntoView(this) === true) {
          // $(this).addClass('shows');
          $(this).addClass('animate__zoomIn');
        }
      });
    });
  });

});
