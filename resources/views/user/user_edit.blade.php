@extends('layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{ trans('user.users') }}
                <small>{{ trans('others.data') }}</small>
            </h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('others.edit') }} {{ trans('user.user') }}</h3>
                </div>

                <div class="box-body">
                    @include('errors.form_errors')
                    <form method="post" action="{{ route('user.update', ['user' => $user->user]) }}" class="margin">
                        {{ method_field('PUT') }}
                        @include('user.form_user')
                        <button type="submit" class="btn btn-warning">{{ trans('others.edit') }} {{ trans('user.user') }}</button>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
