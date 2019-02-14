<?php
$db = new DB('user', 'password', 'database', 'host');

// insert
// $result = $db->query("insert into customer (username, password, email, address, dateAdd) values ('woottipong', '123456', 'woottipong523@psru.ac.th', 'M1', now())");
// $last_id = $db->lastid;


// select
// $result = $db->query("select * from customer");
// print_r($result);

// update
// $result = $db->query("update customer set address = '123' where customer_id = '1'");



// delete
$db->query("delete from customer where customer_id = '1'");

// disconnect
$db->disconnect();
?>