# Business Information Display Feature

## Overview

This feature allows LimeSurvey installations to display business registration information on the admin footer, which is particularly useful for compliance with e-commerce regulations in countries like South Korea.

## Configuration

### 1. Enable the Feature

Edit the file `/application/config/businessinfo.php` and set `enabled` to `true`:

```php
return [
    'enabled' => true,
    // ... other configuration
];
```

### 2. Configure Business Information

Fill in the relevant fields in the configuration file. All fields are optional - only non-empty fields will be displayed.

**Example configuration file:**

```php
return [
    'enabled' => true,
    'communication_sales_number' => '2019-서울중구-2167',
    'business_registration_number' => '214-81-37726',
    'company_name' => '비씨카드(주)',
    'representative_name' => '최원석',
    'representative_phone' => '1588-4000',
    'email' => 'sekim@bccard.com',
    'business_location' => '서울특별시 중구 을지로4가 323번지',
    'internet_domain' => 'www.bccard.com',
    // ... additional fields as needed
];
```

### 3. Using the Example Configuration

An example configuration file is provided at `/application/config/businessinfo-example.php`. You can copy this to `businessinfo.php` and modify it:

```bash
cp application/config/businessinfo-example.php application/config/businessinfo.php
```

## Available Fields

The following fields are available for configuration:

- `communication_sales_number` - Communication Sales Number (통신판매번호)
- `business_registration_number` - Business Registration Number (사업자등록번호)
- `operating_status` - Operating Status (운영상태)
- `corporate_status` - Corporate Status (법인여부)
- `company_name` - Company Name (상호)
- `representative_name` - Representative Name (대표자명)
- `representative_phone` - Representative Phone (대표 전화번호)
- `sales_method` - Sales Method (판매방식)
- `products_handled` - Products Handled (취급품목)
- `email` - Email (전자우편)
- `registration_date` - Registration Date (신고일자)
- `business_location` - Business Location (사업장소재지)
- `business_location_road` - Business Location Road Name (사업장소재지-도로명)
- `internet_domain` - Internet Domain (인터넷도메인)
- `host_server_location` - Host Server Location (호스트서버소재지)
- `registration_authority` - Registration Authority (통신판매업 신고기관명)
- `legal_notice` - Legal Notice (법적 고지)

## Display Location

When enabled, the business information will be displayed at the bottom of the admin area footer, below the help button and above the modal sections.

## Disabling the Feature

To disable the feature, simply set `enabled` to `false` in the configuration file:

```php
return [
    'enabled' => false,
    // ... other configuration
];
```

## Customization

### Styling

The business information section uses Bootstrap classes for layout. You can add custom CSS to style the display further.

### Localization

Field labels are translated using LimeSurvey's translation system. You can add translations for the field labels in your language files.

## Technical Details

### Files

- `/application/config/businessinfo.php` - Main configuration file
- `/application/config/businessinfo-example.php` - Example configuration
- `/application/helpers/BusinessInfoHelper.php` - Helper class
- `/application/views/admin/super/business_info.php` - Display view
- `/application/views/admin/super/footer.php` - Footer (modified to include business info)

### Helper Methods

The `BusinessInfoHelper` class provides the following methods:

- `isEnabled()` - Check if business info display is enabled
- `get($key, $default)` - Get a specific configuration value
- `getAllFields()` - Get all non-empty fields with labels

## Legal Compliance

This feature is designed to help comply with e-commerce regulations that require displaying business registration information, such as:

- Korean Electronic Commerce Act (전자상거래소비자보호법)
- Similar regulations in other countries

**Note:** Ensure that you consult with legal counsel to verify that your implementation meets all applicable legal requirements.
