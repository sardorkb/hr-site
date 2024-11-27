<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Position;

class HeaderComposer
{
    public function compose(View $view)
    {
        $view->with('branchPositions', Position::whereHas('lavozimCategory', function ($query) {
            $query->where('name', 'Filial lavozimlari');
        })->get() ?? collect());

        $view->with('officePositions', Position::whereHas('lavozimCategory', function ($query) {
            $query->where('name', 'Ofis lavozimlari');
        })->get() ?? collect());
    }
}
