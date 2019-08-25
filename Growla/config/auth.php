<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la autenticación predeterminada "guardia" y contraseña
    | restablecer opciones para su aplicación. Puede cambiar estos valores predeterminados
    | según sea necesario, pero son un comienzo perfecto para la mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guardias de autenticación
    |--------------------------------------------------------------------------
    |
    | A continuación, puede definir cada protección de autenticación para su aplicación.
    | Por supuesto, se ha definido una excelente configuración predeterminada para usted
    | aquí que usa el almacenamiento de sesión y el proveedor de usuario Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de usuario. Esto define cómo
    | los usuarios se recuperan de su base de datos u otro almacenamiento
    | mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Compatible: "sesión", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de usuarios
    |--------------------------------------------------------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuario. Esto define cómo
    | los usuarios se recuperan de su base de datos u otro almacenamiento
    | mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Si tiene varias tablas de usuario o modelos, puede configurar múltiples
    | fuentes que representan cada modelo / tabla. Estas fuentes pueden entonces
    | ser asignado a cualquier guardia de autenticación adicional que haya definido.
    |
    | Soportado: "base de datos", "elocuente"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Restablecer contraseñas
    |--------------------------------------------------------------------------
    |
    | Puede especificar múltiples configuraciones de restablecimiento de contraseña si tiene más
    | de una tabla de usuario o modelo en la aplicación y desea tener
    | configuraciones de restablecimiento de contraseña separadas en función de los tipos de usuario específicos.
    |
    | El tiempo de caducidad es la cantidad de minutos que el token de reinicio debe ser
    | considerado válido Esta característica de seguridad mantiene los tokens de corta duración.
    | tienen menos tiempo para ser adivinados. Puede cambiar esto según sea necesario.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
