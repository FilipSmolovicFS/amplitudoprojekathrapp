<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Fieldset extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $name,
        public string $type,
        public array $options

    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.fieldset');
    }
}
