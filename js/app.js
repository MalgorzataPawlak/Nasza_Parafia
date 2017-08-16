jQuery(document).ready(function($){
  // console.log("działa");

  //for mobile menu:
  var faBars = $('.fa-bars').eq(0);
  var menu = $('.menu-top-menu-container');
  var closingMenu = $('<li><i class="fa fa-times" aria-hidden="true"></i></li>')
  var closingSidebar = $('<li><i class="fa fa-times" style="float: right" aria-hidden="true"></i></li>');
  var devWidth = $('body').innerWidth();
  var faSearch  = $('.fa-search').eq(0);
  var sideBar = $('#primary-sidebar');
  // var content = $('#content');

function mobileMenu () {

  if (devWidth < 600) {

    $(menu).find('ul').find('li').first().before(closingMenu);
    $('#primary-sidebar').find('li').first().prepend(closingSidebar);

    faBars.on('mouseenter', function() {
      // console.log($(this).css('color'));
      // var faBarsHoverColor = white;
      // $(this).css('color', faBarsHoverColor);
      menu.slideDown(1000);
    });

    $(menu).find('i').first().on('click', function() {
      menu.slideUp(1000);
    });

    faSearch.on('mouseenter', function () {
      $('#primary-sidebar').slideDown(1000);
    })

    $('#primary-sidebar').find('i').first().on('click', function() {
      sideBar.slideUp(1000);
    })
  }
}
mobileMenu ();

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



  //for single:
  function scrolling () {
    if ($('iframe').hasClass('flowpaper-class')) {
      var flowpaperPosition = $( ".flowpaper-class" ).offset().top;
      console.log(flowpaperPosition);
      $('html, body').animate({scrollTop: flowpaperPosition}, 2000 );
    }
  }
  scrolling ();


 //for footer:
 function selectYear() {
   var chooseYear = $('#archives-dropdown-2').clone();
   $('.siteMap').find('li').eq(4).one('click', function() {
    $('.siteMap').find('li').eq(5).slideUp();
    $('.siteMap').find('li').eq(6).slideUp();
    $('.siteMap').find('li').eq(7).slideUp();
    $('.siteMap').find('li').eq(4).after(chooseYear);
    });
  };
  selectYear();

  function hoverLi () {
    var siteMapLi = $('.siteMap').find('li');
    var firstColor = siteMapLi.css('color');
        console.log(firstColor);
    siteMapLi.on('mouseover', function() {

      $(this).css('color', 'white');
    })
    siteMapLi.on('mouseleave', function() {
      console.log("nie ma");
      $(this).css('color', firstColor);
    })
  }
  hoverLi ();



});
