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
                    <h3 class="box-title">{{ trans('others.actions') }}</h3>
                </div>

                <div class="box-body">
                    <div class="btn-group">
                        <a href="{{ route('user.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> {{ trans('others.insert') }} {{ trans('user.user') }}</a>

                        <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-tags"></i> {{ trans('user.levels') }}</a>

                        <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-tags"></i> {{ trans('others.actions') }}</a>
                    </div>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('user.users') }} {{ trans('others.registered') }}</h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover dataTable">
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
            </div>
        </section>
    </div>
@endsection
