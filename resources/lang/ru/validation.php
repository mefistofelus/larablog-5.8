<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Поле "following language" lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле ":attribute" повинно містити accepted.',
    'active_url' => 'Поле ":attribute" is not a valid URL.',
    'after' => 'Поле ":attribute" повинно містити a date after ":date".',
    'after_or_equal' => 'Поле ":attribute" повинно містити a date after or equal to ":date".',
    'alpha' => 'Поле ":attribute" містити тільки letters.',
    'alpha_dash' => 'Поле ":attribute" містити тільки letters, numbers, dashes and underscores.',
    'alpha_num' => 'Поле ":attribute" містити тільки letters and numbers.',
    'array' => 'Поле ":attribute" повинно містити an array.',
    'before' => 'Поле ":attribute" повинно містити a date before ":date".',
    'before_or_equal' => 'Поле ":attribute" повинно містити a date before or equal to ":date".',
    'between' => [
        'numeric' => 'Поле ":attribute" повинно містити between ":min" and ":max".',
        'file' => 'Поле ":attribute" повинно містити between ":min" and ":max" кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити between ":min" and ":max" символів.',
        'array' => 'Поле ":attribute" повинно бути between ":min" and ":max" items.',
    ],
    'boolean' => 'Поле ":attribute" field повинно містити true or false.',
    'confirmed' => 'Поле ":attribute" confirmation does not match.',
    'date' => 'Поле ":attribute" is not a valid date.',
    'date_equals' => 'Поле ":attribute" повинно містити a date equal to ":date".',
    'date_format' => 'Поле ":attribute" does not match the format :format.',
    'different' => 'Поле ":attribute" and :other повинно містити different.',
    'digits' => 'Поле ":attribute" повинно містити :digits digits.',
    'digits_between' => 'Поле ":attribute" повинно містити between ":min" and ":max" digits.',
    'dimensions' => 'Поле ":attribute" has invalid image dimensions.',
    'distinct' => 'Поле ":attribute" field has a duplicate value.',
    'email' => 'Поле ":attribute" повинно містити a valid email address.',
    'exists' => 'Поле "selected :"attribute is invalid.',
    'file' => 'Поле ":attribute" повинно містити a file.',
    'filled' => 'Поле ":attribute" field повинно бути a value.',
    'gt' => [
        'numeric' => 'Поле ":attribute" повинно містити greater than :value.',
        'file' => 'Поле ":attribute" повинно містити greater than :value кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити greater than :value символів.',
        'array' => 'Поле ":attribute" повинно бути more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Поле ":attribute" повинно містити greater than or equal :value.',
        'file' => 'Поле ":attribute" повинно містити greater than or equal :value кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити greater than or equal :value символів.',
        'array' => 'Поле ":attribute" повинно бути :value items or more.',
    ],
    'image' => 'Поле ":attribute" повинно містити an image.',
    'in' => 'Поле "selected :"attribute is invalid.',
    'in_array' => 'Поле ":attribute" field does not exist in :other.',
    'integer' => 'Поле ":attribute" повинно містити an integer.',
    'ip' => 'Поле ":attribute" повинно містити a valid IP address.',
    'ipv4' => 'Поле ":attribute" повинно містити a valid IPv4 address.',
    'ipv6' => 'Поле ":attribute" повинно містити a valid IPv6 address.',
    'json' => 'Поле ":attribute" повинно містити a valid JSON string.',
    'lt' => [
        'numeric' => 'Поле ":attribute" повинно містити less than :value.',
        'file' => 'Поле ":attribute" повинно містити less than :value кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити less than :value символів.',
        'array' => 'Поле ":attribute" повинно бути less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Поле ":attribute" повинно містити less than or equal :value.',
        'file' => 'Поле ":attribute" повинно містити less than or equal :value кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити less than or equal :value символів.',
        'array' => 'Поле ":attribute" must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Поле ":attribute" не може бути більше  за ":max" .',
        'file' => 'Поле ":attribute" не може бути більше  за ":max" кілобайтів.',
        'string' => 'Поле ":attribute" не може бути більше  за ":max" символів.',
        'array' => 'Поле ":attribute" may not have more than ":max" items.',
    ],
    'mimes' => 'Поле ":attribute" повинно містити a file of type: :values.',
    'mimetypes' => 'Поле ":attribute" повинно містити a file of type: :values.',
    'min' => [
        'numeric' => 'Поле ":attribute" повинно містити принаймні ":min" символів.',
        'file' => 'Поле ":attribute" повинно містити принаймні ":min" кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити принаймні ":min" символів.',
        'array' => 'Поле ":attribute" повинно бути принаймні ":min" items.',
    ],
    'not_in' => 'Поле "selected :"attribute is invalid.',
    'not_regex' => 'Поле ":attribute" format is invalid.',
    'numeric' => 'Поле ":attribute" повинно містити a number.',
    'present' => 'Поле ":attribute" field повинно містити present.',
    'regex' => 'Поле ":attribute" format is invalid.',
    'required' => 'Поле ":attribute" field is required.',
    'required_if' => 'Поле ":attribute" field is required when :other is :value.',
    'required_unless' => 'Поле ":attribute" field is required unless :other is in :values.',
    'required_with' => 'Поле ":attribute" field is required when :values is present.',
    'required_with_all' => 'Поле ":attribute" field is required when :values are present.',
    'required_without' => 'Поле ":attribute" field is required when :values is not present.',
    'required_without_all' => 'Поле ":attribute" field is required when none of :values are present.',
    'same' => 'Поле ":attribute" and :other must match.',
    'size' => [
        'numeric' => 'Поле ":attribute" повинно містити :size.',
        'file' => 'Поле ":attribute" повинно містити :size кілобайтів.',
        'string' => 'Поле ":attribute" повинно містити :size символів.',
        'array' => 'Поле ":attribute" повинно включати :size items.',
    ],
    'starts_with' => 'Поле ":attribute" must start with one of the following: :values',
    'string' => 'Поле ":attribute" повинно містити a string.',
    'timezone' => 'Поле ":attribute" повинно містити a valid zone.',
    'unique' => 'Поле ":attribute" has already been taken.',
    'uploaded' => 'Поле ":attribute" failed to upload.',
    'url' => 'Поле ":attribute" format is invalid.',
    'uuid' => 'Поле ":attribute" повинно містити a valid UUID.',

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
    | Поле "following language" lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title'=>'Заголовок',
        'description'=>'Описание',
        'password'=>'Пароль',
    ],

];
