<?php
use Illuminate\Http\Request;

function clear_text($value) {
  return preg_replace("/[^a-zA-Z0-9]+/", "", $value);
}
function header_class() {
  if (route('anasayfa') == url()->current()) {
    return 'transparent-header semi-transparent floating-header';
  } else {
    return 'full-header';
  }
}