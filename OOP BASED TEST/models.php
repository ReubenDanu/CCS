<?php

class Model {
protected $db;

public function __construct($db) {
$this->db = $db;
}

public function create($table, $data) {
$columns = implode(',', array_keys($data));
$values = implode("','", array_values($data));

$query = "INSERT INTO {$table} ({$columns}) VALUES ('{$values}')";
return $this->db->query($query);
}

public function read($table, $id) {
$query = "SELECT * FROM {$table} WHERE id = {$id}";
return $this->db->query($query)->fetch_assoc();
}

public function update($table, $id, $data) {
$set = [];
foreach ($data as $column => $value) {
$set[] = "{$column} = '{$value}'";
}
$set = implode(',', $set);

$query = "UPDATE {$table} SET {$set} WHERE id = {$id}";
return $this->db->query($query);
}

public function delete($table, $id) {
$query = "DELETE FROM {$table} WHERE id = {$id}";
return $this->db->query($query);
}

}