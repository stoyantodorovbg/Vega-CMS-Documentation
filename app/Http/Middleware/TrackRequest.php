<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Jobs\TrackRequest as TrackRequestJob;

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
        TrackRequestJob::dispatchIf(
            config('logging.logRequests', false),
            $request->route()->uri()
        );

        return $next($request);
    }
}
