<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Models\Brands;
use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    private $facade;

    public function __construct(Brands $facade)
    {
        $this->facade = $facade;   
    }

    public function renderWelcome(): void
    {
        $this->template->brands = $this->facade
        ->getAllBrands();
    }
}
