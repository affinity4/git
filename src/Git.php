<?php
namespace Affinity4\Git;

use Affinity4\Promise\PromiseTrait;
use React\Promise\PromiseInterface;

class Git implements PromiseInterface
{
    /**
     * Provides Git::then method
     */
    use PromiseTrait;

    /**
     * @var
     */
    private static $core;

    /**
     * --------------------------------------------------
     * Get Core Instance
     * --------------------------------------------------
     *
     * @return \Affinity4\Git\Core
     */
    public static function getCoreInstance()
    {
        if (self::$core === null) {
            self::$core = new Core;
        }

        return self::$core;
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
    public static function initBare($repo, array $options = [])
    {
        return self::getCoreInstance()->initBare($repo);
    }
}