@extends('layouts.app')

@section('content')
  status: {{ $success }}
  message: {{ $message }}
  <a href="/">Home</a>
@endsection
