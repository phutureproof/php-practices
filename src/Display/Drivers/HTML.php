<?php

namespace PhutureProof\Display\Drivers;

use PhutureProof\Display\AbstractDisplay;

/**
 * Class HTML
 * @package PhutureProof\Display\Drivers
 */
class HTML extends AbstractDisplay
{
    /**
     * Implementation of abstract RenderList
     * @param array $data
     */
    public static function RenderList(array $data): void
    {
        static::Render("<ul>");
        foreach ($data as $datum) {
            static::Render("\t<li data-id='{$datum->id}'>{$datum->name}</li>");
        }
        static::Render("</ul>");
    }

    /**
     * @param string $text
     * @param array $attributes
     */
    static function RenderButton(string $text, array $attributes = []): void
    {
        $displayAttributes = [];
        $attributes = array_merge($attributes, [
            'type' => 'button',
            'name' => 'buttonName',
            'style' => 'border-radius: 7px; padding: 10px; outline: none;',
        ]);
        foreach ($attributes as $key => $value) {
            $displayAttributes[] = "{$key}=\"{$value}\"";
        }
        $displayAttributes = implode(' ', $displayAttributes);
        static::Render("<button {$displayAttributes}>{$text}</button>");
    }

}
