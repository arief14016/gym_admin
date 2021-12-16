
<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <div class="container">
        <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
            
            <ul class="menu-nav">
                {{-- Dashboard --}}
                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
                    <a href="/dashboard" class="menu-link">
                        <span class="menu-text">Dashboard</span>
                        <span class="menu-desc"></span>
                    </a>
                </li>

                {{-- Master --}}
                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Master</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">

                            @include('layouts.partials.master-menu.user')
                            
                            @include('layouts.partials.master-menu.artikel')

                        </ul>
                    </div>
                </li>

            </ul>
            
        </div>
    </div>
</div>