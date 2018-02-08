function MoveTopButton(topBtn){
    var isVisible=false;
    topBtn.fadeOut();
    topBtn.click(function(){
        $("html, body").stop().animate({ scrollTop: 0 }, 800);
        return false;
    });
    
    $(window).scroll(function(){
        if($(this).scrollTop()>100){
            if(!isVisible){
                topBtn.stop();
                topBtn.fadeIn();
                isVisible=true;
            }
        }else if(isVisible){
                topBtn.stop();
                topBtn.fadeOut();
                isVisible=false;
        }
    });
}