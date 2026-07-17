<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Contribute extends Component
{
    public Event $event;
    public float $amount = 100;
    public string $message = '';
    public bool $anonymous = false;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function contribute()
    {
        if ($this->event->isCompleted()) {
            session()->flash('error', 'المناسبة مكتملة بالفعل');
            return;
        }

        if ($this->amount < 10 || $this->amount > 5000) {
            $this->addError('amount', 'الحد الأدنى 10 ريال والحد الأقصى 5,000 ريال');
            return;
        }

        // Mock Payment — في MVP نحاكي الدفع مباشرة
        $newCollected = $this->event->collected_amount + $this->amount;

        // لا نتجاوز المبلغ المستهدف
        if ($newCollected > $this->event->target_amount) {
            $newCollected = $this->event->target_amount;
        }

        $this->event->update([
            'collected_amount' => $newCollected,
            'status' => $newCollected >= $this->event->target_amount ? 'completed' : 'active',
            'completed_at' => $newCollected >= $this->event->target_amount ? now() : null,
        ]);

        session()->flash('success', 'شكراً لمساهمتك! 💝');

        return redirect()->route('events.show', $this->event->slug);
    }

    public function render()
    {
        return view('livewire.contribute')
            ->layout('layouts.app');
    }
}