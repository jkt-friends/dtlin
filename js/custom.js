function myFunction(e) {
    var elems = document.querySelector(".active");
    if(elems !==null){
        elems.classList.remove("active");
    }
    e.target.className = "active";
}
$(".nav-bar").click(function mThings() {
  // If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
  if ($(this).hasClass("active")) {
    $(".nav-bar").removeClass("active");
  }
  // Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
  else {
    $(".nav-bar").removeClass("active");
    $(this).addClass("active");
  }
});