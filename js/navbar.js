$(document).ready(function(){
  var top1 = $('#home').offset().top;
  var top2 = $('#about').offset().top - 30;
  var top3 = $('#work').offset().top - 30;
  var top4 = $('#contact').offset().top - 30;

  $(document).scroll(function() {
    var scrollPos = $(document).scrollTop();
    if (scrollPos >= top1 && scrollPos < top2) {
      $('#change').css('background-color', '#303030');
      $('#change').css('background-image', 'none');
      $('#boldhome').css({'font-weight': '600', 'font-size': '22px'});
      $('#boldabout').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldwork').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldcontact').css({'font-weight': '400', 'font-size': '18px'});
    } else if (scrollPos >= top2 && scrollPos < top3) {
      $('#change').css('background-color', 'black');
      $('#change').css('background-image', 'none');
      $('#boldhome').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldabout').css({'font-weight': '600', 'font-size': '22px'});
      $('#boldwork').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldcontact').css({'font-weight': '400', 'font-size': '18px'});
    } else if (scrollPos >= top3 && scrollPos < top4) {
      $('#change').css('background-image', 'url(img/concrete_wall.png)');
      $('#boldhome').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldabout').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldwork').css({'font-weight': '600', 'font-size': '22px'});
      $('#boldcontact').css({'font-weight': '400', 'font-size': '18px'});
    } else if (scrollPos >= top4) {
      $('#change').css('background-color', 'black');
      $('#change').css('background-image', 'none');
      $('#boldhome').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldabout').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldskills').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldwork').css({'font-weight': '400', 'font-size': '18px'});
      $('#boldcontact').css({'font-weight': '600', 'font-size': '22px'});
    }
  });
})
