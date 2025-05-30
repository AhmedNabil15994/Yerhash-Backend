<?php

return [
    'login'     => [
        "content" => [
            "msg_side_head" => "أعلن و  اشترى ما تحتاجه" ,
            "msg_side_content"=> "أكبر سوق للإعلانات عبر الإنترنت في العالم"
        ],
        'form'          => [
            'btn'           => [
                'forget_password'   => 'فقدت كلمة المرور؟',
                'login'             => 'تسجيل الدخول',
            ],
            'email'         => 'البريد الالكتروني',
            'mobile'         => 'الجوال او البريد الالكترونى',
            'password'      => 'كلمة المرور',
            'remember_me'   => 'تذكرني',
            "msg" =>  "مرحبا !",
            "desc" =>  "استختدم بياناتك لتسجيل الدخول",
            "footer_note"=>"ليس لديك حساب  ؟ اضغط على " ,
            "footer_note2"=> "فى الاعلى"
        ],
        'title'         => 'تسجيل الدخول',
        "auth_must"     => "يجب تسجيل الدخول او تسجيل كعضو جديد اولا",
        'validation'    => [
            'email'     => [
                'email'     => 'من فضلك ادخل البريد بشكل صحيح',
                'required'  => 'من فضلك ادخل البريد الالكتروني',
            ],
            'failed'    => 'هذه البيانات غير متطابقة لدينا من فضلك تآكد من بيانات تسجيل الدخول',
            'password'  => [
                'min'       => 'كلمة المرور يجب ان تكون اكثر من ٦ مدخلات',
                'required'  => 'يجب ان تدخل كلمة المرور',
            ],
        ],
    ],
    'password'  => [
        'alert'         => [
            'reset_sent'    => 'تم ارسال بريد بتعين كلمة مرور جديدة',
        ],
        'form'          => [
            'btn'   => [
                'password'  => 'ارسال تعين كلمة المرور',
            ],
            'email' => 'البريد الالكتروني',
        ],
        'title'         => 'فقدان كلمة المرور',
        'validation'    => [
            'email' => [
                'email'     => 'من فضلك ادخل البريد بشكل صحيح',
                'exists'    => 'هذا البريد غير موجود لدينا',
                'required'  => 'من فضلك ادخل البريد الالكتروني',
            ],
        ],
    ],
    'register'  => [
        'alert'         => [
            'policy_privacy'    => 'من خلال التسجيل قد وافقت على',
        ],
        'btn'           => [
            'policy_privacy'    => 'الشروط و الاحكام',
            'register'          => 'تسجيل مستخدم جديد',
        ],
        'form'          => [
            'email'                 => 'البريد الالكتروني',
            'mobile'                => 'رقم الهاتف',
            'name'                  => 'اسم المستخدم',
            'password'              => 'كلمة المرور',
            'password_confirmation' => 'تآكيد كلمة المرور',
            "msg" => "أنشئ حسابك فى دقائق ." ,
            "agree"=>"اوافق على كل",
            "footer_note"=>"لدي حساب بالفعل  ؟ اضغط على " ,
            "footer_note2"=> "فى الاعلى"
        ],
        'title'         => 'تسجيل مستخدم جديد',
        'validation'    => [
            'email'     => [
                'email'     => 'من فضلك ادخل البريد بشكل صحيح',
                'required'  => 'من فضلك ادخل البريد الالكتروني',
                'unique'    => 'هذا البريد الالكتروني تم حجزة من قبل شخص اخر',
            ],
            'mobile'    => [
                'digits_between'    => 'يجب ان يتكون رقم الهاتف من ٨ ارقام',
                'numeric'           => 'من فضلك ادخل رقم الهاتف من ارقام انجليزية فقط',
                'required'          => 'من فضلك ادخل رقم الهاتف',
                'unique'            => 'رقم الهاتف تم حجزه من قبل شخص اخر',
            ],
            'name'      => [
                'required'  => 'من فضلك ادخل الاسم الشخصي',
            ],
            'password'  => [
                'confirmed' => 'كلمة المرور غير متطابقة مع التآكيد',
                'min'       => 'كلمة المرور يجب ان تتكون من اكثر من ٦ مدخلات',
                'required'  => 'يجب ان تدخل كلمة المرور',
            ],
        ],
    ],
    'reset'     => [
        'form'          => [
            'btn'                   => [
                'reset' => 'تعيمن كلمة المرورالآن',
            ],
            
            
            'password_confirmation' => 'تآكيد كلمة المرور',
        ],
        'mail'          => [
            'button_content'    => 'تعين كلمة مرور جديدة',
            'header'            => 'انت تستقبل هذا البريد الالكتروني لآنك قمت بطلب تعين كلمة مرور جديدة لفقدانك القديمة',
            'subject'           => 'تعين كلمة مرور جديدة',
        ],
        'title'         => 'تعين كلمة مرور جديدة',
        'validation'    => [
            'email'     => [
                'email'     => 'من فضلك ادخل البريد بشكل صحيح',
                'exists'    => 'هذا البريد غير موجود لدينا',
                'required'  => 'من فضلك ادخل البريد الالكتروني',
            ],
            'password'  => [
                'min'       => 'كلمة المرور يجب ان تتكون من اكثر من ٦ مدخلات',
                'required'  => 'يجب ان تدخل كلمة المرور',
            ],
            'token'     => [
                'exists'    => 'انتهت صلاحية هذا الدفع',
                'required'  => 'لا تملك صلاحية تعين كلمة مرور جديدة قم بعمل طلب جديد',
            ],
        ],
    ],
   "forget"=>[
       "mobile"=> "الجوال" ,
       "code"=> "الكود" ,
       "password"=>"كلمة المرور" ,
       'password_confirmation' => 'تآكيد كلمة المرور',
       "resend" => "ارسال الكود",
       "reset" => "اعادة تعين" ,
       "mobile_required"=> "يجب ادخال الموبيل اولا"
   ]
];
