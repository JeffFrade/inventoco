<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('menus.menu')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li {!! (Route::currentRouteName() != 'user.create'?'class="active"':'') !!}>
                <a href="/admin/user"><i class="fa fa-fw fa-users"></i> {{ trans('others.list') }} {{ trans('user.users') }}</a>
            </li>

            <li {!! (Route::currentRouteName() == 'user.create'?'class="active"':'') !!}>
                <a href="/admin/user/create"><i class="fa fa-fw fa-plus"></i> {{ trans('others.insert') }} {{ trans('user.user') }}</a>
            </li>

            <li {!! (Route::currentRouteAction() == 'level'?'class="active"':'')  !!}>
                <a href="/admin/level"><i class="fa fa-tag"></i> {{ trans('user.levels') }}</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#action"><i class="fa fa-fw fa-arrows-v"></i> {{ trans('others.actions') }} <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="action" class="collapse">
                    <li>
                        <a href="#">{{ trans('others.list') }} {{ trans('others.actions') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ trans('others.insert') }} {{ trans('others.action') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>