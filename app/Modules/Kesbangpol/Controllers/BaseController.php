<?php

namespace App\Modules\Kesbangpol\Controllers;

use App\Modules\Kesbangpol\Models\MenuModel;
use App\Modules\Kesbangpol\Models\RekomendasiPenelitianModel;
use App\Modules\Kesbangpol\Models\RekomendasiPengabdianModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['encrypt', 'alert', 'tanggal', 'view', 'ipadd', 'segment', 'form', 'text'];

	protected $v_data = array();
	protected $session;
	protected $m_rpl;
	protected $m_rpb;
	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		$this->session = \Config\Services::session();

		//ambil list menu pada model MenuModel
		$m_nav = new MenuModel;
		$this->m_rpl = new RekomendasiPenelitianModel();
		$this->m_rpb = new RekomendasiPengabdianModel();

		$this->v_data['menu'] = $m_nav->getMenu();
		$this->v_data['bubble'] = array(
			'rpl_masuk' 	=> array(
				'color'		=> 'primary',
				'count'		=> $this->m_rpl->where('status', 1)->countAllResults(),
			),
			'rpl_proses' 	=> array(
				'color'		=> 'danger',
				'count'		=> $this->m_rpl->where('status', 2)->countAllResults(),
			),
			// 'rpl_selesai' 	=> array(
			// 	'color'		=> 'success',
			// 	'count'		=> $this->m_rpl->where('status >', 2)->countAllResults(),
			// ),
			// ------------------------------------------------------------------------
			'rpb_masuk' 	=> array(
				'color'		=> 'primary',
				'count'		=> $this->m_rpb->where('status', 1)->countAllResults(),
			),
			'rpb_proses' 	=> array(
				'color'		=> 'danger',
				'count'		=> $this->m_rpb->where('status', 2)->countAllResults(),
			),
			// 'rpb_selesai' 	=> array(
			// 	'color'		=> 'success',
			// 	'count'		=> $this->m_rpb->where('status >', 2)->countAllResults(),
			// ),
		);
	}
}
