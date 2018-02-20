
function ViewInfo(container,onShow){
    // var img=$(".view-info-modal .cover img");
    // var title=$(".view-info-modal .title");
    // var text=$(".view-info-modal .text");
    //
    // var last={
    //     target:undefined,
    //     data:undefined
    // }
    //
    // var modalWindow=$('.view-info-modal');
    // modalWindow.on('hidden.bs.modal', function () {
    //     last.target.find(".text").html(last.data);
    // });
    
    
    var scrollToContacts=function(){
        var pos=$(".contacts").offset().top-$('.menu_main').height();
        $("html, body").stop().animate({ scrollTop: pos }, 800);
    }
    
    // modalWindow.find("form").submit(function(e){
    //     var that=$(this);
    //
    //     var action=that.attr("action");
    //     if(action.length==0){
    //         e.preventDefault();
    //         modalWindow.modal("hide");
    //
    //
    //         scrollToContacts();
    //     }
    // });
    //
    // container.find(".item button").click(function(){
    //     var target=$(this).parent();
    //     img.attr("src",target.find("img").attr("src"));
    //     title.html(target.find(".title").html());
    //     title.css("background",target.find(".title").css("background-color"));
    //     text.html(target.find(".text").html());
    //
    //     last.target=target;
    //     last.data=last.target.find(".text").html();
    //     target.find(".text").html('');
    //
    //     var downloadUrl=last.target.find("#price-list-url").val();
    //     if(typeof(downloadUrl)=='undefined')
    //         downloadUrl="";
    //     modalWindow.find("form").attr("action",downloadUrl);
    //
    //     modalWindow.find(".images").magnificPopup({
    //             delegate:"a",
    //             gallery: { enabled: true},
    //             type:'image',
    //             zoom: {
    //                 enabled: true,
    //
    //                 duration: 300,
    //                 easing: 'ease-in-out',
    //
    //                 opener: function(openerElement) {
    //                   return openerElement.parent().find('.image');
    //                 }
    //             }
    //     });
    //
    //     var getTime=function(){
    //         return (new Date()).getTime();
    //     }
    //
    //     var regex=new RegExp("url\\((.*)\\)");
    //
    //     modalWindow.find(".images .image").each(function(index, item){
    //         item=$(item);
    //         var url=item.css("background-image").match(regex)[1].replace(new RegExp("\"",'g'),'');
    //         var startTime=getTime();
    //         item.css("background-image","");
    //         item.fadeOut(0);
    //
    //
    //         var img = new Image();
    //         $(img).load(function(){
    //             item.css("background-image","url("+$(this).attr("src")+")");
    //             item.fadeIn();
    //         }).attr({
    //             src: url
    //         }).error(function(e){
    //            //console.log(e);
    //         });
    //
    //     });
    //
    //     onShow(modalWindow);
    // });
    
}