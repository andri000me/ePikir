<?php

namespace App\Modules\Landing\Controllers;

use App\Modules\Landing\Models\CarouselModel;

class Landing extends BaseController
{
    private $carouselModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->carouselModel = new CarouselModel();
    }

    public function index()
    {
        $data = [
            'menu'      => $this->list_menu->getMenu(),
            'carousel'  => $this->carouselModel->getData(),
            'active'    => 1,
        ];

        return views('home', 'Landing', $data);
    }
}
