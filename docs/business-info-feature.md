# Korean Business Registration Information Feature

This feature allows LimeSurvey administrators to display Korean business registration information in the admin panel footer, as required by the Electronic Commerce Consumer Protection Act (전자상거래소비자보호법 제12조4항).

## Configuration

To enable and configure the business information display:

1. Open the file: `application/config/business-info.php`

2. Set `'enabled' => true` to enable the feature

3. Update the business information fields with your company's details:
   - **통신판매번호** (Online Sales Registration Number)
   - **사업자등록번호** (Business Registration Number)
   - **운영상태** (Operation Status)
   - **법인여부** (Corporation Status)
   - **상호** (Company Name)
   - **대표자명** (Representative Name)
   - **대표전화번호** (Representative Phone)
   - **판매방식** (Sales Method)
   - **취급품목** (Handled Items)
   - **전자우편** (Email)
   - **신고일자** (Registration Date)
   - **사업장소재지** (Business Location)
   - **사업장소재지(도로명)** (Street Address)
   - **인터넷도메인** (Internet Domain)
   - **호스트서버소재지** (Host Server Location)
   - **통신판매업신고기관명** (Reporting Authority)
   - **통신판매업신고기관 연락처** (Reporting Authority Contact)

## Example Configuration

```php
$config['business_info'] = array(
    'enabled' => true, // Set to true to enable business information display
    'online_sales_number' => '2014-서울강남-03377',
    'business_registration_number' => '120-88-01280',
    'company_name' => '(주) 비바리퍼블리카',
    // ... other fields
);
```

## Display Location

The business information is displayed in the admin panel footer at the bottom of all admin pages.

## Legal Compliance

This feature is designed to help Korean businesses comply with Article 12-4 of the Electronic Commerce Consumer Protection Act, which requires e-commerce businesses to display their registration information to consumers.

## Disabling the Feature

To disable the business information display, simply set `'enabled' => false` in the `application/config/business-info.php` file.
