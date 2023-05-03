$(document).ready(function() {
  $('.hero').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false
    


  });

  $(document).ready(function() {
    $('.tab-wrapper').jQueryTab({
      tabClass: 'tab-wrapper__tabs',
      contentWrapperClass:'tab_content_wrapper',
      contentClass:'tab-content',
      activeClass:'_tab_active',
      responsive:true,
      responsiveBelow:600,
      collapsible: true,
      openOnhover:false,
      tabPosition:'top',
      initialTab: 1,
      tabInTransition:'fadeIn',
      tabOutTransition:'fadeOut',
      accordionTransition:'slide',
      accordionIntime:500,
      accordionOutTime:400
    });
  
  
  });
});