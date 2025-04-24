@extends('master')
@section('judul_halaman', content: 'New Threads | Forum Discussion')
@section('konten')
<form action="/newthreads" method="post">
    @csrf
<div class="fs-2">New Threads</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul Threads</label>
    <input type="text" name="judul_threads" class="form-control" placeholder="Masukkan judul threadmu di sini..." id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
  <label for="exampleFormControlTextarea1">Isi Threads</label>
  <textarea class="form-control" name="isi_threads" id="exampleFormControlTextarea1" rows="5" placeholder="Tulis threadmu di sini..."></textarea>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
@endsection
