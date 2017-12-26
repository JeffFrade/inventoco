{{ csrf_field() }}
<div class="form-group">
    <label for="user">{{ trans('user.user') }}:</label>
    <input type="text" id="user" name="user" class="form-control" placeholder="{{ trans('user.user') }}" value="{{ old('user', $users->user) }}">
</div>

<div class="form-group">
    <label for="name">{{ trans('user.name') }}:</label>
    <input type="text" id="user" name="name" class="form-control" placeholder="{{ trans('user.name') }}" value="{{ old('name', $users->name) }}">
</div>

<div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email', $users->email) }}">
</div>

<div class="form-group">
    <label for="password">{{ trans('auth.password') }}:</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="{{ trans('auth.password') }}" value="{{ old('password', '') }}">
</div>

<div class="form-group">
    <label for="id_level">{{ trans('user.level') }}:</label>
    <select name="id_level" id="id_level" class="form-control">
        @foreach($levels as $level)
        <option value="{{ $level->id_level }}" {{ ($level->id_level == $user->id_level?'selected="selected"':'') }}>{{ $level->level }}</option>
        @endforeach
    </select>
</div>