<?php

class C_Admin_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'C_Admin') );
	}

	function test_class_access() {
		$this->assertTrue( credentials()->admin instanceof C_Admin );
	}
}
