<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Throwable;

class UserController extends Controller
{

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('User/Index', [
            'users' => $this->userService->getUsersAndRoles()['users'],
            'roles' => $this->userService->getUsersAndRoles()['roles']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @throws Throwable
     */
    public function store(StoreUserRequest $request)
    {

        if (!$this->userService->createUser($request->validated())){
            return redirect()->back()->with('error', 'Failed to create user.');
        }else{
            return redirect()->back()->with('success', 'User successfully created.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        if (!$this->userService->updateUser($request->validated(), $user)){
            return redirect()->back()->with('error', 'Failed to create user.');
        }else{
            return redirect()->back()->with('success', 'User successfully created.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userService->deleteUser($user);
    }
}
