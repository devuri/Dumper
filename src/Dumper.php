<?php namespace Riven\VarDumper;

use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class Dumper {

    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function dump($value) {

        $cloner = new VarCloner();

        $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

        $dumper->dump((new VarCloner)->cloneVar($value));
    }
}