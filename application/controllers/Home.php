<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('san_pham/m_san_pham');
	$this->load->library('cart');
	}

	function index()
	{
		$result['data']=$this->m_san_pham->dispsp();
		$this->load->view('main/index',$result);
	}
	public function main()
	{
		$this->load->view('main/index');
	}
	public function cake()
	{
		$this->load->view('navbar/cake');
	}
	public function menu()
	{
		$this->load->view('navbar/menu');
	}
	public function about()
	{
		$this->load->view('navbar/about_us');
	}
	public function insert($id)
	{
		$product = $this->m_san_pham->addcartbyid($id);
		$data = array(
        array(
                'id'      => $product->id_san_pham,
                'qty'     => 1,
                'price'   => $product->gia_moi,
                'name'    => $product->ten_san_pham,
        )
    	);
    	
		$this->cart->insert($data);
			redirect('cart/');
	}
	public function checkout($value='')
	{
		$this->load->view('cart/checkout');
	}
	public function cart()
	{
		$this->load->view('cart/cart');
	}
	public function login()
	{
		$this->load->view('user/Dang_nhap');
	}
	public function register()
	{
		$this->load->view('user/Dang_ky');
	}
	public function wishlist()
	{
		$this->load->view('user/wishlist');
	}
	public function account()
	{
		$this->load->view('user/account');
	}
	public function don_hang()
	{
		$this->load->view('user/don_hang');
	}
	public function blog()
	{
		$this->load->view('navbar/blog');
	}
	public function blog_detail($value='')
	{
		$this->load->view('detail/blog-details');
	}
	public function shop()
	{
		$result['sale']=$this->m_san_pham->dispsp1();
		$result['data']=$this->m_san_pham->dispsp();
		$this->load->view('navbar/shop',$result);
	}
	public function product_detail($value='')
	{
		$id=$this->input->get('id');
		$pl=$this->input->get('pl');
		$result['data']=$this->m_san_pham->displayrecordsById($id);
		$result['pl']=$this->m_san_pham->displayrecordsBylq($pl);
		$this->load->view('detail/product-details',$result);
	}
	public function do_lam_banh()
	{
		$this->load->view('product/do_lam_banh');
	}
	public function do_nau_an()
	{
		$this->load->view('product/do_nau_an');
	}
	public function do_pha_che()
	{
		$this->load->view('product/do_pha_che');
	}
	public function contact()
	{
		$this->load->view('navbar/contact');
	}
	public function search()
	{
		$key=$this->input->post('search_key');
		$result['key']=$key;
		$result['count']=$this->m_san_pham->countsearchbykey($key);
		$result['data']=$this->m_san_pham->searchbykey($key);
		// var_dump($result['data']);exit();
		$this->load->view('detail/search',$result);
	}
}

/* End of file Suno.php */
/* Location: ./application/controllers/Suno.php */