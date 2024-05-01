<h1>{{$heading}}</h1>

@if(count($products) >= 1 )
    <p>Products : {{$products->count()}} </p>

@endif
@foreach ($products as $product)
    <h2><a href="/products/{{$product['id']}}">{{$product['title']}}</a></h2>
    <p>{{$product['description']}}</p>
    <p>{{$product['category']}}</p>
    <p>{{$product['company']}}</p>
    <span>{{$product['price']}}</span>
    {{-- <img src="{{$product['image']}}" alt=""> --}}

@endforeach
