<?php

/*************************************************************
 * LOGIC HOOKS CLASS for mod_Endorsments
 *
 *
 * Michael W Joyner
 * 2016-03-05
 ************************************************************* */

class mod_EndorsementsLogicHook{

  /*
   * process_record
   *
   * This will format the list view and subpanels rows
   * 
   */
  function process_record(&$bean, $event, $arguments) {
    if ($bean->date_entered){
      $date_view = DateTime::createFromFormat('m/d/Y h:ia', $bean->date_entered);
      $bean->date_entered = $date_view->format('d/m/y');;
    }
  }

 /*
   * after_save 
   *
   * This will update the Athlete and Sponsor YTD fields
   * 
   */
  function after_save(&$bean, $event, $arguments) {  

			// Update Athletes YTD Earnings
      if ($bean->agency_amount){
        $contactBean = BeanFactory::getBean("Contacts", $bean->mod_endorsements_contactscontacts_ida );
        $accumulated_earnings=0;
        $contactBean->load_relationship("mod_endorsements_contacts");
        foreach($contactBean->mod_endorsements_contacts->getBeans() as $endorsementBean){
          $accumulated_earnings += $endorsementBean->agency_amount;
        }
        $contactBean->total_earnings_c = $accumulated_earnings;
        $contactBean->save();
      }

			// Update Sponsors YTD Amounts
      if ($bean->endorsement_amount){
        $accountBean = BeanFactory::getBean("Accounts", $bean->mod_endorsements_accountsaccounts_ida );
        $accumulated_payments = 0;
        $accumulated_endorsements = 0;
        $accountBean->load_relationship("mod_endorsements_accounts");
        foreach($accountBean->mod_endorsements_accounts->getBeans() as $endorsementBean){
          $accumulated_endorsements += $endorsementBean->endorsement_amount;
          if ($endorsementBean->status=="Paid"){
            $accumulated_payments += $endorsementBean->endorsement_amount;           
          }
        }
        $accountBean->total_earnings_c = $accumulated_endorsements;
        $accountBean->total_payments_c = $accumulated_payments;
        $accountBean->save();
      }      
      

  }

}

?>