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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    // 'array' => 'The :attribute must be an array.',
    'array' => 'Kolom :attribute harus bertipe array.',
    // 'before' => 'The :attribute must be a date before :date.',
    'before' => 'Kolom :attribute harus diisi dengan tanggal sebelum :date.',
    // 'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'before_or_equal' => 'Kolom :attribute harus diisi dengan tanggal sebelum atau sama dengan :date.',
    'between' => [
        // 'numeric' => 'The :attribute must be between :min and :max.',
        'numeric' => 'Kolom :attribute harus diisi dengan minimal :min dan maksimal :max.',
        // 'file' => 'The :attribute must be between :min and :max kilobytes.',
        'file' => 'Kolom :attribute harus diisi dengan ukuran minimal :min dan maksimal :max kilobytes (KB).',
        // 'string' => 'The :attribute must be between :min and :max characters.',
        'string' => 'Kolom :attribute harus diisi dengan karakter minimal :min dan maksimal :max ',
        // 'array' => 'The :attribute must have between :min and :max items.',
        'array' => 'Kolom :attribute harus diisi dengan item minimal :min dan maksimal :max .',
    ],
    // 'boolean' => 'The :attribute field must be true or false.',
    'boolean' => 'Kolom :attribute harus bertipe data boolean, true atau false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    // 'date' => 'The :attribute is not a valid date.',
    'date' => 'Kolom :attribute harus diisi dengan tanggal yang valid.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    // 'file' => 'The :attribute must be a file.',
    'file' => 'Kolom :attribute harus berupa file (dokumen).',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    // 'image' => 'The :attribute must be an image.',
    'image' => 'Kolom :attribute harus berupa gambar.',
    // 'in' => 'The selected :attribute is invalid.',
    'in' => 'Kolom :attribute tidak valid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    // 'integer' => 'The :attribute must be an integer.',
    'integer' => 'Kolom :attribute harus bertipe integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        // 'numeric' => 'The :attribute may not be greater than :max.',
        'numeric' => 'Kolom :attribute tidak boleh lebih dari :max.',
        // 'file' => 'The :attribute may not be greater than :max kilobytes.',
        'file' => 'Kolom :attribute tidak boleh lebih dari :max kilobytes (KB).',
        // 'string' => 'The :attribute may not be greater than :max characters.',
        'string' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    // 'mimes' => 'The :attribute must be a file of type: :values.',
    'mimes' => 'Kolom :attribute harus diisi dengan tipe file :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        // 'numeric' => 'The :attribute must be at least :min.',
        'numeric' => 'Kolom :attribute harus diisi minimal :min.',
        'file' => 'Kolom :attribute harus diisi minimal :min kilobytes (KB).',
        'string' => 'Kolom :attribute harus diisi minimal :min karakter.',
        'array' => 'Kolom :attribute harus diisi minimal :min item.',
    ],
    // 'not_in' => 'The selected :attribute is invalid.',
    'not_in' => 'Kolom :attribute tidak valid.',
    'not_regex' => 'The :attribute format is invalid.',
    // 'numeric' => 'The :attribute must be a number.',
    'numeric' => 'Kolom :attribute harus berupa nomor.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    // 'required' => 'The :attribute field is required.',
    'required' => 'Kolom :attribute wajib diisi.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    // 'string' => 'The :attribute must be a string.',
    'string' => 'Kolom :attribute harus bertipe string.',
    'timezone' => 'The :attribute must be a valid zone.',
    // 'unique' => 'The :attribute has already been taken.',
    'unique' => 'Kolom :attribute sudah tersedia, silahkan cari yang lain.',
    // 'uploaded' => 'The :attribute failed to upload.',
    'uploaded' => ':attribute gagal diunggah.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
