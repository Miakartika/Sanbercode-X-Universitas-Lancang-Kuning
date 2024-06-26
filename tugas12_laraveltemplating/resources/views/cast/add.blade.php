@extends('layout.master')

@section('judul')
    Add Cast
@endsection

@section('content')
<form action="/cast" method="post">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- form input --}}
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" class="form-control" name="umur">
      </div>
      <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="10" rows="5" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection