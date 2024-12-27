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
}