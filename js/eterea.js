
jQuery(document).ready(function($) {
    function load(num) {
        $('#container').load(num +".php");
    }

    $.history.init(function(url) {
        load(url == "" ? "inicio" : url);
    });

    $('#ajax-links a').live('click', function(e) {
        var url = $(this).attr('href');
        url = url.replace(/^.*#/, '');
        $.history.load(url);
        return false;
    });
    
    $('#main-menu li a').click(function(){

        this.addClass('active');
        
    });
    
});



function slideThumbsUp(galleryId){
    $('#'+galleryId).stop().animate({
        top: '-=100'
    }, 300);
}

function slideThumbsDown(galleryId){
    var topNow = ($('#'+galleryId).css('top'));
    topNow = topNow.substr(0, (topNow.length-2));
    
    var heightNow = ($('#'+galleryId).css('height'));
    heightNow = heightNow.substr(0, (heightNow.length-2));
    
    console.log('heightNow:'+heightNow);
    
    if(topNow < 0){
        $('#'+galleryId).stop().animate({
            top: '+=100'
        }, 300);
        
    }
}