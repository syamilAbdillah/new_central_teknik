<x-dashboard-layout>
    <div class="p-4">
        <div class="space-y-4 p-4 bg-white rounded-lg">
            <a href="{{ route('contacts.create') }}" class="btn btn-success">Tambah Data Kontak</a>
            <x-table>
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama kontak</th>
                        <th>nomer</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>
                                <div class="flex items-center gap-1">
                                    <a href="{{ route('contacts.edit', ['contact' => $contact]) }}" class="btn btn-neutral">edit</a>
                                    <button class="btn btn-danger" x-data @click.prevent="$dispatch('open-modal', 'contact-delete-confirmation-{{$contact->id}}')">hapus</button>
                                    <x-modal name="contact-delete-confirmation-{{$contact->id}}" focusable>
                                        <x-delete-confirm>
                                            <form method="post" action="{{ route('contacts.destroy', ['contact' => $contact]) }}" class="inline">
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