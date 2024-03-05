<?php

  namespace Src\Sort\SelectionSort;

  class SelectionSort
  {

    public static function sort(array $list) : array
    {
      $sortedList = [];
      $length = count($list);
      for ($i = 0; $i < $length; $i++) {
        $smallestIndex = self::findSmallest($list);
        $sortedList[] = $list[$smallestIndex];

        unset($list[$smallestIndex]);
        $list = array_values($list);
      }

      return $sortedList;
    }

    private static function findSmallest(array $list) : int
    {
      assert($list !== []);

      $smallest = $list[0];
      $smallestIndex = 0;

      foreach ($list as $index => $item) {
        if ($item < $smallest) {
          $smallest = $item;
          $smallestIndex = $index;
        }
      }

      return $smallestIndex;
    }

  }