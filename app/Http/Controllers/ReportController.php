<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function sales()
    {
        return view('reports.sales');
    }
}
