<?php
// created: 2016-03-05 03:02:10
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_accounts"] = array (
  'name' => 'mod_endorsements_accounts',
  'type' => 'link',
  'relationship' => 'mod_endorsements_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'mod_endorsements_accountsaccounts_ida',
);
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_accounts_name"] = array (
  'name' => 'mod_endorsements_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'mod_endorsements_accountsaccounts_ida',
  'link' => 'mod_endorsements_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_accountsaccounts_ida"] = array (
  'name' => 'mod_endorsements_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'mod_endorsements_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MOD_ENDORSEMENTS_ACCOUNTS_FROM_MOD_ENDORSEMENTS_TITLE',
);
