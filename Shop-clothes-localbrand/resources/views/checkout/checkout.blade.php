@extends('layout.app')

@section('title','Checkout')

@push('checkout-css')
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endpush

@section('content')

<div class="container">
    <div class="d-flex mb-3">
        <div class="p-2 pr-5 w-50">
            <form>
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Họ và tên">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Số điện thoại">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Địa chỉ ">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="validationTextarea" placeholder="Ghi chú (tùy chọn)" required></textarea>
                  </div>
              </form>
        </div>
        <div class="p-2 ">
            <div class="d-flex flex-column">
                <div class="p-2 ">
                    <h4>Vận chuyển</h4>
                    <div>
                        <p>Vận chuyện tốt nhất đến khách hàng</p>
                    </div>
                </div>
                <div class="p-2 ">
                    <h4>Thanh toán</h4>
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <input  type="radio"checked>
                            <label for="#">
                                <span>Thanh toán khi giao hàng (COD)</span>
                                <span><i style='font-size:20px ; color:#1990c6' class='fas'>&#xf53d;</i></span>
                            </label>
                        </div>
                        <div class="p-2">
                            <p>Bạn chỉ phải thanh toán khi nhận được hàng</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="p-2 ml-auto ">
            <div class="d-flex flex-column ">
                <div class="p2">
                <h5>Đơn hàng ( {{ session('cart')['count'] }} sản phẩm) </h5>
                </div>
            @foreach (session('cart')['cart'] as $key => $item)
            <div class="p-2">
                <div class="d-flex ">
                <div class="p-2  ">
                    <img style="max-width:50px" src="../../storage/images/{{ $item['image'] }}" alt="errer">
                    <div class="span_sl">
                        <span style="color: white ; font-size:12px">{{ $item['sl'] }}</span>
                    </div>
                </div>
            <div class="p-2 "><p>{{ $item['name'] }}</p></div>
                    <div  class="p-2 ml-auto ">
                    <p>{{ number_format($item['price']) }}VNĐ</p>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="p-2">
                <input type="text" placeholder="Nhập mã giảm giá"> <label for="#"><button style="color:rgb(80, 110, 175)">Áp dụng</button></label>
            </div>
            <div class="p-2">
                <div class="d-flex">
                    <div class="p-2">
                        <h5>Tổng cộng</h5>
                    </div>
                    <div class="p-2 ml-4">
                        <p>{{ number_format($item['total_detail'])}}VNĐ</p>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="d-flex">
                    <div class="p-2">
                        <a href="{{ route('cartAll') }}">< quay lại giỏ hàng</a>
                    </div>
                    <div class="p-2 ml-4">
                       <button class="btn btn-dark">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>



