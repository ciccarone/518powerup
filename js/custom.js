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
