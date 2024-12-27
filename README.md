# Faker AddOn

いくつかの追加機能を提供するためのライブラリです。

## 使い方

```php
> $faker = \Faker\Factory::create();
> $faker->addProvider(new \Ayasui\AddOn\Provider\Japanese($faker));

> faker()->hira_gana
あ

> faker()->hira_gana(10)
たろがぬべにぽぞやも

> faker()->zenkaku_hira_gana
ゔ

> faker()->zenkaku_hira_gana(10)
うからこぶぼわえぞぞ

> faker()->full_zenkaku_hira_gana(10)
づとぉそぎだぢけめゎ

> faker()->kata_kana
ニ

> faker()->kata_kana(10)
オカデウオツズグガネ

> faker()->zenkaku_kata_kana(10)
オカデウオツズグガネ

> faker()->kata_kana
アイウエオ

> faker()->alphabet
A

> faker()->alphabetWithNumber(10)
Z2cOfHAGJr
```

## メソッド

### hira_gana / zenkaku_hira_gana

一般的な全角ひらがなを返します。

### full_zenkaku_hira_gana

全角ひらがなを返します。ただし、いくつか普段は使わない文字が含まれているため、注意してください。

含まれている文字:「ぁぃぅぇぉゃゅょっゎ」「ゔ」「ゟ」「ゝゞ」「ゐゑ」「ゕゖ」

### kata_kana / zenkaku_kata_kana

一般的な全角カタカナを返します。

### alphabet / alphabetWithNumber

アルファベットを返します。`alphabetWithNumber`は数字も含めた文字列を返します。


# Licenses

MIT License
