<?php


class Model_contacts extends Model
{
    public $id = [
        'value' => null,
        'manualInput' => false
    ];
    public $name = [
        'value' => null,
        'validation' => [
            'type' => 'string',
            'maxLength' => 255
        ],
        'form' => 'input',
        'manualInput' => true,
    ];
    public $number = [
        'value' => null,
        'validation' => [
            'type' => 'varchar',
            'maxLength' => 11
        ],
        'form' => 'input',
        'manualInput' => true,
    ];
}