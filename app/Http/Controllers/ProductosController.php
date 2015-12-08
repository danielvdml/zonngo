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
		$Tiendas=DB::table("productos")->groupBy("Origen")->get(["Origen"]);
		// $Productos=DB::table("productos")->orderBy("Precio","desc")->take(100)->get();
		// $Categoria=DB::table("productos")->groupBy("Marca")->get(["Categoria","Marca"]);
		// return view("demov2",["Tiendas"=>$Tiendas,"Productos"=>$Productos,"Categoria"=>$Categoria]);
		return view("demo",["Tiendas"=>$Tiendas]);
	}
	function demov2($Category="Celulares"){
		
		$Tiendas=DB::table("productos")->where("categoria","=",$Category)->groupBy("Origen")->get(["Origen"]);
		$Productos=DB::table("productos")->where("categoria","=",$Category)->orderBy("Precio","desc")->take(100)->get();
		$Marcas=DB::table("productos")->where("categoria","=",$Category)->groupBy("Marca")->get(["Marca"]);
		return view("demov2",["Tiendas"=>$Tiendas,"Productos"=>$Productos,"Marcas"=>$Marcas]);
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
		$Tiendas=DB::table("productos")->where("categoria","=",$Category)->where("Marca","=",$Marca)->where("Modelo","=",$Modelo)->groupBy("Origen")->get(["Origen"]);
		return array("productos"=>$productos,"estadistica"=>$estadistica,"Tiendas"=>$Tiendas);
	}
	function getItems($keyword){
		$productos=DB::select('select * from productos where  CONCAT(MARCA," ",MODELO) like "%'.$keyword.'%" ');
		$estadistica=DB::select('select * from estadistica where  CONCAT(MARCA," ",MODELO) like "%'.$keyword.'%"');
		$Tiendas=DB::select('select origen from productos where  CONCAT(MARCA," ",MODELO)="'.$keyword.'" group by origen' );
		return array("productos"=>$productos,"estadistica"=>$estadistica,"Tiendas"=>$Tiendas);
	}
	function getList(){
		$productos=DB::table("productos")->groupBy("Marca")->groupBy("Modelo")->get(["Marca","Modelo"]);
		return $productos;
	}
	function getList_(){
		$Categoria=DB::table("productos")->groupBy("Categoria")->get(["Categoria"]);
		$Marcas=DB::table("productos")->groupBy(["Categoria","Marca"])->get(["Categoria","Marca"]);
		$Modelos=DB::table("productos")->groupBy(["Marca","Modelo"])->get(["Marca","Modelo"]);
		$Tiendas=DB::table("productos")->groupBy("Origen")->get(["Origen"]);
		return ["Categorias"=>$Categoria,"Marcas"=>$Marcas,"Modelos"=>$Modelos,"Tiendas"=>$Tiendas];
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