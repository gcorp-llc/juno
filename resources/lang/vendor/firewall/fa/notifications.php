<?php

return [

    'mail' => [

        'subject' => '🔥 حمله احتمالی به :domain',
        'message' => 'ممکن است :middleware حمله :domain has been detected از :ip ادرس. URL زیر تحت تأثیر قرار گرفته است: :url',

    ],

    'slack' => [

        'message' => 'حمله احتمالی به :domain تشخیص داده شده است.',

    ],

];
