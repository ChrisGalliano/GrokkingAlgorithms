<?php


  use Src\Search\Binary\BinarySearch;

  $list = ["apple", "banana", "mango"];

  test("banana is on right position", function () use ($list) {
    expect(BinarySearch::search($list, "banana"))->toBe(1);
  });


  test("coconut is not found", function () use ($list) {
    expect(BinarySearch::search($list, "coconut"))->toBeNull();
  });


  $rangeEnd = 1_000_000;
  $nLog = ceil(log($rangeEnd, 2));
  test("Cost is logarithmic [ O($nLog) ]", function () use ($nLog, $rangeEnd) {
    $counter = 0;
    expect(BinarySearch::search(range(1, $rangeEnd), random_int(1, $rangeEnd), $counter))
      ->toBeInt()
      ->and($counter)->toBeGreaterThan(0)
      ->and($counter)->toBeLessThanOrEqual($nLog);
    echo "\n\n counter: $counter";
  });