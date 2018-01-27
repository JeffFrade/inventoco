@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{ trans('inventory.inventory') }}
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(['url' => route('inventory.store'), 'method' => 'post']) }}
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ trans('others.insert') }} {{ trans('inventory.equipment') }}</h3>
                            </div>

                            <div class="box-body">
                                @include('inventory.form_inventory')
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i>&nbsp; {{ trans('others.insert') }}</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/vue-app.js') }}"></script>
@stop