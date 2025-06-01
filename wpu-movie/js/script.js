$('#search-button').on('click', function () {
    $.ajax({
        url: 'https://omdbapi.com/',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '236cf3e5',
            's': $('#search-input').val()
        },
        success: function (result) {
            console.log(result);
        }
    });
});
