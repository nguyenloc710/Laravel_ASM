@extends('layout.admin')

@section('title', 'Tạo mới người dùng')

@section('content-title', 'Tạo mới danh mục')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form
        action="{{isset($category) ? route('category.update', $category->id) : route('category.store')}}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @if (isset($category))
            @method('PUT')
        @endif
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control' value="{{isset($category) ? $category->name : old('name')}}">
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{isset($category) && $category->status === 1 ? 'checked' : ''}}> Kích hoạt
            <input type="radio" name='status' value="0"  {{isset($category) && $category->status === 0 ? 'checked' : ''}}> K kích hoạt
        </div>
        <div>
            <button class='btn btn-primary'>{{isset($category) ? 'Cập nhật' : 'Tạo mới'}}</button>
            <button type="reset" class='btn btn-warning'>Nhập lại</button>
        </div>
    </form>
@endsection

<!-- Lab 3: Hoàn thiện form chỉnh sửa, có hiển thị ảnh cũ và lưu dữ liệu chỉnh sửa -->
<!-- method PUT, sử dụng ->update() -->
