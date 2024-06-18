<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public function __construct()
    {
        // Anda bisa menambahkan parameter konstruksi jika perlu
    }

    public function render()
    {
        return view('components.footer');
    }
}
