@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li class="error">{{ $error  }}</li>
        @endforeach
    </ul>
@endif