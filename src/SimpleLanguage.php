<?php

declare(strict_types=1);

namespace Ayasui\FakerAddon\Provider;

class SimpleLanguage extends Base
{
    public static function __convert_unicode_jp(int $code)
    {
        return mb_convert_encoding('&#'.intval($code).';', 'UTF-8', 'HTML-ENTITIES');
    }

    /**
     * 一般的な全角ひらがな
     *
     * @example 'ひらぱな'
     */
    public static function hira_gana(int $wordcount = 4)
    {
        if ($wordcount < 1) {
            throw new \InvalidArgumentException('Word count must be greater than 0');
        }

        // あいうえお
        $words = [
            0x3042, 0x3044, 0x3046, 0x3048, 0x304A,
        ];
        // が〜わ(0x304B → 0x308D)までは有効
        $words = array_merge($words, range(0x304B, 0x308D));
        $words[] = 0x308F; // わ
        $words[] = 0x3092; // を
        $words[] = 0x3093; // ん

        $result = [];
        // hiragana code is range u+3041 => U+3041
        for ($i = 0; $i < $wordcount; $i++) {
            $result[] = static::__convert_unicode_jp(static::randomElement($words));
        }

        return implode('', $result);
    }

    /**
     * 一般的な全角ひらがな
     * *
     * * @example 'ひらぱな'
     */
    public static function zenkaku_hira_gana(int $wordcount = 4)
    {
        return static::hira_gana($wordcount);
    }

    /**
     * 広域な全角ひらがな
     *
     * @example 'わゔぁあぃいぅうぇえぉおかが'
     */
    public static function full_zenkaku_hira_gana(int $wordcount = 4)
    {
        if($wordcount < 1) {
            throw new \InvalidArgumentException('Word count must be greater than 0');
        }

        // あ〜ん(0x3041 → 0x3096)まで有効
        $words = range(0x3041, 0x3096);
        // ゝ,ゞ,ゟ(0x309D → 0x309F)も有効
        $words = array_merge($words, range(0x309D, 0x309F));

        $result = [];
        for ($i = 0; $i < $wordcount; $i++) {
            $result[] = static::__convert_unicode_jp(static::randomElement($words));
        }
        return implode('', $result);
    }
}