<?php

namespace Fauzie811\FilamentListEntry\Infolists\Traits;

use Closure;
use Fauzie811\FilamentListEntry\Infolists\Enums\ListEntryStyle;

trait HasListStyle
{
    public Closure | bool | null $inline = true;

    public Closure | ListEntryStyle | string | null $listStyle = ListEntryStyle::list;

    public function listStyle($listStyle = ListEntryStyle::list): self
    {
        $this->listStyle = $listStyle;

        return $this;
    }

    public function getListStyle(): string
    {
        return ListEntryStyle::fromName($this->evaluate($this->listStyle));
    }

    public function inline($inline): self
    {
        $this->listStyle('inline');
        $this->inline = $inline;

        return $this;
    }

    public function getInline(): bool
    {
        return (bool) $this->evaluate($this->inline);
    }
}
