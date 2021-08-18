$(document).ready(function(){
    $('.nav-btns>button').click(function(){
        $.ajax({
            type: "POST",
            url: '/TDTU/controller/test.php',
            data: {"page": $(this).text()},
            dataType: "html",
            success: function (response) {
                alert(response);
            },
            error: function(request, status, error){
                alert("error: " + error.message);
            }
        });
    });
});