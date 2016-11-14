<div class="col s12 m8 l9">
    <div class="row">
        <div class="col s12">
            <ul class="tabs tab-demo-active z-depth-1 cyan">
                <li class="tab col s3"><a class="white-text waves-effect waves-light"
                                          href="#tabInformacion">Informacion</a>
                </li>
                <li class="tab col s3"><a class="white-text waves-effect waves-light active" href="#tabExpedientes">Expedientes</a>
                </li>
                <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#tabCitas">Citas</a>
                </li>
                <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#tabObservaciones">Observaciones</a>
                </li>
                <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#tabAvancesCliente">Avance
                        Cliente</a>
                </li>
            </ul>
        </div>
        <div class="col s12">
            <div id="tabInformacion" class="col s12 cyan lighten-4">
                <div id="input-fields-informacion">
                    <div class="row">
                        <div class="col s12 m8 l9">
                            <div class="row">
                                <div class="col s7">
                                    <h4 class="header">Detalles del proceso</h4>
                                </div>
                                <div class="col s5">
                                    <input type="date" class="datepicker">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="uname">Cliente del proceso</label>
                            <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                            <div class="errorTxt1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <textarea id="ccomment" name="ccomment" class="materialize-textarea validate"
                                  data-error=".errorTxt7"></textarea>
                            <label for="ccomment">Descripcion del proceso *</label>
                            <div class="errorTxt7"></div>
                        </div>
                    </div>



                </div>
            </div>


        <div id="tabExpedientes" class="col s12  cyan lighten-4">

            <div class="row" id="contenedorTablaExpedientes">
                <div class="col s12 m8 l9">
                    <p>Expedientes existentes del proceso</p>
                    <div id="jsGridExpendientes"></div>
                </div>
                <br>
            </div>

            <div id="contenedorFormularioExpedientes">
                <div class="row">
                    <div class="col s12 m8 l9">
                        <div class="row">
                            <div class="col s7">
                                <h4 class="header">Expedientes del proceso</h4>
                            </div>
                            <div class="col s5">


                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m3 l4">
                        <select id="remitenteExpedienteProceso">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="1">ABOGADO</option>
                            <option value="2">CLIENTE</option>S
                            <option value="3">JUZGADO</option>
                        </select>
                        <label>Quien es el remitente</label>
                    </div>
                    <div class="input-field col s12 m3 l4">
                        <select id="tipoDocumentoExpedienteProceso" >
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="1">PETICION</option>
                            <option value="2">RESPUESTA</option>
                            <option value="3">AUDIENCIA</option>
                        </select>
                        <label>Tipo de documento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l8">
                        <textarea id="descripcionExpedienteProceso" class="materialize-textarea" length="120"></textarea>
                        <label for="descripcionExpedienteProceso">Descripcion expediente</label>
                    </div>
                    <div class="input-field col s12 m2 l3 center" id="btnAgregarExpediente">
                        <div class="btn-floating btn-large waves-effect waves-light">
                            <a class="mdi-content-add"><i class="material-icons">add</i></a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 m8 l9">
                        <input type="file" id="input-file-now" class="dropify" data-default-file="" />
                    </div>
                </div>
                <div class="divider"></div>





            </div>
        </div>
        <div id="tabCitas" class="col s12  cyan lighten-4">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies
                mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div id="tabObservaciones" class="col s12  cyan lighten-4">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies
                mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div id="tabAvancesCliente" class="col s12  cyan lighten-4">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies
                mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
    </div>
</div>
<script type="text/javascript" >
    var elem = document.createElement("script");
    elem.src = "dist/js/procesos/formularioRegistro.js";
    ele.appendChild(elem);
</script>
</div>
