<?php
// strict_types saying we can't change the function's 
declare(strict_types=1);

// Week 7 style: the ID comes from a static counter that PHP forgets
// every time the script ends. Step 5 changes this.
class Product
{
    public static int $nextId = 1;

    public int $id;
    public string $code;
    public string $name;
    public string $description;
    private float $price;
    
    public int $categoryId;
    public string $category;

    public function __construct(string $code, string $name, string $description, float $price, int $categoryId, string $category, ?int $id = null)
    {
        // $this->id = self::$nextId++;
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->categoryId = $categoryId;
        $this->category = $category;
    }

    public function getPrice(): float
    {
        // object . property and we use the arrow instead.
        return $this->price;
    }

    public function formattedPrice(): string
    {
        return '$' . number_format($this->price, 2);
    }

    public static function fromRow(array $row): Product
    {
        return new Product(
            $row['productCode'],
            $row['productName'],
            $row['description'],
            (float) $row['listPrice'],
            (int) $row['categoryID'],
            $row['categoryName'],
            (int) $row['productID']
        );
    }
}
