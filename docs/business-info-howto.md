# How to Enable Korean Business Registration Information

This guide shows you how to enable and customize the Korean business registration information display in LimeSurvey.

## Step 1: Open the Configuration File

Navigate to and open the file:
```
application/config/business-info.php
```

## Step 2: Enable the Feature

Change the `enabled` setting from `false` to `true`:

```php
$config['business_info'] = array(
    'enabled' => true,  // Change this to true
    // ... rest of the configuration
);
```

## Step 3: Update Your Business Information

Replace the example data with your actual business registration information:

```php
$config['business_info'] = array(
    'enabled' => true,
    
    // Replace with your actual information
    'online_sales_number' => 'YOUR-ONLINE-SALES-NUMBER',
    'business_registration_number' => 'YOUR-BUSINESS-REGISTRATION-NUMBER',
    'operation_status' => 'YOUR-OPERATION-STATUS',
    'corporation_status' => 'YOUR-CORPORATION-STATUS',
    'company_name' => 'YOUR-COMPANY-NAME',
    'representative_name' => 'YOUR-REPRESENTATIVE-NAME',
    'representative_phone' => 'YOUR-PHONE-NUMBER',
    'sales_method' => 'YOUR-SALES-METHOD',
    'handled_items' => 'YOUR-HANDLED-ITEMS',
    'email' => 'YOUR-EMAIL@example.com',
    'registration_date' => 'YYYYMMDD',
    'business_location' => 'YOUR-BUSINESS-LOCATION',
    'street_address' => 'YOUR-STREET-ADDRESS',
    'internet_domain' => 'https://your-domain.com',
    'host_server_location' => 'YOUR-HOST-SERVER-LOCATION',
    'reporting_authority' => 'YOUR-REPORTING-AUTHORITY',
    'reporting_authority_contact' => 'AUTHORITY-PHONE-NUMBER',
);
```

## Step 4: Save and Test

1. Save the file
2. Log in to your LimeSurvey admin panel
3. Navigate to any admin page
4. Scroll to the bottom of the page
5. You should see the business information displayed in the footer

## To Disable

Simply change `'enabled' => false` in the configuration file.

## Example Output

When enabled, the business information will be displayed in a formatted table at the bottom of all admin pages, showing:

- 통신판매번호 (Online Sales Registration Number)
- 사업자등록번호 (Business Registration Number)
- 운영상태 (Operation Status)
- 법인여부 (Corporation Status)
- 상호 (Company Name)
- 대표자명 (Representative Name)
- 대표전화번호 (Representative Phone)
- 판매방식 (Sales Method)
- 취급품목 (Handled Items)
- 전자우편 (Email)
- 신고일자 (Registration Date)
- 사업장소재지 (Business Location)
- 사업장소재지(도로명) (Street Address)
- 인터넷도메인 (Internet Domain)
- 호스트서버소재지 (Host Server Location)
- 통신판매업신고기관명 (Reporting Authority)

Plus the legal compliance notice required by Korean e-commerce law.

## Support

For issues or questions, please refer to the LimeSurvey forums or documentation.
