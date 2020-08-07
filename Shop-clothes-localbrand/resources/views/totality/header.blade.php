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
                <nav class="navbar navbar-expand-md ">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto font-weight-bold coler-text">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" title="SHOP" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SHOP
                                </a>
                                <div class="dropdown-menu opacity-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item"  title="ALL" href="#">ALL</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="TOPS" href="#">TOPS</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="BOTTOM" href="#">BOTTOM</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="ACCESSORIES" href="#">ACCESSORIES</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="BAGS" href="#">BAGS</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="SPHYNS" href="#">SPHYNS</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" title="RESTOCKS" href="#">RESTOCKS</a>
                                </div>
                              </li>
                            <li class="nav-item">
                            <a class="nav-link" title="TOPS" href="#">TOPS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" title="BOTTOM" href="#">BOTTOM</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" title="ACCESSORIES" href="#">ACCESSORIES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" title="BAGS" href="#">BAGS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" title="SPHYNS" href="#">SPHYNS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" title="RESTOCKS" href="#">RESTOCKS</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            <div class="p-2 ">
                <div class="d-flex">
                    <a href="#" class="badge badge-light mr-2"><img src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/pic-search.png?1596352745267" alt="search"></a>
                <a href="{{route('login') }}" class="badge badge-light mr-2"><i style="font-size:35" class="fa">&#xf007;</i></a>
                    <a href="#" class="badge badge-light"><img src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/cart-icon.png?1596352745267" style="width:26px" alt="store"></a>
                </div>
            </div>
          </div>
    </div>
</div>


@push('header-js')
<script>
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
</script>
@endpush
