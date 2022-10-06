<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Doğrulama
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki öğeler doğrulama(validation) işlemleri sırasında kullanılan varsayılan hata
    | mesajlarını içermektedir. `size` gibi bazı kuralların birden çok çeşidi
    | bulunmaktadır. Her biri ayrı ayrı düzenlenebilir.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute değeri :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute değeri :date tarihinden sonra veya eşit olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute değeri :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute değeri :date tarihinden önce veya eşit olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'file' => ':attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => ':attribute :min - :max arasında karakterden oluşmalıdır.',
        'array' => ':attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean' => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'current_password' => 'Parola hatalı.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute ile :date aynı tarihler olmalıdır.',
    'date_format' => ':attribute :format biçimi ile eşleşmiyor.',
    'different' => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits haneden oluşmalıdır.',
    'digits_between' => ':attribute :min ile :max arasında haneden oluşmalıdır.',
    'dimensions' => ':attribute görsel ölçüleri geçersiz.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute alanına girilen e-posta adresi geçersiz.',
    'ends_with' => ':attribute, şunlardan biriyle bitmelidir :values',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute dosya olmalıdır.',
    'filled' => ':attribute alanının doldurulması zorunludur.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmalı.',
        'file'    => ':attribute, :value kilobayt boyutundan büyük olmalı.',
        'string'  => ':attribute, :value karakterden uzun olmalı.',
        'array'   => ':attribute, :value taneden fazla olmalı.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value kadar veya daha fazla olmalı.',
        'file'    => ':attribute, :value kilobayt boyutu kadar veya daha büyük olmalı.',
        'string'  => ':attribute, :value karakter kadar veya daha uzun olmalı.',
        'array'   => ':attribute, :value tane veya daha fazla olmalı.',
    ],
    'image' => ':attribute alanı resim dosyası olmalıdır.',
    'in' => ':attribute değeri geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt' => [
        'numeric' => ':attribute, :value değerinden küçük olmalı.',
        'file'    => ':attribute, :value kilobayt boyutundan küçük olmalı.',
        'string'  => ':attribute, :value karakterden kısa olmalı.',
        'array'   => ':attribute, :value taneden az olmalı.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value kadar veya daha küçük olmalı.',
        'file'    => ':attribute, :value kilobayt boyutu kadar veya daha küçük olmalı.',
        'string'  => ':attribute, :value karakter kadar veya daha kısa olmalı.',
        'array'   => ':attribute, :value tane veya daha az olmalı.',
    ],
    'max' => [
        'numeric' => ':attribute değeri en çok :max olmalıdır.',
        'file' => ':attribute boyutu en çok :max kilobayt olmalıdır.',
        'string' => ':attribute uzunluğu en çok :max karakter olmalıdır.',
        'array' => ':attribute en çok :max nesneye sahip olmalıdır.',
    ],
    'mimes' => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => ':attribute dosya biçimi :values olmalıdır.',
    'min' => [
        'numeric' => ':attribute değeri en az :min olmalıdır.',
        'file' => ':attribute boyutu en az :min kilobayt olmalıdır.',
        'string' => ':attribute uzunluğu en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute sayı olmalıdır.',
    'password' => 'Parola geçersiz.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => ':attribute alanı, :other alanı :value değerlerinden birine sahip olmadığında zorunludur.',
    'required_with' => ':attribute alanı :values varken zorunludur.',
    'required_with_all' => ':attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without' => ':attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'prohibited' => ':attribute alanını gönderemezsiniz.',
    'prohibited_if' => ':other değeri :value olduğunda :attribute alanını gönderemezsiniz.',
    'prohibited_unless' => 'Değerler\'de :other olmadığı sürece :attribute alanını gönderemezsiniz.',
    'prohibits' => ':attribute alanı ile :other alanını birlikte gönderemezsiniz.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobyte olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biri ile başlamalıdır: :values',
    'string' => ':attribute dizge olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':attribute yüklemesi başarısız.',
    'url' => ':attribute biçimi geçersiz.',
    'uuid' => ':attribute bir UUID formatına uygun olmalı.',

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş doğrulama mesajları
    |--------------------------------------------------------------------------
    |
    | Bu alanda her niteleyici (attribute) ve kural (rule) ikilisine özel hata
    | mesajları tanımlayabilirsiniz. Bu özellik, son kullanıcıya daha gerçekçi
    | metinler göstermeniz için oldukça faydalıdır.
    |
    | Örnek:
    | 'invalid_extension'     => 'Dosyanın uzantısı geçersiz.',
    |
    */

    'custom' => [
        'au_firstname' => [
            'required' => 'İsim alanı boş bırakılamaz.',
            'max' => 'İsim alanı :max karakterden uzun olamaz.',
            'alpha' => 'İsim alanı sadece harflerden oluşmalıdır.',
            'min' => 'İsim alanı :min karakterden kısa olamaz.',
        ],
        'au_lastname' => [
            'required' => 'Soyad alanı boş bırakılamaz.',
            'max' => 'Soyad alanı :max karakterden uzun olamaz.',
            'alpha' => 'Soyad alanı sadece harflerden oluşmalıdır.',
            'min' => 'Soyad alanı :min karakterden kısa olamaz.',
        ],
        'au_email' => [
            'required' => 'E-posta adresi boş bırakılamaz.',
            'max' => 'E-posta adresi :max karakterden uzun olamaz.',
            'string' => 'E-posta adresi sadece harflerden oluşmalıdır.',
            'email' => 'Lütfen geçerli bir eposta adresi girin.',
        ],
        'au_password' => [
            'required' => ':attribute boş bırakılamaz.',
            'string' => ':attribute string değer içermelidir.',
            'min' => ':attribute :min karakterden kısa olamaz.',
        ],
        'au_confirmpassword' => [
            'required' => ':attribute alanı boş bırakılamaz.',
            'string' => ':attribute alanı string değer içermelidir.',
            'min' => ':attribute alanı :min karakterden kısa olamaz.',
            'same' => ':attribute alanı Şifre alanı ile aynı olmalıdır.',
        ],
        'a_adressName' => [
            'required' => 'Adres isimi alanı boş bırakılamaz.',
            'max' => 'Adres isimi alanı :max karakterden uzun olamaz.',
            'min' => 'Adres isimi alanı :min karakterden kısa olamaz.',
        ],
        'a_tc' => [
            'required' => 'T.C kimlik no alanı boş bırakılamaz.',
            'string' => 'T.C kimlik no alanı string değer içermeli.',
            'digits' => 'T.C kimlik no alanı :digits karakter içermeli.',
        ],
        'a_company' => [
            'max' => 'Şirket isimi alanı :max karakterden uzun olamaz.',
            'string' => 'Şirket isimi alanı sadece string değerlerden oluşmalıdır.',
        ],
        'a_name' => [
            'required' => 'Ad alanı boş bırakılamaz.',
            'max' => 'Ad alanı :max karakterden uzun olamaz.',
            'alpha' => 'Ad alanı sadece harflerden oluşmalıdır.',
            'min' => 'Ad alanı :min karakterden kısa olamaz.',
        ],
        'a_lastName' => [
            'required' => 'soyad alanı boş bırakılamaz.',
            'max' => 'soyad alanı :max karakterden uzun olamaz.',
            'alpha' => 'soyad alanı sadece harflerden oluşmalıdır.',
            'min' => 'soyad alanı :min karakterden kısa olamaz.',
        ],
        'a_email' => [
            'required' => 'E-posta adresi boş bırakılamaz.',
            'max' => 'E-posta adresi :max karakterden uzun olamaz.',
            'string' => 'E-posta adresi sadece harflerden oluşmalıdır.',
            'email' => 'Lütfen geçerli bir eposta adresi girin.',
        ],
        'a_adress' => [
            'required' => 'Adres alanı boş bırakılamaz.',
            'string' => 'Adres alanı sadece string değerlerden oluşmalıdır.',
            'min' => 'Adres alanı :min karakterden kısa olamaz.',
        ],
        'a_country' => [
            'required' => 'Ülke alanı boş bırakılamaz.',
            'string' => 'Ülke alanı sadece string değerlerden oluşmalıdır.',
        ],
        'a_city' => [
            'required' => 'Şehir alanı boş bırakılamaz.',
            'string' => 'Şehir alanı sadece string değerlerden oluşmalıdır.',
            'min' => 'Şehir alanı :min karakterden kısa olamaz.',
        ],
        'a_zip' => [
            'required' => 'Posta kodu alanı boş bırakılamaz.',
            'string' => 'Posta kodu alanı sadece string değerlerden oluşmalıdır.',
            'min' => 'Posta kodu alanı :min karakterden kısa olamaz.',
            'integer' => 'Posta kodu alanı sadece rakamlardan oluşmalıdır.',
        ],
        'a_tel' => [
            'required' => 'Telefon numarası alanı boş bırakılamaz.',
            'string' => 'Telefon numarası alanı sadece string değerlerden oluşmalıdır.',
            'min' => 'Telefon numarası alanı :min karakterden kısa olamaz.',
            'integer' => 'Telefon numarası alanı sadece rakamlardan oluşmalıdır.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş niteleyici isimleri
    |--------------------------------------------------------------------------
    |
    | Bu alandaki bilgiler "email" gibi niteleyici isimlerini "E-Posta adres"
    | gibi daha okunabilir metinlere çevirmek için kullanılır. Bu bilgiler
    | hata mesajlarının daha temiz olmasını sağlar.
    |
    | Örnek:
    |
    | 'email' => 'E-Posta adresi',
    | 'password' => 'Şifre',
    |
    */

    'attributes' => [

        'au_password' => 'Şifre',
        'au_confirmpassword' => 'Şifre Tekrar',
    ],

];
