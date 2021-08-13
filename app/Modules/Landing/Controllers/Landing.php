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
        $this->v_data['carousel']  = $this->carouselModel->getData();
        $this->v_data['active']    = '1';

        return views('content/beranda/content', 'Landing', $this->v_data);
    }
}
