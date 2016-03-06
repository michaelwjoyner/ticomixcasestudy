<?php
// created: 2016-03-05 18:57:03
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '5%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'mod_endorsements_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MOD_ENDORSEMENTS_ACCOUNTSACCOUNTS_IDA',
    'width' => '20%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'mod_endorsements_accountsaccounts_ida',
  ),
  'endorsement_amount' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_ENDORSEMENT_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'fee_percentage' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_FEE_PERCENTAGE',
    'width' => '10%',
    'default' => true,
  ),
  'agency_amount' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_AGENCY_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mod_Endorsements',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'mod_Endorsements',
    'width' => '5%',
    'default' => true,
  ),
);