<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            try {
                $locale = strtolower(geoip($request->ip())['iso_code'] ?? 'en');
            } catch (\Exception $e) {
                $locale = 'en'; // fallback if geoip fails
            }

            if (!in_array($locale, ['en', 'si'])) {
                $locale = 'en';
            }

            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return $next($request);
    }

}
