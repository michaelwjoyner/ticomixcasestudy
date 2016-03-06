<?php
// created: 2016-03-05 03:02:10
$dictionary["mod_endorsements_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mod_endorsements_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'mod_Endorsements',
      'rhs_table' => 'mod_endorsements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mod_endorsements_contacts_c',
      'join_key_lhs' => 'mod_endorsements_contactscontacts_ida',
      'join_key_rhs' => 'mod_endorsements_contactsmod_endorsements_idb',
    ),
  ),
  'table' => 'mod_endorsements_contacts_c',
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
      'name' => 'mod_endorsements_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mod_endorsements_contactsmod_endorsements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mod_endorsements_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mod_endorsements_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mod_endorsements_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mod_endorsements_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mod_endorsements_contactsmod_endorsements_idb',
      ),
    ),
  ),
);