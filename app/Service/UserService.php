<?php


namespace App\Service;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;
use Spatie\Permission\Models\Role;
use Throwable;

class UserService
{

    public function getUsersAndRoles()
    {
        $roles = Role::all()->pluck('name', 'id');

        $users = User::query()->with('roles')->get();

        return [
            'users' => $users,
            'roles' => $roles
        ];
    }

    /**
     * @throws Throwable
     */
    public function createUser(array $newUserData)
    {
        return DB::transaction(function () use ($newUserData) {

            $user = User::create([
                'name' => $newUserData['username'],
                'email' => $newUserData['email'],
                'password' => Hash::make($newUserData['password'])
            ]);

            $role = Role::findById($newUserData['role'], 'web');

            $user->assignRole($role);

            return $user;
        });
    }

    public function updateUser(array $updateUserData, User $user)
    {
        return DB::transaction(function () use ($user, $updateUserData)
        {
            try {
                $user->update([
                   'name' => $updateUserData['username'],
                   'email' => $updateUserData['email']
                ]);

                $role = Role::findById($updateUserData['role'], 'web');

                $user->assignRole($role);

                return true;

            } catch (Exception $e){
                Log::error('User Update Failed: ' . $e->getMessage());

                return false;
            }
        });
    }

    public function deleteUser(User $user): bool
    {
        try {
            return (bool) $user->delete();
        }catch (\Exception $e){
            Log::error("Failed to delete employee {$user->id}: " . $e->getMessage());
            return false;
        }
    }

}
