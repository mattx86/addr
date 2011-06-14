<?php

function toggle($startValue, $altValue, &$currentValue)
{
  if (!isset($currentValue) ||
    (isset($currentValue) && $currentValue === $altValue))
  {
    $currentValue = $startValue;
  }
  else
  {
    $currentValue = $altValue;
  }
}