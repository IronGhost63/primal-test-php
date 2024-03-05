@extends('layouts.app')

@section('content')
  <div class="container-md">
    <h2 class="text-xl font-bold text-center mb-4">Add New Product</h2>
    <form action="/create" method="post">
      <div class="mb-2">
        <input type="text" name="product_name" placeholder="Name" class="p-3 w-full border" required>
      </div>
      <div class="mb-2">
        <textarea name="product_description" cols="30" rows="10" placeholder="Description" class="p-3 w-full border" required></textarea>
      </div>
      <div class="mb-2">
        <input type="number" name="product_price" placeholder="Price" class="p-3 w-full border" required>
      </div>
      <div class="mb-2">
        <input type="submit" value="Save" class="p-3 w-full border">
      </div>
    </form>
  </div>
@endsection
