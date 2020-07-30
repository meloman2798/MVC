<?php

class Model_peron extends Model{
    public $id = [
        'value' => null,
        'manualInput' => false
    ];
    public $login = [
        'value' => null,
        'validation' => [
            'type' => 'varchar',
            'maxLength' => 255
        ],
        'form' => 'input',
        'manualInput' => true
    ];
    public $password = [
        'value' => null,
        'validation' => [
            'type' => 'string',
            'maxLength' => 255
        ],
        'form' => 'input',
        'manualInput' => true
    ];
}