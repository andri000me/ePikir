<?php

namespace App\Modules\Kesbangpol\Controllers;

class Dashboard extends BaseController
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $this->v_data['active']     = '1';

        return views('content/dashboard/dashboard', 'Kesbangpol', $this->v_data);
    }
}
