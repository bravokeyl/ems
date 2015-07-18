<?
$result = mail('pivden@express.net.ua', 'subject', 'message');

if($result)
{
    echo 'Ok!';
}
else
{
    echo 'error!!!';
}

?>