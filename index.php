<?php

require 'kirby/bootstrap.php';

function getFilterParams() {
  $result = '';
  $params = params();
  foreach($params as $key => $value) {
    $result .= '/' . $key . ':' . $value;
  }
  return $result;
};

echo (new Kirby)->render();
