<?php

namespace Portable\FilaCms\Filament\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

trait HasExcerpt
{
    protected $excerptField = 'contents';

    public function excerpt(): Attribute
    {
        $excerpt = $this->{$this->excerptField};

        $paragraph = '';
        if ($excerpt) {
            $paragraph = tiptap_converter()->asText($excerpt) ?? '';
        }

        return Attribute::make(function () use ($paragraph) {
            return Str::take(Str::of($paragraph)->stripTags(), 200);
        });
    }
}
