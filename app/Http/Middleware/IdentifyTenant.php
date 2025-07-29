<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IdentifyTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        logger('Tenant Middleware running for host: ' . $request->getHost());
        $host = $request->getHost();
        $parts = explode('.', $host);
        if (count($parts) < 3) {
            abort(403, 'Tenant subdomain missing');
        }

        $subdomain = $parts[0];
        $tenant = Tenant::where('subdomain', $subdomain)->first();
        if (!$tenant) {
            abort(404, 'Tenant not found');
        }
        app()->instance('tenant', $tenant);
        logger('Tenant resolved: ' . (app('tenant')->name ?? 'none'));

        return $next($request);
    }
}
