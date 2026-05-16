<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AdminQuickGuide extends Widget
{
    protected int | string | array $columnSpan = 'full';

    protected string $view = 'filament.widgets.admin-quick-guide';

    protected static ?int $sort = 5;
}
