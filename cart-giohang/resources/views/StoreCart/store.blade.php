@extends('home')

@section('title','Giỏ hàng')
@section('content')
<style>
    img {
        width: 100px
    }
</style>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"><a href="">01.Giỏ hàng</a></th>
        <th scope="col"><a href="">02.Tên đơn hàng</a></th>
        <th scope="col"><a href="">03.Thanh toán</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="/storage/images/{{ $cart->image }}" alt="error"></td>
        <td><h4>{{ $cart->name }}</h4></td>
        <td><h3>{{ $cart->price }}</h3>đ</td>
      </tr>
    </tbody>
  </table>

<a href="{{ route('cart.list') }}" class="badge badge-success">Trang chủ</a>



@endsection
