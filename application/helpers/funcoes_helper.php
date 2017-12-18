<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function formatarData($string) {
    return implode("/", array_reverse(explode("-", trim($string))));
}
