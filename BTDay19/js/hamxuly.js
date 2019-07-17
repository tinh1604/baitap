$(document).ready(function () {
    $('#show-ajax').click(function () {
       $.ajax({
           url: 'get_book.php',
           method: 'post',
           data: {
               id: 4

           },
           success: function (result) {
               $('#result-ajax').html(result);
           }
       })
    });
});