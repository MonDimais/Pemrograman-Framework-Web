<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <a
                    href="{{ route('categories.create') }}"
                    class="mb-4 inline-block rounded bg-blue-600 px-4 py-2 text-white"
                >
                    Tambah Kategori
                </a>

                <table class="w-full border-collapse border">
                    <thead>
                        <tr>
                            <th class="border p-2 text-left">No</th>
                            <th class="border p-2 text-left">Nama Kategori</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="border p-2">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-2">
                                    {{ $category->name }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="border p-2 text-center">
                                    Belum ada kategori.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
