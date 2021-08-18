$(document).ready(function(){
    $('.nav-btns>button').click(function(){
        var page = $(this).text();

        $(location).attr('href','/su-kien?page=' + $(this).attr('page'));






        // $.ajax({
        //     type: "POST",
        //     // url: '/TDTU/views/layout/test.php',
        //     data: {"page": $(this).text()},
        //     dataType: "html",
        //     success: function (response) {
        //         // alert(response);
        //     },
        //     error: function(request, status, error){
        //         alert("error: " + error.message);
        //     }
        // });
    });
});