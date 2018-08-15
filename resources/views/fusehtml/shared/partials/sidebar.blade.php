<?php
/*
         M""""""""`M            dP                     
         Mmmmmm   .M            88                     
         MMMMP  .MMM  dP    dP  88  .dP   .d8888b.     
         MMP  .MMMMM  88    88  88888"    88'  `88     
         M' .MMMMMMM  88.  .88  88  `8b.  88.  .88     
         M         M  `88888P'  dP   `YP  `88888P'     
         MMMMMMMMMMM    -*-  Created by Zuko  -*-      

         * * * * * * * * * * * * * * * * * * * * *     
         * -    - -   F.R.E.E.M.I.N.D   - -    - *     
         * -  Copyright © 2018 (Z) Programing  - *     
         *    -  -  All Rights Reserved  -  -    *     
         * * * * * * * * * * * * * * * * * * * * *     
*//**
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
 * @PROJECT    : The Return
 * @AUTHOR     : Zuko
 * @COPYRIGHT  : © 2018 Zuko
 * @LINK       : http://www.zuko.pw/
 * @FILE       : sidebar.blade.php
 * @CREATED    : 13:27 , 15/Aug/2018
 * @VERSION    : 0.0.1
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
 **/
?>            <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
                <div class="aside-content-wrapper">

                    <div class="aside-content bg-primary-700 text-auto">

                        <div class="aside-toolbar">

                            <div class="logo">
                                <span class="logo-icon">Z</span>
                                <span class="logo-text">Blog</span>
                            </div>

                            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                                <i class="icon icon-backburger"></i>
                            </button>

                        </div>

                        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                            <li class="subheader">
                                <span>APPS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-dashboards">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-dashboards" href="#" aria-expanded="false" aria-controls="collapse-dashboards">

                                    <i class="icon s-4 icon-tile-four"></i>

                                    <span>Dashboards</span>
                                </a>
                                <ul id="collapse-dashboards" class='collapse show' role="tabpanel" aria-labelledby="heading-dashboards" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple" href="index.html" data-url="index.html">

                                            <span>Project Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-server.html" data-url="index.html">

                                            <span>Server</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="subheader">
                                <span>Blog</span>
                            </li>

                            {{menu('blog', 'fusehtml.shared.partials.menuitems')}}

                            <li class="subheader">
                                <span>Admin</span>
                            </li>

                            {{menu('admin', 'fusehtml.shared.partials.menuitems')}}

                            <li class="subheader">
                                <span>COMPONENTS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-charts">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-charts" href="#" aria-expanded="false" aria-controls="collapse-charts">

                                    <i class="icon s-4 icon-poll"></i>

                                    <span>Charts</span>
                                </a>
                                <ul id="collapse-charts" class='collapse ' role="tabpanel" aria-labelledby="heading-charts" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="components-charts-nvd3.html" data-url="index.html">

                                            <span>nvD3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-collapse.html" data-url="index.html">

                                    <i class="icon s-4 icon-plus-box"></i>

                                    <span>Collapse</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-modal.html" data-url="index.html">

                                    <i class="icon s-4 icon-window-maximize"></i>

                                    <span>Modal</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-popovers.html" data-url="index.html">

                                    <i class="icon s-4 icon-tooltip-outline"></i>

                                    <span>Popovers</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-snackbar.html" data-url="index.html">

                                    <i class="icon s-4 icon-page-layout-footer"></i>

                                    <span>Snackbar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-tooltips.html" data-url="index.html">

                                    <i class="icon s-4 icon-tooltip"></i>

                                    <span>Tooltips</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>
