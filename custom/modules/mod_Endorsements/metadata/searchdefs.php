<?php
$module_name = 'mod_Endorsements';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mod_endorsements_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'MOD_ENDORSEMENTS_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mod_endorsements_contacts_name',
      ),
      'mod_endorsements_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'MOD_ENDORSEMENTS_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mod_endorsements_accounts_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
