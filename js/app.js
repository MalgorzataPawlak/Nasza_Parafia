jQuery(document).ready(function($){
  console.log("działa");

  //for posts and desktop-menu:
  var posts = $('.post');
  var links = $('.post').find('a');
  var covers = $('.cover_small');
  var menus = $('.menu').find('li');

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
    $(this).css('font-weight', '600');
    $(this).css('color', 'white');
  })
  menus.on('mouseleave', function(){  
    $(this).css('font-weight', '400');
  })


//for changing archive:
var wpLinks = $('#archives-dropdown-2').find('option');
  console.log(wpLinks.length);

  wpLinks.each(function() {
    var year = $(this).val().substr(-8, 4);
    $(this).text(year);
  });
  var optionText = $('option').eq(0);
  optionText.text('Wybierz rok');



  //for mobile menu:
  var faBars = $('.fa-bars').eq(0);
  var menu = $('.menu-top-menu-container');

  faBars.on('mouseenter', function() {
    menu.slideDown(1000);
  })

  var devWidth = $('body').innerWidth();

  function hideMenu () {
    if (devWidth < 600) {
      menu.on('mouseleave', function() {
        $(this).slideUp(1000);
      })
    }
  }
  hideMenu ();

  var faSearch  = $('.fa-search').eq(0);
  var sideBar = $('#primary-sidebar');

  faSearch.on('mouseenter', function () {
    $('#primary-sidebar').slideDown(1000);
  })

  function hideSidebar() {
    if (devWidth < 600) {
      sideBar.on('mouseleave', function() {
        $(this).slideUp(1000);
      })
    }
  }
  hideSidebar();




  //for single:
  function scrolling () {
    if ($('iframe').hasClass('flowpaper-class')) {
      var flowpaperPosition = $( ".flowpaper-class" ).offset().top;
      console.log(flowpaperPosition);
      $('html, body').animate({scrollTop: flowpaperPosition}, 2000 );
    }
  }
  scrolling ();





});
