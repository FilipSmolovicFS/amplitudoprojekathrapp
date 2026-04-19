<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Permissions\Permissions;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $user = $request->user();

        return [
            ...parent::share($request),
            'flash' => [
                'success' => fn() => $request->session()->get('success'),
                'error' => fn() => $request->session()->get('error')
            ],
            'auth' => [
                'user' => $user?->with('role') ?? null,
                'can' => fn() => [
                    'viewDashboard' => $user?->can(Permissions::VIEW_DEFAULT_PAGES) ?? false,
                    'manageUsers' => $user?->can(Permissions::MANAGE_USERS) ?? false,
                    'manageContractType' => $user?->can(Permissions::MANAGE_CONTRACT_TYPE) ?? false,
                    'manageStatus' => $user?->can(Permissions::MANAGE_STATUS) ?? false,
                    'managePosition' => $user?->can(Permissions::MANAGE_POSITION) ?? false,
                    'viewLogs' => $user?->can(Permissions::VIEW_LOGS_PAGE) ?? false,
                    'manageEmployees' => $user?->can(Permissions::MANAGE_EMPLOYEES) ?? false,
                    'manageContract' => $user?->can(Permissions::MANAGE_CONTRACT) ?? false
                ]
            ]
            //
        ];
    }
}
