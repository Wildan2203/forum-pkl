@extends('master')
@section('judul_halaman', content: 'Reply | Forum Discussion')
@section('konten')
<form action="/reply" method="post">
    @csrf
<div class="fs-2">Reply Threads</div>
<div class="card-header">
    {{ $reply->judul}}
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Reply Threads</label>
  <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="5" placeholder="Tulis replay di sini...">{{ $reply->judul }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
@endsection
