<?php
namespace Affinity4\Git;

use Affinity4\Process\Process;
use Affinity4\Process\Command;
use React\Promise\Promise;
use React\Promise\PromiseInterface;

/**
 * Class Core
 *
 * @package Affinity4\Git
 *
 * @method then callable $callback
 */
class Core
{
    public function __construct()
    {
        //
    }

    /**
     * --------------------------------------------------
     * Init Bare
     * --------------------------------------------------
     *
     * Runs: git init --bare [options]
     * At: $repo
     *
     * @param       $repo
     * @param array $options
     *
     * @return \React\Promise\FulfilledPromise|\React\Promise\Promise|\React\Promise\PromiseInterface|\React\Promise\RejectedPromise|static
     */
    public function initBare($repo, $options = [])
    {
        $repo = $repo . '.git';
        $cmd = Command::create('git init ' . $repo, $options, ['--bare']);
        return Process::run($cmd);
    }
}