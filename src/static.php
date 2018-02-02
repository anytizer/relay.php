<?php
use anytizer\includer;

/**
 * Called by Composer in order to include Relay class.
 * You can register multiple paths
 * 
 * @todo Make it optional to include by default for all.
 */
$class_path = dirname(__FILE__)."/../vendor/anytizer/relay.php/src/libraries/classes";
spl_autoload_register(array(new includer($class_path), "namespaced_inc_dot"));
