
SCROLL_TIME=800;
function TopMenuController(logo,items,topOffset){
    var scrollTo=function(pos){
        $("html, body").stop().animate({ scrollTop: pos }, SCROLL_TIME);
    }
    
    logo.click(function(){
        scrollTo(0);
    });
    
    items.forEach(function(item){
       item.element.click(function(){
            scrollTo(item.target.offset().top-topOffset);
       });
    });
    
    
}