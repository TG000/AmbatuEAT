function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
const statsMenu = document.querySelector(".stats-menu");
const statsRate = document.querySelector(".stats-rate");
const statsCustomer = document.querySelector(".stats-customer");
const statsBranches = document.querySelector(".stats-branches");

animateValue(statsMenu, 0, parseInt(statsMenu.innerHTML), 5000);
animateValue(statsRate, 0, parseInt(statsRate.innerHTML), 5000);
animateValue(statsCustomer, 0, parseInt(statsCustomer.innerHTML), 5000);
animateValue(statsBranches, 0, parseInt(statsBranches.innerHTML), 5000);