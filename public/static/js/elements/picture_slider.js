


function PictureSlider(sliderView,slides,onInit){
    
    if(!slides.length)
        return;
    
    var SLIDER_TIMEOUT=8500;
    var SLIDER_CHANGE_TIME=800;
    
    
    var navItemPattern=$(".nav-group .item");
    navItemPattern=navItemPattern.clone();
    $(".nav-group .item").remove();
    
    
    var isSlideChanging=false;
    var timeoutID=-1;
    
    var currentSlide=-1;
    var mainSlide=sliderView.find(".slide .main");
    var secondarySlide=sliderView.find(".slide .advanced");
    
    
    var setModelAtSlide=function(slide,data){
         slide.find('.logo').attr("src",data.logo);
         slide.find('.background').attr("src",data.background);
         
         slide.find(".client-info .text .title").html(data.title);
         slide.find(".client-info .text .info").html(data.text);
    }
    
    var selectSlide=function(index,withAnim){
        if(isSlideChanging)
            return;
        
        var backMove=(currentSlide>index);
        if(index<0)
            index=slides.length-1;
        else if(index>=slides.length)
            index=0;
        
        currentSlide=index;
        
        var data=slides[currentSlide];
        navItemsContainer.find("div").removeClass("active");
        data.tab.addClass("active");
        
        var reset=function(){
            mainSlide.css("left","0");
            secondarySlide.css("left",((backMove)?'-':'')+"100%");
        };
        var onComplete=function(){
            reset();
            setModelAtSlide(mainSlide,data);
            isSlideChanging=false;
        };
        
        if(withAnim || withAnim==undefined){
            reset();
            setModelAtSlide(secondarySlide,data);
            
            mainSlide.stop().animate({"left":((backMove)?'':'-')+"100%"},SLIDER_CHANGE_TIME);
            secondarySlide.stop().animate({left:0},SLIDER_CHANGE_TIME,onComplete);
            isSlideChanging=true;
        }else
            onComplete();
        
        
        clearTimeout(timeoutID);
        timeoutID=setTimeout(function(){selectSlide(currentSlide+1);},SLIDER_TIMEOUT);
    };
    
    
    
    
    var navItemsContainer=sliderView.find(".nav-group");
    var percent=100/slides.length;
    for(var i=0;i<slides.length;i++){
        
        var element=navItemPattern.clone();
        navItemsContainer.append(element);

        element.data("index",i);
        slides[i].tab=element;

        element.click(
            function(){
                selectSlide($(this).data("index"));
            }
        );
    }
    
    selectSlide(0,false);
    
    
    $(".arrow.left").click(function(){selectSlide(currentSlide-1)});
    $(".arrow.right").click(function(){selectSlide(currentSlide+1)});
    
    
    this.getCurrentSlide=function(){
        return slides[currentSlide];
    }
    
    onInit(sliderView,this);
    
    
}