<?php
class Api extends CI_Controller {
	public function __construct() {
        parent::__construct();
		Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
Header('Content-Type: application/json');      
Header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    }
	
public function passwordupdate(){

			$datas = json_decode(file_get_contents('php://input'));
			$datas = (array) $datas;
   			  $email=$datas['email'];
			 $password=$datas['password'];
			
			
        $this->load->model('auth_model');
        $res = $this->auth_model->pwdchange($email,$password);
     
            if($res==1){
		$user_arr=array(
				"status" => true); 		
			}
		else{
				$user_arr=array(
				"status" => false); 		
		}

echo json_encode($user_arr);	
		



}	

public function reportsperDoj(){
			$datas = json_decode(file_get_contents('php://input'));
			$datas = (array) $datas;
   			$startdate=$datas['startdate'];
	        $enddate=$datas['enddate']; 
			$this->load->model('auth_model');
			$res=$this->auth_model->getreportperdoj($startdate,$enddate);
	
foreach($res->result()as $row){
				   $id=$row->id;
                   $name=$row->firstname;
				   $age=$row->age;
				   $mobileNumber=$row->fathersmobile;				   
				   $parentName=$row->fathersname;
				   $type=$row->type;
				   
				   
				   
				   $student_arr[]=array(
	  
	   "name"=>$name,
	   "id"=>$id,
	   "age"=>$age,
	   "mobileNumber"=>$mobileNumber,
	   "parentName"=>$parentName,
	   "type"=>$type
	   );
		}		
			
echo json_encode($student_arr);


	
}
	    public function check()
        {
			$datas = json_decode(file_get_contents('php://input'));
			$datas = (array) $datas;
			  $email=$datas['email'];
			  $password=$datas['password'];
			
        $this->load->model('auth_model');
        $res = $this->auth_model->checkuser($email,$password);
       // $res1=$this->auth_model->username($email);
		
//  foreach($res1->result() as $row){
//	$role=$row->role;  
  //}
 if($res==0) 
	  { 
	  $user_arr=array(
      "status" => false,
      "message" => "Invalid Mail and Password!",
       ); 
  }
  
else{
	 $user_arr=array(
      "status" => true,
      "message" => "Successfully Login!",
	 // "role"=>$role
     );
}
	echo json_encode($user_arr);	

}
	public function mumnestreg(){
		//$jsonValue = '{"dcname":"123","email":"123@email.com","password":"123","confirmpassword":"123"}';
		$jsonValue =file_get_contents('php://input');
		$val = json_decode($jsonValue,true);
		$datas = (array) $val;

		if ($jsonValue="") 	{
				$user_arr=array("status" => "" ); 
		}else{
			$this->load->model('auth_model');
			$res=$this->auth_model->daycare($datas);
			$user_arr=array(
				"status" => true); 		
		}
		echo json_encode($user_arr);
}
public function studreg(){  
 if($_POST)
 {
     $folderPath = "upload/";
	// $folderPath = "C:\wamp64\www\hosp\upload\"
    $file_tmp = $_FILES['file']['tmp_name'];
    $ext = pathinfo($_FILES["file"]["name"])['extension']; 
	$file = $folderPath . uniqid() . '.'.$ext;
	
	$file_tmp1 = $_FILES['file1']['tmp_name'];
    $ext1 = pathinfo($_FILES["file1"]["name"])['extension']; 
	$file1 = $folderPath . uniqid() . '.'.$ext1;
	
	
    $file_tmp2 = $_FILES['file2']['tmp_name'];
    $ext2= pathinfo($_FILES["file2"]["name"])['extension']; 
    $file2 = $folderPath . uniqid() . '.'.$ext2;
	
	
	// $file_tmp3 = $_FILES['file3']['tmp_name'];
   // $ext3 = pathinfo($_FILES["file3"]["name"])['extension']; 
	//$file3 = $folderPath . uniqid() . '.'.$ext3;
	
    move_uploaded_file($file_tmp, $file);
    move_uploaded_file($file_tmp1, $file1);
    move_uploaded_file($file_tmp2, $file2);
   // move_uploaded_file($file_tmp3, $file3);

                    //student info
        		    $firstname=$_POST['FirstName'];
				    $lastname=$_POST['LastName'];
                    $gender=$_POST['gender']; 	
   				    $doj=$_POST['doj'];
     			    $dob=$_POST['dob'];
				    $age=$_POST['age'];
					$identification=$_POST['identification'];
					$bloodgroup=$_POST['bloodgroup'];
					$medprblm=$_POST['medprblm'];
				    $type=$_POST['type'];
                    $studentphotoUrl=$file;				   
				  
					//parent info
					$fathersName=$_POST['fathersName'];
	//			    $fathersOccupation=$_POST['fathersOccupation'];
				    $fathersMobile=$_POST['fathersMobile'];
				    $fathersEmail=$_POST['fathersEmail'];

   		//			$mothersName=$_POST['mothersName'];
			//	    $mothersOccupation=$_POST['mothersOccupation'];
				    $mothersMobile=$_POST['mothersMobile'];
				//    $mothersEmail=$_POST['mothersEmail'];

                  //  $fathersphotoUrl=$file1;
                  //  $mothersphotoUrl=$file2;					
                   $bcUrl=$file1;                  
				  $docUrl=$file2;
				    $address=$_POST['address'];
					
	
	 $stud_arr=array(
    "firstname"=>$firstname,
	"lastname"=>$lastname,
   	"doj"=> $doj,
   	"dob"=> $dob,
	"age"=>$age,
	"identification"=> $identification,
	"gender"=> $gender,
	"medprblm"=>$medprblm,
	"bloodgroup"=>$bloodgroup,
	"type"=>$type,
	"studentphotoUrl"=>$studentphotoUrl,
	);
	
	
  		$this->load->model('auth_model');
		$res=$this->auth_model->addstud($stud_arr);
 		$res1=$this->auth_model->getmaxstudid();
 	foreach($res1->result()as $row){
				   $id=$row->id;
    }
	$parent_arr=array(
	"student_id"=>$id,
    "fathersName"=>$fathersName,
	"fathersMobile"=>$fathersMobile,
	"fathersEmail"=>$fathersEmail,
	"mothersMobile"=>$mothersMobile,
	"bcUrl"=>$bcUrl,
	"docUrl"=>$docUrl,
	"address"=> $address
	
	
	);
	
	$res2=$this->auth_model->addparentinfo($parent_arr);
 	
	
 //           if(res==true){
		$user_arr=array(
				"status" => true); 		
		
	//	else{
		//		$user_arr=array(
		//		"status" => false); 		
	//	}

	}
		echo "true";

}
public function getstud(){
		//$jsonValue = '{"dcname":"123","email":"123@email.com","password":"123","confirmpassword":"123"}';
			
			$this->load->model('auth_model');
			$res=$this->auth_model->getstudentlist();
		foreach($res->result()as $row){
				   $id=$row->id;
                   $name=$row->firstname;
				   $age=$row->age;
				   $mobileNumber=$row->fathersmobile;				   
				   $parentName=$row->fathersname;
				   $address=$row->address;
				   
				   
				   
				   $student_arr[]=array(
	  
	   "name"=>$name,
	   "id"=>$id,
	   "age"=>$age,
	   "mobileNumber"=>$mobileNumber,
	   "parentName"=>$parentName,
	   "address"=>$address
	   );
		}		
			
echo json_encode($student_arr);
		}	
//get student per id
public function getstudperId(){
		//$jsonValue = '{"dcname":"123","email":"123@email.com","password":"123","confirmpassword":"123"}';
		$jsonValue =file_get_contents('php://input');
		$val = json_decode($jsonValue,true);
		$datas = (array) $val;
		$id=$datas['id'];
			
         	if ($jsonValue="") 	{
				$stud_arr=array("status" => "" ); 
		}else{
			$this->load->model('auth_model');
			$res=$this->auth_model->getstudperId($id);
		
		foreach($res->result()as $row){
				   $FirstName=$row->firstname;
				   $LastName=$row->lastname;
				   $gender=$row->gender;
				   $doj=$row->doj;
				   $dob=$row->dob;
				   $identification=$row->identification;
				   $bloodgroup=$row->bloodgroup;
				   $medprblm=$row->medprblm;
				   $type=$row->type;
				   $studentphotoUrl=$row->studentphotoUrl;
				   
				   
				   $fathersName=$row->fathersName;
				   $fathersMobile=$row->fathersMobile;
				 //  $fathersOccupation=$row->fathersOccupation;
				   $fathersEmail=$row->fathersEmail;
				 //  $fathersphotoUrl=$row->fathersphotoUrl;
				   
				  // $mothersName=$row->mothersName;
				   $mothersMobile=$row->mothersMobile;
				 //  $mothersOccupation=$row->mothersOccupation;
				 //  $mothersEmail=$row->mothersEmail;
				  // $mothersphotoUrl=$row->mothersphotoUrl;
					$bcUrl=$row->bcUrl;
					$docUrl=$row->docUrl;
				   $address=$row->address;
				   
				   
				   $student_arr[]=array(
	  
	   "FirstName"=>$FirstName,
	   "LastName"=>$LastName,
	   "gender"=>$gender,
	   "doj"=>$doj,
	   "dob"=>$dob,
	   "identification"=>$identification,
	   "bloodgroup"=>$bloodgroup,
	   "medprblm"=>$medprblm,
	   "type"=>$type,
	   "studentphotoUrl"=>$studentphotoUrl,
	    
	   "fathersMobile"=>$fathersMobile,
	   "fathersName"=>$fathersName,
	  // "fathersOccupation"=>$fathersOccupation,
	   "fathersEmail"=>$fathersEmail,
	  // "fathersphotoUrl"=>$fathersphotoUrl,
	   
	   "mothersMobile"=>$mothersMobile,
	//   "mothersName"=>$mothersName,
	//   "mothersOccupation"=>$mothersOccupation,
	//   "mothersEmail"=>$mothersEmail,
	//   "mothersphotoUrl"=>$mothersphotoUrl,
       "bcUrl"=>$bcUrl,
	   "docUrl"=>$docUrl,

	   "address"=>$address
	   );
		}		
		}	
echo json_encode($student_arr);
		}	

public function updatestudperId(){
	
 if($_POST)
 {
     $folderPath = "upload/";
	// $folderPath = "C:\wamp64\www\hosp\upload\"

    //$file_tmp = $_FILES['file']['tmp_name'];
 if(!empty($_FILES['file'])){
	 //echo "photo";
//	 return;
	
// }else{
	 $folderPath = "upload/";
$file_tmp = $_FILES['file']['tmp_name'];
 
	 $ext = pathinfo($_FILES["file"]["name"])['extension']; 
	$file = $folderPath . uniqid() . '.'.$ext;
 move_uploaded_file($file_tmp, $file);
  $id=$_POST['id'];
      $this->load->model('auth_model');
	 // $res = $this->auth_model->deletestudentphoto($id);
     $res1 = $this->auth_model->updatestudentphoto($file,$id);
	    
      
 }
  //update bc
// echo $_FILES['file1'];

if(!empty($_FILES['file1'])){
	 echo "bc";
	 $folderPath = "upload/";
     $file_tmp1 = $_FILES['file1']['tmp_name'];
     // echo $file_tmp1; 
      $ext = pathinfo($_FILES["file1"]["name"])['extension']; 
	$file1 = $folderPath . uniqid() . '.'.$ext;
  move_uploaded_file($file_tmp1, $file1);
  $id=$_POST['id'];
      $this->load->model('auth_model');
     $res = $this->auth_model->updatebc($file1,$id);
 }
 
 //update aadhar
 
if(!empty($_FILES['file2'])){
	 $folderPath = "upload/";
     $file_tmp = $_FILES['file2']['tmp_name'];
 
	 $ext = pathinfo($_FILES["file2"]["name"])['extension']; 
	$file2 = $folderPath . uniqid() . '.'.$ext;
 move_uploaded_file($file_tmp, $file2);
  $id=$_POST['id'];
      $this->load->model('auth_model');
     $res = $this->auth_model->updateaadhar($file2,$id);
 }





 
 
 //echo "hai";
	//$file_tmp1 = $_FILES['file1']['tmp_name'];
   // $ext1 = pathinfo($_FILES["file1"]["name"])['extension']; 
	//$file1 = $folderPath . uniqid() . '.'.$ext1;
	
	
   // $file_tmp2 = $_FILES['file2']['tmp_name'];
    //$ext2= pathinfo($_FILES["file2"]["name"])['extension']; 
   // $file2 = $folderPath . uniqid() . '.'.$ext2;
	
	
	// $file_tmp3 = $_FILES['file3']['tmp_name'];
   // $ext3 = pathinfo($_FILES["file3"]["name"])['extension']; 
	//$file3 = $folderPath . uniqid() . '.'.$ext3;
	
   // move_uploaded_file($file_tmp1, $file1);
   // move_uploaded_file($file_tmp2, $file2);
   // move_uploaded_file($file_tmp3, $file3);

                    //student info
$id=$_POST['id'];
    
  $firstname=$_POST['FirstName'];
				    $lastname=$_POST['LastName'];
                    $gender=$_POST['gender']; 	
   				    $doj=$_POST['doj'];
				    $dob=$_POST['dob'];
				    $age=$_POST['age'];
					$identification=$_POST['identification'];
					$bloodgroup=$_POST['bloodgroup'];
					$medprblm=$_POST['medprblm'];
				    $type=$_POST['type'];
//                    $studentphotoUrl=$file;				   
				  
					//parent info
					$fathersName=$_POST['fathersName'];
	//			    $fathersOccupation=$_POST['fathersOccupation'];
				    $fathersMobile=$_POST['fathersMobile'];
				    $fathersEmail=$_POST['fathersEmail'];

   		//			$mothersName=$_POST['mothersName'];
			//	    $mothersOccupation=$_POST['mothersOccupation'];
				    $mothersMobile=$_POST['mothersMobile'];
				//    $mothersEmail=$_POST['mothersEmail'];

                  //  $fathersphotoUrl=$file1;
                  //  $mothersphotoUrl=$file2;					
     //              $bcUrl=$file1;                  
		//		  $docUrl=$file2;
				    $address=$_POST['address'];
					
	
	 $stud_arr=array(
    "firstname"=>$firstname,
	"lastname"=>$lastname,
   	"doj"=> $doj,	
	"dob"=> $dob,
	"age"=>$age,
	"identification"=> $identification,
	"gender"=> $gender,
	"medprblm"=>$medprblm,
	"bloodgroup"=>$bloodgroup,
	"type"=>$type
	);
	
	
  		$this->load->model('auth_model');
		$res=$this->auth_model->updatestudent($stud_arr,$id);
		
	$parent_arr=array(
	"student_id"=>$id,
    "fathersName"=>$fathersName,
	"fathersMobile"=>$fathersMobile,
	"fathersEmail"=>$fathersEmail,
	"mothersMobile"=>$mothersMobile,
	//"bcUrl"=>$bcUrl,
//	"docUrl"=>$docUrl,
	"address"=> $address
	
	
	);
	
		$res1=$this->auth_model->updateparent($parent_arr,$id);
 	
	
 //           if(res==true){
		$user_arr=array(
				"status" => true); 		
		
	//	else{
		//		$user_arr=array(
		//		"status" => false); 		
	//	}

	}
		echo "true";

 }		
	
}	
?>