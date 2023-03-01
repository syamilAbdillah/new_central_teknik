@props(['label', 'name', 'value'])


<div class="flex flex-col gap-2" x-data="update_image">
    <label class="block" x-data="image_preview">
        <span class="label">{{ $label }}</span>
        <input accept="image/*" type="file" name="{{$name}}" class="hidden" @input="handleInput" x-model="file">
        <img :src="src" alt="preview" x-show="file" class="max-w-xs" >
        <img src="{{ $value }}" class="max-w-xs" x-show="!file" >
        @error($name)
            <span class="label text-rose-500">{{ $message }}</span>
        @enderror

        <span type="button" class="btn bg-neutral-100 mt-2" x-show="!file">upload gambar</span>
    </label>
    <div class="flex">
        <button type="button" class="btn bg-neutral-100" @click="file = null" x-show="file">batal upload</button>
    </div>
</div>