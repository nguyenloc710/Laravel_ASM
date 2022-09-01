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
        action="{{isset($products) ? route('product.update', $products->id) : route('product.store')}}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @if (isset($products))
            @method('PUT')
        @endif
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control' value="{{isset($products) ? $products->name : old('name')}}">
        </div>
        <div class='form-group'>
            <label for="">Danh mục</label>
            <select name="category_id" id="category_id">
                @foreach ($category_list as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for="">Giá</label>
            <input type="text" name='price' class='form-control' value="{{isset($products) ? $products->price : old('price')}}">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name='thumbnail_url' class='form-control'>
            @if (isset($product->thumbnail_url))
                <img src="{{asset($product->thumbnail_url)}}" alt="{{$product->thumbnail_url}}" width="100">
            @endif
        </div>
        <div class='form-group'>
            <label for="">Số lượng</label>
            <input type="text" name='quantity' class='form-control' value="{{isset($products) ? $products->quantity : old('quantity')}}">
        </div>
        <div class='form-group'>
            <label for="">Mô tả</label>
            <input type="text" name='description' class='form-control' value="{{isset($products) ? $products->description : old('description')}}">
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{isset($products) && $products->status === 1 ? 'checked' : ''}}> Kích hoạt
            <input type="radio" name='status' value="0"  {{isset($products) && $products->status === 0 ? 'checked' : ''}}> K kích hoạt
        </div>
        <div>
            <button class='btn btn-primary'>{{isset($products) ? 'Cập nhật' : 'Tạo mới'}}</button>
            <button type="reset" class='btn btn-warning'>Nhập lại</button>
        </div>
    </form>
@endsection

<!-- Lab 3: Hoàn thiện form chỉnh sửa, có hiển thị ảnh cũ và lưu dữ liệu chỉnh sửa -->
<!-- method PUT, sử dụng ->update() -->
