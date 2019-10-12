<?php

namespace PhutureProof\Display\Drivers;

use PhutureProof\Display\AbstractDisplay;

/**
 * Class Terminal
 * @package PhutureProof\Display\Drivers
 */
class Terminal extends AbstractDisplay
{
    /**
     * @param array $data
     */
    static function RenderList(array $data): void
    {
        foreach ($data as $datum) {
            static::Render("ID: {$datum->id}, Name: {$datum->name}");
        }
    }

    /**
     * @param string $text
     * @param array $attributes
     */
    static function RenderButton(string $text, array $attributes = []): void
    {
        static::Render("{$text} button options: ");
        foreach ($attributes as $key => $value) {
            static::Render("\t{$key}: {$value}");
        }
    }

}
