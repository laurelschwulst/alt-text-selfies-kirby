<?php
return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('selfies' , compact('page', 'pages', 'site', 'kirby'));
  $currentPageIndex = $shared['selfies']->indexOf($page);
  $count = $shared['selfies']->count();
  // PHP modulo operator returns negative numbers for negative dividends
  $previousSelfieIndex = ($currentPageIndex - 1) % $count;
  if ($previousSelfieIndex < 0) {
    $previousSelfieIndex = $count - 1;
  }
  $previousSelfie = $shared['selfies']->nth($previousSelfieIndex);
  $nextSelfie = $shared['selfies']->nth(($currentPageIndex + 1) % $count);
  return A::merge($shared, compact('previousSelfie', 'nextSelfie'));
};
?>