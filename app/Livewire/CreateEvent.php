<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateEvent extends Component
{
    public string $name = '';
    public string $description = '';
    public float $target_amount = 0;

    protected array $rules = [
        'name' => 'required|string|min:3|max:100',
        'description' => 'nullable|string|max:500',
        'target_amount' => 'required|numeric|min:100|max:100000',
    ];

    public function save()
    {
        $this->validate();

        $event = Event::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'description' => $this->description,
            'target_amount' => $this->target_amount,
            'collected_amount' => 0,
            'status' => 'active',
        ]);

        session()->flash('success', 'تم إنشاء المناسبة بنجاح! 🎉');

        return redirect()->route('events.show', $event->slug);
    }

    public function render()
    {
        return view('livewire.create-event')
            ->layout('layouts.app');
    }
}