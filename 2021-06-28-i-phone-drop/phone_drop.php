<?php

/**
 * 
 * Author: Conor Macpherson
 * Date: 2021-06-30
 * Challenge created: 2021-06-28
 */

namespace Problems;

require(__DIR__ . '/../base_problem.php');

class PhoneDrop extends BaseProblem {


   /**
     * Returns a problem set for this puzzle.
     * 
     */
    protected function create_problem_set() {
    }

    /**
     * Executes the problem.
     * 
     */
    protected function problem(array $binary_array = []) {
    }
}

$problem = new NonogramRow();
print_r($problem->run());