<?php
/**
 * Business Operator Information View
 * Display company registration details as required by Korean e-commerce law
 */

// Set page title
$this->pageTitle = gT('Business Operator Information');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <style>
        body {
            font-family: 'Malgun Gothic', 'Apple SD Gothic Neo', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .info-table th,
        .info-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .info-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            width: 25%;
        }
        .info-table td {
            background-color: #fff;
            width: 75%;
        }
        .notice {
            background-color: #fff3cd;
            border: 1px solid #ffc107;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
            font-size: 0.9em;
            line-height: 1.8;
        }
        .notice h3 {
            margin-top: 0;
            color: #856404;
        }
        .link {
            color: #007bff;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo gT('Business Operator Information'); ?></h1>
        
        <?php if (empty($businessInfo)): ?>
            <p><?php echo gT('Business information is not configured.'); ?></p>
        <?php else: ?>
            <table class="info-table">
                <?php if (isset($businessInfo['salesNumber']) && !empty($businessInfo['salesNumber'])): ?>
                <tr>
                    <th><?php echo gT('Communication Sales Number'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['salesNumber']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['registrationNumber']) && !empty($businessInfo['registrationNumber'])): ?>
                <tr>
                    <th><?php echo gT('Business Registration Number'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['registrationNumber']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['operatingStatus']) && !empty($businessInfo['operatingStatus'])): ?>
                <tr>
                    <th><?php echo gT('Operating Status'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['operatingStatus']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['corporateType']) && !empty($businessInfo['corporateType'])): ?>
                <tr>
                    <th><?php echo gT('Corporate Type'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['corporateType']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['companyName']) && !empty($businessInfo['companyName'])): ?>
                <tr>
                    <th><?php echo gT('Company Name'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['companyName']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['representativeName']) && !empty($businessInfo['representativeName'])): ?>
                <tr>
                    <th><?php echo gT('Representative Name'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['representativeName']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['representativePhone']) && !empty($businessInfo['representativePhone'])): ?>
                <tr>
                    <th><?php echo gT('Representative Phone Number'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['representativePhone']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['salesMethod']) && !empty($businessInfo['salesMethod'])): ?>
                <tr>
                    <th><?php echo gT('Sales Method'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['salesMethod']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['productCategories']) && !empty($businessInfo['productCategories'])): ?>
                <tr>
                    <th><?php echo gT('Product Categories'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['productCategories']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['email']) && !empty($businessInfo['email'])): ?>
                <tr>
                    <th><?php echo gT('Email'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['email']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['registrationDate']) && !empty($businessInfo['registrationDate'])): ?>
                <tr>
                    <th><?php echo gT('Registration Date'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['registrationDate']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['businessAddress']) && !empty($businessInfo['businessAddress'])): ?>
                <tr>
                    <th><?php echo gT('Business Address'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['businessAddress']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['roadAddress']) && !empty($businessInfo['roadAddress'])): ?>
                <tr>
                    <th><?php echo gT('Road Name Address'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['roadAddress']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['internetDomains']) && !empty($businessInfo['internetDomains'])): ?>
                <tr>
                    <th><?php echo gT('Internet Domains'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['internetDomains']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['hostServerLocation']) && !empty($businessInfo['hostServerLocation'])): ?>
                <tr>
                    <th><?php echo gT('Host Server Location'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['hostServerLocation']); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if (isset($businessInfo['registrationAuthority']) && !empty($businessInfo['registrationAuthority'])): ?>
                <tr>
                    <th><?php echo gT('Registration Authority'); ?></th>
                    <td><?php echo CHtml::encode($businessInfo['registrationAuthority']); ?></td>
                </tr>
                <?php endif; ?>
            </table>
            
            <div class="notice">
                <h3><?php echo gT('Notice'); ?></h3>
                <p>
                    <?php echo gT('This information is provided in accordance with Article 12(4) of the Electronic Commerce Consumer Protection Act to enable consumers to conduct safe transactions with accurate business operator information in the e-commerce market.'); ?>
                </p>
                <p>
                    <?php echo gT('If you have any questions about the business operator information or if the business operator\'s identity information does not match the information disclosed, please contact the relevant reporting authority (local government) identified during the business operator information search.'); ?>
                </p>
                <p>
                    <?php echo gT('In some cases, business operators may have filed a business closure report under the Value-Added Tax Act but not under the Electronic Commerce Act. To prevent consumer damage, please also check the business closure status under the Value-Added Tax Act through the National Tax Service Hometax website (www.hometax.go.kr) Business Registration Status Inquiry section.'); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
