<?php

namespace App\Modules\Landing\Controllers;

// use App\Modules\Landing\Models\UserModel;

class Landing extends BaseController
{
    // private $userModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'menu'   => $this->list_menu->getMenu(),
            'active' => 1,
        ];

        return views('home', 'Landing', $data);
    }
}
