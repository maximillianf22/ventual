<?php     
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Clients;
use Redirect;
use Session;
use Illuminate\Support\Facades\Mail;


 class ClientsController extends Controller
{
    public function store(Request $request){

    	$validatedData = $request->validate([
			'name' => 'required|max:255',
			'bussiness_type' => 'required',
			'last_name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:clients',
			'phone' => 'required|numeric|unique:clients'
		], [
			'name.max' => ' ¡El nombre es demasiado largo! ',
			'last_name.max' => ' ¡El apellido es demasiado largo! ',
			'email.unique' => ' ¡Este correo electronico ya existe en nuestro sistema! ',
			'phone.unique' => ' ¡Este numero telefonico ya existe en nuestro sistema! ',
			'name.required' => ' ¡El  nombre es requerido! ',
			'email.required' => ' ¡El correo es requerido! ',
			'bussiness_type.required' => ' ¡Seleccione el tipo de negocio! '
		]);

		$client = new Clients();
		$client->name = $request->name;
		$client->last_name = $request->name;
		$client->email = $request->email;
		$client->phone = intval(preg_replace('/[^0-9]+/','', $request->phone), 10);
		$client->bussiness_type = $request->bussiness_type;
		$client->save();

		/** $data['name'] =  $request->name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['bussiness_type'] = $request->bussiness_type;

			Mail::send('email.notificacion', ['data' => $data], function($mail) use($data){
              $mail->subject('Nuevo registro en Ventual');
              $mail->to('dgse.informatica@gmail.com', 'Ventual Comercios');
            }); **/

    	return view('gracias')->with('Mensaje','Tu solicitud se ha registrado con exito');
    }

    public function index(){

        $data['clients']=Clients::paginate(10);
        return view('clients.index',$data);

    }
}