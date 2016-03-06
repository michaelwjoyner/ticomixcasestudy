<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class mod_EndorsementsViewEdit extends ViewEdit {

 	public function __construct() {
	  $this->useForSubpanel = true;
 		parent::ViewEdit();
	}
  
	function display(){
	
    /*
     * If its a new record, then lets get the next ID #
     */
  	if ( !isset($_REQUEST['record']) || empty($_REQUEST['record']) )
    {
      require_once 'modules/Administration/Administration.php';
      $admin = new Administration();
      $admin->retrieveSettings();
      $next_id_no = $admin->settings['sysconfig_next_endorsement_no'];
      $admin->saveSetting("sysconfig", "next_endorsement_no", $next_id_no+1); // save changes
      $this->bean->name = $next_id_no;		
    }
	
    // Lets flush the buffer
    parent::display();
    
    /*
     * Jquery formatting
     */ 
    echo <<<JS
      <script type='text/javascript'>
        $(document).ready(function() {
          $("#fee_percentage").change(function(){updateFeesEarned();})
          $("#endorsement_amount").change(function(){updateFeesEarned();})
          $('#agency_amount').attr('readonly', true);
          
          // Setups for obtaining the Athletes default percentage
          $("button[name='btn_mod_endorsements_contacts_name']").attr("onclick","");          
          $("button[name='btn_mod_endorsements_contacts_name']").click(
            function(){         
              var popupRequestData = {
                "call_back_function"   : "set_return",
                "form_name"            : "EditView",
                "field_to_name_array"  : {
                  "id"                 : "mod_endorsements_contactscontacts_ida",
                  "name"               : "mod_endorsements_contacts_name",
                  "default_percentage_c" : "fee_percentage"
                }
              };
              open_popup('Contacts', 800, 850, '', true, true, popupRequestData);
            }
          );

          // SQS to grab default percentage from the Contact
          sqs_objects["EditView_mod_endorsements_contacts_name"].field_list.push("default_percentage_c");
          sqs_objects["EditView_mod_endorsements_contacts_name"].populate_list.push("fee_percentage");

        });
        
        // Function to update the earnings
        function updateFeesEarned()
        {
            fees_percentage = $("#fee_percentage").val();
            endorsement_amount = unformatNumber($("#endorsement_amount").val());
            $("#agency_amount").val((fees_percentage/100)*endorsement_amount);
        }
        
        // Strip things down for calculating
        function unformatNumber(str)
        {
          str = String(str);
          str = str.replace(",",'');
          num = Number(str);
          return num;
        }
     
      </script>
JS;

  }  
} // End Class: mod_EndorsementsViewEdit
?>