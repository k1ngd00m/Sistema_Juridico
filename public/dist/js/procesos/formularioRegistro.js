

$(function() {

    /**
     * Agrega un registro a la tabla expdiente
     */
    function agregarExpediente() {
        var urlFichero=document.getElementById('archivoExpedienteProceso');
        var optionRemitente=getSelectOption('remitenteExpedienteProceso');
        var optionTipoDocumento=getSelectOption('tipoDocumentoExpedienteProceso');
        var descripcionExpediente=document.getElementById('descripcionExpedienteProceso');
        var fecha = new Date();

        $("#jsGridExpendientes").jsGrid("insertItem",
            {fichero:urlFichero.value,tipoDocumento: optionTipoDocumento.text, remitido: optionRemitente.text, descripcion: descripcionExpediente.value,fecha:fecha.getDate() }).done(function() {
            limpiarFormularioExpedientes();
        });
    }

    /**
     *
     * @param expediente
     */
    function abrirFormularioExpediente(expediente) {
        document.getElementById('contenedorFormularioExpedientes').style.display = 'block';
        document.getElementById('contenedorTablaExpedientes').style.display = 'none';
        if (expediente!=null){
            setSelectionOption('','');
            setSelectionOption('','');
            document.getElementById('descripcionExpedienteProceso').text=expediente.descripcion;

        }
        
    }
    function abrirTablaExpedientes(){
        document.getElementById('contenedorFormularioExpedientes').style.display = 'none';
        document.getElementById('contenedorTablaExpedientes').style.display = 'block';
    }
    function limpiarFormularioExpedientes() {
        limpiarInputs('input-fields-Expedientes');
        limpiarSelect('input-fields-Expedientes');
    }

    /**
     *
     * @param root atributo id de la etiqueta contenedora del formulario
     */
    function limpiarInputs(root) {
        var rootTag= document.getElementById(root);
        var tagsElement=  rootTag.getElementsByTagName('input');
        var nSize = tagsElement.length;
        for (var i=0;i<nSize;i++){
            var tagEle= tagsElement[i];
            switch (tagEle.type){
                case 'text':
                    case 'file':
                        tagEle.value='';
            }
        }
    }
    function limpiarSelect(root) {
        var rootTag= document.getElementById(root);
        var tagsElement=  rootTag.getElementsByTagName('select');
        var nSize = tagsElement.length;
        for (var i=0;i<nSize;i++){
            var tagEle= tagsElement[i];
            tagEle.selectedIndex=-1;
        }
    }
    /**
     * busca el opcion seleccionada de un select determinado
     * @param etiqueta    id de etiqueta html
     * @returns option    item seleccionado del select
     */
    function getSelectOption(etiqueta){
        var select =document.getElementById(etiqueta);
        var index=select.selectedIndex;
        if( index==-1)return null;
        var optionsItems =select.options;
        return optionsItems[index];
    }

    function setSelectionOption(etiqueta,id){
        var select =document.getElementById(etiqueta);
        var items=select.options;
        var nSize=items.length;
        for (var i=0;i<nSize;i++){
            var optionItem=items[i];
            if(optionItem==id){
                select.selectedIndex=i;
                break;
            }
        }
    }
    //***************eventos*******************************************************+
    $( "#btnAgregarExpediente" ).click(function(){
        agregarExpediente();
    });

    /**********************************************************configuraciones componentes***************************************
    /**
     * Generar tabs
     */
    $('.tab-demo').show().tabs();
    $('.tab-demo-active').show().tabs();

    /**
     * Generar select (combobox)
     */
    $('select').material_select();
    /**
     * ocultar formulario registro
     */
    abrirTablaExpedientes();
    /**
     * Generar tabla de expedientes
     */
    /**
     * generar file upload
     */
    $('.dropify').dropify();
    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove:  'Supprimer',
            error:   'Désolé, le fichier trop volumineux'
        }
    });

    // Used events
    var drEvent = $('.dropify-event').dropify();

    drEvent.on('dropify.beforeClear', function(event, element){
        return confirm("Do you really want to delete \"" + element.filename + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element){
        alert('File deleted');
    });



    $("#jsGridExpendientes").jsGrid({
        height: "90%",
        width: "100%",
        sorting: true,
        paging: true,
        pageSize: 15,
        fields: [

            { name: "tipoDocumento", type: "text", width: 150 },
            { name: "remitido", type: "text", width: 50 },
            { name: "descripcion", type: "text", width: 200 },
            { name: "fecha", type: "text" },
            {
                type: "control",
                modeSwitchButton: false,
                editButton: false,
                headerTemplate: function() {
                    return $("<button>").attr("type", "button").text("Add")
                        .on("click", function () {
                            abrirFormularioExpediente();
                            
                        });
                }
            }
        ]
    });

});