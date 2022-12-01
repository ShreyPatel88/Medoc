<?php 

class Payment{
	public static function add($name, $amount){
		
		
		if($name == "" || $amount == ""){
			Messages::error("All fields are required"); 
			return; 
		}
		
		if((float)$amount == 0){
			Messages::error("Amount must be greater than 0");
			return;
		}

        $date = date("Y-m-d");

        $paymentToken = md5(uniqid().time().unixtojd().$name.$amount);
		
		Db::insert("payments", 
				array("patient_name", "amount", "date", "token"), 
				array($name, $amount, $date, $paymentToken )
		); 
		
		Messages::success("Payment successfully added");
        return; 
		
	}
	
	public static function load(){
		$query = Db::fetch("payments", "", "", "", "id DESC", "", "");

		if(!Db::count($query)){
			Messages::info("There is no payment data in the moment.");
			return; 
		}
		echo "<div class='form-holder'>"; 
		Table::start();
		$header = array("Patient Name", "Amount", "Date");
		$body = array();
		Table::header($header); 
		while($data = Db::assoc($query) ){
						
			Table::body(array($data['patient_name'], 
						$data['amount'], 
						$data['date'])); 
		}
		Table::close();
		
		echo "</table>";
		
	}
	
}