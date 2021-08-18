$(document).ready(function(){
    $('.nav-btns>button').click(function(){
        $(location).attr('href','/su-kien?page=' + $(this).attr('page'));

        // $.ajax({
        //     type: "GET",
        //     url: '/su-kien?page=' + $(this).attr('page'),
        //     data: {"page": $(this).text()},
        //     dataType: "text",
        //     success: function (response) {
        //         alert(response);
        //         $(document).empty();
        //         $(document).html(response);
        //     },
        //     error: function(request, status, error){
        //         alert("error: " + error.message);
        //     }
        // });
    });
});