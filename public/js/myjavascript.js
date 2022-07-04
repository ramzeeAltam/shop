$(function(){
 
    $(".toast").toast({delay:2000,Animation:false});
 
$(".bton").on("click",function(){
 $(".ms").css("color","#fff");
});



$(".confirm").on({
    "click":function(){
         return confirm($(this).attr("data"));
        }
});
});