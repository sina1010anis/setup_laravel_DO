<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use JWTAuth;

class AuthJWT
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof TokenInvalidException) {
                return response()->json(['token' => 'Invalid Signature...!'], 400);
            } else if ($e instanceof TokenExpiredException) {
                return response()->json(['token' => 'Token Expired...!'], 400);
            } else {
                return response()->json(['token'=> 'Token not found...!'], 400);
            }
        }
        return $next($request);
    }
}
