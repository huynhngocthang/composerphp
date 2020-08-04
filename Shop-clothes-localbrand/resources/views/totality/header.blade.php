@extends('layout.app')

@section('title','Dirty Coin')

@push('header-css')
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endpush

@section('header')

<div class="d-flex flex-column sticky-top">
    <div class="p-2 thang-p2">
        <div class="d-flex justify-content-between mb-3">
            <div class="p-2 "><img src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/logo.png?1596352745267" alt="error"></div>
            <div class="p-2 ">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active font-weight-bold"ss href="#">SHOP</a>
                        <a class="nav-item nav-link active font-weight-bold" title="ABOUT" href="#">ABOUT</a>
                        <a class="nav-item nav-link active font-weight-bold" title="COLLECTIONS" href="#">COLLECTIONS</a>
                        <a class="nav-item nav-link active font-weight-bold" title="BLOGS" href="#">BLOGS</a>
                        <a class="nav-item nav-link active font-weight-bold" title="CONTACT" href="#">CONTACT</a>
                        <a class="nav-item nav-link active font-weight-bold" title="SALE" href="#">SALE!</a>
                      </div>
                    </div>
                  </nav>
            </div>
            <div class="p-2 ">
                <div class="d-flex">
                    <a href="#" class="badge badge-light mr-2"><img src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/pic-search.png?1596352745267" alt="search"></a>
                    <a href="#" class="badge badge-light mr-2"><i style="font-size:35" class="fa">&#xf007;</i></a>
                    <a href="#" class="badge badge-light"><img src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/cart-icon.png?1596352745267" style="width:26px" alt="store"></a>
                </div>
            </div>
          </div>
    </div>
</div>
