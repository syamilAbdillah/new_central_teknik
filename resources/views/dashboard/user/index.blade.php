<x-dashboard-layout>
    <div class="p-4">
        <div class="p-4 space-y-4 rounded-lg bg-white">
            <div class="flex items-center w-full">
                <a class="btn btn-success" href="{{ route('users.create') }}" >tambah data pengguna</a>
            </div>

            <x-table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama pengguna</th>
                        <th>email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button class="btn bg-rose-500 text-white hover:bg-rose-400">delete</button>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</x-dashboard-layout>