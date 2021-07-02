<?php

/**
 * 
 * Author: Conor Macpherson
 * Date: 2021-06-30
 * Challenge created: 2021-06-28
 */

namespace Problems;

require(__DIR__ . '/../base_problem.php');

class PhoneDrop extends BaseProblem
{

	const MAX_H = 100;
	const MAX_N = 10;


	/**
	* Returns a problem set for this puzzle.
	* 
	*/
	protected static function create_problem_set()
	{
		$H = mt_rand(1, self::MAX_H);
		$N = mt_rand(1, self::MAX_N);
		return [$H, $N];
	}

	/**
	* Executes the problem.
	* 
	*/
	protected static function problem(array $values = [])
	{
		$H = $values[0];
		$N = $values[1];
		$max_floor_increment = static::find_max_floor_increment($N);

		if ($N === 1 || $H === 1) {
			return $H;
		}

	}

	/**
	 * Calculates a triangle number from N to find the largest increment in floors
	 * we can take with the number or phones we have.
	 * 
	 */
	private static function find_max_floor_increment($N)
	{
		return (($N ** 2) + $N) / 2;
	}
}

PhoneDrop::run();