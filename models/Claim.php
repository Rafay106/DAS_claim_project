<?php

class Post {
    private $conn;
    private $table = 'claim';

    public $id;
    public $claim_for;
    public $bill_date;
    public $bill_no;
    public $amount;
    public $date_time_stamp;
    public $place;
    public $approved_by;
    public $claim_by;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
    }

    public function readSingle() {
    }

    public function create() {
    }

    public function update() {
    }

    public function delete() {
    }
}
