<?php


  use Src\Sort\SelectionSort\SelectionSort;

  test("empty list is ok", function () {
    expect(SelectionSort::sort([]))->toBe([]);
  });

  test("list is sorted", function () {
    expect(SelectionSort::sort([10, 2, 3, 16, 1]))->toBe([1, 2, 3, 10, 16]);
  });