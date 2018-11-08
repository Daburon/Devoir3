function AfficherRegion(statutUser) {
    user = $('#txtNom').val();
    $.ajax({
        type: "get",
        url: "index.php/Welcome/AfficherRegion",
        data: "idUser=" + idUser,
        success: function(data) {
            $('#divRegion').empty();
            $('#divVille').empty();
            $('#divRegion').append(data);
        },
        error: function() {
            alert('Erreur SQL');
        }
    });
}