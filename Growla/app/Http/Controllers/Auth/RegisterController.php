<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    | Este controlador maneja el registro de nuevos usuarios, así como sus
    | validación y creación. Por defecto, sin requerir ningún código adicional.
    */

    use RegistersUsers;

    /**
     * Dónde redirigir a los usuarios después del registro.
     *
     * @var string
     */
    protected $redirectTo = 'profile';

    /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Validador para una solicitud de registro.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $message = [
        'required' => 'El campo es obligatorio',
        'string' => 'El campo debe ser un texto',
        'max' => 'El campo debe tener como maximo :max carácteres',
        'min' => 'El campo debe tener como minimo :min carácteres',
        'email' => 'El campo debe ser de formato Email',
        'unique' => 'La información ya se encuentra registrada',
        'file' => 'El archivo debe ser de tipo jgp/jpeg/png',
      ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required'],
            'avatar' => ['required', 'image']
        ], $message);
    }

    /**
     * Crea una nueva instancia de usuario después de un registro válido.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //
      $request = request();
      // Del request en foto se guarda en la variable
      $imagen = $request->file('foto');

		if ($imagen) {
			// Creo un nombre único para archivo imagen
			$imagenFinal = uniqid("img_") . "." . $imagen->extension();
			// Subo el archivo en la carpeta elegida
			$imagen->storePubliclyAs("/public/fotos", $imagenFinal);
		};


        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'country' => $data['country'],
            'avatar' => $imagenFinal,
            'password' => Hash::make($data['password']),
        ]);


    }
}
