<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $status;
    public string $color;

    public function __construct(string $status)
    {
        $this->status = $status;

        $this->color = match ($status) {
            'Aman' => 'green',
            'Menipis' => 'yellow',
            'Habis' => 'red',
            default => 'gray',
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
}
