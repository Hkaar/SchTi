<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $to,
        public bool $active = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown-menu', [
            'to' => $this->to,
            'active' => $this->active,
        ]);
    }
}