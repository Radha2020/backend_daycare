<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth_model
 *
 * @author Bala Arunachalam
 * Created at : 8:42 PM 04-Oct-14
 */
class auth_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
	//reports
	
	public function getreportperdoj($startdate,$enddate){
		
		$q=$this->db->query("SELECT a.id,a.firstname,a.age,b.fathersmobile,b.fathersname,a.type FROM stud_reg a,parent_info b WHERE 
a.id=b.student_id and doj BETWEEN '$startdate' AND '$enddate'");
	   	return $q;
		
		
	}
	
	public function daycare($reg){
	//	$sql = "insert into mumnest_reg (dcname,email,password,confirmpassword)
 //values ('Doe','doe@xyz.com','as','as')";

	$sql = $this->db->insert_string('mumnest_reg',$reg);
	       $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	
		
		
		
	}}
	public function pwdchange($email,$password){
		  $this->db->set('password',$password);
		$this->db->where('email',$email);
	    	$q = $this->db->update('users');
	    	return $q;

		
	}
	public function addstud($reg){
	$sql = $this->db->insert_string('stud_reg',$reg);
	       $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	}}
	
	public function getstudentlist(){
		
		$q=$this->db->query("SELECT a.id,a.firstname,a.age,b.fathersmobile,b.fathersname,b.address FROM stud_reg a,parent_info b WHERE 
a.id=b.student_id");
	   	return $q;
	   	
		
	}
	public function getstudperId($id){
		
		$q=$this->db->query("SELECT a.id,a.firstname,a.lastname,a.gender,a.dob,a.doj,a.identification,a.bloodgroup,a.medprblm,a.type,a.studentphotoUrl,
		b.fathersMobile,b.fathersName,b.fathersEmail,b.mothersMobile,
		b.bcUrl,b.docUrl,b.address FROM stud_reg a,parent_info b WHERE a.id=b.student_id and a.id='$id' ");
	   	return $q;
	   	
		
		
	}
	public function getmaxstudid(){
	   	
	 	
    	$q=$this->db->query("SELECT max(id) as id FROM stud_reg");
	   	return $q;
	   	
	}
	public function addparentinfo($reg){
		
	$sql = $this->db->insert_string('parent_info',$reg);
	       $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	}		
		
	}
	
	public function updatestudent($datas,$id){
		$this->db->where('id',$id);
	    	$q = $this->db->update('stud_reg',$datas);
	    	return $q;

	}

	public function deletetudentphoto($id){
       $this->db->where('id', $id);
         $this->db->delete('stud_reg');
		 return $q;
	}


	public function updatestudentphoto($file,$id){
		
		
         $this->db->set('studentphotoUrl',$file);
		$this->db->where('id',$id);
	    	$q = $this->db->update('stud_reg');
	    	return $q;

	}
	public function updatebc($file1,$id){
          $this->db->set('bcUrl',$file1);
		$this->db->where('id',$id);
	    	$q = $this->db->update('parent_info');
	    	return $q;

	}
	public function updateaadhar($file2,$id){
          $this->db->set('docUrl',$file2);
		$this->db->where('id',$id);
	    	$q = $this->db->update('parent_info');
	    	return $q;

	}


	public function updateparent($datas,$id){
		$this->db->where('id',$id);
	    	$q = $this->db->update('parent_info',$datas);
	    	return $q;

	}



	
	public function daycarecount(){
	   	
	 	
    	$q=$this->db->query("SELECT max(id) as dcount FROM daycare");
	   	return $q;
	   	
	}
	public function getdaycaredetails(){
	$q=$this->db->query("select name,id,contactno,city from daycare where is_active='yes'");
		return $q->result();
		
		
	}
	
	
	
	
	public function adddaycaredetails($daycare){
		 $sql = $this->db->insert_string('daycare',$daycare);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }
		
		
		
	}

	public function getdaycarefinancedetails(){
	$q=$this->db->query("select * from daycare_finance");
		return $q->result();
		
		
		
		
	}




    public function flutregdetails($reg){
        
            $sql = $this->db->insert_string('flut_app',$reg);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

        
    }
    
    
    public function flutitemdetails($items){
        
            $sql = $this->db->insert_string('flut_item_orders',$items);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

        
    }
    
    
    
    public function flutorderdetails($reg){
        
            $sql = $this->db->insert_string('flut_table_orders',$reg);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

        
    }
    public function flutcheckuser($email,$pwd)
    { 
    	$q=$this->db->query("select email,password from flut_app where email='$email' and password='$pwd'" );
	   	return $q->num_rows();
	    	
    }
    
    
	public function flutgetusername($email){
		
		$q=$this->db->query("select name from flut_app where email='$email'");
		return $q;
		
	}
	
	public function flutgetitems(){
	    
	    	$q=$this->db->query("SELECT * FROM flut_items");
           return $q;
	}
	
	public function flutgetwaiters(){
	    
	    	$q=$this->db->query("SELECT * FROM flut_waiters");
           return $q;
	}
	
	public function flutgettables(){
	    
	    	$q=$this->db->query("SELECT * FROM flut_tables");
           return $q;
	}
	
    public function doccount(){
	   	
	 	
    	$q=$this->db->query("SELECT max(id) as doccount FROM doctor_details");
	   	return $q;
	   	
	}
	public function hospcount(){
	   	
	 	
    	$q=$this->db->query("SELECT max(id) as hospcount FROM hospital_details");
	   	return $q;
	   	
	}
	public function patcount(){
		
		
    	$q=$this->db->query("SELECT max(id) as patcount FROM patient_details");
	   	return $q;
	   	
	}
	public function doctorname($email){
	
		$q=$this->db->query("select name from doctor_details where email='$email'");
		return $q;
	}

	public function hospitalname($email){
	
		$q=$this->db->query("select name from hospital_details where email='$email'");
		return $q;
	}
	
    public function checkuser($email,$pwd)
    { 
    	$q=$this->db->query("select email,password from users where email='$email' and password='$pwd'" );
	   	return $q->num_rows();
	    	
    }
    
	public function username($email){
		
		$q=$this->db->query("select id,role,role_id,email from users where email='$email'");
		return $q;
		
	}
	public function patientid($email)
    {
		$q=$this->db->query("select id from users where email='$email'");
		return $q;
		
	}
	public function dashboarddocdetails(){
		
 	$q=$this->db->query("SELECT id,name,dept,qual FROM doctor_details");
           return $q;
		
		
	}
	public function docdetails($email){
		
		$q=$this->db->query("select name,id from doctor_details where email='$email'");
		return $q;
		}
		public function hospdetails($email){
			
		$q=$this->db->query("select name,id from hospital_details where email='$email'");
		return $q;
		}
	//public function hospdetails($id){
	//$q=$this->db->query("select name from hospital_details where id='$id'");
		//return $q;
		
		
