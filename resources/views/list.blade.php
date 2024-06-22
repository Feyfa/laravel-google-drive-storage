@extends('welcome')

@section('container')
  <div class="image-container">
    @foreach ($imgs as $img)
      <div class="image">
        <form class="form-list" action="/" method="POST">
          @method('DELETE')
          @csrf
          <h3>{{ $img->filename }}</h3>
          <button type="submit" name="filename" value="{{ $img->filename }}">
            <i class="fa-solid fa-trash fa-lg" style="color: #ff0000;"></i>
          </button>
        </form>
        <img src="data:{{ $img->ext }};base64,{{ $img->file }}" alt="Image">
      </div>
    @endforeach
  </div>
@endsection