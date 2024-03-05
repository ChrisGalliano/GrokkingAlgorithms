<?php


  use Src\Structures\Collections\Linked\DoubleLinkedStringList;

  test("empty list is empty", function () {
    expect(iterator_to_array(new DoubleLinkedStringList()))->toBe([]);
  });


  test("one element is appended", function () {
    $list = (new DoubleLinkedStringList())
      ->append("banana");
    expect(iterator_to_array($list))->toBe(["banana"]);
  });

  test("few elements are appended", function () {
    $list = (new DoubleLinkedStringList())
      ->append("banana")
      ->append("kiwi")
      ->append("grape");
    expect(iterator_to_array($list))->toBe(["banana", "kiwi", "grape"]);
  });


  test("one element is prepended", function () {
    $list = (new DoubleLinkedStringList())
      ->prepend("banana");
    expect(iterator_to_array($list))->toBe(["banana"]);
  });

  test("few elements are prepended", function () {
    $list = (new DoubleLinkedStringList())
      ->prepend("banana")
      ->prepend("kiwi")
      ->prepend("grape");
    expect(iterator_to_array($list))->toBe(["grape", "kiwi", "banana"]);
  });


  test("element was added before", function () {
    $list = (new DoubleLinkedStringList())
      ->append("banana")
      ->append("kiwi")
      ->prepend("grape");
    expect(iterator_to_array($list))->toBe(["grape", "banana", "kiwi"]);
  });

  test("element was added after", function () {
    $list = (new DoubleLinkedStringList())
      ->prepend("banana")
      ->prepend("kiwi")
      ->append("grape");
    expect(iterator_to_array($list))->toBe(["kiwi", "banana", "grape"]);
  });


