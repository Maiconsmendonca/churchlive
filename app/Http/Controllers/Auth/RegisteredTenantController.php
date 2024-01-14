<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\TenantRegistrationRequest;
use App\Models\Tenant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredTenantController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param TenantRegistrationRequest $request
     * @return RedirectResponse
     */
    public function store(TenantRegistrationRequest $request): RedirectResponse
    {
        $tenant = Tenant::create(['tenant_id' => $request['tenant_id']]);

        $tenant->domains()->create(['domain' => $request['domain']]);

        return redirect(tenant_route($tenant->domains->first()->domain, 'tenant.login'));
    }
}
