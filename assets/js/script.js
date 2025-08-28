//Accordions

document.addEventListener("DOMContentLoaded", function () {
  const accordions = document.querySelectorAll(".accordion");

  accordions.forEach(accordion => {
    const heads = accordion.querySelectorAll(".acc-head");

    heads.forEach(head => {
      head.addEventListener("click", function () {
        const item = this.closest(".acc-item");

        // Only remove "show" from items inside this accordion
        accordion.querySelectorAll(".acc-item").forEach(el => {
          if (el !== item) {
            el.classList.remove("show");
          }
        });

        // Toggle current item
        item.classList.toggle("show");
      });
    });
  });
});