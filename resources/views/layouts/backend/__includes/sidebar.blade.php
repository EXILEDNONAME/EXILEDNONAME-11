<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

  <div class="brand flex-column-auto" id="kt_brand">
    <a href="/dashboard" class="brand-logo">
      <h3 class="text-white">
        @php
        $title = \DB::table('system_settings')->first();
        echo $title->application_name;
        @endphp
       </h3>
    </a>
  </div>

  <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
      <ul class="menu-nav">

        <li class="menu-item {{ (request()->is('dashboard')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard') }}" class="menu-link"><i class="menu-icon fas fa-desktop"></i><span class="menu-text"> Dashboard </span></a></li>

        <li class="menu-section">
          <h4 class="menu-text"> APPLICATIONS </h4>
          <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
        </li>
        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/applications/datatables/generals*')) ? 'menu-item-open' : '' }}">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon fas fa-list-ul"></i>
            <span class="menu-text"> Datatables </span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu">
            <ul class="menu-subnav">
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/applications/datatables/generals*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/applications/datatables/generals') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Generals </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/applications/datatables/relations*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/applications/datatables/relations') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Relations </span></a></li>
            </ul>
          </div>
        </li>

        <li class="menu-section">
          <h4 class="menu-text"> ADMINISTRATIVES </h4>
          <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
        </li>

        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/applications*')) ? 'menu-item-open' : '' }}">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon fab fa-xing"></i>
            <span class="menu-text"> Applications </span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu">
            <ul class="menu-subnav">
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/applications/customizations*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/applications/customizations') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Customizations </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/applications/optimizations*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/applications/optimizations') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Optimizations </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/applications/settings*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/applications/settings') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Settings </span></a></li>
            </ul>
          </div>
        </li>

        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/managements*')) ? 'menu-item-open' : '' }}">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon fas fa-user-shield"></i>
            <span class="menu-text"> Managements </span>
            <i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu">
            <ul class="menu-subnav">
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/managements/permissions*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/managements/permissions') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Permissions </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/managements/roles*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/managements/roles') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Roles </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/administratives/managements/users*')) ? 'menu-item-active' : '' }}"><a href="{{ url('/dashboard/administratives/managements/users') }}" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-dot"><span></span></i> Users </span></a></li>
            </ul>
          </div>
        </li>

      </ul>
    </div>
  </div>



</div>
