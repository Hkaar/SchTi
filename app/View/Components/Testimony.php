<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimony extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $user,
        public string $src,
        public string $occupation,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimony', [
            'user' => $this->user,
            'src' => $this->src,
            'occupation' => $this->occupation,
        ]);
    }
}
