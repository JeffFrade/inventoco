@include('errors.form_errors')
<div class="form-group">
    <label for="level">{{ trans('user.level') }}:</label>
    <input type="text" id="level" name="level" placeholder="{{ trans('user.level') }}" value="{{ old('level', $level->level) }}" class="form-control">
</div>