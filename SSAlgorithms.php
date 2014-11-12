<?php
/**
 * Copyright 2014 Silviu Schiau.
 *
 * This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace Schiau;

/**
* @package Schiau
* @author Silviu Schiau <pr@silviu.co>
* @version 1.0.0
* @license Apache License Version 2.0 http://www.apache.org/licenses/LICENSE-2.0.txt
*/

if (version_compare(PHP_VERSION, '5.5.0', '<'))
{
	throw new Exception('SSAlgorithms v1.0.0 requires PHP version 5.5 or higher.');
}


class SSAlgorithms
{
	const VERSION = '1.0.0';
	
	private static $instance = NULL;

	private $options = [
		
	];
	
	private function __clone() {}

	public function __construct()
	{
		if(!self::$instance)
		{
			// var_dump("SSAlgorithms Initialized");
		}
		
		return self::$instance;
	}
	
	public function getOptions()
	{
		return $this->options;
	}
	
	public function setOptions($opt)
	{
		$this->options = $opt;
	}
	
	
	/* 
		-------
		SORTING 
		-------
	*/
	
	// Binary tree sort. Sort of a binary tree, incremental, similar to insertion sort.
	// Complexity: O(n log n)
	public function binaryTreeSort()
	{
		// TODO: next
	}
	
	// Bubble sort is a simple sorting algorithm that works by repeatedly stepping through the list to be sorted, comparing each pair of adjacent items and swapping them if they are in the wrong order. The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted. 
	// Complexity: O(n^2)
	public function bubbleSort(array $list)
	{
		$isSorted = false;
		
		while($isSorted === false)
		{
			$isSorted = true;
			
			for($i = 0; $i < count($list) - 1; $i++)
			{
				$current = $list[$i];
				$next = $list[$i + 1];
				
				if($next < $current)
				{
					$list[$i] = $next;
					$list[$i + 1] = $current;
					
					$isSorted = false;
				}
			}
		}
		
		return $list;
	}
	
	// Quicksort
	// Complexity: O(n log n) - Worse: O(n²)
	public function quickSort(array $list)
	{
		if (!$length = count($list)) 
		{
			return $list;
		}

		$k = $list[0];
		$x = $y = array();

		for ($i=1; $i<$length; $i++)
		{
			if ($list[$i] <= $k) 
			{
				$x[] = $list[$i];
			} else {
				$y[] = $list[$i];
			}
		}

		return array_merge(self::quickSort($x), array($k), self::quickSort($y));
	}
	
	// Shellsort
	// Complexity: O(n log n) - Worse: O(n²)
	public function shellSort(array $list)
	{
		if (!$length = count($list))
		{
			return $list;
		}
		
		$k = 0;
		$gap[0] = (int)($length/2);
		
		while($gap[$k] > 1)
		{
			$k++;
			$gap[$k] = (int)($gap[$k-1]/2);
		}

		for ($i = 0; $i <= $k; $i++) 
		{
			$step = $gap[$i];
			
			for ($j = $step; $j<$length; $j++) 
			{
				$temp = $list[$j];
				$p = $j-$step;
		
				while ($p >= 0 && $temp < $list[$p]) 
				{
					$list[$p+$step] = $list[$p];
					$p = $p-$step;
				}
				
				$list[$p+$step] = $temp;
			}
		}
		
		return $list;
	}
}
?>