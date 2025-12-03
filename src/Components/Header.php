<?php

namespace Lunar\Admin\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

/**
 * Override Header component from leandrocfe/filament-apex-charts
 * to fix unresolvable dependency issue in Laravel 11
 * 
 * This component replaces Leandrocfe\FilamentApexCharts\Components\Header
 * with nullable parameters to allow Laravel's dependency injection to work correctly.
 */
class Header extends Component
{
    public function __construct(
        public $heading = null,
        public $subheading = null,
        public $filters = null,
        public $indicatorsCount = null,
        public $width = null,
        public $filterFormAccessible = null
    ) {}

    /**
     * Renders the view for the header component.
     */
    public function render(): View
    {
        return view('filament-apex-charts::widgets.components.header');
    }
}

