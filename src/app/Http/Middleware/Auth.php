<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Summary;

class Auth
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $summary = Summary::where('api_token', $token)->first();

        if (!$summary) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $request->merge([
            'summary' => $summary
        ]);

        return $next($request);
    }
}