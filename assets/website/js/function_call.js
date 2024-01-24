jQuery(document).ready(function($) {
	$("#currentYear").text( (new Date).getFullYear() );
	// Accordion Menu
    var $AccordianMenu = $('#accordianMenu a');
    $AccordianMenu.on('click',function() {
        var link = $(this);
        var closestUl = link.closest("ul");
        var parallelActiveLinks = closestUl.find(".active")
        var closestLi = link.closest("li");
        var linkStatus = closestLi.hasClass("active");
        var count = 0;
        closestUl.find("ul").slideUp(function() {
            if (++count == closestUl.find("ul").length)
                parallelActiveLinks.removeClass("active");
        });

        if (!linkStatus) {
            closestLi.children("ul").slideDown();
            closestLi.addClass("active");
        }
    });
// Toggle Side Menu //
           $(".main_header").each(function(){
                $(".menu_icon > a.menu-toggler", this).on("click", function(e){
                    e.preventDefault();
                    $(".main_header > .side").toggleClass("on");
                    $("body").toggleClass("on-side");
                });
            });
            $(".side .close-side").on("click", function(e){
                e.preventDefault();
                $(".main_header > .side").removeClass("on");
                $("body").removeClass("on-side");
            });

            /* Tooltip Script */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

});