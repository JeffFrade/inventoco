<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active">
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('user.index') }}"><i class="fa fa-users"></i> <span>{{ trans('user.users') }}</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>{{ trans('dashboard.charts') }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> {{ trans('inventory.inventory') }}</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> {{ trans('occurrences.occurrences') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>{{ trans('dashboard.tables') }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>{{ trans('others.indexes') }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> {{ trans('inventory.inventory') }}</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> {{ trans('occurrences.occurrences') }}</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> {{ trans('user.users') }}</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>