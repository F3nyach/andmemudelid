@extends('layout')

@section('title', 'List Page')

@section('content')
    <table>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td><a href="/{{$product->id}}/delete">Delete</a></td>
            <td><a href="/{{$product->id}}/edit">Edit</a></td>
        </tr>
        @endforeach
    </table>
@endsection
@section('style')
    <style>
        table, tr, td{
            border: 1px solid black;
        }
    </style>
    @endsection
