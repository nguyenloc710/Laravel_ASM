@extends('layout.admin')

@section('title', 'Quản lý người dùng')

@section('content-title', 'Quản lý người dùng')

@section('content')
    <div>
        <a href="{{route('user.create')}}">
            <button class='btn btn-success'>Tạo mới</button>
        </a>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Quyền</th>
                <th>Avatar</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_list as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{$user->role == 1 ? 'admin' : 'user'}}
                    </td>
                    <td><img src="{{asset($user->avatar)}}" alt="" width="100"></td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}">
                            <button class='btn btn-warning'>Sửa</button>
                        </a>
                        <form
                            action="{{route('user.delete', $user->id)}}"
                            method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button class='btn btn-danger'>Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$user_list->links()}}
    </div>
@endsection
