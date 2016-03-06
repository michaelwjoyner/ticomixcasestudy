<?php
 // created: 2016-03-05 03:02:10
$layout_defs["Contacts"]["subpanel_setup"]['mod_endorsements_contacts'] = array (
  'order' => 100,
  'module' => 'mod_Endorsements',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MOD_ENDORSEMENTS_CONTACTS_FROM_MOD_ENDORSEMENTS_TITLE',
  'get_subpanel_data' => 'mod_endorsements_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
