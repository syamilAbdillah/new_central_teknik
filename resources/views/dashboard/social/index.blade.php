<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg">
            <a href="{{ route('socials.create') }}" class="btn btn-success">Tambah Data Sosmed</a>
            <x-table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>logo</th>
                        <th>nama sosmed</th>
                        <th>link sosmed</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($socials as $social)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $social->image }}" alt="{{ $social->name }}" class="w-16">
                            </td>
                            <td>{{ $social->name }}</td>
                            <td>
                                <a href="{{$social->link}}" class="btn underline text-indigo-600">link</a>
                            </td>
                            <td>
                                <div class="flex items-center gap-1">
                                    <a href="{{ route('socials.edit', ['social' => $social]) }}" class="btn btn-neutral">edit</a>
                                    <button class="btn btn-danger" x-data @click.prevent="$dispatch('open-modal', 'social-delete-confirmation-{{$social->id}}')">hapus</button>
                                    <x-modal name="social-delete-confirmation-{{$social->id}}" focusable>
                                        <x-delete-confirm>
                                            <form method="post" action="{{ route('socials.destroy', ['social' => $social]) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" >hapus</button>
                                            </form>
                                        </x-delete-confirm>
                                    </x-modal>
                                </div>
                            </td>
                        </tr>                    
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="flex justify-center">
                                    <p>belum ada data</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</x-dashboard-layout>