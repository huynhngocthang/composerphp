@extends('home')

@section('title','Chi tiết sản phẩm')

@section('content')

<div class="d-flex">

        <div class="card ml-3 pt-3" style="width: 18rem;">
        <img src="/storage/images/{{ $cart->image }}" class="card-img-top " alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $cart->name }}</h5>
            <p class="card-text">{{ $cart->price }} đ</p>
            <div class="d-flex bd-highlight mb-3">
                <div class="mr-auto p-2 bd-highlight">
                    <a href="{{ route('StoreCart.Showstore', $cart->id) }}" class="alert-link">Mua ngay</a>
                </div>
                <div class="p-2 bd-highlight">
                <a href="{{ route('cart.list') }}" class="alert-link">Trở lại</a>
                </div>
              </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="card bg-secondary">
          <div class="card-body">
          <h5 class="card-title">Sản Phẩm {{ $cart->id}}</h5>
            <p class="card-text">Tặng baner, thiệp (trị giá 20.000đ) miễn phí</p>
            <p class="card-text"> Giảm ngay 20.000đ khi bạn tạo đơn hàng online</p>
            <p class="card-text"> Giảm tiếp 3% cho đơn hàng bạn tạo onnline lần thứ 2</p>
            <p class="card-text"> Giao miễn phí trong nội thành 63/63 tỉnh</p>
          </div>
        </div>
      </div>
              <div class="card-body ml-5">
              <a class="badge badge-primary " href="{{route('StoreCart.store',$cart->id)  }}"><img src="/storage/images/cart.svg" style="width:30px" alt="error"></a>
              </div>
    </div>


    <br>
    <hr>
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>

      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <span class="sr-only">Loading...</span>
      </button>
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>




@endsection
