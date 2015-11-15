<?php 
namespace App\Http\Controllers;
use Goutte\Client;
// use App\Library\simple_html_dom;
use App\model\productos;
use App\model\estadistica;
use App\Http\Controllers\Controller;
use DB;

class ProductosController extends Controller{
	function index(){
		return view("index");
	}
	function demo(){
		return view("demo");
	}
	function demoView(){
		return view("demoView");
	}
	function getListCategory(){
		$Category=DB::table("productos")->groupBy("categoria")->get(["categoria"]);
		return $Category;
	}
	function getListMarca($Category){
		$Marca=DB::table("productos")->groupBy("Marca")->where("categoria","=",$Category)->get(["Marca"]);
		return $Marca;
	}
	function getListModelo($Category,$Marca){
		$Modelo=DB::table("productos")->groupBy("Modelo")->where("categoria","=",$Category)->where("Marca","=",$Marca)->get(["Modelo"]);
		return $Modelo;
	}
	function getListItems($Category,$Marca,$Modelo){
		$productos=DB::table("productos")->where("categoria","=",$Category)->where("Marca","=",$Marca)->where("Modelo","=",$Modelo)->get(["Titulo","Precio","Moneda","Origen","Link","Condicion"]);
		$estadistica=DB::table("estadistica")->where("categoria","=",$Category)->where("Marca","=",$Marca)->where("Modelo","=",$Modelo)->get(["Promedio","Max","Min","Condicion","Modelo"]);
		return array("productos"=>$productos,"estadistica"=>$estadistica);
	}
	function getItems($keyword){
		$productos=DB::select('select * from productos where  CONCAT(MARCA," ",MODELO) like "%'.$keyword.'%" limit 15');
		$estadistica=DB::select('select * from estadistica where  CONCAT(MARCA," ",MODELO) like "%'.$keyword.'%" limit 15');
		return array("productos"=>$productos,"estadistica"=>$estadistica);
	}
	function getList(){
		$productos=DB::table("productos")->groupBy("Marca")->groupBy("Modelo")->get(["Marca","Modelo"]);
		return $productos;
	}
	function getList_(){
		$Categoria=DB::table("productos")->groupBy("Categoria")->get(["Categoria"]);
		$Marcas=DB::table("productos")->groupBy(["Categoria","Marca"])->get(["Categoria","Marca"]);
		$Modelos=DB::table("productos")->groupBy(["Marca","Modelo"])->get(["Marca","Modelo"]);
		return ["Categorias"=>$Categoria,"Marcas"=>$Marcas,"Modelos"=>$Modelos];
	}

	function getImage(){
		$cliente=new Client();
		$crawler=$cliente->request("GET","http://lima-lima.olx.com.pe/huawei-ascend-p7-alta-gamma-4glte-iid-846229949");
		$crawler->filter('figure.image-viewer')->each(function ($node) { 
			var_dump($node->attr("class"));
			// var_dump($node->attr('class')); 
			// if($node->attr("class")=="item-image"){
			// 	var_dump($node->attr('src')); 
			// }
		});
	}

}

 ?>