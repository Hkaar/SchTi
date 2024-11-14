<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileBlock extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $src,
        public string $name,
        public string $job,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile-block', [
            'src' => $this->src,
            'name' => $this->name,
            'job' => $this->job,
        ]);
    }
}
