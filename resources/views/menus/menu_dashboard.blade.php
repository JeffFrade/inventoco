<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('menus.menu')

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> {{ trans('dashboard.charts') }}</a>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-fw fa-table"></i> {{ trans('dashboard.tables') }}</a>
            </li>
            <li>
                <a href="/admin/user"><i class="fa fa-fw fa-group"></i> {{ trans('user.users') }}</a>
            </li>
        </ul>
    </div>
</nav>