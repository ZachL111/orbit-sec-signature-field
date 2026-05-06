<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(74, 51, 26, 69);
assert(DomainReviewLens::score($item) === 190);
assert(DomainReviewLens::lane($item) === "ship");
