<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserRepo
{

    public function getUser()
    {
        $data = [];
        $perPage = request()->perPage ?: 5;
        $data['users'] = User::query()->when(request()->search, function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('role', 'LIKE', "%{$search}%");
        })->paginate($perPage);
        $data['filters'] = request()->only('search');

        return $data;

    }
    public function save(UserRequest $request, User $user = null)
    {
        if (!$request->id) {
            $request->validate([
                'password' => 'required',
            ]);
        }

        $data = $request->validated();

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        if ($request->id) {
            $user = User::findOrFail($request->id);
            $user->update($data);
        } else {

            User::create($data);
        }

        $action = $user ? 'updated' : 'created';
        return redirect()->back()->with('message', "User $action Successfully");
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message', 'User deleted Successfully');
    }
}
