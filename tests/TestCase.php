<?php
/**
 * @author      Miles Johnson - http://milesj.me
 * @copyright   Copyright 2006-2012, Miles Johnson, Inc.
 * @license     http://opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link        http://milesj.me/code/php/decoda
 */

namespace mjohnson\decoda\tests;

use mjohnson\decoda\Decoda;

class TestCase extends \PHPUnit_Framework_TestCase {

	/**
	 * Decoda instance.
	 *
	 * @access protected
	 * @var \mjohnson\decoda\Decoda
	 */
	protected $object;

	/**
	 * Set up Decoda.
	 */
	protected function setUp() {
		$this->object = new Decoda();
	}

}