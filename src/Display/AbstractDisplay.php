<?php

namespace PhutureProof\Display;

/**
 * Class AbstractDisplay
 * @package PhutureProof\Display
 */
abstract class AbstractDisplay
{
    /**
     * @param array $data
     */
    abstract static function RenderList(array $data): void;

    /**
     * @param string $text
     * @param array $attributes
     */
    abstract static function RenderButton(string $text, array $attributes = []): void;

    /**
     * @param string $template
     * @return void
     */
    public static function Render(string $template): void
    {
        echo $template . PHP_EOL;
    }
}
