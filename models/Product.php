<?php

class Product {

    const SHOW_BY_DEFAULT = 10;

    public static function getProductlist($count = self::SHOW_BY_DEFAULT) {

        $productsList = array();

        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, category_id, image_catalog, status, description FROM product '
        . 'WHERE status = "1"'
        . 'ORDER BY id DESC '                
        . 'LIMIT ' . $count);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image_catalog'] = $row['image_catalog'];
            $productsList[$i]['category_id'] = $row['category_id'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }

}