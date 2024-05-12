$(document).ready(function(){
    $.ajax({
        url: 'process.php',
        type: 'GET',
        dataType: 'html',
        success: function(response){
            $('#table-container').html(response);
        },
        error: function(xhr, status, error){
            console.error('Error fetching data:', error);
        }
    });
});
