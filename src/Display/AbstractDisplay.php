<?php

namespace PhutureProof\Display;

/**
 * Class AbstractDisplay
 * @package PhutureProof\Display
 */
abstract class AbstractDisplay
{
    /**
     * @param string $template
     * @return void
     */
    public static function Render(string $template): void
    {
        echo $template . PHP_EOL;
    }
}
