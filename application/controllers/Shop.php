<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data_0 = file_get_contents("https://fakestoreapi.com/products");
		$items = json_decode($data_0, true);

		$data['items'] = $items;
		$this->load->view('home', $data);
	}

	public function productDetails($id)
	{
		
		$data_0 = file_get_contents("https://fakestoreapi.com/products/" . $id);
		$item = json_decode($data_0, true);

		$data['item'] = $item;
		$this->load->view('product_details', $data);
	}

	public function categoryProducts()
	{
		$category = $this->input->post('category');
		$data_0 = file_get_contents("https://fakestoreapi.com/products/category/" . $category);
		$items = json_decode($data_0, true);

		$data['items'] = $items;
		$html = $this->load->view('filter-products', $data, true);

		echo $html;
	}
}
