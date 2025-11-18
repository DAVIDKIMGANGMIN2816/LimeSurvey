<?php

/**
 * Business Information Helper
 * 
 * Helper class to manage and retrieve business registration information
 * for display on the site.
 */
class BusinessInfoHelper
{
    /**
     * @var array|null Cached business info configuration
     */
    private static $config = null;

    /**
     * Load business information configuration
     * 
     * @return array Business information configuration
     */
    public static function getConfig()
    {
        if (self::$config === null) {
            $configFile = Yii::app()->getConfig('rootdir') . '/application/config/businessinfo.php';
            if (file_exists($configFile)) {
                self::$config = require $configFile;
            } else {
                self::$config = ['enabled' => false];
            }
        }
        return self::$config;
    }

    /**
     * Check if business information display is enabled
     * 
     * @return bool True if enabled, false otherwise
     */
    public static function isEnabled()
    {
        $config = self::getConfig();
        return isset($config['enabled']) && $config['enabled'] === true;
    }

    /**
     * Get a specific business information field
     * 
     * @param string $key The configuration key
     * @param mixed $default Default value if key not found
     * @return mixed The configuration value
     */
    public static function get($key, $default = '')
    {
        $config = self::getConfig();
        return isset($config[$key]) ? $config[$key] : $default;
    }

    /**
     * Get all non-empty business information fields
     * 
     * @return array Array of field labels and values
     */
    public static function getAllFields()
    {
        $config = self::getConfig();
        $fields = [];
        
        $fieldLabels = [
            'communication_sales_number' => gT('Communication Sales Number'),
            'business_registration_number' => gT('Business Registration Number'),
            'operating_status' => gT('Operating Status'),
            'corporate_status' => gT('Corporate Status'),
            'company_name' => gT('Company Name'),
            'representative_name' => gT('Representative Name'),
            'representative_phone' => gT('Representative Phone'),
            'sales_method' => gT('Sales Method'),
            'products_handled' => gT('Products Handled'),
            'email' => gT('Email'),
            'registration_date' => gT('Registration Date'),
            'business_location' => gT('Business Location'),
            'business_location_road' => gT('Business Location (Road Name)'),
            'internet_domain' => gT('Internet Domain'),
            'host_server_location' => gT('Host Server Location'),
            'registration_authority' => gT('Registration Authority'),
        ];

        foreach ($fieldLabels as $key => $label) {
            $value = self::get($key);
            if (!empty($value)) {
                $fields[] = [
                    'label' => $label,
                    'value' => $value,
                ];
            }
        }

        return $fields;
    }
}
