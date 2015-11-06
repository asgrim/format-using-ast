<?php

if ($argc <= 1) {
  die("Provide a single filename as a parameter.\n");
}

require_once "vendor/autoload.php";

use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard as PhpPrinter;

echo (new PhpPrinter)->prettyPrintFile(
    (new ParserFactory)->create(ParserFactory::PREFER_PHP7)->parse(
        file_get_contents(implode(" ", array_slice($argv, 1)))
    )
) . "\n";

