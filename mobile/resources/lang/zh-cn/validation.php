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

    'accepted'             => ':attribute must be accepted',
    'active_url'           => ':attribute is not a valid URL',
    'after'                => ':attribute must be a date after :date。',
    'after_or_equal'       => ':attribute must be a date after :date or same。',
    'alpha'                => ':attribute may only contain letters.',
    'alpha_dash'           => ':attribute may only contain letters,number,and dashes.',
    'alpha_num'            => ':attribute may only contain letter and numbers',
    'array'                => ':attribute must be an array.',
    'before'               => ':attribute must be a date before  :date。',
    'before_or_equal'      => ':attribute must be a date before  :date or same',
    'between'              => [
        'numeric' => ':attribute must be between :min - :max ',
        'file'    => ':attribute must be between :min - :max kb.',
        'string'  => ':attribute must be between :min - :max characters',
        'array'   => ':attribute must be between :min - :max item',
    ],
    'boolean'              => ':attribute must be a boolean.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute is not a valid date.',
    'date_format'          => ':attribute format must be :format。',
    'different'            => ':attribute and :other must be different。',
    'digits'               => ':attribute must be :digits digits。',
    'digits_between'       => ':attribute must be between :min and :max digits.',
    'dimensions'           => ':attribute image size is invalid.',
    'distinct'             => ':attribute has already been taken',
    'email'                => ':attribute email address is invalid.',
    'exists'               => ':attribute does not exist.',
    'file'                 => ':attribute must be a file。',
    'filled'               => ':attribute field is required',
    'image'                => ':attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid。',
    'in_array'             => ':attribute does not exist :other.',
    'integer'              => ':attribute must be an iteger',
    'ip'                   => ':attribute must be a valid IP address',
    'json'                 => ':attribute must be a valid JSON format.',
    'max'                  => [
        'numeric' => ':attribute may not greater than :max。',
        'file'    => ':attribute may not greater than :max kb。',
        'string'  => ':attribute may not greater than :max chatacters.',
        'array'   => ':attribute may not have more tan :max items.',
    ],
    'mimes'                => ':attribute must be a file of types :values.',
    'mimetypes'            => ':attribute must be a file of types :values.',
    'min'                  => [
        'numeric' => ':attribute must be at least :min.',
        'file'    => ':attribute must be at least :min kb.',
        'string'  => ':attribute must be at least :min characters.',
        'array'   => ':attribute must be at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid',
    'numeric'              => ':attribute must be a number',
    'present'              => ':attribute must be present.',
    'regex'                => ':attribute format is invalid',
    'required'             => ':attribute field is required'
    'required_if'          => 'When :other is :value The :attribute field is required',
    'required_unless'      => 'When :other is not :value :attribute field is required',
    'required_with'        => 'When :values is present :attribute field is required',
    'required_with_all'    => 'When :values is present :attribute field is required',
    'required_without'     => 'When :values is not present :attribute field is required',
    'required_without_all' => 'When :values is not present :attribute field is required',
    'same'                 => ':attribute and :other must match',
    'size'                 => [
        'numeric' => ':attribute must be :size。',
        'file'    => ':attribute must be :size kb.',
        'string'  => ':attribute must be :size characters.',
        'array'   => ':attribute must be :size items.',
    ],
    'string'               => ':attribute must be a string literal',
    'timezone'             => ':attribute must be a valid time zone value',
    'unique'               => ':attribute has already been taken',
    'uploaded'             => ':attribute failed to upload',
    'url'                  => ':attribute format is invalid.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'name'                  => 'Name',
        'username'              => 'Username',
        'email'                 => 'Email',
        'first_name'            => 'First name',
        'last_name'             => 'Last name',
        'password'              => 'Password',
        'password_confirmation' => 'Confirm Password',
        'city'                  => 'City',
        'country'               => 'Country',
        'address'               => 'Address',
        'phone'                 => 'Phone Number',
        'mobile'                => 'Mobile Number',
        'age'                   => 'Age',
        'sex'                   => 'Gender',
        'gender'                => 'Gender',
        'day'                   => 'Day',
        'month'                 => 'Month',
        'year'                  => 'Year',
        'hour'                  => 'Hour',
        'minute'                => 'Minute',
        'second'                => 'Second',
        'title'                 => 'Title',
        'content'               => 'Content',
        'description'           => 'Description',
        'excerpt'               => 'Summary',
        'date'                  => 'Date',
        'time'                  => 'Time',
        'available'             => 'Available',
        'size'                  => 'Size',
    ],

];
