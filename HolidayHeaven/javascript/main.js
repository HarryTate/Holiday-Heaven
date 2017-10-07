function main() {
 var $skillset = $('.jumbotron').hide();
 $('.jumbotron').fadeIn(4000);

$('.mybutton').mouseenter(function(){
    $('.mybutton').animate({
      height: "140px",
      width: "140px",
      opacity: "1.0"
  });
});

$('.mybutton').mouseenter(function(){
    $('.mybutton p').animate({
      marginTop:"55px",
      fontSize:"20px",
      fontWeight:"700",

  });
});
$('.mybutton').mouseleave(function(){
    $('.mybutton').animate({
      height: "100px",
      width: "100px",
      opacity: "0.5"
  });
});

$('.mybutton').mouseleave(function(){
    $('.mybutton p').animate({
      marginTop:"40px",
      fontSize:"12px",
      fontWeight:"400"
  });
});



$(document).ready(function() {
    $('.Holiday-Image img').mouseenter(function() {
        $(this).fadeTo('fast',0.75);
        $(this).animate({
                'borderRadius':"30px"
                                    });
    });
});

$(document).ready(function() {
    $('.Holiday-Image img').mouseleave(function() {
        $(this).fadeTo('fast',1);
        $(this).animate({
                                      'borderRadius':"0px"
                                    });
    });
});
}
$(document).ready(main);
