<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Families
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'firstName' => 'Matheus',
                'lastName' => 'Santos'
            ],
            [
                'id' => 2,
                'firstName' => 'Marinalva',
                'lastName' => 'Mendes'
            ],
            [
                'id' => 3,
                'firstName' => 'Wagner Tadeu',
                'lastName' => 'Santos'
            ],
            [
                'id' => 4,
                'firstName' => 'Bernardo',
                'lastName' => 'Santos'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $family = Arr::first(static::all(), fn($family) => $family['id'] == $id);

        if (!$family) {
            abort(404);
        }

        return $family;
    }

}