jQuery(document).ready(function($){
  console.log("działa");

  var posts = $('.post');
  var links = $('.post').find('a');
  var covers = $('.cover_small');
  var menus = $('.menu').find('li');

  posts.css({
    opacity: 0
  });


  for(i=0; i<=posts.length; i++) {
    posts.eq(i).animate({opacity: 1}, i*200,  ).delay(1000);
  }  

  links.on('mouseenter', function(){
    $(this).css('color', '#000000');
    var cover = $(this).find('.cover_small');
    cover.css('box-shadow', '10px 10px 5px #444444');
  });
  links.on('mouseleave', function(){
    $(this).css('color', '#444444');
    var cover = $(this).find('.cover_small');
    cover.css('box-shadow', '10px 10px 5px #888888');
  });

  menus.on('mouseenter', function(){
    $(this).css('font-weight', '800');
    $(this).css('color', 'white');
  })
  menus.on('mouseleave', function(){
    $(this).css('font-weight', '400');
  })

var optionText = $('option').eq(0);
optionText.text('Wybierz rok');

var wpLink = $('option').attr('value');
// ?var text = wpLinks.eq(1).text();
console.log(wpLink);
// for (i=0; i<=wpLinks.length; i++) {
//
//
// }


var year = wpLink.substr(-8, 4 );
console.log(year);


// <option value="http://localhost/Nasza_Parafia/wordpress/2017/07/"> Lipiec 2017 </option>
var faBars = $('.logo_area').find('i');
var menu = $('.logo_area').find('.menu-top-menu-container');
var logoArea = $('.logo_area');

faBars.on('mouseover', function() {
  $(this).next().slideDown();
})



});
