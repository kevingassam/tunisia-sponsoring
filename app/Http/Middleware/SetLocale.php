<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if (!in_array($locale, Config::get('app.available_locales'))) {
            // Rediriger vers la langue par défaut 'fr' si la langue n'est pas valide
            return redirect('/fr' . $request->getRequestUri());
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
