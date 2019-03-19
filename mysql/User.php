<?php

include 'database.php';
class User
{
    public $id;
    public $name;
    public $email;
    public $avatar;

    public function __construct($id = null, $name, $email, $avatar = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->avatar = $avatar;
    }

    public static function getUser($id, $conn)
    {
        $records = $conn->prepare('SELECT id,email,name,avatar FROM users where id='.$id);
        $records->execute();
        $result = $records->fetch(PDO::FETCH_ASSOC);
        $user = new User($id, $result['name'], $result['email'], $result['avatar']);

        return $user;
    }

    public static function getAllUsers($conn)
    {
        $records = $conn->prepare('SELECT id,email,name,avatar FROM users ');
        $records->execute();
        foreach ($records->fetchAll() as $item) {
            $list[] = new User($item['id'], $item['name'], $item['email'], $item['avatar']);
        }

        return $list;
    }

    public static function searchUsers($conn, $name)
    {
        $sql = 'SELECT id,email,name,avatar FROM users where name LIKE :name';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', '%'.$name.'%');
        $stmt->execute();
        $list[] = null;
        foreach ($stmt->fetchAll() as $item) {
            $list[] = new User($item['id'], $item['name'], $item['email'], $item['avatar']);
        }

        return $list;
    }
}
