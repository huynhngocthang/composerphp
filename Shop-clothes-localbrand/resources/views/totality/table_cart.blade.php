<style>
    input[type=number]::-webkit-inner-spin-button {
    opacity: 1
}
</style>
<div class="d-flex">
    <div class="p-2 mr-5">
    <td><a href="{{ route('clearall') }}"><button class="btn btn-dark">Xóa hết</button></a></td>
    </div>
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
        @foreach (session('cart')['cart'] as $key => $item)
        <tr>
            <td>
                <div class="d-flex">
                    <div class="p-2">
                        <img style="max-width:150px" src="../../storage/images/{{ $item['image'] }}" alt="errr">
                    </div>
                    <div style="margin-top: 4.3rem" class="p-2">
                        <label class="ml-2">{{ $item['name'] }}</label>
                        <p class="ml-5"> {{ number_format( $item['price']) }}VNĐ</p>
                    </div>
                </div>
            </td>
                <td>
                    <div style="margin-top: 5rem" class="d-flex">
                        <div class="buttons_added">

                        <input id="id_detail" onchange="cartAjax(this)" data-id="{{$item['id']}}" data-url="{{ route('apiCart') }}" max="10" min="1" type="number" value="{{$item['sl'] }}" >
                          </div>
                    </div>
                </td>
                <td><p style="margin-top: 4.8rem">{{ number_format($item['total_detail'])}}VNĐ</p></td>
        <td><p style="margin-top: 3.2rem"><a href="{{ route('removecart',$item['id']) }}" style="color: black" ><i style="font-size:24px" class="fa mt-4">&#xf014;</i></a></p></td>
              </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="p-2 ml-5">
<table class="table table-striped">
    <thead>
      <tr>
      <th>Tổng Tiền : {{ number_format(session('cart')['total']) }}VNĐ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><a href="{{ route('checkout') }}"><button class="btn btn-dark">Thanh Toán</button></a></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
