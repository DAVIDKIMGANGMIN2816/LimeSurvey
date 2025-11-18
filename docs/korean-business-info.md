# Korean E-commerce Business Information Fields

## Overview

This feature adds support for Korean e-commerce business registration information required by the Electronic Commerce Act of Korea (전자상거래법).

## Added Fields

The following 16 business information fields have been added to LimeSurvey's global settings:

1. **Online Sales Registration Number** (통신판매번호)
   - Setting name: `business_online_sales_number`
   - Example: 2014-서울강남-03377

2. **Business Registration Number** (사업자등록번호)
   - Setting name: `business_registration_number`
   - Example: 120-88-01280

3. **Operating Status** (운영상태)
   - Setting name: `business_operating_status`
   - Example: 통신판매업신고

4. **Corporate Status** (법인여부)
   - Setting name: `business_corporate_status`
   - Options: 법인 (Corporation) or 개인 (Individual)

5. **Business Name** (상호)
   - Setting name: `business_name`
   - Example: (주) 비바리퍼블리카

6. **Representative Name** (대표자명)
   - Setting name: `business_representative_name`
   - Example: 홍길동

7. **Main Phone Number** (대표전화번호)
   - Setting name: `business_phone`
   - Example: 1599-4905

8. **Sales Method** (판매방식)
   - Setting name: `business_sales_method`
   - Example: 인터넷, 기타

9. **Products Handled** (취급품목)
   - Setting name: `business_products`
   - Example: 기타

10. **Email** (전자우편)
    - Setting name: `business_email`
    - Example: support@example.com

11. **Registration Date** (신고일자)
    - Setting name: `business_registration_date`
    - Example: 20141201 or 2014-12-01

12. **Business Location** (사업장소재지)
    - Setting name: `business_location`
    - Example: 서울특별시 강남구 역삼동 736-1

13. **Street Address** (도로명)
    - Setting name: `business_street_address`
    - Example: 서울특별시 강남구 테헤란로 142

14. **Internet Domain** (인터넷도메인)
    - Setting name: `business_domain`
    - Example: http://example.com

15. **Host Server Location** (호스트서버소재지)
    - Setting name: `business_server_location`
    - Example: 서울특별시 서초구 법원로1길 6

16. **Registration Authority** (통신판매업신고기관명)
    - Setting name: `business_registration_authority`
    - Example: 서울특별시 강남구 02-3423-5382

## How to Configure

1. Log in as administrator
2. Navigate to **Configuration** → **Global settings**
3. Click on the **Business Information** tab
4. Fill in your business registration information
5. Click **Save** or **Save and close**

## How to Display Business Information

### In PHP Templates

You can retrieve any business information field using the `getGlobalSetting()` function:

```php
<?php
$businessName = getGlobalSetting('business_name');
$businessPhone = getGlobalSetting('business_phone');
$businessEmail = getGlobalSetting('business_email');
?>

<div class="business-info">
    <h3>Business Information</h3>
    <p>Business Name: <?php echo htmlspecialchars($businessName); ?></p>
    <p>Phone: <?php echo htmlspecialchars($businessPhone); ?></p>
    <p>Email: <?php echo htmlspecialchars($businessEmail); ?></p>
</div>
```

### Example: Footer Display

To display business information in the footer, you can add it to your theme's footer template:

```php
<?php if (getGlobalSetting('business_name')): ?>
<div class="korean-business-info">
    <h4><?php eT("Business Information"); ?></h4>
    <table class="table table-sm">
        <tr>
            <td><?php eT("Business Name"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_name')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Registration Number"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_registration_number')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Online Sales Number"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_online_sales_number')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Representative"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_representative_name')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Phone"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_phone')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Email"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_email')); ?></td>
        </tr>
        <tr>
            <td><?php eT("Address"); ?>:</td>
            <td><?php echo htmlspecialchars(getGlobalSetting('business_street_address')); ?></td>
        </tr>
    </table>
</div>
<?php endif; ?>
```

## Legal Compliance

According to the Electronic Commerce Act of Korea (전자상거래법 제12조4항), online businesses must disclose their business registration information to consumers. This information helps consumers:

- Verify the legitimacy of the business
- Contact the business for inquiries or complaints
- Confirm regulatory compliance
- Protect themselves from fraudulent operations

## Notes

- All fields are optional and can be left empty if not applicable
- Data is stored securely in the database
- All input is sanitized to prevent XSS attacks
- Korean text is fully supported in all fields
- Fields can be translated through LimeSurvey's standard translation system

## Database Storage

All business information fields are stored in the `settings_global` table with the following structure:

- `stg_name`: The field name (e.g., `business_name`)
- `stg_value`: The field value

You can query these directly if needed:

```sql
SELECT stg_name, stg_value 
FROM settings_global 
WHERE stg_name LIKE 'business_%';
```

## Support

For questions or issues related to this feature:
- Check the LimeSurvey forums
- Submit a bug report on the LimeSurvey bug tracker
- Consult the LimeSurvey manual

## Future Enhancements

Potential improvements for this feature:
- Add format validation for specific fields (e.g., business registration number format)
- Create a widget or shortcode for easy footer integration
- Add a public-facing business information page
- Include more detailed help text for each field
- Support for automatic lookup of business information from Korean government databases
