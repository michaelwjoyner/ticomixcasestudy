<?php
// created: 2016-03-05 03:02:10
$dictionary["mod_endorsements_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mod_endorsements_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'mod_Endorsements',
      'rhs_table' => 'mod_endorsements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mod_endorsements_accounts_c',
      'join_key_lhs' => 'mod_endorsements_accountsaccounts_ida',
      'join_key_rhs' => 'mod_endorsements_accountsmod_endorsements_idb',
    ),
  ),
  'table' => 'mod_endorsements_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mod_endorsements_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mod_endorsements_accountsmod_endorsements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mod_endorsements_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mod_endorsements_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mod_endorsements_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mod_endorsements_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mod_endorsements_accountsmod_endorsements_idb',
      ),
    ),
  ),
);