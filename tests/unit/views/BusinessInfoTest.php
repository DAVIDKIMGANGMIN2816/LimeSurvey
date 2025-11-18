<?php

namespace ls\tests\unit\views;

use PHPUnit\Framework\TestCase;

/**
 * Test business information view
 */
class BusinessInfoTest extends TestCase
{
    /**
     * Test that business info config file exists and has correct structure
     */
    public function testBusinessInfoConfigExists()
    {
        $configFile = __DIR__ . '/../../../application/config/business-info.php';
        $this->assertFileExists($configFile, 'Business info config file should exist');
        
        $config = array();
        require($configFile);
        
        $this->assertArrayHasKey('business_info', $config, 'Config should have business_info key');
        $this->assertIsArray($config['business_info'], 'business_info should be an array');
    }
    
    /**
     * Test that business info config has all required fields
     */
    public function testBusinessInfoConfigStructure()
    {
        $configFile = __DIR__ . '/../../../application/config/business-info.php';
        $config = array();
        require($configFile);
        
        $businessInfo = $config['business_info'];
        
        $requiredFields = [
            'enabled',
            'online_sales_number',
            'business_registration_number',
            'operation_status',
            'corporation_status',
            'company_name',
            'representative_name',
            'representative_phone',
            'sales_method',
            'handled_items',
            'email',
            'registration_date',
            'business_location',
            'street_address',
            'internet_domain',
            'host_server_location',
            'reporting_authority',
            'reporting_authority_contact',
        ];
        
        foreach ($requiredFields as $field) {
            $this->assertArrayHasKey($field, $businessInfo, "business_info should have '$field' key");
        }
    }
    
    /**
     * Test that business info view file exists
     */
    public function testBusinessInfoViewExists()
    {
        $viewFile = __DIR__ . '/../../../application/views/admin/super/business_info.php';
        $this->assertFileExists($viewFile, 'Business info view file should exist');
    }
    
    /**
     * Test that business info view has valid PHP syntax
     */
    public function testBusinessInfoViewSyntax()
    {
        $viewFile = __DIR__ . '/../../../application/views/admin/super/business_info.php';
        
        // Check syntax using php -l
        $output = [];
        $returnVar = 0;
        exec("php -l " . escapeshellarg($viewFile), $output, $returnVar);
        
        $this->assertEquals(0, $returnVar, 'Business info view should have valid PHP syntax');
    }
    
    /**
     * Test that business info is disabled by default
     */
    public function testBusinessInfoDisabledByDefault()
    {
        $configFile = __DIR__ . '/../../../application/config/business-info.php';
        $config = array();
        require($configFile);
        
        $businessInfo = $config['business_info'];
        
        $this->assertFalse($businessInfo['enabled'], 'Business info should be disabled by default');
    }
}
