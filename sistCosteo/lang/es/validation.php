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

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo debe contener letras.',
    'alpha_dash' => 'El campo :attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute sólo debe contener letras y números.',
    'array' => 'El campo :attribute debe ser un arreglo.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a:date.',
    'between' => [
        'array' => 'El campo :attribute debe contener un valor entre :min y :max elementos.',
        'file' => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'string' => 'El campo :attribute debe contener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo:attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no coincide con el formato de fecha :format.',
    'declined' => 'El campo :attribute debe ser rechazado.',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between' => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute contiene valores repetidos.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes valores :values.',
    'enum' => 'El campo :attribute seleccionado es inválido.',
    'exists' => 'El campo :attribute no existe.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute field debe contener un valor.',
    'gt' => [
        'array' => 'el campo :attribute debe tener más de :value elementos.',
        'file' => 'El campo :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'el campo :attribute debe ser más de :value.',
        'string' => 'El campo :attribute debe poseer más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value elementos o más.',
        'file' => 'El archivo :attribute debe pesar más o igual a :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser igual o mayor a :value.',
        'string' => 'El campo :attribute debe ser igual o mayor a :value caracteres.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'array' => 'El dato :attribute debe poseer menos de :value elementos.',
        'file' => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El valor :attribute debe ser menor a :value.',
        'string' => 'El campo :attribute debe poseer menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute no debe poseer más de :value elementos.',
        'file' => 'El archivo :attribute debe pesar menos o igual a :value kilobytes.',
        'numeric' => 'El valor :attribute debe ser menor o igual a :value.',
        'string' => 'El campo :attribute debe tener igual o menos de :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo :attribute no debe ser mayor a :max elementos.',
        'file' => 'El archivo :attribute no debe pesar más de  :max kilobytes.',
        'numeric' => 'El valor :attribute no debe ser mayor a :max.',
        'string' => 'El campo :attribute no debe ser mayor a :max caracteres.',
    ],
    'mimes' => 'El archivo :attribute debe ser un archivo del tipo: :values.',
    'mimetypes' => 'El archivo :attribute debe ser un archivo del tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener al menos :min elementos.',
        'file' => 'Él archivo :attribute debe pesar al menos :min kilobytes.',
        'numeric' => 'El valor :attribute debe ser al menos de :min.',
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'multiple_of' => 'El valor :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El campo :attribute seleccionado es inválido.',
    'not_regex' => 'El formato del campo :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuándo :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other se encuentre presente.',
    'regex' => 'El campo con formato :attribute es inválido.',
    'required' => 'El campo :attribute es requerido.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values están presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ningún :values está presente.',
    'same' => 'El campo :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El campo :attribute debe contener elementos de tamaño :size.',
        'file' => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El valor :attribute debe ser :size.',
        'string' => 'El campo :attribute debe poseer :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe iniciar con uno de los: :values valores siguientes.',
    'string' => 'El campo :attribute debe ser una cadena.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El valor :attribute ya ha sido ingresado.',
    'uploaded' => 'El campo :attribute no se pudo cargar.',
    'url' => 'El campo :attribute debe ser una URL válida.',
    'uuid' => 'El campo :attribute debe ser una UUID válida.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
