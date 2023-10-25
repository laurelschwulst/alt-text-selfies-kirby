<?php
return function ($page, $pages, $site, $kirby) {
  $filterText = '';
  $filterParams = getFilterParams();

  // filtering before sorting is a little more energy-efficient than the other way around
  $filter = param('filter');
  if ($filter === 'chapbook') {
      $selfies = $site->find('selfies')->children()->listed()->filter(function ($selfie) {
          return $selfie->is_in_chapbook()->toBool();
      });
      $filterText = 'Selfies in the chapbook, ';
  } else if ($filter === 'audio') {
      $selfies = $site->find('selfies')->children()->listed()->filter(function ($selfie) {
          return $selfie->selfie_audio()->isNotEmpty();
      });
      $filterText = 'Selfies with audio, ';
  } else {
      $selfies = $site->find('selfies')->children()->listed();
      $filterText = 'All selfies, ';
  }

  $sort = param('sort');
  if ($sort === 'length') {
      $selfies = $selfies->sortBy(function ($selfie) {
          return $selfie->selfie_content()->length();
      }, 'asc');
      $filterText .= 'sorted by length';
  } elseif ($sort === 'random') {
      $selfies = $selfies->shuffle();
      $filterText .= 'in random order';
  } else {
      $selfies = $selfies->sortBy('title', 'asc');
      $filterText .= 'sorted in ABC order';
  }

  return compact('selfies', 'filterText', 'filterParams');
};
?>