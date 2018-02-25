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
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('inventory.equipment') }}</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th scope="row">{{ trans('inventory.serial_number') }}</th>
                                    <td>{{ $equipment->serial_number }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.barcode') }}</th>
                                    <td>{{ $equipment->codebar }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Item</th>
                                    <td>{{ $equipment->item }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.brand') }}</th>
                                    <td>{{ $equipment->brand }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.model') }}</th>
                                    <td>{{ $equipment->fabrication_model }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.type') }}</th>
                                    <td>{{ $equipment->type->type }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.sector') }}</th>
                                    <td>{{ $equipment->sector->sector }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.room') }}</th>
                                    <td>{{ $equipment->room->room }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('others.created_at') }}</th>
                                    <td>{{ $equipment->created_at->format('d/m/Y - h:i:s') }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('others.updated_at') }}</th>
                                    <td>{{ $equipment->updated_at->format('d/m/Y - h:i:s') }}</td>
                                </tr>

                                @if ($equipment->deleted_at)
                                <tr>
                                    <th scope="row">{{ trans('others.deleted_at') }}</th>
                                    <td>{{ $equipment->deleted_at->format('d/m/Y - h:i:s') }}</td>
                                </tr>
                                @else
                                <tr>
                                    <th scope="row">{{ trans('others.deleted_at') }}</th>
                                    <td>-</td>
                                </tr>
                                @endif

                                <tr>
                                    <th scope="row">Obs</th>
                                    <td>{{ $equipment->obs }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">{{ trans('inventory.image') }}</th>
                                    <td><a href="{{ $equipment->image }}" data-lightbox="lb"><img id="image" name="image" src="{{ $equipment->image }}" title="{{ $equipment->item }}" alt="{{ $equipment->item }}" class="img-responsive"></a></td>
                                </tr>
                            </table>
                        </div>

                        <div class="box box-footer">
                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> {{ trans("others.edit") }}</a>
                            <a href="#" class="btn btn-danger" onclick="event.preventDefault();if(confirm('{{ trans('user.delete') }}')){document.getElementById('form-delete').submit();}"><i class="fa fa-times"></i> {{ trans('others.delete') }}</a>
                            <form id="form-delete" style="display: none" action="{{ route('user.destroy', ['user' => $equipment->serial_number]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection