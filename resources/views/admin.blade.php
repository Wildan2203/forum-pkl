@extends('temp-login')
@section('judul_halaman', content: 'Register | Forum Discussion')
@section('konten')
<div class="fs-2 mb-4">All Threads</div>

@forelse($threads as $thread)
<div class="card mb-3">
  <div class="card-header">
    {{ $thread->user}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $thread->judul }}</h5>
    <p class="card-text">{{ $thread->isi }}</p>
    <a href="reply" class="btn btn-primary">Reply</a>
  </div>
</div>
@endsection