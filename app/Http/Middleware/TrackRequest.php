<?php

namespace App\Http\Middleware;

use App\Models\RequestTrack;
use Closure;
use Illuminate\Http\Request;

class TrackRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('logging.logRequests', false)) {
            RequestTrack::create([
                'url' => $request->route()->uri(),
            ]);
        }

        return $next($request);
    }
}
