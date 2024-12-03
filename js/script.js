
  // Counter animation
  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter-number");
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-count");
        const count = +counter.innerText;
        const increment = target / 200; // Adjust speed here (smaller number = slower)

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 10); // Adjust interval here (lower = faster)
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  });

