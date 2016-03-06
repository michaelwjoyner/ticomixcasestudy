<?php
$module_name = 'mod_Endorsements';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'MOD_ENDORSEMENTS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'MOD_ENDORSEMENTS_CONTACTSCONTACTS_IDA',
    'width' => '20%',
    'default' => true,
  ),
  'MOD_ENDORSEMENTS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MOD_ENDORSEMENTS_ACCOUNTSACCOUNTS_IDA',
    'width' => '20%',
    'default' => true,
  ),
  'ENDORSEMENT_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_ENDORSEMENT_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'FEE_PERCENTAGE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FEE_PERCENTAGE',
    'width' => '10%',
    'default' => true,
  ),
  'AGENCY_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AGENCY_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
