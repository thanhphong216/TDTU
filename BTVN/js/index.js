$('#filter').click(function (e) { 
    var checked = [];
    $('.form-check-input:checked').each(function() {
        checked.push($(this).attr('name'));
    });
    $.ajax({
        type: "GET",
        url: 'guestListInfo.php',
        data: {data: JSON.stringify(checked), unit: new URL($(location).attr('href')).searchParams.get('unit')},
        dataType: "html",
        success: function (response) {
            // alert(response);
            $('#infoUser').empty();
            $('#infoUser').html(response);
        },
        error: function(request, status, error){
            alert("error: " + error.message);
        }
    });
});