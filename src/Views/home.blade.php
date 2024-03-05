@extends('layouts.app')

@section('content')
  <div class="container-md lg:min-w-[500px]">
    <h2 class="text-xl font-bold text-center mb-4">Products</h2>
    <div class="mb-4 p-1 border">
      @foreach( $items as $item )
      <div class="odd:bg-white even:bg-gray-100">
        <a href="/view/{{ $item['id'] }}" class="block hover:bg-gray-200 p-4">{{ $item['name'] }}</a>
      </div>
      @endforeach
    </div>
    <div class="text-center">
      <a href="/create" class="inline-block border p-4 mx-auto">Add New Product</a>
    </div>
  </div>
@endsection
