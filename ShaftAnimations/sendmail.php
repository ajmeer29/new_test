<?php
if(isset($_POST['btnsubmit']))
{	
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$location=$_POST['txtlocation'];
	$mobile=$_POST['txtmobile'];
	$course=$_POST['course'];
	$branch=$_POST['branch'];
	
	
			$to1="noreply@shaftmultimedia.com";
			//$to="server.shaftacademy@gmail.com";
			$to="server.shaftacademy@gmail.com";
						
			$subject="Shaftmultimedia Contact Form Details";
			$body="<table width='600' align='center' cellpadding='0' cellspacing='0' style='border:10px solid  #a30105'>
			  <tr>
				<td height='350' valign='top' class='boxbg'><br />
					<table width='95%' align='center' cellpadding='0' cellspacing='0'>						
					</table>
				  <br />
					<table width='85%' align='center' cellpadding='5' cellspacing='1' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333'>
					<tr><td>
					<img src='http://".$_SERVER['HTTP_HOST']."/landing/images/logo.png' width='200' height='100' />
					</td></tr>
					  <tr>
						<td colspan='2' bgcolor='#045103' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF'><strong>Contact Form Details</strong></td>
					  </tr>
					  <tr>
						<td colspan='2'>&nbsp;</td>
					  </tr>
					  
					  <tr>
                        <td><strong>Name :</strong></td>
					    <td><strong>$name</strong></td>
				      </tr>
					  
					   <tr>
                        <td><strong>Email :</strong></td>
					    <td><strong>$email</strong></td>
				      </tr>
					   <tr>
                        <td><strong>Mobile :</strong></td>
					    <td><strong>$mobile</strong></td>
				      </tr>
					 <tr>
                        <td><strong>Location :</strong></td>
					    <td><strong>$location</strong></td>
				      </tr>
					  <tr>
                        <td><strong>Course :</strong></td>
					    <td><strong>$course</strong></td>
				      </tr>";
				      if($branch!='')
				      {
				        $body.="<tr>
                                <td><strong>Branch :</strong></td>
					            <td><strong>$branch</strong></td>
				                </tr>"; 
				      }
					$body.="</table>
				  <br/></td>
			  </tr>
			</table>";
						$msg= "Mail Sent successfully, We will get back to you soon.";
						$headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= 'From: shaftmultimedia<noreply@shaftmultimedia.com>' . "\r\n";
                        mail($to1,$subject,$body,$headers);
                        if(mail($to,$subject,$body,$headers))
                        {
					    ?>
						<script>
						location.href="thanks.html";
						</script>
						<?php
						}
						else
						{
						?>
						<script>
						location.href="thanks.html";
						</script>
						<?php
						}
}
?>