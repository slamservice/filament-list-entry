<?php

namespace Fauzie811\FilamentListEntry\Infolists\Components;

use Closure;
use Fauzie811\FilamentListEntry\Infolists\Traits;
use Filament\Infolists\Components\Entry;
use Filament\Support\Concerns\HasBadge;
use Filament\Support\Concerns\HasExtraAttributes;

class ListEntry extends Entry
{
    use HasBadge;
    use HasExtraAttributes;
    use Traits\HasEmptyState;
    use Traits\HasItemActions;
    use Traits\HasItemExtraAttributes;
    use Traits\HasItemIcon;
    use Traits\HasItemLabel;
    use Traits\HasItems;
    use Traits\HasItemUrl;
    use Traits\HasListStyle;

    protected string $view = 'fauzie811-filament-list-entry::infolists.components.list-entry';

    public Closure | string | null $separator = ', ';
}
