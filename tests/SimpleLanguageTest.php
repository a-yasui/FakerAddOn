<?php

declare(strict_types=1);

namespace Ayasui\FakerAddon\Tests;

use Ayasui\FakerAddon\Provider\SimpleLanguage;

class SimpleLanguageTest extends TestCase
{
    public function test_hira()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new SimpleLanguage($faker));

        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{3093}]$/u', $faker->hira_gana(1));
        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{3093}]{10}$/u', $faker->hira_gana(10));
        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{3093}]{10}$/u', $faker->zenkaku_hira_gana(10));

        // check/check/check
        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{309F}]{10}$/u', $faker->full_zenkaku_hira_gana(10));
        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{309F}]{10}$/u', $faker->full_zenkaku_hira_gana(10));
        $this->assertMatchesRegularExpression('/^[\x{3041}-\x{309F}]{10}$/u', $faker->full_zenkaku_hira_gana(10));
    }

    public function test_zenkaku_kana()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new SimpleLanguage($faker));

        $this->assertMatchesRegularExpression('/^[\x{30A1}-\x{30F6}]$/u', $faker->kata_kana(1));
        $this->assertMatchesRegularExpression('/^[\x{30A1}-\x{30F6}]{10}$/u', $faker->zenkaku_kata_kana(10));

        // check/check/check
        $this->assertMatchesRegularExpression('/^[\x{30A1}-\x{30FF}]{10}$/u', $faker->full_zenkaku_kata_kana(10));
        $this->assertMatchesRegularExpression('/^[\x{30A1}-\x{30FF}]{10}$/u', $faker->full_zenkaku_kata_kana(10));
        $this->assertMatchesRegularExpression('/^[\x{30A1}-\x{30FF}]{10}$/u', $faker->full_zenkaku_kata_kana(10));
    }

    public function test_alphabets()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new SimpleLanguage($faker));

        $this->assertMatchesRegularExpression('/^[a-zA-Z]$/u', $faker->alphabet(1));
        $this->assertMatchesRegularExpression('/^[a-zA-Z]{10}$/u', $faker->alphabet(10));
        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9]{10}$/u', $faker->alphabetWithNumber(10));

        dump($faker->alphabetWithNumber(10));
    }
}