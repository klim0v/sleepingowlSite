
function ViewPortfolio(cover,itemsData,onShow){
    var main=$(".view-portfolio-modal");
    var items=main.find(".images .item");
    
    var displayGallery=function(photos){
          var button=$("<button></button>");

          button.magnificPopup({
                removalDelay: 500, //delay removal by X to allow out-animation
                callbacks: {
                    beforeOpen: function() {
                      // just a hack that adds mfp-anim class to markup 
                       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    }
                },
                mainClass: 'mfp-zoom-out',
                items: photos,
                gallery: {
                  enabled: true
                },
                type: 'image'
            });
            
            button.click();
    };
    
    var displayer=function(){
        var model=$(this).data("info");
        var container=main.find("images");
        displayGallery(model.images);
    };
    
    itemsData.forEach(function(info){
            info.view.data("info",info);
            info.view.click(displayer);
    });
    
    cover.click(function(){
        itemsData[0].view.click();
    });
}