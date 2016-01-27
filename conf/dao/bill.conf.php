<?php
$conf = [
    'id'=> [
        'type'=> 'int',
    ],
    'date'=> [
        'type'=> 'date',
        'null'=> false,
    ],
    'in'=> [
        'type'=> 'num',
        'null'=> false,
    ],
    'out'=> [
        'type'=> 'num',
        'null'=> false,
    ],
    'editTime'=> [
        'type'=> 'int',
        'null'=> false,
    ],
    'detail'=> [
        'type'=> 'string',
        'null'=> false,
    ],
    'accountId'=> [
        'type'=> 'int',
        'null'=> false,
    ],
];
return $conf;
