<?php
// created: 2016-03-05 03:02:10
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_contacts"] = array (
  'name' => 'mod_endorsements_contacts',
  'type' => 'link',
  'relationship' => 'mod_endorsements_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'mod_endorsements_contactscontacts_ida',
);
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_contacts_name"] = array (
  'name' => 'mod_endorsements_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'mod_endorsements_contactscontacts_ida',
  'link' => 'mod_endorsements_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mod_Endorsements"]["fields"]["mod_endorsements_contactscontacts_ida"] = array (
  'name' => 'mod_endorsements_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'mod_endorsements_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_MOD_ENDORSEMENTS_TITLE',
);
