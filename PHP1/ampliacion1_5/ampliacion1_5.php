<?php
$n = array ($a = $_POST['n1'], $b = $_POST['n2'], $c = $_POST['n3']);
$orden = $_POST['orden'];

foreach ($n as $element) {
  if (!is_numeric($element)) {
    header("Location: ampliacion1_5.html");
    exit;
  }
}

switch ($orden) {
  case "ASC":
    if ($a > $b) {
      if ($a > $c) {
        if ($b < $c) echo $b . "<" . $c . "<" . $a;
        else echo $c . "<" . $b . "<" . $a;
      } else echo $b . "<" . $a . "<" . $c;
    } elseif ($b > $a) {
      if ($b > $c) {
        if ($a > $c) echo $c . "<" . $a . "<" . $b;
        else echo $a . "<" . $c . "<" . $b;
      } elseif ($c > $a) {
        if ($c > $b) {
          if ($a > $b) echo $b, $a, $c;
          else echo $a . "<" . $b . "<" . $c;
        }
      }
    }
    break;
  case "DESC":
    if ($a > $b) {
      if ($a > $c) {
        if ($b < $c) echo $a . "<" . $c . "<" . $b;
        else echo $a . "<" . $b . "<" . $c;
      } else echo $c . "<" . $a . "<" . $b;
    } elseif ($b > $a) {
      if ($b > $c) {
        if ($a > $c) echo $b . "<" . $a . "<" . $c;
        else echo $b . "<" . $c . "<" . $a;
      } elseif ($c > $a) {
        if ($c > $b) {
          if ($a > $b) echo $c, $a, $b;
          else echo $c . "<" . $b . "<" . $a;
        }
      }
    }
    break;
}
