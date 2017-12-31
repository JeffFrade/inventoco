@extends('layouts.app')

@section('content')
    @include('menus.menu_user')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        {{ trans('user.levels') }} <small>{{ trans('others.data') }}</small>
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <h4 class="text-center">Consultar</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">{{ trans('user.level') }}</th>
                                <th class="text-center">{{ trans('others.actions') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($levels as $l)
                                <tr>
                                    <td class="text-center">{{ $l->level }}</td>
                                    <td class="text-center" width="1%" nowrap="">
                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i> {{ trans('others.edit') }}</a>
                                        <a href="{{ route('user.edit', ['user' => $l->level]) }}" class="btn btn-default btn-xs" onclick="event.preventDefault();if(confirm('{{ trans('user.level_delete') }}')){document.getElementById('form-delete').submit();}"><i class="fa fa-times"></i> {{ trans('others.delete') }}</a>
                                        <form id="form-delete" style="display: none" action="{{ route('user.edit', ['user' => $l->level]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-center">Cadastrar</h4>

                    <form id="frmCadastrar" name="frmCadastrar" method="post" action="/admin/level">
                        @include('user.level.form_level')
                        <input type="submit" id="btnCadastrar" name="btnCadastrar" value="{{ trans('others.insert') }}" class="btn btn-success">
                    </form>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-center">Editar</h4>
                    <form id="frmEditar" name="frmEditar" method="post" action="/admin/level">
                        @include('user.level.form_level')
                        <input type="submit" id="btnEditar" name="btnEditar" value="{{ trans('others.edit') }}" class="btn btn-warning">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
