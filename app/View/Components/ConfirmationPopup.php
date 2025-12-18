<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfirmationPopup extends Component
{
    /**
     * Create a new component instance.
     */
     public $id;
    public $title;
    public $subtitle;
    public $buttonText;
    public $buttonClass;
    public $cancelText;
    public $action;
    public $active;

    public function __construct(
        $id = 'modal',
        $title = '',
        $subtitle = '',
        $buttonText = 'Confirm',
        $buttonClass = 'btn-primary',
        $cancelText = 'Cancel',
        $action = '',
        $active = false
    ) {
        $this->id = $id; 
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
        $this->cancelText = $cancelText;
        $this->action = $action;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.confirmation-popup');
    }
}
