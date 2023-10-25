<?php
return function ($page, $pages, $site, $kirby) {
  $selfies = $site->find('selfies')->children()->listed()->shuffle();
  $selfie = $selfies->first();
  $previousSelfie = $selfies->last();
  $nextSelfie = $selfies->nth(1);
  return compact('selfie', 'previousSelfie', 'nextSelfie');
};
?>