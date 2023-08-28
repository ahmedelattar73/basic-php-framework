<?php

namespace Product\Model;

class LeapYear
{
    public function listProducts()
    {
        return [
            [
                'id'    => 1,
                'name' => 'test 1',
            ],
            [
                'id'    => 2,
                'name' => 'test 2',
            ],
            [
                'id'    => 3,
                'name' => 'test 3',
            ]
        ];
    }

    public function getProductById(int $id)
    {
        return [
            'id'    => 1,
            'name' => 'test 1'
        ];
    }
}