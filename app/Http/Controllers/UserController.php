<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $user = User::select('*')
        ->orderBy('id','desc')
        ->paginate(5);
        return view('admin.User.list',['user_list' => $user]);
    }

    public function delete(User $user){
        if($user){
            $user->delete();
            return redirect()->back();
        }
    }
    private function saveFile($file, $prefixName = '', $folder = 'public')
    {
        if ($file) {
            $fileName = $file->hashName();
            $fileName = isset($prefixName)
                ? $prefixName . '_' . $fileName
                : $fileName;

            return $file->storeAs($folder, $fileName);
        }
    }
    public function create(){
        return view('admin.User.create');
    }

    public function store(Request $request){
        // dd($request);

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required',
            'username' => 'required',
        ]);
        $user = new User();

        $user->fill($request->all());
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $avatarName = $request->name . '_' . $avatarName;
            $user->avatar = $avatar->storeAs('users', $avatarName);
        } else {
            $user->avatar = '';
        }
        $user->save();
        return redirect()->route('user.list');   
    }

    public function edit(User $user)
    {
        // dd($user);

        return view('admin.user.create', [
            'user' => $user,
        ]);
    }

    public function update(User $user , UserRequest $request) {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required',
            'username' => 'required',
        ]);
        $user->fill($request->all());
        if ($request->hasFile('avatar')) {
            $user->avatar = $this->saveFile(
                $request->avatar,
                $user->username,
                '/users'
            );
        }
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('user.list');
    }
}
