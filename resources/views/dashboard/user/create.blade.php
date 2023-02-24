<x-dashboard-layout>
    <div class="p-4">
        <div class="p-4 space-y-4 w-full max-w-screen-md rounded-lg bg-white">
            <a class="btn btn-neutral" href="{{route('users.index')}}" >daftar pengguna</a>
            <form class="grid gap-4" action="{{ route('users.store') }}" method="POST">
                @csrf
                <!-- NAME -->
                <label class="block">
                    <span class="label">{{__('nama pengguna')}}</span>
                    <input type="text" name="name" class="input" value="{{ old('name') }}" placeholder="nama pengguna">
                    @error('name')
                        <span class="label text-rose-500"> {{$message}} </span>
                    @enderror
                </label>

                <!-- EMAIL -->
                <label class="block">
                    <span class="label">{{__('email')}}</span>
                    <input type="email" name="email" value="{{ old('email') }}" class="input" placeholder="email">
                    @error('email')
                        <span class="label text-rose-500"> {{$message}} </span>
                    @enderror
                </label>

                <!-- PASSWORD & CONFIRM -->
                <div class="grid sm:grid-cols-2 gap-4" x-data="show_password">
                    <label class="block">
                        <span class="label">{{__('kata sandi')}}</span>
                        <input :type="show ? 'text': 'password'" name="password" value="{{ old('password') }}" class="input" placeholder="kata sandi">
                        @error('password')
                            <span class="label text-rose-500"> {{$message}} </span>
                        @enderror
                    </label>

                    <label class="block">
                        <span class="label">{{__('ulangi sandi')}}</span>
                        <input :type="show ? 'text': 'password'" name="password_confirmation" value="{{ old('password_confirmation') }}" class="input" placeholder="ulangi sandi">
                        @error('password_confirmation')
                            <span class="label text-rose-500"> {{$message}} </span>
                        @enderror
                    </label>

                    <label class="flex gap-1 items-center sm:col-span-2">
                        <input type="checkbox" class="rounded" x-model="show">
                        <span class="label">{{__('tampilkan sandi')}}</span>
                    </label>
                </div>

                <!-- ACTION -->
                <div class="flex justify-end gap-2 items-center">
                    <button type="reset" class="btn bg-neutral-100">{{ __('batal') }}</button>
                    <button type="submit" class="btn btn-success" >{{__('simpan')}}</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>