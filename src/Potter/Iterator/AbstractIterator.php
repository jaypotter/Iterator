<?php

declare(strict_types=1);

namespace Potter\Iterator;

abstract class AbstractIterator implements IteratorInterface
{
    abstract public function current(): mixed;
    abstract public function key(): mixed;
    abstract public function next(): void;
    abstract public function rewind(): void;
    abstract public function valid(): bool;
}
