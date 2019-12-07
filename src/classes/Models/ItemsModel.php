<?php


namespace Example\Models;


class ItemsModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    function getItems()
    {
        // $this->db is being pulled from the property private $db;)
        $query = $this->db->query('SELECT `item`, `id` FROM `shopping`');
        $items = $query->fetchAll();
        return $items;
    }

    function addItem($item)
    {
    $query = $this->db->prepare('INSERT INTO `shopping`(`item`) VALUES(:item)');
    return $query->execute([$item]);
    }

}