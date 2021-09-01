$(document).ready(() => {
    $('#click_here').click(() => {
        $.ajax({
            url: '',
            data: {
                text: "request",
            },
            type: "POST",
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('error');
                console.log(textStatus);
            },
            success: function (response) {
                console.log(response);
            }
        });
    })
})