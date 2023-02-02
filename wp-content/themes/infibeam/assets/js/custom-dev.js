$(document).ready(function(){    
  $(".custom-accordion .panel").eq(0).addClass("active-panel");
  $(".custom-accordion .panel").eq(0).children(".heading").removeClass("plus-icon").addClass("minus-icon");
  $(".custom-accordion .panel").eq(0).children(".content").show();
  $(".custom-accordion .panel .heading").click(function(){
    if($(this).next(".content").is(":visible"))
    {
      $(".custom-accordion .panel .heading").removeClass("minus-icon").addClass("plus-icon");
      $(".custom-accordion .content").slideUp();
      $(".custom-accordion .panel").removeClass("active-panel");
    }
    else
    {
      $(".custom-accordion .panel").removeClass("active-panel");
      $(".custom-accordion .panel .heading").removeClass("minus-icon").addClass("plus-icon");
      $(".custom-accordion .content").slideUp(); 
      $(this).parent(".panel").addClass("active-panel");
      $(this).removeClass("plus-icon").addClass("minus-icon");
      $(this).next(".content").slideDown();
    }
  });
});