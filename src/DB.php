<?php
namespace woottipong523\mysqli-class-db
class DB{
    private $conn = null;
    private $last_id = null;
    public function __construct($user, $password, $database, $host = 'localhost') {
        try {
            $this->conn = new mysqli( $host, $user, $password, $database );
            $this->conn->set_charset( "utf8" );
        } catch ( Exception $e ) {
            die( 'Unable to connect to database' );
        }
    }

    public function query($sql) {
        $sep = explode(' ', strtolower(trim($sql)));
        switch ($sep[0]) {
            case 'select':
                $result = $this->conn->query($sql);
                while ( $row = $result->fetch_assoc() ) {
                    $results[] = $row;
                }
                return $results;
                break;
            case 'insert':
            case 'update':
            case 'delete':
                $query = $this->conn->query($sql);
                $this->lastid = $this->conn->insert_id;
                return $query;
                break;
            default:
                return 'Command not found';
        }
    }
    public function lastid()
    {
        return $this->lastid;
    }

    public function disconnect()
    {
        $this->conn->close();
    }
}
?>
