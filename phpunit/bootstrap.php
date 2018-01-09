<?php
declare(strict_types=1);

namespace tests;

require_once("../vendor/autoload.php");
#require_once("../vendor/anytizer/includer.php/src/libraries/classes/anytizer/class.includer.inc.php");

use anytizer\includer;

/**
 * Now, the includer will manage all inclusions
 */
spl_autoload_register(array(new includer("../src/libraries/classes"), "namespaced_inc_dot"));
