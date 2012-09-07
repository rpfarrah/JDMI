</php


$to = 'rfarrah@jdmi.com';
$subject = 'Parkway';

$message = $_POST['parkway'];


if($_POST){
mail ($to, $message, $header);
$feedback = 'Thanks for the Feedback!';
}

?>




