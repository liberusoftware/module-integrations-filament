<?php

declare(strict_types=1);

namespace Liberu\Foundation\IntegrationsFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected static string $view = 'integrations-filament::overview';
    protected static ?string $title = 'Integrations';
}

