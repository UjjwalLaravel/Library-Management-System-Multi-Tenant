<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="block text-sm font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
        <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            required>
        @error('title')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>
    {{-- Author --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Author <span class="text-red-500">*</span></label>
        <select name="author_id"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <option value="">-- Select Author --</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}"
                    {{ old('author_id', $book->author_id ?? '') == $author->id ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
        @error('author_id')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- ISBN --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">ISBN</label>
        <input type="text" name="isbn" value="{{ old('isbn', $book->isbn ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('isbn')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Publisher --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Publisher</label>
        <input type="text" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('publisher')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Year --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Year</label>
        <input type="number" name="year" value="{{ old('year', $book->year ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('year')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Quantity --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Quantity <span class="text-red-500">*</span></label>
        <input type="number" name="quantity" value="{{ old('quantity', $book->quantity ?? 1) }}" required
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('quantity')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Shelf Location --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Shelf Location</label>
        <input type="text" name="shelf_location" value="{{ old('shelf_location', $book->shelf_location ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('shelf_location')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Status --}}
    <div>
        <label class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @foreach (['available', 'issued', 'damaged'] as $status)
                <option value="{{ $status }}" @selected(old('status', $book->status ?? 'available') === $status)>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>
        @error('status')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>
