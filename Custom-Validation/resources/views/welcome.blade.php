@extends('home')

@section('title','thêm khách hàng')

@section('content')

<p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>


<form method="post" action="{{ Route('form.submit') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">age</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="age">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div>




@endsection
