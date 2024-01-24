<?php

use TwigCsFixer\Rules\Whitespace\EmptyLinesRule;

$ruleset = (new TwigCsFixer\Ruleset\Ruleset())
    ->addStandard(new TwigCsFixer\Standard\Twig())
    ->removeRule(EmptyLinesRule::class);

return (new TwigCsFixer\Config\Config())
    ->setRuleset($ruleset)
    ->setCacheFile(null);
