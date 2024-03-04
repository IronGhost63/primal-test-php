@extends('layouts.app')

@section('content')
  <form action="/create" method="post">
    <input type="text" name="product_name" placeholder="Name">
    <textarea name="product_description" cols="30" rows="10" placeholder="Description"></textarea>
    <input type="number" name="product_price">
    <input type="submit" value="Save">
  </form>
@endsection
