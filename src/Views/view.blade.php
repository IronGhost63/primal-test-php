@extends('layouts.app')

@section('content')
  <div class="container-md lg:min-w-[500px]">
    <h2 class="text-xl font-bold text-center mb-4">Product</h2>
    <form action="/create" method="post">
      <div class="mb-3">
        <p class="text-sm text-gray-400">Product Name</p>
        <p class="text-xl">{{ $name }}</p>
      </div>
      <div class="mb-3">
        <p class="text-sm text-gray-400">Description</p>
        <p class="text-xl">{{ $description }}</p>
      </div>
      <div class="mb-3">
        <p class="text-sm text-gray-400">Price</p>
        <p class="text-xl">{{ $price }}</p>
      </div>
      <div class="mb-4 text-center">
        <a href="/" class="inline-block border p-4 mx-auto">Home</a>
      </div>
    </form>
  </div>
@endsection
