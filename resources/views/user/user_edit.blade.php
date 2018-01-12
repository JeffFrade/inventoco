@extends('layouts.dashboard')

@section('content')
    @include('menus.menu')

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
                @include('errors.form_errors')
                <form method="post" action="{{ route('user.update', ['user' => $user->user]) }}" class="margin">
                    {{ method_field('PUT') }}
                    @include('user.form_user')
                    <button type="submit" class="btn btn-warning">{{ trans('others.edit') }} {{ trans('user.user') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
