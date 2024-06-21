<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TypeCours extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public function __construct($type)
    {
        if($type == "Cours_ete"){
            $this->type = "Cours d'été";
        }else{
            $this->type = $type;
        }
        
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.type-cours');
    }
}
