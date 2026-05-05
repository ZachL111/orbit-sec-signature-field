<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(90, 74, 26, 9, 5);
assert(Policy::score($signal_case_1) === 191);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(73, 102, 8, 21, 10);
assert(Policy::score($signal_case_2) === 198);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(67, 106, 25, 18, 7);
assert(Policy::score($signal_case_3) === 153);
assert(Policy::classify($signal_case_3) === "review");
