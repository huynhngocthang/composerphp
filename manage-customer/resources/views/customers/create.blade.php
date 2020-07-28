@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12">
          <h1>Thêm mới khách hàng</h1>
      </div>

      <p style='color:green'>{{ (isset($validated)) ? $validated : '' }}</p>

      <div class="col-12">
         <form method="post" action="{{ route('customers.store') }}">
         @csrf
         <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" name="email" placeholder="Enter email" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Ngày sinh</label>
            <input type="date" class="form-control" name="dob" required>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>

       <div class="error-message">
        @if ($errors->any())
            @foreach($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
        @endif
    </div>

</div>
   </div>
@endsection
