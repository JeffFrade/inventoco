@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Dashboard
                <small>{{ trans('dashboard.statistics') }}</small>
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="fa fa-fw fa-server"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ trans('inventory.equipments') }}</span>
                            <span class="info-box-number">{{ $equipmentsCount }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-fw fa-exclamation-triangle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ trans('occurrences.occurrences') }}</span>
                            <span class="info-box-number">{{ $occurrencesCount }}</span>
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-fw fa-file-excel-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ trans('inventory.reports') }}</span>
                            <span class="info-box-number">{{ $reportsCount }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-fw fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ trans('user.users') }}</span>
                            <span class="info-box-number">{{ $usersCount }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('occurrences.occurrences') }}</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                <p class="text-center">
                                    <strong>{{ trans('occurrences.occurrences') }} - {{ Carbon\Carbon::now()->year }}</strong>
                                </p>

                                <div class="chart">
                                    {!! $occurenceChart->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('inventory.equipments') }}</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                <p class="text-center">
                                    <strong>{{ trans('inventory.equipments') }} - {{ Carbon\Carbon::now()->year }}</strong>
                                </p>

                                <div class="chart">
                                    {!! $equipmentChart->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
