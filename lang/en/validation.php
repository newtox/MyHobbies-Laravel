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

    'accepted' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be accepted.',
    'accepted_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be accepted when :other is :value.',
    'active_url' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid URL.',
    'after' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a date after :date.',
    'after_or_equal' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a date after or equal to :date.',
    'alpha' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must only contain letters.',
    'alpha_dash' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must only contain letters and numbers.',
    'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be an array.',
    'ascii' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a date before :date.',
    'before_or_equal' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a date before or equal to :date.',
    'between' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have between :min and :max items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be between :min and :max kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be between :min and :max.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be between :min and :max characters.',
    ],
    'boolean' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be true or false.',
    'can' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field contains an unauthorized value.',
    'confirmed' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field confirmation does not match.',
    'contains' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is missing a required value.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid date.',
    'date_equals' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a date equal to :date.',
    'date_format' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must match the format :format.',
    'decimal' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have :decimal decimal places.',
    'declined' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be declined.',
    'declined_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be declined when :other is :value.',
    'different' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field and :other must be different.',
    'digits' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be :digits digits.',
    'digits_between' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be between :min and :max digits.',
    'dimensions' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field has invalid image dimensions.',
    'distinct' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field has a duplicate value.',
    'doesnt_end_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not start with one of the following: :values.',
    'email' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid email address.',
    'ends_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must end with one of the following: :values.',
    'enum' => 'The selected <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> is invalid.',
    'exists' => 'The selected <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> is invalid.',
    'extensions' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have one of the following extensions: :values.',
    'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a file.',
    'filled' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have a value.',
    'gt' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have more than :value items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than :value kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than :value.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have :value items or more.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than or equal to :value.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid hexadecimal color.',
    'image' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be an image.',
    'in' => 'The selected <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> is invalid.',
    'in_array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must exist in :other.',
    'integer' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be an integer.',
    'ip' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid IP address.',
    'ipv4' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid IPv4 address.',
    'ipv6' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid IPv6 address.',
    'json' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid JSON string.',
    'list' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a list.',
    'lowercase' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be lowercase.',
    'lt' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have less than :value items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than :value kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than :value.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not have more than :value items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than or equal to :value kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than or equal to :value.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid MAC address.',
    'max' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not have more than :max items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not be greater than :max kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not be greater than :max.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not be greater than :max characters.',
    ],
    'max_digits' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must not have more than :max digits.',
    'mimes' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a file of type: :values.',
    'mimetypes' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a file of type: :values.',
    'min' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have at least :min items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be at least :min kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be at least :min.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be at least :min characters.',
    ],
    'min_digits' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must have at least :min digits.',
    'missing' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be missing.',
    'missing_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be missing when :other is :value.',
    'missing_unless' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be missing unless :other is :value.',
    'missing_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be missing when :values is present.',
    'missing_with_all' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be missing when :values are present.',
    'multiple_of' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a multiple of :value.',
    'not_in' => 'The selected <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> is invalid.',
    'not_regex' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field format is invalid.',
    'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a number.',
    'password' => [
        'letters' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain at least one letter.',
        'mixed' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain at least one number.',
        'symbols' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain at least one symbol.',
        'uncompromised' => 'The given <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> has appeared in a data leak. Please choose a different <span style="font-weight: bold; text-transform: capitalize;">:attribute</span>.',
    ],
    'present' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be present.',
    'present_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be present when :other is :value.',
    'present_unless' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be present unless :other is :value.',
    'present_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be present when :values is present.',
    'present_with_all' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be present when :values are present.',
    'prohibited' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is prohibited.',
    'prohibited_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is prohibited when :other is :value.',
    'prohibited_unless' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is prohibited unless :other is in :values.',
    'prohibits' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field prohibits :other from being present.',
    'regex' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field format is invalid.',
    'required' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required.',
    'required_array_keys' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain entries for: :values.',
    'required_if' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :other is :value.',
    'required_if_accepted' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :other is accepted.',
    'required_if_declined' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :other is declined.',
    'required_unless' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required unless :other is in :values.',
    'required_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :values is present.',
    'required_with_all' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :values are present.',
    'required_without' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when :values is not present.',
    'required_without_all' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field is required when none of :values are present.',
    'same' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must match :other.',
    'size' => [
        'array' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must contain :size items.',
        'file' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be :size kilobytes.',
        'numeric' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be :size.',
        'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be :size characters.',
    ],
    'starts_with' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must start with one of the following: :values.',
    'string' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a string.',
    'timezone' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid timezone.',
    'unique' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> has already been taken.',
    'uploaded' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> failed to upload.',
    'uppercase' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be uppercase.',
    'url' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid URL.',
    'ulid' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid ULID.',
    'uuid' => 'The <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> field must be a valid UUID.',

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
