<?php

namespace App\View\Components;

use App\Models\Banner;
use App\Models\Profile;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerHome extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = [
            'profile' => Profile::first(),
            'banners'    => Banner::all()
        ];
        return view('components.banner-home', $data);
    }
}
