<?php
include 'Model.php';

class Product extends Model
{
    public $id; // never expose the real id please.
    public $name;
    public $description;
    public $image;
    public $price;

    public function __construct($id, $name, $desc, $img, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $desc;
        $this->image = $img;
        $this->price = $price;
    }

    public static function all()
    {
        $statement = self::db()->query('SELECT * FROM products;');
        $products = [];
        while ($row = $statement->fetchArray(SQLITE3_ASSOC)) {
            $products[] = new Product(
                $row['id'],
                $row['name'],
                $row['description'],
                $row['image'],
                $row['price']
            );
        }
        return $products;
    }

    public static function get($id) {
        $statement = self::db()->prepare('SELECT * FROM products WHERE id=:id');
        $statement->bindValue(':id', $id, SQLITE3_INTEGER);        
        $result = $statement->execute()->fetchArray(SQLITE3_ASSOC);
        
        return new Product(
            $result["id"],
            $result["name"],
            $result["description"],
            $result["image"],
            $result["price"]
        );
    }
}
