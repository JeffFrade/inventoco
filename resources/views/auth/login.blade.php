@extends('layouts.login')

@section('content')
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> InvOco</h3>
                    </div>
                    <div class="panel-body">
                        <form id="frmLogin" name="frmLogin" method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input class="form-control" placeholder="E-mail" id="email" name="email" type="email" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input class="form-control" placeholder="{{ trans('auth.password') }}" id="password" name="password" type="password">
                                    </div>
                                </div>

                                <button type="submit" id="login" name="login" class="btn btn-success btn-lg btn-block">Login</button>

                                @if ($errors->has('email'))
                                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    </div>
                                @endif

                                @if ($errors->has('password'))
                                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    </div>
                                @endif
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
