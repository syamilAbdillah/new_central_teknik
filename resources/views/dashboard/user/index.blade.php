<x-dashboard-layout>
    <div class="p-4">
        <div class="p-4 space-y-4 rounded-lg bg-white">
            <div class="flex items-center w-full">
                <a class="btn btn-success" href="{{ route('users.create') }}" >tambah data pengguna</a>
            </div>

            <p>{{ $users }}</p>
        </div>
    </div>
</x-dashboard-layout>