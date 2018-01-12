@extends('layouts.app')

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
                <table class="table table-bordered">
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

                <a href="{{ route('user.destroy', ['user' => $users->user]) }}" class="btn btn-danger" onclick="event.preventDefault();if(confirm('{{ trans('user.delete') }}')){document.getElementById('form-delete').submit();}">{{ trans('others.delete') }}</a>
                <form id="form-delete" style="display: none" action="{{ route('user.destroy', ['user' => $users->user]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div>
    </div>
@endsection
