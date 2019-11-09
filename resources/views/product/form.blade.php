
@extends('layout')

@section('title', 'List Page')

@section('content')

    @if(isset($product))
        <h1>Edit Product</h1>
        <form action="/{{$product->id}}/edit" method="post">
    @else
        <h1>New Product</h1>
        <form action="/create" method="post">
    @endif
        @csrf
        <input type="text" placeholder="Product Name" name="name" value="{{$product->name ?? ''}}">
        <input type="text" placeholder="Product Code" name="code" value="{{$product->code ?? ''}}">
        <input type="number" step="0.1" placeholder="Price" name="price" value="{{$product->price ?? ''}}">
        <input type="number" placeholder="Quantity" name="quantity" value="{{$product->quantity ?? ''}}">
        <input type="submit" value="Submit">
    </form>
@endsection
