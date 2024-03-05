<?php

  namespace Src\Structures\Collections\Linked;

  class DoubleStringLink
  {

    public function __construct(
      private string $value,
      private ?DoubleStringLink $prev,
      private ?DoubleStringLink $next
    )
    {
    }


    public function getValue() : string
    {
      return $this->value;
    }


    public function getPrev() : ?DoubleStringLink
    {
      return $this->prev;
    }


    public function setPrev(?DoubleStringLink $prev) : void
    {
      $this->prev = $prev;
    }


    public function getNext() : ?DoubleStringLink
    {
      return $this->next;
    }


    public function setNext(?DoubleStringLink $next) : void
    {
      $this->next = $next;
    }

  }