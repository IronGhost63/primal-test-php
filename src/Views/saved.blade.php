@extends('layouts.app')

@section('content')
  <div class="container-sm">
    <div class="mb-4 text-center">
      <h2 class="text-2xl">{{ $message }}</h2>
    </div>
    <div class="mb-4 text-center">
      <a href="/" class="inline-block border p-4 mx-auto">Home</a>
    </div>
  </div>
@endsection
