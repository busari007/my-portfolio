<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $imageName;

    public function __construct($imageName)
    {
        $this->imageName = $imageName;
    }

    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}