<?php 

return [
    'between' => [
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file' => ':attribute musí být mezi :min a :max kilobajty.',
        'string' => 'Atribut :attribute musí být mezi znaky :min a :max',
        'array' => ':attribute musí mít položky mezi :min a :max',
    ],
    'exists' => 'Vybraný atribut je neplatný.',
    'gt' => [
        'numeric' => 'Atribut :attribute musí být větší než :value.',
        'file' => ':attribute musí být větší než :value kilobajtů.',
        'string' => 'Atribut :attribute musí být větší než znaků :value',
        'array' => ':attribute musí mít více než :value položek.',
    ],
    'gte' => [
        'numeric' => 'Atribut :attribute musí být větší nebo roven :value.',
        'file' => 'Atribut :attribute musí být větší nebo roven :value kilobajtů.',
        'string' => ':attribute musí být větší nebo roven :value znakům.',
        'array' => ':attribute musí mít položky :value nebo více.',
    ],
    'in' => 'Vybraný atribut je neplatný.',
    'lt' => [
        'numeric' => 'Atribut :attribute musí být menší než :value.',
        'file' => ':attribute musí být menší než :value kilobajtů.',
        'string' => ':attribute musí být menší než :value znaků.',
        'array' => ':attribute musí mít méně než :value položek.',
    ],
    'lte' => [
        'numeric' => 'Atribut :attribute musí být menší nebo roven :value.',
        'file' => ':attribute musí být menší nebo roven :value kilobajtů.',
        'string' => ':attribute musí být menší nebo roven :value znaků.',
        'array' => ':attribute nesmí mít více než :value položek.',
    ],
    'max' => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file' => ':attribute nesmí být větší než :max kilobajtů.',
        'string' => ':attribute nesmí být větší než :max znaků.',
        'array' => ':attribute nesmí mít více než :max položek.',
    ],
    'min' => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file' => ':attribute musí mít alespoň :min kilobajtů.',
        'string' => ':attribute musí obsahovat alespoň :min znaků.',
        'array' => ':attribute musí mít alespoň :min položek.',
    ],
    'not_in' => 'Vybraný atribut je neplatný.',
    'password' => 'Heslo je nesprávné.',
    'size' => [
        'numeric' => ':attribute musí být :size.',
        'file' => ':attribute musí být :size kilobajtů.',
        'string' => ':attribute musí obsahovat znaky :size',
        'array' => ':attribute musí obsahovat položky :size',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'vlastní zpráva',
        ],
    ],
    'attributes' => '',
    'captcha' => 'Byl dodán neplatný kód captcha',
    'accepted' => 'Musí být přijat atribut :attribute',
    'active_url' => ':attribute není platná adresa URL.',
    'after' => ':attribute musí být datum po :date.',
    'after_or_equal' => ':attribute musí být datum po nebo rovné :date.',
    'alpha' => ':attribute může obsahovat pouze písmena.',
    'alpha_dash' => 'Atribut :attribute může obsahovat pouze písmena, čísla, pomlčky a podtržítka.',
    'alpha_num' => ':attribute může obsahovat pouze písmena a čísla.',
    'array' => ':attribute musí být pole.',
    'before' => ':attribute musí být datum před :date.',
    'before_or_equal' => ':attribute musí být datum před nebo rovné :date.',
    'boolean' => 'Pole :attribute musí být true nebo false.',
    'confirmed' => 'Potvrzení :attribute se neshoduje.',
    'date' => ':attribute není platné datum.',
    'date_equals' => ':attribute musí být datum rovné :date.',
    'date_format' => ':attribute neodpovídá formátu :format.',
    'different' => ':attribute a :other se musí lišit.',
    'digits' => ':attribute musí být :digits číslice.',
    'digits_between' => ':attribute musí být mezi :min a :max číslic.',
    'dimensions' => ':attribute má neplatné rozměry obrázku.',
    'distinct' => 'Pole :attribute má duplicitní hodnotu.',
    'email' => ':attribute musí být platná e-mailová adresa.',
    'ends_with' => 'Atribut :attribute musí končit jedním z následujících: :values.',
    'file' => ':attribute musí být soubor.',
    'filled' => 'Pole :attribute musí mít hodnotu.',
    'image' => ':attribute musí být obrázek.',
    'in_array' => 'Pole :attribute v :other. neexistuje.',
    'integer' => ':attribute musí být celé číslo.',
    'ip' => ':attribute musí být platná adresa IP.',
    'ipv4' => ':attribute musí být platná adresa IPv4.',
    'ipv6' => ':attribute musí být platná adresa IPv6.',
    'json' => ':attribute musí být platný řetězec JSON.',
    'mimes' => ':attribute musí být soubor typu: :values.',
    'mimetypes' => ':attribute musí být soubor typu: :values.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => ':attribute musí být číslo.',
    'present' => 'Pole :attribute musí být přítomno.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_if' => 'Pole :attribute je povinné, když :other je :value.',
    'required_unless' => 'Pole :attribute je povinné, pokud :other není v :values.',
    'required_with' => 'Pole :attribute je povinné, když je přítomen :values',
    'required_with_all' => 'Pole :attribute je povinné, pokud jsou přítomny hodnoty :values',
    'required_without' => 'Pole :attribute je povinné, když :values ​​není přítomen.',
    'required_without_all' => 'Pole :attribute je povinné, pokud není přítomno žádné z :values',
    'same' => ':attribute a :other se musí shodovat.',
    'starts_with' => 'Atribut :attribute musí začínat jedním z následujících: :values.',
    'string' => ':attribute musí být řetězec.',
    'timezone' => ':attribute musí být platná zóna.',
    'unique' => 'Atribut : již byl obsazen.',
    'uploaded' => ':attribute se nepodařilo nahrát.',
    'url' => 'Formát :attribute je neplatný.',
    'uuid' => ':attribute musí být platný UUID.',
];