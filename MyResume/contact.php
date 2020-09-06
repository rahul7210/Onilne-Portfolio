<?php
$Name = $_REQUEST['name'];
$Email = $_REQUEST[ 'email'];
$Subject = $_REQUEST['subject'];
$Message = $_REQUEST[ 'message'];

if(empty($Name)||($Email)||($Subject)||($Message))
{
    
    mail("devilsoalrahul@gmail.com",$Subject,$Message, "From: $Name < $Email>");
echo"<script type='text/javascript'>alert('your message sent successfully');
window.history,log(-1);
</script>";
//  echo "Please fill all the fields";
}

else
{
// mail("devilsoalrahul@gmail.com",$Subject,$Message, "From: $Name < $Email>");
// echo"<script type='text/javascript'>alert('your message sent successfully');
// window.history,log(-1);
// </script>";


echo "Please fill all the fields";

}