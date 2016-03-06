<?php

/************************************************************* 
 * LOGIC HOOKS for mod_Endorsments
 *
 * Michael W Joyner
 * 2016-03-05
 ************************************************************* */

$hook_version = 1;
$hook_array = Array();
    
$hook_array['process_record']   = Array(); 
$hook_array['process_record'][] = Array(
    1,                                                       // Hook Version
    'Process the record trigger',                            // Hook Description
    'custom/modules/mod_Endorsements/logic_hooks.class.php', // Hook Class file
    'mod_EndorsementsLogicHook',                             // Hook Class Name
    'process_record'                                         // Hook Class Method
);

$hook_array['after_save']   = Array(); 
$hook_array['after_save'][] = Array(
    1,                                                       // Hook Version
    'After Save Logic Hook',                                 // Hook Description
    'custom/modules/mod_Endorsements/logic_hooks.class.php', // Hook Class file
    'mod_EndorsementsLogicHook',                             // Hook Class Name
    'after_save'                                             // Hook Class Method
);
?>
