# Business Operator Information Feature

## Overview

This feature provides a dedicated page to display business operator information as required by Korean e-commerce law (전자상거래소비자보호법 제12조4항 - Electronic Commerce Consumer Protection Act Article 12(4)).

## Purpose

Korean e-commerce regulations require online businesses to display their business registration details publicly. This information helps consumers:
- Verify the legitimacy of the business
- Make informed purchasing decisions
- Contact the appropriate authorities if needed

## Configuration

To configure your business information, add the following to your `application/config/config.php` file:

```php
$config['businessInfo'] = [
    'salesNumber' => '2000-경기수원-0515',  // Communication sales number
    'registrationNumber' => '124-81-00998',  // Business registration number
    'operatingStatus' => '통신판매업신고',  // Operating status
    'corporateType' => '법인',  // Corporate type
    'companyName' => '삼성전자㈜',  // Company name
    'representativeName' => '전영현',  // Representative name
    'representativePhone' => '1588-3366',  // Representative phone number
    'salesMethod' => '인터넷',  // Sales method
    'productCategories' => '컴퓨터/사무용품, 가전, 교육/도서/완구/오락',  // Product categories
    'email' => 'contact@example.com',  // Email
    'registrationDate' => '20000725',  // Registration date (YYYYMMDD format)
    'businessAddress' => '경기도 수원시 영통구 매탄3동 416번지',  // Business address
    'roadAddress' => '경기도 수원시 영통구 삼성로 129 (매탄동)',  // Road name address
    'internetDomains' => 'www.example.com',  // Internet domains (comma-separated)
    'hostServerLocation' => '경기도 과천시 별양상가3로 8',  // Host server location
    'registrationAuthority' => '경기도 수원시 영통구'  // Registration authority
];
```

## Accessing the Page

Once configured, the business information page is accessible at:

```
https://yoursite.com/index.php/businessinfo
```

Or with URL rewriting enabled:

```
https://yoursite.com/businessinfo
```

## Fields

The following fields can be configured:

| Field | Korean Name | Description |
|-------|-------------|-------------|
| salesNumber | 통신판매번호 | Communication sales registration number |
| registrationNumber | 사업자등록번호 | Business registration number |
| operatingStatus | 운영상태 | Current operating status |
| corporateType | 법인여부 | Corporate type (corporation/individual) |
| companyName | 상호 | Official company name |
| representativeName | 대표자명 | Representative's name |
| representativePhone | 대표전화번호 | Representative phone number |
| salesMethod | 판매방식 | Sales method (e.g., internet, catalog) |
| productCategories | 취급품목 | Product categories handled |
| email | 전자우편 | Contact email address |
| registrationDate | 신고일자 | Registration date |
| businessAddress | 사업장소재지 | Business location address |
| roadAddress | 도로명 | Road name address |
| internetDomains | 인터넷도메인 | Internet domains used |
| hostServerLocation | 호스트 서버소재지 | Host server location |
| registrationAuthority | 통신판매업신고기관명 | Registration authority name |

## Implementation Details

### Files Added

1. **Controller**: `application/controllers/BusinessInfoController.php`
   - Handles requests to display business information
   - Retrieves configuration from the LimeSurvey config

2. **View**: `application/views/businessinfo/index.php`
   - Displays the business information in a clean, formatted table
   - Includes legal notice text as required by law
   - Only shows fields that have been configured (empty fields are hidden)

3. **Route**: Added to `application/config/routes.php`
   - Maps `/businessinfo` URL to the controller

4. **Configuration**: Updated `application/config/config-defaults.php`
   - Added default (empty) business information structure
   - Includes comments for each field in both English and Korean

### Features

- **Automatic field hiding**: Only configured fields are displayed
- **Security**: All output is properly escaped using `CHtml::encode()`
- **Internationalization**: Uses LimeSurvey's `gT()` function for translatable strings
- **Legal compliance**: Includes required notice text explaining the purpose and legal basis
- **Clean design**: Professional table-based layout with proper styling

## Legal Notice

The page automatically includes the required legal notice explaining:
- The purpose of the information disclosure
- Reference to Article 12(4) of the Electronic Commerce Consumer Protection Act
- Instructions for consumers to verify information
- Reminder to check business closure status with the National Tax Service

## Example

See the Samsung Electronics example in the problem statement for a complete reference implementation.
