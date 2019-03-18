<?php

include 'database.php';
class Client
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;

    public function __construct($id = null, $firstName, $lastName, $email, $phone)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
    }

    public static function getAllClients($conn)
    {
        $records = $conn->prepare('SELECT id,email,firstName,lastName,phone FROM client ');
        $records->execute();
        foreach ($records->fetchAll() as $item) {
            $list[] = new Client($item['id'], $item['firstName'], $item['lastName'], $item['email'], $item['phone']);
        }

        return $list;
    }
}
