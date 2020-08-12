@extends('layout.app')

@section('title','Thêm sản phẩm')

@include('totality.header')

@section('content')

<div class="container">
                    @if (session('cart'))
            <div class="d-flex">
                <div class="p-2">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Xóa</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach (session('cart') as $key => $item)
                    <tr>
                        <td>
                            <div class="d-flex">
                                <div class="p-2">
                                    <img style="max-width:150px" src="../../storage/images/{{ $item['image'] }}" alt="errr">
                                </div>
                                <div style="margin-top: 4.3rem" class="p-2">
                                    <label class="ml-2">{{ $item['name'] }}</label>
                                    <p class="ml-5">{{$item['price'] }}.000đ</p>
                                </div>
                            </div>
                        </td>
                            <td><p style="margin-top: 4.8rem">{{ $item['sl'] }}</p></td>
                            <td><p style="margin-top: 4.8rem">{{ $item['total_detail']}}.000đ</p></td>
                            <td><p style="margin-top: 3.2rem"><a href="#" style="color: black" ><i style="font-size:24px" class="fa mt-4">&#xf014;</i></a></p></td>
                          </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-2 ml-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                  <th>Tổng Tiền :</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href=""><button class="btn btn-dark">Thanh Toán</button></a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    @else
    <div class="d-flex justify-content-around  mb-3">
        <div class="p-2 ">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <img src="../../storage/images/empty_cart.png" alt="erree">
                    <p style="margin-left: 5rem" class="mt-3">Không có sản phẩm nào trong giỏ hàng của bạn</p>
                    <a href="{{ route('dirtcoinall') }}">  <button style="margin-left: 9.5rem" class="btn btn-dark">TIẾP TỤC MUA HÀNG</button></a>
                </div>
              </div>
        </div>
      </div>
    @endif
</div>








@include('totality.footer')
