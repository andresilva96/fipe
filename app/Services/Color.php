<?php

namespace App\Services;

class Color
{
    const SWATCHES = [
        '#1ABC9C',
        '#16A085',
        '#2ECC71',
        '#27AE60',
        '#3498DB',
        '#2980B9',
        '#9B59B6',
        '#8E44AD',
        '#34495E',
        '#2C3E50',
        '#F1C40F',
        '#F39C12',
        '#E67E22',
        '#D35400',
        '#E74C3C',
        '#C0392B',
        '#ECF0F1',
        '#BDC3C7',
        '#95A5A6',
        '#7F8C8D'
    ];

    public static function generate()
    {
        return self::SWATCHES[array_rand(self::SWATCHES, 1)];
    }
}
