$(document).ready(function (){
    $("#boton1").on("click", function(){
        $("#texto1").html("hwang intak i haku shota")
    });

    $("#texto1").hover(function (){
        $(this).css("background-color", "green");
        $(this).css("font-size", "30px");
    }, function (){
        $(this).css("background-color", "white");
        $(this).css("font-size", "20px");
    });

    $("#boton2").click(function (e){
        $("#imagen1").fadeToggle("slow")
    });
});