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

/**
* @author Silviu Schiau <pr@silviu.co>
* @version 1.0.0
* @license Apache License Version 2.0 http://www.apache.org/licenses/LICENSE-2.0.txt
*/

require 'SSAlgorithms.php';

use Schiau\SSAlgorithms as Algo;

$algorithms = new Algo;

$list = array(18, 2, 6, 1, 5, 6, 1, 0, 43, 16);

var_dump("*** Unsorted List ***", $list);

var_dump("Bubble Sort", $algorithms->bubbleSort($list));
var_dump("Quick Sort", 	$algorithms->quickSort($list));
var_dump("Shell Sort", 	$algorithms->shellSort($list));

?>