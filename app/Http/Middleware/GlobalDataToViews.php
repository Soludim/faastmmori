<?php

namespace App\Http\Middleware;

use App\Models\News;
use Closure;
use Illuminate\Http\Request;

class GlobalDataToViews
{
    public function handle(Request $request, Closure $next)
    {
        $global_data = [
            'latest_news' => News::latest()->limit(3)->get()
        ];

        view()->share($global_data);
        return $next($request);
    }
}