<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all() ;

        return view('customers.list', compact('customers')) ;
    }

    public function create() {

        return view('customers.create') ;
    }

    public function store(FormExampleRequest $request) {
        // $validated = $request->validated() ;
      $customer = new Customer() ;
      $customer->name = $request->input('name') ;
      $customer->email = $request->input('email') ;
      $customer->dob = $request->input('dob') ;
      $customer->save() ;
    // dd(request()->all());

      session()->flash('success', 'tạo mới khách hàng thành công');

      return redirect()->route('customers.index','validated') ;

    }

    public function edit($id) {
        // hiển thị form và dữ liệu khách hàng cần sửa

        $customer = Customer::findOrFail($id) ;
        return view('customers.edit', compact('customer')) ;
    }

    public function update(FormExampleRequest $request, $id) {
        //thực hiện tác vị sửa

        $customer = Customer::findOrFail($id) ;
        $customer->name = $request->input('name') ;
         $customer->email = $request->input('email') ;
        $customer->dob = $request->input('dob') ;
        $customer->save() ;
        //dùng session để đưa ra thông báo
        Session::flash('success', 'Cập nhật khách hàng thành công');
      //cap nhat xong quay ve trang danh sach khach hang
      return redirect()->route('customers.index');

    }

    public function destroy($id) {
        //xóa khách hàng
        $customer = Customer::findOrFail($id) ;
        $customer->delete() ;

        session()->flash('success', 'Xóa khách hàng thành công');

        return redirect()->route('customers.index') ;

    }
}
