
function fun() {
    $.ajax({
        url: 'process.php',
        type: 'GET',
        dataType: 'html',
        success: function (response) {
            $('#table-container').html(response);
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}
document.getElementById("boton").addEventListener("click", fun);
