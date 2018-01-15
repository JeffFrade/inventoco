{{ Form::token() }}
<div class="form-group">
    {{ Form::label('user',  trans('user.user').':') }}
    {{ Form::text('user', old('user', $user->user), ['class' => 'form-control', 'placeholder' => trans('user.user')]) }}
</div>

<div class="form-group">
    {{ Form::label('name',  trans('user.name').':') }}
    {{ Form::text('name', old('name', $user->name), ['class' => 'form-control', 'placeholder' => trans('user.name')]) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'E-mail:') }}
    {{ Form::email('email', old('email', $user->email), ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
</div>

<div class="form-group">
    {{ Form::label('password',  trans('user.password').':') }}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('user.password')]) }}
</div>

<div class="form-group">
    {{ Form::label('id_level',  trans('user.level').':') }}
    <select name="id_level" id="id_level" class="form-control">
        @foreach($levels as $level)
        <option value="{{ $level->id_level }}" {{ ($level->id_level == $user->id_level?'selected="selected"':'') }}>{{ $level->level }}</option>
        @endforeach
    </select>
</div>