//	}	
		
	public function patdetails($email){
	$q=$this->db->query("select name,id from patient_details where email='$email'");
		return $q;
		
		
	}	
     public function patientdetails($patient)
   	{
    	    $sql = $this->db->insert_string('patient_details',$patient);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

	}
	public function hospitaldetails($hospital){
		    $sql = $this->db->insert_string('hospital_details',$hospital);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

		
		
	}
	public function doctordetails($doctor){
		    $sql = $this->db->insert_string('doctor_details',$doctor);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }

		
		
	}
	public function getmemberDetails($pat_id){
		$q=$this->db->query("select id,name,age,gender,phone,email from member_details where pat_id='$pat_id' and is_active=1");
		return $q;
			}
	public function getmemberdetailsPerId($id)
	{
		$q=$this->db->query("select id,pat_id,name,age,gender,phone,email from member_details where id='$id'");
		return $q;
		
		
		
	}
	public function addmemberdetails($member){
		    $sql = $this->db->insert_string('member_details',$member);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }
		
		
		
	}
	public function updatememberdetails($member,$id){
		
		
		    	$this->db->where('id',$id);
	    	$q = $this->db->update('member_details',$member);
	    	return $q;
		
	}
	public function getpatidname($email){
		
		
	$q=$this->db->query("select id,name from patient_details where email='$email'");
		return $q;
	}
	public function getpatid($email)
	{
		
	$q=$this->db->query("select id from patient_details where email='$email'");
		return $q;
		
		
	}
	public function createappointment($app){
		
    	    $sql = $this->db->insert_string('appointment',$app);
	        $result = $this->db->query($sql);

			if($result === TRUE){
	            return TRUE;
	        } else {
	            $last_query = $this->db->last_query(); //getting the last tried query for execution, to find error in query
	            return $last_query;
	        }
		
		
	}
	public function appointmentdetails($id)
	{
	$q=$this->db->query("SELECT a.id,a.date,a.time,a.is_active,a.name,b.name as hosp_name,c.name as doc_name FROM appointment a,hospital_details b,doctor_details c WHERE pat_id='$id' and
a.hosp_id=b.id and a.doc_id=c.id and a.is_active='1' order by a.name asc");
		return $q;
		
		
	}
	public function appointmentdetailsforDoctor($id){
		
		
	$q=$this->db->query("SELECT a.id,a.date,a.time,a.is_active,a.name,b.name as hosp_name,c.name as doc_name FROM appointment a,hospital_details b,doctor_details c WHERE doc_id='$id' and
a.hosp_id=b.id and a.doc_id=c.id and a.is_active='1' order by a.name asc");
		return $q;
	}
	public function appointmentdetailsforHospital($id){
	  
	$q=$this->db->query("SELECT a.id,a.date,a.time,a.is_active,a.name,b.name as hosp_name,c.name as doc_name FROM appointment a,hospital_details b,doctor_details c WHERE hosp_id='$id' and
a.hosp_id=b.id and a.doc_id=c.id and a.is_active='1' order by a.name asc");
		return $q;
		
	}
public function editappdetails($id){
	
	$q=$this->db->query("SELECT a.name,a.age,a.phone,a.gender,a.id,a.pat_id,a.date,a.time,a.is_active,b.name as hosp_name,b.id as hosp_id,c.name as doc_name,c.id as doc_id FROM appointment a,hospital_details b,doctor_details c WHERE a.id='$id' and
a.hosp_id=b.id and a.doc_id=c.id ");
		return $q;
	
}	
	
public function getMaxPatientId(){
	
			$q=$this->db->query("SELECT max(id) as pat_id FROM patient_details");
           return $q->result();
}
public function userdetails($user){
	
        $sql=$this->db->insert_string('users',$user);
        $result=$this->db->query($sql);		

	
}
public function getmembers($patid){
     	   $q=$this->db->query("SELECT id,name FROM member_details where pat_id='$patid'");
           return $q;
	
}
public function getmemberspermemid($id){
	       $q=$this->db->query("SELECT id,name,age,gender,phone,email,pat_id FROM member_details where id='$id'");
           return $q;
	
}
public function gethospitals(){
	
			$q=$this->db->query("SELECT id,name FROM hospital_details");
           return $q;
}
public function getdoctors($id){
	
	$q=$this->db->query("SELECT distinct a.id as id,a.name as name,a.dept as dept from doctor_details a, hosp_doc_mapping b WHERE a.id=b.doc_id and b.hosp_id= '$id'");
     return $q;	
}
public function getdatedetails($id1,$id2){
	
	$q=$this->db->query("SELECT distinct b.app_date as d from doctor_details a, hosp_doc_mapping b WHERE a.id=b.doc_id and b.hosp_id= '$id1'and a.id='$id2'");
     return $q;	
}
public function gettimedetails($id1,$id2,$id3){
	
	$q=$this->db->query("SELECT distinct b.app_time as t from doctor_details a, hosp_doc_mapping b WHERE a.id=b.doc_id and b.hosp_id= '$id1'and a.id='$id2' and b.app_date='$id3'");
     return $q;	
}


public function cancelapp($id){
		$this->db->set('is_active','0');
       	$this->db->where('id',$id);
       	$q = $this->db->update('appointment');
       	  	return $q;

}
public function cancelmem($id){
		$this->db->set('is_active','0');
       	$this->db->where('id',$id);
       	$q = $this->db->update('member_details');
       	  	return $q;

	
}	
public function updateapp($app,$id){
		    	$this->db->where('id',$id);
	    	$q = $this->db->update('appointment',$app);
	    	return $q;

}


}
?>
