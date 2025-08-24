//Accordion Script

$(document).ready(function () {
  $(".acc-head").on("click", function () {
    const item = $(this).closest(".acc-item");
    
    $(".acc-item").not(item).removeClass("show");
    // Toggle current item
    item.toggleClass("show");
  });
});