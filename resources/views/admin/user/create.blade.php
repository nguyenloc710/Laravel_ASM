@extends('layout.admin')

@section('title', 'Tạo mới người dùng')

@section('content-title', 'Tạo mới người dùng')

@section('content')
{{-- {{dd($user)}} --}}
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form
        action="{{isset($user) ? route('user.update', $user->id) : route('user.store')}}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @if (isset($user))
            @method('PUT')
            @enctype('multipart/form-data')
        @endif
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control' value="{{isset($user) ? $user->name : old('name')}}">
        </div>
        <div class='form-group'>
            <label for="">User Name</label>
            <input type="text" name='username' class='form-control' value="{{isset($user) ? $user->username : old('name')}}">
        </div>
        <div class='form-group'>
            <label for="">Email</label>
            <input type="text" name='email' class='form-control' value="{{isset($user) ? $user->email : ''}}">
        </div>
        <div class='form-group'>
            <label for="">Mật khẩu</label>
            <input type="password" name='password' class='form-control'>
        </div>
        <div class='form-group'>
            <label for="">Ảnh đại diện</label>
            <input type="file" name='avatar' class='form-control'>
            @if (isset($user->avatar))
                <img src="{{asset($user->avatar)}}" alt="{{$user->name}}" width="100">
            @endif
        </div>
        <div class='form-group'>
            <label for="">Phân quyền</label>
            <input type="radio" name='role' value="1" {{isset($user) && $user->role === 1 ? 'checked' : ''}}> Admin
            <input type="radio" name='role' value="0"  {{isset($user) && $user->role === 0 ? 'checked' : ''}}> User
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{isset($user) && $user->status === 1 ? 'checked' : ''}}> Kích hoạt
            <input type="radio" name='status' value="0"  {{isset($user) && $user->status === 0 ? 'checked' : ''}}> K kích hoạt
        </div>
        <div>
            <button class='btn btn-primary'>{{isset($user) ? 'Cập nhật' : 'Tạo mới'}}</button>
            <button type="reset" class='btn btn-warning'>Nhập lại</button>
        </div>
    </form>
@endsection

<!-- Lab 3: Hoàn thiện form chỉnh sửa, có hiển thị ảnh cũ và lưu dữ liệu chỉnh sửa -->
<!-- method PUT, sử dụng ->update() -->
