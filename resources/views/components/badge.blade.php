@php
    $colors = [
        'green' => 'background-color: #dcfce7; color: #166534;',
        'yellow' => 'background-color: #fef9c3; color: #854d0e;',
        'red' => 'background-color: #fee2e2; color: #991b1b;',
        'gray' => 'background-color: #e5e7eb; color: #374151;',
    ];
@endphp

<span
    style="{{ $colors[$color] }}"
    class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold"
>
    {{ $status }}
</span>
