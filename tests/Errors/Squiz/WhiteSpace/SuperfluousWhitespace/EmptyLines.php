<?php

declare(strict_types=1);

namespace CodingStandard\Test\Errors\Squiz\WhiteSpace\SuperfluousWhitespace;

final class EmptyLines
{
    public function foo(): void
    {
        $foo = 'bar';


        echo $foo;
    }
}
