jQuery(document).ready(function($){
  console.log("działa");

  var posts = $('.post_area');
  var links = $('.post_area').find('a');
  var covers = $('.cover_small');
  var menus = $('.menu').find('li').find('a');
  console.log(menus);

  posts.hide();

  for(i=0; i<=posts.length; i++) {
    posts.eq(i).slideDown(1200)
  }

  links.on('mouseenter', function(){
    $(this).css('color', '#000000');
    $(this).css('font-size', '1.25vw');
    $(this).children().css('box-shadow', '10px 10px 5px #444444');
  });
  links.on('mouseleave', function(){
    $(this).css('color', '#444444');
    $(this).css('font-size', '1.2vw');
    $(this).children().css('box-shadow', '10px 10px 5px #888888');
  });

  menus.on('mouseenter', function(){
    // $(this).css('font-size', '1.3vw');
    $(this).css('font-weight', '800');
  })
  menus.on('mouseleave', function(){
    // $(this).css('font-size', '1.2vw');
    $(this).css('font-weight', '400');
  })




});
