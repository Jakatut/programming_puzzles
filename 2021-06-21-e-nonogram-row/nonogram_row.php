<?php

/**
 * 
 * Author: Conor Macpherson
 * Date: 2021-06-26
 * Challenge created: 2021-06-21
 * 
 */

namespace Problems;

require(__DIR__ . '/../base_problem.php');

class NonogramRow extends BaseProblem {

    const MAX_LENGTH = 20;

    /**
     * Returns a problem set for this puzzle.
     * The output is a randomly generated binary array consisting of only the values 0 and 1.
     * 
     */
    protected static function create_problem_set() {
        // mt_srand(10);

        $set = [];
        $count = 0;
        $set_length = mt_rand(0, self::MAX_LENGTH);
        while ($count < $set_length) {
            $set[] = mt_rand(0, 1);
            $count++;
        }

        return $set;
    }

    /**
     * Executes the problem.
     * 
     */
    protected static function problem(array $binary_array = []) {
        $results = [];
        $count = 0;
        foreach ($binary_array as $value) {
            if ($value > 0) { 
                $count++;
                continue;
            } else {
                if ($count > 0) {
                    $results[] = $count;
                    $count = 0;
                }
            }
        }

        if ($count > 0) {
            $results[] = $count;
        }
        return $results;
    }
}

NonogramRow::run();