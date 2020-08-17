@extends('layout.app')

@include('totality.header')

@include('totality.image')


@push('content-css')
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endpush

@section('content')

<div class="container mt-3 container-font">
    <div class="d-flex justify-content-around  mb-3 boder-d-flex">
      <div class="p-2 ">
        <nav class="navbar navbar-expand-sm  ">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#"><img style="width:50px; height:50px" src="../storage/images/logo.jpg" alt="logo"></a>
                <ul class="navbar-nav navbar-content">
                <li class="nav-item  ">
                    <div class="dropdown">
                        <a class="nav-item dropdown-toggle navbar-item-link" data-toggle="dropdown" href="#" >Lọc giá</a>
                        <div class="dropdown-menu">
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Giá dưới 100.00đ</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">100.000đ - 200.000đ</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">200.000đ - 300.000đ</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">300.000đ - 500.000đ</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Giá trên 500.000đ</a></div>
                            </div>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-item dropdown-toggle navbar-item-link" data-toggle="dropdown" href="#" >Thương Hiệu</a>
                        <div class="dropdown-menu">
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">SPHYNX</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">DIRTY COINS</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">DIRTY COINS / SPHYNX</a></div>
                            </div>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-item dropdown-toggle navbar-item-link" data-toggle="dropdown" href="#" >Loại</a>
                        <div class="dropdown-menu">
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Áo HOODIES</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">BACKPACKS</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">BEANIES</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">BOWLER BAGS</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">CAPS</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">CAPS/HATS</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">CARD CASE</a></div>
                            </div>
                        </div>
                      </div>

                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-item dropdown-toggle navbar-item-link" data-toggle="dropdown" href="#" >Kích thước</a>
                        <div class="dropdown-menu">
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Size S</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Size M</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Size L</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Size XL</a></div>
                            </div>
                        </div>
                      </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-item dropdown-toggle navbar-item-link" data-toggle="dropdown" href="#" >Màu sắc</a>
                        <div class="dropdown-menu">
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Trắng</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Xanh dương</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Đỏ</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Đen</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Hồng</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Xám</a></div>
                            </div>
                            <div class="d-inline-flex text-white">
                                <div class="pl-1"><input type="checkbox"> </div>
                                <div class=""><a class="dropdown-item" href="#">Xanh</a></div>
                            </div>
                        </div>
                      </div>
                </li>
                </ul>
          </nav>
      </div>
      <div class="p-2 select-display">
        <select class="form-control form-control-sm" >
            <option>Thứ tự</option>
            <option>Mới đến cũ</option>
            <option>Cũ đến mới</option>
          </select>
      </div>
    </div>
        <div class="row">
            @foreach ($products as $key => $product)
            <div class="col-sm-4">
                <div class="card-group">
                    <div class="card card-boder ">
                    <a href="{{ route('detail', $product->id) }}">
                            <img class="card-img-top" src="../storage/images/{{ $product->image1 }}" alt="Card image cap">
                        </a>
                      <div class="card-body text-center">
                      <p class="card-text">{{ $product->name }}</p>
                      <p class="card-text "><small class="text-muted font-weight-bold">{{number_format($product->price)}}VNĐ</small></p>
                      </div>
                    </div>
            </div>
        </div>
        @endforeach
  </div>
</div>

@include('totality.footer')
