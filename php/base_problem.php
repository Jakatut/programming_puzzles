<?php

/**
 * 
 * Author: Conor Macpherson
 * Date: 2021-06-26
 */

namespace Problems;

abstract class BaseProblem {

    /**
     * Returns a problem set for this puzzle.
     * 
     */
    abstract static protected function create_problem_set();

    /**
     * Executes the problem.
     * 
     */
    abstract static protected function problem();
 
    /**
     * Runs the problem with the problem set.
     * 
     */
    public static function run() {
        $problem_set = static::create_problem_set();
        echo "Problem set: \n";
        print_r($problem_set);
        $result = static::problem($problem_set);
        echo "\nResult: \n";
        print_r($result);
        return $result;
    }
}