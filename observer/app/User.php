<?php

namespace App;

class User implements \SplObserver
{
    private string $name;
    private bool $notified;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->notified = false;
    }

    public function update(\SplSubject $subject): void
    {
        $this->notified = true;
    }

    public function isNotified(): bool
    {
        return $this->notified;
    }
}