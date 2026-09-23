<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

abstract class Controller
{
    public function sales()
    {
        Gate::authorize('view-sales-report');

        return view('reports.sales');
    }
}
