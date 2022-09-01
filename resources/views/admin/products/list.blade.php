@extends('layout.admin')

@section('title', 'Quản lý sản  phẩm')

@section('content-title', 'Quản lý sản  phẩm')

@section('content')
    <div>
        <a href="{{route('product.create')}}">
            <button class='btn btn-success'>Tạo mới</button>
        </a>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Danh Muc</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Trang Thai</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            

            @foreach ($products_list as $products)
            <tr>
                    <td>{{$products->id}}</td>
                    <td>{{$products->name}}</td>
                    <td>
                        @foreach($category as $cate)
                            @if ($cate->id == $products->category_id)
                                {{$cate->name}}
                            @endif
                        @endforeach 
                    </td>
                    <td><img src="{{asset($products->thumbnail_url)}}" alt="" width="200"></td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>{{$products->status}}</td>
                    <td><a href="{{route('product.edit',$products->id)}}">
                        <button class='btn btn-warning'>Sửa</button>
                    </a>
                    <form
                        action="{{route('product.delete', $products->id)}}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger'>Xoa</button>
                    </form></td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    <div>
        {{$products_list->links()}}
    </div>
@endsection
