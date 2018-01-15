@extends('layouts.app')

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
                    <h3 class="box-title">{{ trans('others.insert') }} {{ trans('user.user') }}</h3>
                </div>

                <div class="box-body">
                    @include('errors.form_errors')
                    {{ Form::open(['url' => route('user.store'), 'method' => 'post']) }}
                        @include('user.form_user')
                        {{ Form::submit(trans('others.insert')." ".trans('user.user'), ['class' => 'btn btn-success']) }}
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar</a>
                    {{ Form::close() }}
                </div>
            </div>
        </section>
    </div>
@endsection
