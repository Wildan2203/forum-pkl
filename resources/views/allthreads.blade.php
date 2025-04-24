@extends('master')

@section('judul_halaman', content: 'All Threads | Forum Discussion')

@section('konten')
<div class="fs-2 mb-4">All Threads</div>

@foreach($threads as $thread)
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

@endforeach

@endsection
