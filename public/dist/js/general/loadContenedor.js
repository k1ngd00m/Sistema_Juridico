/**
 * Created by miguel on 6/11/2016.
 */

/**
 * obtiene  del servidor un documento html y lo agrega a la etiqueta #contenedorLoad
 * @param url  url de la solicitud del servidor tipo "get"
 * @param etiqueta id de la etiqueta al cual se copiara el documento html obtenido del servidor
 */
function loadVista(url,etiqueta) {
    $.get(url, function() {
        console.log('envio solicitud')
    })
        //inicia el proceso de lectura o descarga
        .done(function(data) {
            insertHtml(etiqueta,data);
        })
        .fail(function() {

        })
        //termina todos los proceso de $.get
        //sirve para cargar js a las etiquetas agregadas dinamicamente
        .always(function() {


        });
}
// agregar codigo javascript en ejecucion
function insertHtml(id, html)
{
    var ele = document.getElementById(id);
    ele.innerHTML = html;

    var codes = ele.getElementsByTagName("script");
    for(var i=0;i<codes.length;i++)
    {
        eval(codes[i].text);
    }
}

