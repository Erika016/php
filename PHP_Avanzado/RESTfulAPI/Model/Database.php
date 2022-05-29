<?php
class Database
{
    private $conn, $result;

    function __construct($host, $user, $password, $db)
    {
        $this->conn = new mysqli($host, $user, $password, $db);
        if ($this->conn->connect_error) {
            die('Fatal error connecting to database');
        }
        // print 'Succesfully connected';
    }
    function setQuery($table)
    {
        $query = 'select * from ' . $table . ' order by name';
        $this->result = $this->conn->query($query);
        if (!$this->result) {
            die('Error in query');
        }
        return $this->result->fetch_all(MYSQLI_ASSOC);
    }
    function insertData($table, $types, $data, ...$params)
    {
        $query = 'insert into ' . $table . ' set ';
        $formattedParams =  implode(',', $params);
        $query .= $formattedParams;
        // print $query;
        $stmt = $this->conn->stmt_init();
        $stmt->prepare($query);
        if ($stmt === false) {
            die('Prepare ha fallado' . $this->conn->error);
        }
        $this->result = $stmt->bind_param($types, $data['name'], $data['countrycode'], $data['district'], $data['population']);
        if ($this->result === false) {
            die('Bind param ha fallado');
        }
        $this->result = $stmt->execute();
        if ($this->result === false) {
            die('Execute ha fallado' . $stmt->error);
        }
        $stmt->close();
        $this->conn->close();
    }
    function updateData($table, $types, $data, $field, $id)
    {
        $query = 'update ' . $table . ' set ' . $field . ' where id=?';
        // print $query;
        $stmt = $this->conn->stmt_init();
        $stmt->prepare($query);
        if ($stmt === false) {
            die('Prepare ha fallado' . $this->conn->error);
        }
        $this->result = $stmt->bind_param($types, $data, $id);
        if ($this->result === false) {
            die('Bind param ha fallado');
        }
        $this->result = $stmt->execute();
        if ($this->result === false) {
            die('Execute ha fallado' . $stmt->error);
        }
        $stmt->close();
        $this->conn->close();
    }
    function deleteData($table, $types, $id)
    {
        $query = 'delete from ' . $table . ' where id=?';
        // print $query;
        $stmt = $this->conn->stmt_init();
        $stmt->prepare($query);
        if ($stmt === false) {
            die('Prepare ha fallado' . $this->conn->error);
        }
        $this->result = $stmt->bind_param($types, $id);
        if ($this->result === false) {
            die('Bind param ha fallado');
        }
        $this->result = $stmt->execute();
        if ($this->result === false) {
            die('Execute ha fallado' . $stmt->error);
        }
        $stmt->close();
        $this->conn->close();
    }
}