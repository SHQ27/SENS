function goToByScroll(id){
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

$(function(){
    $('.carousel').carousel({
      interval: 3000
    });
});



