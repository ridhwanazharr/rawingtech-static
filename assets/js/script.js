document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".accordion").forEach(accordion => {
    accordion.addEventListener("click", function(e) {
      const head = e.target.closest(".acc-head");
      if (!head) return;
      const item = head.closest(".acc-item");

      accordion.querySelectorAll(".acc-item.show").forEach(el => {
        if (el !== item) el.classList.remove("show");
      });
      item.classList.toggle("show");
    });
  });
});