# mysqli-class-db
Easy database connection (MySQLi)

$db = new DB('user', 'password', 'database', 'host');<br /><br />

// insert
$result = $db->query("insert into customer (username, password, email, address, dateAdd) values ('woottipong', '123456', 'woottipong523@psru.ac.th', 'M1', now())");<br />
$last_id = $db->lastid;<br /><br />

// select<br />
$result = $db->query("select * from customer");<br />
print_r($result);<br /><br />

// update<br />
$result = $db->query("update customer set address = '123' where customer_id = '1'");<br /><br />

// delete<br />
$db->query("delete from customer where customer_id = '1'");<br /><br />

// disconnect<br />
$db->disconnect();
