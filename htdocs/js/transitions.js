$(document).ready(function(){
    $('#mydiv').animate({top: 0}, 1000);
    $('#mymoney').animate({top: -500}, 3000);


$("a:not(#xml,#manifestant)").on("click", function(event){

    event.preventDefault();
    const href = $(this).attr("href");

    window.history.pushState(null, null, href);

    $("nav a").removeClass("active")
    $(this).addClass("active")

    $.ajax({
        url: href,
        success: function (data){
            $("div.container").fadeOut(250, function(){
                const newPage = $(data).filter("div.container").html();

                $("div.container").html(newPage);
                $('#mydiv').animate({top: 0}, 1000);
                $('#mymoney').animate({top: -500}, 3000);


                $("div.container").fadeIn(250);
            })
        }
    })
})

});