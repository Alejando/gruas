<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'country'              => 'El campo :attribute no es un país válido.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute no corresponde con una dirección de e-mail válida.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'exists'               => 'El campo :attribute no existe.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como máximo.',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como máximo.',
        'string'  => 'El campo :attribute debe contener :max caracteres como máximo.',
        'array'   => 'El campo :attribute debe contener :max elementos como máximo.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ningún campo :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'state'                => 'El estado no es válido para el país seleccionado.',
    'string'               => 'El campo :attribute debe contener solo caracteres.',
    'timezone'             => 'El campo :attribute debe contener una zona válida.',
    'unique'               => 'El elemento :attribute ya está en uso.',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'name' => [
            'required' => 'El campo nombre es obligatorio.',
            'alpha' => 'El campo nombre sólo puede contener letras.',
        ],
        'last_name' => [
            'required' => 'El campo apellidos es obligatorio.',
            'alpha' => 'El campo apellidos sólo puede contener letras.',
        ],
        'phone' => [
            'required' => 'El campo teléfono es obligatorio.',
            'numeric' => 'El campo teléfono debe ser un número.',
        ],
        'number_license' => [
            'required' => 'El campo número de licencia es obligatorio.',

        ],
        'expiration_date' => [
            'required' => 'El campo fecha de vencimiento es obligatorio.',
        ],
        'license_plate' => [
            'required' => 'El campo placas es obligatorio.',
        ],
        'economic_number' => [
            'required' => 'El campo número economico es obligatorio.',
            'numeric' => 'El campo número economico debe ser un número.',
        ],
        'password' => [
            'required' => 'El campo contraseña es obligatorio.',
        ],

        'alias' => [
            'required' => 'El campo tipo es obligatorio.',
            'alpha_dash' => 'El campo tipo sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
        ],
        'description' => [
            'required' => 'El campo descripción es obligatorio.',
        ],

        'type' => [
            'required' => 'El campo descripción es obligatorio.',
        ],

        'cost_kilometer' => [
            'required' => 'El campo costo por kilometro es obligatorio.',
            'numeric' => 'El campo costo por kilometro debe ser una cantidad numerica.',
        ],
        'z1' => [
            'numeric' => 'El campo z1 debe ser una cantidad numerica.',
        ],
        'z2' => [
            'numeric' => 'El campo z2 debe ser una cantidad numerica.',
        ],
        'z3' => [
            'numeric' => 'El campo z3 debe ser una cantidad numerica.',
        ],
        'z4' => [
            'numeric' => 'El campo z4 debe ser una cantidad numerica.',
        ],
        'z5' => [
            'numeric' => 'El campo z5 debe ser una cantidad numerica.',
        ],
        'maneuvers' => [
            'required' => 'El campo costo por maniobra es obligatorio.',
            'numeric' => 'El campo costo por maniobra debe ser una cantidad numerica.',
        ],
        'wait_hour' => [
            'required' => 'El campo costo de hora de espera es obligatorio.',
            'numeric' => 'El campo costo de hora de espera debe ser una cantidad numerica.',
        ],
        'dolly_use' => [
            'required' => 'El campo costo por uso de dolly es obligatorio.',
            'numeric' => 'El campo costo por uso de dolly debe ser una cantidad numerica.',
        ],
        'inside_of_periferico' => [
            'required' => 'El campo costo dentro de Periferico es obligatorio.',
            'numeric' => 'El campo costo por dentro de Periferico debe ser una cantidad numerica.',
        ],
        'flag' => [
            'required' => 'El campo costo Abanderamiento es obligatorio.',
            'numeric' => 'El campo costo Abanderamiento debe ser una cantidad numerica.',
        ],
        'pension' => [
            'required' => 'El campo costo de Pension por día es obligatorio.',
            'numeric' => 'El campo costo de Pension por día debe ser una cantidad numerica.',
        ],
        'conditioning' => [
            'required' => 'El campo costo de Acondicionamiento es obligatorio.',
            'numeric' => 'El campo costo de Acondicionamiento debe ser una cantidad numerica.',
        ],
        'local_service' => [
            'required' => 'El campo costo de servicio Local es obligatorio.',
            'numeric' => 'El campo costo de servicio Local debe ser una cantidad numerica.',
        ],
        'single_return' => [
            'required' => 'El campo costo de servicio vuelta Sencilla es obligatorio.',
            'numeric' => 'El campo costo de servicio vuelta Sencilla debe ser una cantidad numerica.',
        ],
        'maneuvers_hour' => [
            'required' => 'El campo costo de maniobra por hora es obligatorio.',
            'numeric' => 'El campo costo de maniobra por hora debe ser una cantidad numerica.',
        ],
        'tlajomulco_to_GDL' => [
            'required' => 'El campo costo de Tlajomulco a Guadalajara es obligatorio.',
            'numeric' => 'El campo costo de Tlajomulco a Guadalajara debe ser una cantidad numerica.',
        ],
        'deposit_outside_GDL' => [
            'required' => 'El campo costo de déposito fuera de Guadalajara es obligatorio.',
            'numeric' => 'El campo costo de déposito fuera de Guadalajara debe ser una cantidad numerica.',
        ],
        'conditioning_hour' => [
            'required' => 'El campo costo de Acondicionamiento por hora es obligatorio.',
            'numeric' => 'El campo costo de Acondicionamiento por hora debe ser una cantidad numerica.',
        ],
        'custody_hour' => [
            'required' => 'El campo costo de custodia por hora es obligatorio.',
            'numeric' => 'El campo costo de custodia por hora debe ser una cantidad numerica.',
        ],
        'flag_hour' => [
            'required' => 'El campo costo de Abanderamiento por hora es obligatorio.',
            'numeric' => 'El campo costo de Abanderamiento por hora debe ser una cantidad numerica.',
        ],
        'name_brand' => [
            'required' => 'El campo marca de vehículo es obligatorio.',
            'aplha' => 'El campo marca de vehículo sólo puede contener letras.'
            
        ],
        'name_sub_brand' => [
            'required' => 'El campo submarca de vehículo es obligatorio.',
            'alpha' => 'El campo submarca de vehículo sólo puede contener letras.'
            
        ],



    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
