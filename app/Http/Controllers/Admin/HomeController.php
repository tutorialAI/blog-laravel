<?php 
	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;

	class HomeController extends Controller
	{
		public $test = 1;

		function __construct()
		{
			# code...
		}

		public function index(){
			echo "Is admin panel";
			//return view('admin.home');
		}

		public function chechStatus(){
			return 1;
		}
	}
 ?>