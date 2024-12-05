<?php
class User extends Db
{
    public function getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * FROM `users`");
        $sql->execute();
        $users = array();
        $users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $users;
    }
    function deleteUsers($id)
    {
        $sql  = self::$connection->prepare("DELETE FROM `users` WHERE `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}
