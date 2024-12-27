# Faker AddOn

Faker にいくつかの追加機能を提供するためのライブラリです。

## 使い方

```php
<?php

// コード例
$faker = \Faker\Factory::create();
$faker->addProvider(new \Ayasui\AddOn\Provider\Japanese($faker));

// ひらがな
echo $faker->hira_gana;        // あ
echo $faker->hira_gana(10);    // たろがぬべにぽぞやも

// 全角ひらがな
echo $faker->zenkaku_hira_gana;        // ゔ
echo $faker->zenkaku_hira_gana(10);    // うからこぶぼわえぞぞ

// 全角ひらがな（フル）
echo $faker->full_zenkaku_hira_gana(10);    // づとぉそぎだぢけめゎ

// カタカナ
echo $faker->kata_kana;        // ツ
echo $faker->kata_kana(10);    // オカデウオツズグガネ

// 半角カタカナ
echo $faker->han_kata_kana(10);         // ﾕｺｺｦﾙﾗｽﾒｹｸ
echo $faker->full_han_kata_kana(10);    // ｻｪｷﾁｧﾑｩﾚﾋﾃ

// アルファベット
echo $faker->alphabet;               // A
echo $faker->alphabet_with_number(10);   // Z2cOfHAGJr

// 全角アルファベット
echo $faker->zenkaku_alphabet(10);        // ＢＸＥｄｗｇＹｇＫＫ
echo $faker->zenkaku_alphabet_with_number(10);    // ＪＵＦ８Ｕ０ｊｊＵＺ
```

## Methods

### hira_gana / zenkaku_hira_gana

一般的な全角ひらがなを返します。

### full_zenkaku_hira_gana

全角ひらがなを返します。ただし、いくつか普段は使わない文字が含まれているため、注意してください。

含まれている文字:「ぁぃぅぇぉゃゅょっゎ」「ゔ」「ゟ」「ゝゞ」「ゐゑ」「ゕゖ」

### kata_kana / zenkaku_kata_kana

一般的な全角カタカナを返します。

### full_zenkaku_kata_kana

全角カタカナを返します。ただし、いくつか普段は使わない文字が含まれているため、注意してください。

含まれている文字:「ァィゥェォャュョッヮ」「ヵヶ」「ヴ」「ヿ」「ヽヾ」「ヰヱ」「ヵヶ」等

### han_kata_kana / full_han_kata_kana

半角カタカナを返します。

full_han_kata_kana は「ｧ」など小文字の文字も含まれます。

### alphabet / alphabet_with_number / zenkaku_alphabet / zenkaku_alphabet_with_number

アルファベットを返します。`alphabet_with_number`/`zenkaku_alphabet_with_number` は数字も含めた文字列を返します。


# Licenses

MIT License
