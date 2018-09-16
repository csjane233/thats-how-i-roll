$(document).ready(function(){
    $("#vegetarian-menu").click(function(){
        $(".non-veg").hide(1000);
    });
    $("#full-menu").click(function(){
        $(".non-veg").show(1000);
    });
});
