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
    abstract protected function create_problem_set();

    /**
     * Executes the problem.
     * 
     */
    abstract protected function problem();
 
    /**
     * Runs the problem.
     * 
     */
    public function run() {
        $problem_set = $this->create_problem_set();
        echo json_encode($problem_set);
        return $this->problem($problem_set);
    }
}