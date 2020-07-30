@extends('home')

@section('title','Danh sách sản phẩm')
<style>
    img {
        width: 200px ;
        height: 200px;
        object-fit: cover;
    }
</style>
@section('content')

<div class="card-body ml-5 text-right">
    <a class="badge badge-primary " href=""><img src="/storage/images/cart.svg" style="width:30px ; height:30px" alt="error"></a>
</div>

<div class="d-flex flex-wrap ">
@foreach ($carts as $key => $cart)

    <div class="card ml-3 pt-3" style="width: 18rem;">
    <img src="/storage/images/{{$cart->image }}" class="card-img-top " alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $cart->name }}</h5>
        <p class="card-text">{{ $cart->price }} đ</p>
        <div class="d-flex bd-highlight mb-3">
            <div class="mr-auto p-2 bd-highlight">
                <a href="{{route('cart.destroy', $cart->id) }}" class="alert-link">DELETE</a>
            </div>
            <div class="p-2 bd-highlight">
            <a href="{{ route('cart.show', $cart->id) }}" class="alert-link">Xem</a>
            </div>
          </div>
    </div>
  </div>

@endforeach
</div>



@endsection
