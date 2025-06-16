<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public $columns = [];
    public $rows = [];
    public $link = "";
    public $deleteLink = "";
    public $authenticated = false;

    /**
     * Create a new component instance.
     */
    public function __construct($columns = [], $rows = [], $link = "", $deleteLink = "", $authenticated = false)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->link = $link;
        $this->deleteLink = $deleteLink;
        $this->authenticated = $authenticated;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
