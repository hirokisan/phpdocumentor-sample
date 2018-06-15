<?php

namespace App\Util;

class Tax
{
    /**
     * 税率
     *
     * @var float
     */
    const RATE = 0.08;

    /**
     * 税込金額を返す
     *
     * @param  int $price
     * @return int
     */
    public static function getIncluded(int $price)
    {
        return floor($price * (1 + self::RATE));
    }

    /**
     * 税抜金額を返す
     *
     * @param  int $price
     * @return int
     */
    public static function getExcluded(int $price)
    {
        return ceil($price / (1 + self::RATE));
    }
}
