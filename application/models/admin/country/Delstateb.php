<?php 
class Delstateb extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

  function check($permission)
    {
		
	if($this->Adminlogincheck->checkper($permission['manage'])){
		return true;
		}else{
				redirect(site_url());
				exit();
		}
    }	
	
	  function load($permission,$mod)
    {
		$db="states";
	$page=$this->uri->uri_to_assoc();
		

$this->db->where($db.'_id', $_GET['id']);
$this->db->delete($db); 

	redirect(site_url('administrator/userpage/loadpage/'.$this->uri->segment(4).'/subpage/statecity/?id='.$_GET['country']));
		
	}
	
	
	
}

?>