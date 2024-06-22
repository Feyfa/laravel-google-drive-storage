@extends('welcome')

@section('container')
<form class="form-upload" action="/" enctype="multipart/form-data" method="POST">
  @csrf
  <h1>Add Your Image</h1>
  <input type="file" name="img" required>
  @error('img')
      <small>{{ $message }}</small>
  @enderror
  <button type="submit" name>Add Image</button>
</form> 
@endsection
