


$(document).ready(function () {
    obtieneVotacion();
    $('input[name=vote]').on('change', function () {
        registraVotacion($('input[name=vote]:checked').val());
    });
});//(document).ready


function obtieneVotacion(pvoto) {
    try {
        $.ajax(
            {
                url: 'server/poll_result.php',
                type: 'GET',
                dataType: 'json',
                // beforeSend: function ()
                //(
                //      $("#pnlInfo").fadeTo("slow");
                //      $("#pnlMensaje").fadeTo("slow");
                // },
                success: function (r) {
                    InsercionVotacionExistosa(r);
                },
                error: function (r) {
                    InsercionVotacionFallida(r);
                }
            });
    } catch (err) {
        alert(err);
    }
}//Fin registraVotacion


function registraVotacion(pvoto) {
    try {
        $.ajax(
            {
                data: {
                    vote: pvoto
                },

                url: 'server/poll_vote.php',
                type: 'GET',
                dataType: 'json',
                // beforeSend: function ()
                // {
                //        $("#pnlInfo").fadeTo("slow");
                //        $("#pnlMensaje").fadeTo("slow");
                // },

                success: function (r) {
                    InsercionVotacionExistosa(r);
                },
                error: function (r) {
                    InsercionVotacionExistosa(r);
                }
            });
    } catch (err) {
        alert(err);
    }
}//Fin registraVotacion ======

function InsercionVotacionExistosa(ObjetoJSON) {
    let porcentajeSi = Math.round(100 * (ObjetoJSON.Si / (ObjetoJSON.No + ObjetoJSON.Si)), 2);
    let porcentajeNo = Math.round(100 * (ObjetoJSON.No / (ObjetoJSON.No + ObjetoJSON.Si)), 2);
    $("#resultado").empty()
    $("#resultado").append("<tr>");
    $("#resultado").append("<td> Yes </td>");
    $("#resultado").append("<td> <img src='imagenes/yes.png' width='" + porcentajeSi + "'height='20'>" + porcentajeSi + "% </td>");
    $("#resultado").append("</tr>");
    $("#resultado").append("<tr>");
    $("#resultado").append("<td> No </td>");
    $("#resultado").append("<td> <img src='imagenes/no.png' width='" + porcentajeNo + "'height='20'>" + porcentajeNo + "% </td>");
    $("#resultado").append("</tr>");
    LimpiaCampos();
}//Fin InsercionTutoriaExitosa


function LimpiaCampos() {
    $("input[name=vote][value='0']").prop("checked", false);
    $("input[name=vote][value='1']").prop("checked", false);
}//Fin LimpiaCampos


function InsercionVotacionFallida(TextoJSON) {
    $("#pnlMensaje").dialog();
    $("#pnlMensaje").html('<p>Ocurrio un error en el servidor..</p>' + TextoJSON.responseText);
}//Fin Insercion VotacionFallida