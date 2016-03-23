<?php
function sendEmail ($name, $email, $message, $answer)
{
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email) email address is considered valid.";
  }
  else {
    echo "This ($email) email address is considered valid.";
  }

  if (mail("nathan92oldfield@gmail.com", "fromwebsite", $message))
  	{
  		echo "success";
  	}

}
?>