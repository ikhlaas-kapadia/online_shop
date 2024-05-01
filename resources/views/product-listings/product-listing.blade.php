@extends('layout')

@section('content')
<h1>{{$product['title']}}</h1>
<p>{{$product['description']}}</p>
<p>{{$product['category']}}</p>
<p>{{$product['company']}}</p>
<span>{{$product['price']}}</span>
<img src="{{$product['image']}}" alt="">

@endsection
