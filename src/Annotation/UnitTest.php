<?php

namespace App\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD|Attribute::TARGET_CLASS)]
class UnitTest {}