<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg">
            <a href="{{ route('merks.create') }}" class="btn btn-success">Tambah Data Merk</a>
            <x-table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>logo</th>
                        <th>nama merk</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($merks as $merk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $merk->image }}" alt="{{ $merk->name }}" class="w-16">
                            </td>
                            <td>{{ $merk->name }}</td>
                            <td>
                                <div class="flex items-center gap-1">
                                    <a href="{{ route('merks.edit', ['merk' => $merk]) }}" class="btn btn-neutral">edit</a>
                                    <button class="btn btn-danger" x-data @click.prevent="$dispatch('open-modal', 'merk-delete-confirmation-{{$merk->id}}')">hapus</button>
                                    <x-modal name="merk-delete-confirmation-{{$merk->id}}" focusable>
                                        <x-delete-confirm>
                                            <form method="post" action="{{ route('merks.destroy', ['merk' => $merk]) }}" class="inline">
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