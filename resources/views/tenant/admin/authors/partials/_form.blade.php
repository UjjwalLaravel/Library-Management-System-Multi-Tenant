<div class="grid gap-6">
    <div>
        <label class="block text-sm font-medium">Name</label>
        <input type="text" name="name" value="{{ old('name', $author->name ?? '') }}" required
            class="w-full border rounded px-3 py-2 mt-1">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Biography</label>
        <textarea name="biography" rows="4" class="w-full border rounded px-3 py-2 mt-1">{{ old('biography', $author->biography ?? '') }}</textarea>
        @error('biography')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Birthdate</label>
        <input type="date" name="birthdate" value="{{ old('birthdate', $author?->birthdate ?? '') }}"
            class="w-full border rounded px-3 py-2 mt-1">
        @error('birthdate')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Nationality</label>
        <input type="text" name="nationality" value="{{ old('nationality', $author->nationality ?? '') }}"
            class="w-full border rounded px-3 py-2 mt-1">
        @error('nationality')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
