<?php
$request_body = file_get_contents("php://input");
function unnamed() {
}


echo("funct return value: " . unnamed());
http_response_code(200);

?>