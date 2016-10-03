<?php

class VisitsCounter{
	public function counter()
    {
        $file = "functions/counter.txt"; 
        $f = fopen($file, "r");
        if(filesize($file)!=0){
			$full_file="";
        	while(!feof($f)) {
				$info = fgets($f);
				$parts = explode("|", $info);
	            if($parts[0] == (string)date("Y-m-d")){
	            	$counter = $parts[1] + 1;
	            	$info = $parts[0]."|".$counter."\n";
	            }
	            $full_file = $full_file .$info;
			}
			$f2 = fopen($file, "w");
			fwrite($f2, $full_file);
			fclose($f2);
		}else{
			$f2 = fopen($file, "w+");
			fwrite($f2,date("Y-m-d")."|1\n");
			fclose($f2);
		}
		fclose($f); 
		
       // return $counter;
    }
}
?>