<?php
use anytizer/includer;

/**
 * You can register multiple paths
 */
spl_autoload_register(array(new includer("../vendor/anytizer/relay.php/src/libraries/classes"), "namespaced_inc_dot"));
