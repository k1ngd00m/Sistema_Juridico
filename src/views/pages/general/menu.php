<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">

                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                       data-activates="profile-dropdown">John Doe<i
                            class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>

            </div>
        </li>
        <li class="bold active"><a href="#" class="waves-effect waves-cyan"><i
                    class="mdi-action-account-circle"></i>Informacion</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                            class="mdi-action-work "></i></i> Procesos</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" onclick="loadVista('proceso/formularioRegistro','contenedorLoad')">Registrar</a>
                            </li>
                            <li><a href="proceso/listar">Listar</a>
                            </li>
                            <li><a href="cita/formularioRegistro">Observaciones</a>
                            </li>
                            <li><a href="cita/listar">Citas</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>


        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                            class="mdi-action-account-child"></i> Abogados</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="abogado/formularioRegistro">Registar</a>
                            </li>
                            <li><a href="abogado/listar">Listar</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                            class="mdi-social-group"></i> Clientes</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="cliente/formularioRegistro">Registrar</a>
                            </li>
                            <li><a href="cliente/listar">Listar</a>
                            </li>

                        </ul>
                    </div>
                </li>

            </ul>
        </li>
        <li class="li-hover">
            <div class="divider"></div>
        </li>
        <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
        <li><a href="angular-ui.html"><i class="mdi-action-verified-user"></i> Angular UI <span
                    class="new badge">3</span></a>
        </li>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 578px; height: 662px; right: 3px;">
            <div class="ps-scrollbar-y" style="top: 294px; height: 337px;"></div>
        </div>
    </ul>
    <a href="#" data-activates="slide-out"
       class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i
            class="mdi-navigation-menu"></i></a>
</aside>