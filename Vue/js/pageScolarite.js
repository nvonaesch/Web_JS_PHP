$(document).ready(function(){
   
    ObtenirListeBac();
   
});

function ObtenirListeBac()
  {
    var bac = $('#bac').val();
    $.getJSON('../../Controleur/Controleur.php',
            {
              action: 'ObtenirListeBac',
              bac: bac
            })
            .done(function (data)
              {
                $.each(data, function (key, val)
                  {
                      console.log("xxx");
                    $('#bac').append('<option value ="'+val.id +'">' + val.nom + '</option>');
                  });
              })
            .fail(function (jqXHR, textStatus, errorThrown)
              {
                console.log("parametre : " + JSON.stringify(jqXHR));
                console.log("status : " + textStatus);
                console.log("erreur : " + errorThrown);
              });
  }
  