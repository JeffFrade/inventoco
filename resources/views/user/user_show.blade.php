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
                <div class="box-header">
                    <h3 class="box-title">{{ trans('others.view') }} {{ trans('user.user') }}</h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <tr>
                            <th scope="row">{{ trans('user.user') }}</th>
                            <td>{{ $users->user }}</td>
                        </tr>

                        <tr>
                            <th scope="row">{{ trans('user.name') }}</th>
                            <td>{{ $users->name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">E-mail</th>
                            <td>{{ $users->email }}</td>
                        </tr>

                        <tr>
                            <th scope="row">{{ trans('user.profile') }}</th>
                            <td>{{ $users->levels->level }}</td>
                        </tr>
                    </table>

                    <br/>

                    <a href="{{ route('user.destroy', ['user' => $users->user]) }}" class="btn btn-danger" onclick="event.preventDefault();if(confirm('{{ trans('user.delete') }}')){document.getElementById('form-delete').submit();}">{{ trans('others.delete') }}</a>
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar</a>
                    <form id="form-delete" style="display: none" action="{{ route('user.destroy', ['user' => $users->user]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
