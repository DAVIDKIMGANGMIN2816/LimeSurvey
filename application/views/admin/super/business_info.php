<?php
/**
 * Business Information View
 * Displays Korean business registration information for e-commerce compliance
 * (전자상거래소비자보호법 제12조4항)
 */

// Load business info configuration
$configFile = dirname(dirname(dirname(__FILE__))) . '/config/business-info.php';
if (file_exists($configFile)) {
    $config = array();
    require($configFile);
    $businessInfo = isset($config['business_info']) ? $config['business_info'] : null;
} else {
    $businessInfo = null;
}

// Only display if enabled in config
if (!isset($businessInfo['enabled']) || !$businessInfo['enabled'] || $businessInfo === null) {
    return;
}
?>

<div class="business-info-container" style="background-color: #f5f5f5; border-top: 1px solid #ddd; padding: 20px; margin-top: 20px; font-size: 12px; color: #666;">
    <div class="container-fluid">
        <h4 style="margin-top: 0; margin-bottom: 15px; font-size: 14px; font-weight: bold; color: #333;">사업자정보</h4>
        
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-6">
                <table class="table table-sm table-borderless" style="margin-bottom: 0;">
                    <tr>
                        <td style="width: 40%; font-weight: bold;">통신판매번호</td>
                        <td><?php echo CHtml::encode($businessInfo['online_sales_number'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">사업자등록번호</td>
                        <td><?php echo CHtml::encode($businessInfo['business_registration_number'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">운영상태</td>
                        <td><?php echo CHtml::encode($businessInfo['operation_status'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">법인여부</td>
                        <td><?php echo CHtml::encode($businessInfo['corporation_status'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">상호</td>
                        <td><?php echo CHtml::encode($businessInfo['company_name'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">대표자명</td>
                        <td><?php echo CHtml::encode($businessInfo['representative_name'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">대표전화번호</td>
                        <td><?php echo CHtml::encode($businessInfo['representative_phone'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">판매방식</td>
                        <td><?php echo CHtml::encode($businessInfo['sales_method'] ?? ''); ?></td>
                    </tr>
                </table>
            </div>
            
            <div class="col-md-6">
                <table class="table table-sm table-borderless" style="margin-bottom: 0;">
                    <tr>
                        <td style="width: 40%; font-weight: bold;">취급품목</td>
                        <td><?php echo CHtml::encode($businessInfo['handled_items'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">전자우편(E-mail)</td>
                        <td><?php echo CHtml::encode($businessInfo['email'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">신고일자</td>
                        <td><?php echo CHtml::encode($businessInfo['registration_date'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">사업장소재지</td>
                        <td><?php echo CHtml::encode($businessInfo['business_location'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">사업장소재지(도로명)</td>
                        <td><?php echo CHtml::encode($businessInfo['street_address'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">인터넷도메인</td>
                        <td><a href="<?php echo CHtml::encode($businessInfo['internet_domain'] ?? ''); ?>" target="_blank"><?php echo CHtml::encode($businessInfo['internet_domain'] ?? ''); ?></a></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">호스트서버소재지</td>
                        <td><?php echo CHtml::encode($businessInfo['host_server_location'] ?? ''); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">통신판매업신고기관명</td>
                        <td><?php echo CHtml::encode($businessInfo['reporting_authority'] ?? ''); ?> <?php echo CHtml::encode($businessInfo['reporting_authority_contact'] ?? ''); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-12">
                <p style="font-size: 11px; line-height: 1.6; margin-bottom: 10px;">
                    본자료는 전자상거래시장에서 소비자가 정확한 사업자 정보를 가지고 안전한 거래를 할 수 있도록 전국 시,군,구에 신고된 통신판매업자의 신원정보를 
                    전자상거래소비자보호법 제12조4항에 따라 제공하는 정보입니다. 사업자 정보에 대한 궁금한 사항이나 사업자의 신원정보가 정보공개 내용과 불일치할 경우에는 
                    사업자 정보검색시 확인되는 해당 신고기관(지방자치단체)에 문의하여 주시기 바랍니다.
                </p>
                <p style="font-size: 11px; line-height: 1.6; margin-bottom: 0;">
                    일부 사업자의 경우, 부가가치세법상 사업자 폐업 신고는 하였으나 전자상거래법상 통신판매업 폐업 신고는 하지 않은 사례가 있을 수 있습니다. 
                    소비자 피해를 방지하기 위해 부가가치세법상 사업자 폐업 여부도 국세청 홈택스 페이지(<a href="https://www.hometax.go.kr" target="_blank">www.hometax.go.kr</a>)의 
                    사업자등록상태조회 코너를 통해 확인하시기 바랍니다.
                </p>
            </div>
        </div>
    </div>
</div>
