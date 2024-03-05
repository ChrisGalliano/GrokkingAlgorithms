<?php


  use Src\Structures\Collections\Linked\DoubleLinkedStringList;

  // ./vendor/bin/phpbench run tests/chapter_2 --report=benchmark
  class ListsInsertBench
  {

    const LIST_LENGTH = 1_000_000;


    public function __construct()
    {
      ini_set("memory_limit", "1G");
    }


    public function benchArray() : void
    {
      $list = [];
      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list[] = "item-$i";
      }

      $consumer = range(0, self::LIST_LENGTH * 3);

      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list[] = "item-$i";
      }
    }


    public function benchStringList() : void
    {
      $list = new DoubleLinkedStringList();
      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list->append("item-$i");
      }

      $consumer = range(0, self::LIST_LENGTH * 3);

      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list->append("item-$i");
      }
    }


    public function benchSplLinkedList() : void
    {
      $list = new SplDoublyLinkedList();
      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list->push("item-$i");
      }

      $consumer = range(0, self::LIST_LENGTH * 3);

      for ($i = 0; $i < self::LIST_LENGTH; $i++) {
        $list->push("item-$i");
      }
    }

  }