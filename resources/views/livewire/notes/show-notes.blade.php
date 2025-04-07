<?php

use Livewire\Volt\Component;

new class extends Component {
    //
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date', 'ASC')->get(),
        ];
    }
}; ?>

<div>

  <div class="space-y-2">

    @if ($notes->isEmpty())
      <div class="flex flex-col justify-center items-center">
        <h1 class="font-bold text-xl">No notes yet.</h1>
        <p class="text-gray-500">Lets create your first note</p>
        <x-button icon="plus" class="my-3" href="{{ route('notes.create') }}" wire:navigate>Create note</x-button>
      </div>
    @else
      <div class="grid grid-cols-2 gap-4 mt-12">
        @foreach ($notes as $note)
          <x-card wire:key='{{ $note->id }}'>
            <div class="flex justify-between">
              <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">{{ $note->title }}</a>

              <div class="text-xs text-gray-500">
                {{ \Carbon\Carbon::parse($note->send_date)->format('d/m/y') }}</div>
            </div>

            <div class="flex items-end justify-between mt-4 space-x-1">
              <p class="text-xs">
                Recipient: <span class="font-semibold">{{ $note->recipient }}</span>
              </p>
            </div>
            <x-mini-button rounded secondary icon="eye"></x-mini-button>
            <x-mini-button rounded secondary icon="trash"></x-mini-button>

          </x-card>
        @endforeach
      </div>
    @endif

  </div>
</div>
