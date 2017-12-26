@extends('layouts.app')

@section('content')
    @include('menus.menu_user')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        {{ trans('user.users') }} <small>{{ trans('others.data') }}</small>
                    </h1>
                </div>
            </div>

            <div class="row">
                <form method="post" action="{{ route('user.edit', ['user' => $users->id]) }}" class="margin">
                    @include('user.form_user')
                    <button type="submit" class="btn btn-warning">{{ trans('others.edit') }} {{ trans('user.user') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
