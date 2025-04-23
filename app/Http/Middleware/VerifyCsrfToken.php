<?php

// namespace App\Http\Middleware;

// use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

// class VerifyCsrfToken extends Middleware
// {
//     /**
//      * The URIs that should be excluded from CSRF verification.
//      *
//      * @var array<int, string>
//      */
//     protected $except = [
//         'products*', // Disable CSRF for all product routes
//         'api/*',     // Optional: Disable CSRF for all API routes
//     ];
// }

// namespace App\Http\Middleware;

// use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

// class VerifyCsrfToken extends Middleware
// {
//     /**
//      * The URIs that should be excluded from CSRF verification.
//      *
//      * @var array<int, string>
//      */
//     protected $except = [
//         '/login',
//         '/some-other-page',
//     ];
// }

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = ['login', 'route2'];
}