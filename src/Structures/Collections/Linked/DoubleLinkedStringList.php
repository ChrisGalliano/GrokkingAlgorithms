<?php

  namespace Src\Structures\Collections\Linked;

  class DoubleLinkedStringList implements \IteratorAggregate
  {

    private ?DoubleStringLink $first = null;

    private ?DoubleStringLink $last = null;


    public function prepend(string $item) : self
    {
      $newLink = new DoubleStringLink($item, null, $this->first);
      $this->first?->setPrev($newLink);
      $this->first = $newLink;

      $this->last ??= $newLink;

      return $this;
    }


    public function append(string $item) : self
    {
      $newLink = new DoubleStringLink($item, $this->last, null);
      $this->last?->setNext($newLink);
      $this->last = $newLink;

      $this->first ??= $newLink;

      return $this;
    }


    public function remove(DoubleStringLink $link) : self
    {
      // TODO: implement

      return $this;
    }


    public function getIterator() : \Generator
    {
      if ($this->first !== null) {
        yield $this->first->getValue();

        $next = $this->first->getNext();
        while ($next !== null) {
          yield $next->getValue();

          $next = $next->getNext();
        }
      }
    }

  }