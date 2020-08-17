@extends('layout.app')

@section('title','chi tiết sản phẩm')

@push('detail-css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endpush

@include('totality.header')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center  mb-3">
        <div class="p-2 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img style="width:800px ; height:800px"  class="d-block" src="../../storage/images/{{$product->image1}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                  <img style="width:800px ; height:800px" class="d-block " src="../../storage/images/{{ $product->image2 }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img style="width:800px ; height:800px  " class="d-block" src="../../storage/images/{{ $product->image3 }}" alt="Third slide">
                  </div>
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a> --}}
                <div class="container pt-4 pb-5">
                  <div class="row carousel-indicators">
                    <div class="col-md-4 item">
                      <img style="width:100px; height:100px" src="../../storage/images/{{$product->image1}}" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="0"/>
                    </div>
                    <div class="col-md-4 item">
                      <img style="width:100px; height:100px" src="../../storage/images/{{ $product->image2 }}" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="1"/>
                    </div>
                    <div class="col-md-4 item">
                      <img style="width:100px; height:100px" src="../../storage/images/{{ $product->image3 }}" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="2"/>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="p-2 ">
            <div class="card border-card" style="width: 18rem;">
                <div class="card-body">
                <h6 class="card-title ">{{ $product->name }}</h6>
                <p> {{ number_format($product->price) }} VNĐ</p>
                  <select class="form-control form-control-lg mb-3">
                    <option>M</option>
                    <option>X</option>
                    <option>L</option>
                  </select>
                <a href="{{ route('addcart',['product'=>$product]) }}"><button type="button" class="" class="btn btn-light" data-toggle="modal" data-target="#mymodal">THÊM VÀO GIỎ</button></a>
                 <button type="button" class="btn btn-dark">MUA NGAY</button>
                  <p class="card-text font-weight-bold mt-2">Chi tiết sản phẩm :</p>
                <p>- {{ $product->introduce }}</p>
                </div>
              </div>
        </div>
      </div>
      <div class="d-flex justify-content-around  mb-3 mt-4">
        <div class="p-2 "><h2>SẢN PHẨM LIÊN QUAN</h2></div>
      </div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="d-flex justify-content-around  mb-3">
                    <div class="p-2"><p>THÊM GIỎ HÀNG THÀNH CÔNG</p></div>
                  </div>
                  <div class="d-flex mb-3">
                    <div class="p-2  ">
                    <img style="max-width:50px" src="../../storage/images/{{ $product->image1 }}" alt="">
                    </div>
                    <div class="p-2 ml-3">
                    <h6>{{ $product->name }}</h6>
                    <p>Số lượng mua: 1</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <div class="p-2 ">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tiếp tục mua hàng</button>
                    </div>
                    <div class="p-2">
                     <a href=""><button type="button" class="btn btn-dark">Xem giỏ hàng</button></a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
    </div>
</div>


@push('detail-js')
    <script>

    </script>
@endpush



@include('totality.footer')
