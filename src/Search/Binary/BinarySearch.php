<?php

  namespace Src\Search\Binary;

  class  BinarySearch
  {

    public static function search(array $list, mixed $item, int &$counter = 0) : ?int
    {
      $low = 0;
      $high = count($list) - 1;

      while ($low <= $high) {
        $counter++;

        $mid = floor(($low + $high) / 2);

        if ($item === $list[$mid]) {
          return $mid;
        } else if ($item > $list[$mid]) {
          $low = $mid + 1;
        } else {
          $high = $mid - 1;
        }
      }

      return null;
    }

  }