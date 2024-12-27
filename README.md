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
アイウエオ

> faker()->alphabed
AbdEFgGp

```

## メソッド

### hira_gana / zenkaku_hira_gana

一般的な全角ひらがなを返します。

### full_zenkaku_hira_gana

全角ひらがなを返します。ただし、いくつか普段は使わない文字が含まれているため、注意してください。

含まれている文字:「ぁぃぅぇぉゃゅょっゎ」「ゔ」「ゟ」「ゝゞ」「ゐゑ」「ゕゖ」


