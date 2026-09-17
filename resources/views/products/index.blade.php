<h1 class="text-2xl font-bold mb-4">
    Daftar Produk
</h1>

<table class="w-full border-collapse border">
    <thead>
        <tr>
            <th class="border px-4 py-2 text-left">Nama Produk</th>
            <th class="border px-4 py-2 text-left">Stok</th>
            <th class="border px-4 py-2 text-left">Status</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($products as $product)
            @php
                $stockStatus = match (true) {
                    $product->stock <= 0 => 'Habis',
                    $product->stock <= 5 => 'Menipis',
                    default => 'Aman',
                };
            @endphp

            <tr>
                <td class="border px-4 py-2">
                    {{ $product->name }}
                </td>

                <td class="border px-4 py-2">
                    {{ $product->stock }}
                </td>

                <td class="border px-4 py-2">
                    <x-badge :status="$stockStatus" />
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="border px-4 py-2 text-center">
                    Belum ada produk.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
