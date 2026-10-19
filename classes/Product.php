<?php
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

    public function __construct(string $code, string $name, string $description, float $price)
    {
        $this->id = self::$nextId++;
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function formattedPrice(): string
    {
        return '$' . number_format($this->price, 2);
    }
}
