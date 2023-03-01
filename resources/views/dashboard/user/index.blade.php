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
                                <button class="btn btn-danger" x-data @click.prevent="$dispatch('open-modal', 'user-delete-confirmation-{{$user->id}}')" type="submit">delete</button>
                                    <x-modal name="user-delete-confirmation-{{$user->id}}" focusable>
                                        <x-delete-confirm>
                                            <form method="post" action="{{ route('users.destroy', ['user' => $user]) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" >hapus</button>
                                            </form>
                                        </x-delete-confirm>
                                    </x-modal>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</x-dashboard-layout>