<?php

use Livewire\Volt\Component;

new class extends Component {
    // fields

    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        dd($this->noteTitle);
    }
}; ?>

<div>
  <form wire:submit='submit' action="" class="space-y-4">
    <x-input wire:model='noteTitle' label="Note Title" />
    <x-textarea wire:model='noteBody' label="Your Note" />
    <x-input wire:model='noteRecipient' label="Recipient" placeholder="yourfriend@email.com" type="email" />
    <x-input wire:model='noteSendDate' label="Send Date" type="date" />
    <x-button wire:click='submit' primary right-icon="calendar" spinner>Submit</x-button>
  </form>
</div>
