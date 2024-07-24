<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Alerts extends Component
{
    public $alerts = [];

    public function render(): View
    {
        return view('livewire.alerts');
    }

    #[On('alert')]
    public function handleAlertEvent($alert): void
    {
        $this->alerts[] = $alert;
    }

    public function dismiss($index): void
    {
        array_splice($this->alerts, $index, 1);
    }
}
