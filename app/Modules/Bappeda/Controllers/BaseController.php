<?php

namespace App\Modules\Bappeda\Controllers;

use App\Modules\Bappeda\Models\MenuModel;
use App\Modules\Bappeda\Models\IzinPenelitianModel;
use App\Modules\Bappeda\Models\IzinPengabdianModel;
use App\Modules\Bappeda\Models\KlinikModel;
use App\Modules\Bappeda\Models\RekomendasiPenelitianModel;
use App\Modules\Bappeda\Models\RekomendasiPengabdianModel;
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
	protected $m_ipl;
	protected $m_rpb;
	protected $m_ipb;
	protected $m_kpl;
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
		$this->m_ipl = new IzinPenelitianModel();
		$this->m_rpb = new RekomendasiPengabdianModel();
		$this->m_ipb = new IzinPengabdianModel();
		$this->m_kpl = new KlinikModel();

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
			'ipl_masuk' 	=> array(
				'color'		=> 'primary',
				'count'		=> $this->m_ipl->where('status', 1)->countAllResults(),
			),
			'ipl_proses' 	=> array(
				'color'		=> 'danger',
				'count'		=> $this->m_ipl->where('status', 2)->countAllResults(),
			),
			// 'ipl_selesai' 	=> array(
			// 	'color'		=> 'success',
			// 	'count'		=> $this->m_ipl->where('status >', 2)->countAllResults(),
			// ),
			// -------------------------------------------------------------------------
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
			// ------------------------------------------------------------------------
			'ipb_masuk' 	=> array(
				'color'		=> 'primary',
				'count'		=> $this->m_ipb->where('status', 1)->countAllResults(),
			),
			'ipb_proses' 	=> array(
				'color'		=> 'danger',
				'count'		=> $this->m_ipb->where('status', 2)->countAllResults(),
			),
			// 'ipb_selesai' 	=> array(
			// 	'color'		=> 'success',
			// 	'count'		=> $this->m_ipb->where('status >', 2)->countAllResults(),
			// ),
			// ------------------------------------------------------------------------
			'kpl_masuk' 	=> array(
				'color'		=> 'primary',
				'count'		=> $this->m_kpl->where('status', 1)->countAllResults(),
			),
			'kpl_proses' 	=> array(
				'color'		=> 'danger',
				'count'		=> $this->m_kpl->where('status', 2)->countAllResults(),
			),
			// 'kpl_selesai' 	=> array(
			// 	'color'		=> 'success',
			// 	'count'		=> $this->m_kpl->where('status >', 2)->countAllResults(),
			// ),
		);
	}
}
