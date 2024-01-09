<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Repositories\UserRepo;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $userRepo;
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $data = $this->userRepo->getUser();
        return Inertia::render('Admin/User/Index', $data);
    }

    public function save(UserRequest $request, User $user = null)
    {
        return $this->userRepo->save($request, $user);
    }

    public function delete(User $user)
    {
        return $this->userRepo->destroy($user);
    }
}
