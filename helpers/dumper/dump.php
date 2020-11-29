<?php
file_put_contents("./data/".time(), json_encode([$_REQUEST, file_get_contents('php://input')]));
echo "OK";