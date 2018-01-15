@php
    $profile = \InvOco\User::getUser();
@endphp
<header class="main-header">
    <a href="{{ route('dashboard') }}" class="logo">
        <span class="logo-mini"><strong>IO</strong></span>
        <span class="logo-lg"><strong>InvOco</strong></span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i><span class="hidden-xs"> {{ $profile->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.update', ['id' => $profile->user]) }}" class="btn btn-default btn-flat"><i class="fa fa-user"></i> {{ trans('user.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <form action="{{ route('logout') }}" method="post">
                                    <button class="btn btn-default"><i class="fa fa-power-off"></i> Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

@include('menus.side_menu')