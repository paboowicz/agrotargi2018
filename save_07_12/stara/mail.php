<!--Register Form Code-->
<?php
$to="biuro@agrotargiwschod.pl,".$_REQUEST['email']; // Change with your email address
$subject = "Rejestracja ze strony www";
if($_REQUEST['name'])
 $name = $_REQUEST['name'];
else
 $name = "brak danych"; 
if($_REQUEST['email'])
 $email = $_REQUEST['email'];
else
 $email = "brak danych"; 
if($_REQUEST['phone'])
 $phone = $_REQUEST['phone'];
else
 $phone = "brak danych"; 
if($_REQUEST['Numberofseats'])
 $Numberofseats = $_REQUEST['Numberofseats'];
else
 $Numberofseats = "brak danych"; 
if($_REQUEST['eventPlan'])
 $eventPlan = $_REQUEST['eventPlan'];
else
 $eventPlan = "brak danych"; 

$msgg='<table width="100%" border="0" cellspacing="5" cellpadding="5">
			  <tr>
				<td width="50%" align="left" class="blacktext01">Nazwa:</td>
				<td width="50%" align="left"><span class="blacktext01">'.$name.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">adres email: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$email.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">numer telefonu: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$phone.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">ilość modułów: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$Numberofseats.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">wielkość modułu: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$eventPlan.'</span></td>
			  </tr>
	   </table>';

	   $message=$msgg;

        $headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=utf-8\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: php\n";
		$headers .="From:".$name."<".$email.">\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8\n' . "\r\n";
		mail($to, $subject, $message, $headers);	

?>