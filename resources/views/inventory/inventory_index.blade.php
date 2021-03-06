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
                <div class="col-lg-4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('others.select') }} {{ trans('inventory.sector') }}</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                {{ Form::label('id_sector', trans('inventory.sector').":") }}
                                <select name="id_sector" id="id_sector" class="form-control sector">
                                    @foreach($sectors as $sector)
                                        <option value="{{ $sector->id_sector }}">{{ $sector->sector }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                {{ Form::label('id_room', trans('inventory.room').":") }}
                                <select name="id_room" id="id_room" class="form-control">

                                </select>
                            </div>

                            <button class="btn btn-primary"><i class="fa fa-check"></i> {{ trans('others.select') }}</button>
                        </div>
                        <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('inventory.equipment') }}</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="rdb_barcode"><input type="radio" id="rdb_barcode" name="filter" class="filter" value="barcode" checked="checked"> {{ trans('inventory.barcode') }}</label>
                                <br/>
                                <label for="rdb_serial_number"><input type="radio" id="rdb_serial_number" name="filter" class="filter" value="serial_number"> {{ trans('inventory.serial_number') }}</label>
                            </div>

                            <hr/>

                            @include('errors.form_errors')
                            {{ Form::open(['url' => route('inventory.search'), 'method' => 'post']) }}
                                {{ Form::token() }}
                                <div class="alert alert-warning">
                                    <strong>{{ trans('others.warning') }}: </strong> {{ trans('others.equipment_search') }} <strong><u>Enter</u></strong>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('codebar', trans('inventory.barcode').":") }}
                                    {{ Form::text('codebar', old('codebar', $equipment->codebar), ['class' => 'form-control', 'placeholder' => trans('inventory.barcode')]) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('serial_number', trans('inventory.serial_number').":") }}
                                    {{ Form::text('serial_number', old('serial_number', $equipment->serial_number), ['class' => 'form-control', 'placeholder' => trans('inventory.serial_number'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('item', "Item:") }}
                                    {{ Form::text('item', old('item', $equipment->item), ['class' => 'form-control', 'placeholder' => 'Item', 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('type', trans('inventory.type').":") }}
                                    {{ Form::text('type', old('type', $equipment->type->type ?? ''), ['class' => 'form-control', 'placeholder' => trans('inventory.type'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('brand', trans('inventory.brand').":") }}
                                    {{ Form::text('brand', old('brand', $equipment->brand), ['class' => 'form-control', 'placeholder' => trans('inventory.brand'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('model', trans('inventory.model').":") }}
                                    {{ Form::text('model', old('brand', $equipment->fabrication_model), ['class' => 'form-control', 'placeholder' => trans('inventory.model'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('sector', trans('inventory.sector').":") }}
                                    {{ Form::text('sector', old('sector', $equipment->sector->sector ?? ''), ['class' => 'form-control', 'placeholder' => trans('inventory.sector'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('room', trans('inventory.room').":") }}
                                    {{ Form::text('room', old('sector', $equipment->room->room ?? ''), ['class' => 'form-control', 'placeholder' => trans('inventory.room'), 'disabled' => 'disabled']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('obs', "Obs:") }}
                                    {{ Form::textarea('obs', old('obs', $equipment->obs), ['class' => 'form-control', 'placeholder' => 'Obs', 'disabled' => 'disabled', 'rows' => '5']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('image', trans('inventory.image').":") }}
                                    <a href="{{ $equipment->image }}" data-lightbox="lb"><img id="image" name="image" src="{{ $equipment->image }}" title="{{ $equipment->item }}" alt="{{ $equipment->item }}" class="img-responsive"></a>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('documents', trans('inventory.documents').":") }}

                                </div>

                                {{ Form::submit('', ['class' => 'hidden']) }}
                            {{ Form::close() }}
                        </div>
                        <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('others.differences') }}</h3>
                            <div class="box-tools pull-right">
                                <span class="label label-danger">{{ trans('others.differences') }}: 0</span>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="difference overflow">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ trans('others.view') }}</th>
                                            <th class="text-center">{{ trans('inventory.serial_number') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">Item &nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.brand') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.sector') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.room') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box-footer">
                            {{ Form::open(['url' => route('inventory.index'), 'method' => 'Delete']) }}
                                {{ Form::submit(trans('others.clear'), ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                        <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>

                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('inventory.equipments') }} {{ trans('others.in') }} {{ trans('inventory.room') }}</h3>
                            <div class="box-tools pull-right">
                                <span class="label label-success">{{ trans('inventory.equipments') }}: 0</span>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="equipments overflow">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ trans('others.view') }}</th>
                                            <th class="text-center">{{ trans('inventory.serial_number') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">Item &nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.brand') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.model') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.sector') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">{{ trans('inventory.room') }}&nbsp; <i class="fa fa-sort-amount-desc"></i></th>
                                            <th class="text-center">Obs</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($equipments as $equip)
                                        <tr>
                                            <td class="text-center"><a href="{{ route('inventory.find', ['serial' => $equip->serial_number]) }}" class="btn btn-default"><i class="fa fa-search"></i></a></td>
                                            <td class="text-center">{{ $equip->serial_number }}</td>
                                            <td class="text-center">{{ $equip->item }}</td>
                                            <td class="text-center">{{ $equip->brand }}</td>
                                            <td class="text-center">{{ $equip->fabrication_model }}</td>
                                            <td class="text-center">{{ $equip->sector->sector }}</td>
                                            <td class="text-center">{{ $equip->room->room }}</td>
                                            <td class="text-center">{{ $equip->obs }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box-footer">
                            {{ Form::open(['url' => route('inventory.index'), 'method' => 'Delete']) }}
                                {{ Form::submit(trans('others.clear'), ['class' => 'btn btn-danger']) }}
                                <a href="#" class="btn btn-success" title="{{ trans('others.export') }}"><i class="fa fa-file-excel-o"></i> {{ trans('others.export') }}</a>
                            {{ Form::close() }}
                        </div>
                        <div class="overlay hidden">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        $('.filter').on('change', function (e) {
            if ($('.filter:checked').val() === 'barcode') {
                $('#serial_number').prop("disabled", true);
                $('#codebar').prop("disabled", false);
            } else {
                $('#serial_number').prop("disabled", false);
                $('#codebar').prop("disabled", true);
            }
        });


        jQuery(document).ready(function ($) {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $(function () {
                changeRoom();
            });

            $('#id_sector').on('change', function(e) {
                changeRoom();
            });
        });

        // Function to Change Sector and Bring Room
        function changeRoom()
        {
            $('.overlay').removeClass('hidden');

            $.ajax({
                contentType: 'application/x-www-form-urlencoded',

                data: {
                    sector: $('#id_sector').val()
                },

                method: 'POST',

                url: '/inventory/index/sector',

                timeout: 0,

                success: function (response) {
                    $('#id_room').children().remove();

                    for (index in response) {
                        $('#id_room').append(new Option(response[index]['room'], response[index]['id_room']));
                    }

                    $('.overlay').addClass('hidden');
                }
            });
        }
    </script>
@stop
