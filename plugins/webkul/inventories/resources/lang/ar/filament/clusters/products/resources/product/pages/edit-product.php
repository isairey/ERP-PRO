<?php

return [
    'before-save' => [
        'notification' => [
            'error' => [
                'tracking-update' => [
                    'title' => 'خطأ في تحديث التتبع',
                    'body'  => 'لا يمكنك تغيير تتبع المخزون لمنتج تم استخدامه بالفعل.',
                ],

                'track-by-update' => [
                    'title' => 'خطأ في تحديث التتبع',
                    'body'  => 'لديك منتج(ات) في المخزون بدون رقم دفعة/رقم تسلسلي. يمكنك تعيين أرقام الدفعات/الأرقام التسلسلية عن طريق إجراء تعديل على المخزون.',
                ],
            ],
        ],
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'تحديث الكمية',
            'modal-heading'             => 'تحديث كمية المنتج',
            'modal-submit-action-label' => 'تحديث',

            'form' => [
                'fields' => [
                    'product'     => 'المنتج',
                    'on-hand-qty' => 'الكمية المتوفرة',
                ],
            ],
        ],
    ],
];
