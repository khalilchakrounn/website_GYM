<?PHP
class Client{
	private $Firstname;
	private $Lastname;
	private $Username;
	private $ID;
	private $EMAIL;
	private $Birthday;
	private $image;
	private $password;

	/*function __construct($Firstname,Lastname,$Birthday,$image) {
	
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
	
		$this->Birthday=$Birthday;
	
		$this->image=$image;
	}*/
	
	/*	function __construct($Username,$EMAIL,$password) {
	
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
	}*/


 function __construct()
{
    $ctp = func_num_args();
    $args = func_get_args();
    switch($ctp)
    {
        
        case '3':
            $this->fonction1($args[0],$args[1],$args[2]);
            break;
        case '4':
        $this->fonction2($args[0],$args[1],$args[2],$args[3]);
            break;
         default:
            break;
    }
}

	public function fonction1($Username,$EMAIL,$password)
	{
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
	}
	
	public function fonction2($Firstname,$Lastname,$Birthday,$image)
	{
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
	
		$this->Birthday=$Birthday;
		$this->image=$image;
	}






		
	/********************************************************/
	function getID(){
		return $this->ID;
	}
	function getFIRSTNAME(){
		return $this->Firstname;
	}
		function getLASTNAME(){
		return $this->Lastname;
	}
	function getUsername(){
		return $this->Username;
	}
	function getEmail(){
		return $this->EMAIL;
	}
	function getBirthday(){
		return $this->Birthday;
	}
    function getImage(){
		return $this->image;
	}
	function getpassword(){
		return $this->password;
	}



	function setID($ID){
		$this->ID=$ID;
	}
	function setFIRSTNAME($Firstname){
		$this->Firstname=$Firstname;
	}
		function setLASTNAME($Lastname){
		$this->Lastname=$Lastname;
	}
		function setTUsername($Username){
		$this->Username=$Username;
	}

	function setTEMAIL($EMAIL){
		$this->EMAIL=$EMAIL;
	}
	function setBirthday($Birthday){
		$this->Birthday=$Birthday;
	}

	function setTIMAGE($image){
		$this->image=$image;
	}

	function setTPassword($password){
		$this->password=$password;
	}
}

?>