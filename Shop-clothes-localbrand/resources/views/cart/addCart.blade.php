@extends('layout.app')

@section('title','Thêm sản phẩm')

@push('addcart-css')
<link rel="stylesheet" href="{{ asset('css/addcart.css') }}">
@endpush

@include('totality.header')

@section('content')

<div class="container">
     @if (session('cart'))
     <div id="table_cart">
        @include('totality.table_cart')
     </div>

    <div class="mb-4" >
    <a  href="{{ route('dirtcoinall') }}"><button class="btn btn-dark">Tiếp tục mua hàng</button></a>
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

@push('addcart-js')
    <script>
        $(document).ready(function() {
            cartAjax('#id_detail');
         });

        function cartAjax(ele){
            url =  $(ele).data('url');
            sl = $(ele).val();
            id = $(ele).data('id');
            $.ajax({
                    url: url,
                    type: 'GET',  // http method
                    data: {
                        sl: sl,
                        id:id
                    },
                    success: function (data) {
                    $('#table_cart').html(data['table']);
                    document.getElementById('count_product').innerHTML = data['count'] ;
                    }

            });}
    </script>
@endpush
