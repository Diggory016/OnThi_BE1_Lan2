<?php
class Category extends Db
{
    public function getAllCategories()
    {
        $sql = self::$connection->prepare("SELECT * FROM `categories`");
        $sql->execute();
        $category = array();
        $category = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $category;
    }
    function deleteCate($id)
    {
        $sql  = self::$connection->prepare("DELETE FROM `categories` WHERE `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}
