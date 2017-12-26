<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('menus.menu')

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="/dashboard"><i class="fa fa-fw fa-users"></i> {{ trans('others.list') }} {{ trans('user.users') }}</a>
            </li>
            <li>
                <a href="/dashboard"><i class="fa fa-fw fa-plus"></i> {{ trans('others.insert') }} {{ trans('user.user') }}</a>
            </li>
            <li>
                <a href="charts.html"><i class="fa fa-fw fa-search"></i> {{ trans('others.search') }} {{ trans('user.user') }}</a>
            </li>
        </ul>
    </div>
</nav>