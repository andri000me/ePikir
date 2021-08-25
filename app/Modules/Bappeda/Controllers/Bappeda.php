<?php

namespace App\Modules\Bappeda\Controllers;

class Bappeda extends BaseController
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

        return views('content/dashboard/dashboard', 'Bappeda', $this->v_data);
    }
}
