<div class="form-group">
    {{ Form::label('codebar', trans('inventory.barcode').":") }}
    {{ Form::text('codebar', old('codebar', $equipment->codebar), ['class' => 'form-control', 'placeholder' => trans('inventory.barcode'), 'value' => $equipment->codebar]) }}
</div>

<div class="form-group">
    {{ Form::label('serial_number', trans('inventory.serial_number').":") }}
    {{ Form::text('serial_number', old('serial_number', $equipment->serial_number), ['class' => 'form-control', 'placeholder' => trans('inventory.serial_number'), 'value' => $equipment->serial_number]) }}
</div>

<div class="form-group">
    {{ Form::label('item', 'Item:') }}
    {{ Form::text('item', old('item', $equipment->item ), ['class' => 'form-control', 'placeholder' => 'Item', 'value' => $equipment->item]) }}
</div>

<div class="form-group">
    {{ Form::label('brand', trans('inventory.brand').":") }}
    {{ Form::text('brand', old('brand', $equipment->brand), ['class' => 'form-control', 'placeholder' => trans('inventory.brand'), 'value' => $equipment->brand]) }}
</div>

<div class="form-group">
    {{ Form::label('fabrication_model', trans('inventory.model').":") }}
    {{ Form::text('fabrication_model', old('fabrication_model', $equipment->fabrication_model), ['class' => 'form-control', 'placeholder' => trans('inventory.model'), 'value' => $equipment->fabrication_model]) }}
</div>

<div class="form-group">
    {{ Form::label('id_type', trans('inventory.type').":") }}
    <select name="id_type" id="id_type" class="form-control sector">
        @foreach($type as $t)
            <option value="{{ $t->id_type }}">{{ $t->type }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {{ Form::label('id_sector', trans('inventory.sector').":") }}
    <select name="id_sector" id="id_sector" class="form-control sector">
        @foreach($sector as $s)
            <option value="{{ $s->sector }}">{{ $s->sector }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {{ Form::label('id_room', trans('inventory.room').":") }}
    <select name="id_room" id="id_room" class="form-control sector">

    </select>
</div>

<div class="form-group">
    {{ Form::label('obs', "Obs:") }}
    {{ Form::textarea('obs', old('obs', $equipment->obs), ['class' => 'form-control', 'placeholder' => "Obs", 'value' => $equipment->obs, 'rows' => '5']) }}
</div>

<div class="form-group">
    {{ Form::label('image', trans('inventory.image').":") }}
    {{ Form::text('image', old('image', $equipment->image), ['class' => 'form-control', 'placeholder' => trans('inventory.image'), 'value' => $equipment->image, 'v-model' => 'img']) }}
</div>

<div class="form-group">
    <a href="@{{ img }}" data-lightbox="lb"><img id="image" name="image" src="@{{ img }}" class="img-responsive"></a>
</div>

<div class="form-group">
    {{ Form::label('document', trans('inventory.documents').":") }}
    <input type="file" id="document" name="document">
</div>