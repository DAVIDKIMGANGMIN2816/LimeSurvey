<?php

namespace ls\tests\unit\helpers;

use ls\tests\TestBaseClass;

/**
 * Test BusinessInfoHelper
 */
class BusinessInfoHelperTest extends TestBaseClass
{
    /**
     * Test that BusinessInfoHelper can be loaded
     */
    public function testHelperExists()
    {
        $this->assertTrue(
            class_exists('BusinessInfoHelper'),
            'BusinessInfoHelper class should exist'
        );
    }

    /**
     * Test isEnabled returns false by default
     */
    public function testIsEnabledDefaultsFalse()
    {
        $isEnabled = \BusinessInfoHelper::isEnabled();
        $this->assertIsBool($isEnabled);
        $this->assertFalse(
            $isEnabled,
            'Business info should be disabled by default'
        );
    }

    /**
     * Test get method returns default value when field doesn't exist
     */
    public function testGetReturnsDefault()
    {
        $value = \BusinessInfoHelper::get('nonexistent_field', 'default_value');
        $this->assertEquals(
            'default_value',
            $value,
            'Get should return default value for nonexistent field'
        );
    }

    /**
     * Test get method returns empty string by default
     */
    public function testGetReturnsEmptyStringByDefault()
    {
        $value = \BusinessInfoHelper::get('nonexistent_field');
        $this->assertEquals(
            '',
            $value,
            'Get should return empty string by default'
        );
    }

    /**
     * Test getAllFields returns an array
     */
    public function testGetAllFieldsReturnsArray()
    {
        $fields = \BusinessInfoHelper::getAllFields();
        $this->assertIsArray(
            $fields,
            'getAllFields should return an array'
        );
    }

    /**
     * Test getAllFields returns empty array when disabled
     */
    public function testGetAllFieldsReturnsEmptyWhenDisabled()
    {
        $fields = \BusinessInfoHelper::getAllFields();
        $this->assertEmpty(
            $fields,
            'getAllFields should return empty array when business info is disabled'
        );
    }

    /**
     * Test getConfig returns an array
     */
    public function testGetConfigReturnsArray()
    {
        $config = \BusinessInfoHelper::getConfig();
        $this->assertIsArray(
            $config,
            'getConfig should return an array'
        );
    }

    /**
     * Test getConfig has enabled key
     */
    public function testGetConfigHasEnabledKey()
    {
        $config = \BusinessInfoHelper::getConfig();
        $this->assertArrayHasKey(
            'enabled',
            $config,
            'Config should have an enabled key'
        );
    }
}
