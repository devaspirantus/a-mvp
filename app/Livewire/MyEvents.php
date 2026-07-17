<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyEvents extends Component
{
    public function render()
    {
        // جلب مناسبات المستخدم الحالي فقط، مرتبة من الأحدث للأقدم
        $events = Event::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.my-events', [
            'events' => $events
        ])->layout('layouts.app');
    }
}