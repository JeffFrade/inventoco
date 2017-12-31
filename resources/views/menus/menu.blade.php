@php
    $profile = \InvOco\User::getUser();
@endphp
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/dashboard"><i class="fa fa-fw fa-home"></i> InvOco</a>
</div>

<ul class="nav navbar-right top-nav">
    <li>
        <a href="#"><i class="fa fa-fw fa-server"></i> {{ trans('inventory.inventory') }}</a>
    </li>

    <li>
        <a href="#"><i class="fa fa-fw fa-exclamation-triangle"></i> {{ trans('occurrences.occurrences') }}</a>
    </li>

    <li>
        <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $profile->name }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('user.edit', ['user' => $profile->user]) }}"><i class="fa fa-fw fa-user"></i> {{ trans('user.profile') }}</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="/"><i class="fa fa-fw fa-power-off"></i> Logout</a>
            </li>
        </ul>
    </li>
</ul>