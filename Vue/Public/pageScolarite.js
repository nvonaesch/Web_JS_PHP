$(document).ready(function(){
   
});



function remplirListe()
{
    $.getJSON('../../Controleur/Controleur.php',
            {
                action: 'remplirListe'
            })
            .done(function (data) {
                $.each(data, function (key, val) {
                    $('#bac').append('<option>' + val + '</option>');
                    $('#specialite_1').append('<option>' + val + '</option>');
                    $('#specialite_2').append('<option>' + val + '</option>');
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log("parametre : " + JSON.stringify(jqXHR));
                console.log("status : " + textStatus);
                console.log("erreur : " + errorThrown);
            });
}