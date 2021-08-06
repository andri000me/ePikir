<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class AuthFilterKesbangpol implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
    	if (session('logs') != 'SimEpikirKesbangpol')
	    {
            Services::session()->destroy();
?>

            <script>
                alert('Silahkan login dahulu!');
                document.location = '<?=base_url('auth');?>';
            </script>
<?php
            //kembali ke halaman login dengan sekaligus set session flashdata error
	        // return redirect()->to(base_url('auth'))->with('error','Silahkan login dahulu');
	    }
        // Do something here
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}