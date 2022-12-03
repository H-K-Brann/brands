<?php
namespace App\Models;

use Nette;

final class Brands 
{
    use Nette\SmartObject;

    private $database;

    public function __construct(Nette\Database\Explorer $database)
    {
        $this->database = $database;
    }

    public function getAllBrands()
    {
        return $this->database
            ->table('brands');
    }   
}