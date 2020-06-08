<?php     
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Clients;

 class ClientsController extends Controller
{
    public function store(Request $request){

    	$validatedData = $request->validate([
    		'name' => 'required',
    		'last_name' => 'required',
    		'email' => 'required|unique:clients,email',
    		'phone' => 'required|unique:clients,phone'
    	]);

    	$dataClients=request()->except('_token');
    	Clients::insert($dataClients);

    	return view('gracias');
    }

    public function index(){

    	

        $data['clients']=Clients::paginate(10);
        return view('clients.index',$data);

    }
}