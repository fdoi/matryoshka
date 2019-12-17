<?php

namespace Laracasts\Matryoshka;

use Cache;

class FlushViews
{
    /**
     * Handle the request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @deprecated Not Supported.
     */
    public function handle($request, $next)
    {
        // Flush not supported.
        //Cache::tags('views')->flush();

        return $next($request);
    }
}

