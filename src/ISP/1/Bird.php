<?php

class Bird implements AnimalInterface
{
    public function eat()
    {
        //TODO: add implementation
    }

    public function fly()
    {
        //TODO: add implementation
    }

    public function bark()
    {
        throw new \BadMethodCallException();
    }
}
