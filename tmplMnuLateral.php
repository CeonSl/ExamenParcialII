<?php include_once ("php/config.php")?>
<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <img src="images/logo.png" alt="Mono">
                <span class="brand-name">EXAMEN PARCIAL II</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">


                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">CRUDS</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li>
                                <a class="sidenav-item-link" href="<?= SERVERURL?>inicio/Pais">
                                    <span class="nav-text">Paises</span>

                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="<?= SERVERURL?>inicio/Continente">
                                    <span class="nav-text">Continentes</span>

                                </a>
                            </li>



                        </div>
                    </ul>
                </li>
    </div>
</aside>