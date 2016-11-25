<?php


class Dog implements AnimalInterface
{

    public function eat()
    {
        //TODO: add implementation
    }

    public function fly()
    {
        throw new \BadMethodCallException();
    }

    public function bark()
    {
        //TODO: add implementation
    }
}
