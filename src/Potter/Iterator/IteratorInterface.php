<?php

declare(strict_types=1);

namespace Potter\Iterator;

use \Iterator;

interface IteratorInterface extends Iterator
{
    public function current(): mixed;
    public function key(): mixed;
    public function next(): void;
    public function rewind(): void;
    public function valid(): bool;
}
