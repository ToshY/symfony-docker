<?php

$ruleset = (new TwigCsFixer\Ruleset\Ruleset())
    ->addStandard(new TwigCsFixer\Standard\Generic())
    ->removeSniff(TwigCsFixer\Sniff\EmptyLinesSniff::class);

return (new TwigCsFixer\Config\Config())
    ->setRuleset($ruleset)
    ->setCacheFile(null);
