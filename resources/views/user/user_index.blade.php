@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{ trans('user.users') }} <small>{{ trans('others.data') }}</small>
            </h1>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">{{ trans('user.user') }}</th>
                    <th class="text-center">{{ trans('user.name') }}</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">{{ trans('user.profile') }}</th>
                    <th class="text-center">{{ trans('others.actions') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $u)
                    <tr>
                        <td class="text-center">{{ $u->user }}</td>
                        <td class="text-center">{{ $u->name }}</td>
                        <td class="text-center">{{ $u->email }}</td>
                        <td class="text-center">{{ $u->levels->level }}</td>
                        <td class="text-center" width="1%" nowrap="">
                            <a href="{{ route('user.edit', ['user' => $u->user]) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i> {{ trans('others.edit') }}</a>
                            <a href="{{ route('user.show', ['user' => $u->user]) }}" class="btn btn-default btn-xs"><i class="fa fa-search"></i> {{ trans('others.view') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
