<div>
    @php
    $record = $getState();
    @endphp

    <div class="flex gap-2 items-center">
        <img src="{{Storage::url($record->profile_photo_path)  }}" alt="{{ $record->name }}" class="w-7 h-7 rounded-full">
        <p class="text-xs font-semibold text-green-500">{{ $record->name }}</p>
    </div>
</div>
