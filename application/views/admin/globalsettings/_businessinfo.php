<?php
/**
 * This view generates the 'Business Information' tab inside global settings.
 * Contains Korean e-commerce business registration information fields.
 */
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h4><?php eT("Korean E-commerce Business Information"); ?></h4>
            <p class="text-muted">
                <?php eT("Business registration information required by Korean e-commerce law (전자상거래법)."); ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Online Sales Registration Number (통신판매번호) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_online_sales_number'>
                    <?php eT("Online sales registration number:"); ?>
                    <span class="text-muted">(통신판매번호)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_online_sales_number' 
                           name='business_online_sales_number' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_online_sales_number')); ?>"
                           placeholder="예: 2014-서울강남-03377"/>
                </div>
            </div>

            <!-- Business Registration Number (사업자등록번호) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_registration_number'>
                    <?php eT("Business registration number:"); ?>
                    <span class="text-muted">(사업자등록번호)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_registration_number' 
                           name='business_registration_number' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_registration_number')); ?>"
                           placeholder="예: 120-88-01280"/>
                </div>
            </div>

            <!-- Operating Status (운영상태) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_operating_status'>
                    <?php eT("Operating status:"); ?>
                    <span class="text-muted">(운영상태)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_operating_status' 
                           name='business_operating_status' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_operating_status')); ?>"
                           placeholder="예: 통신판매업신고"/>
                </div>
            </div>

            <!-- Corporate Status (법인여부) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_corporate_status'>
                    <?php eT("Corporate status:"); ?>
                    <span class="text-muted">(법인여부)</span>
                </label>
                <div class="col-12">
                    <select class="form-select" name="business_corporate_status" id="business_corporate_status">
                        <option value=""><?php eT("Select..."); ?></option>
                        <option value="법인" <?php echo (getGlobalSetting('business_corporate_status') == '법인') ? "selected='selected'" : "" ?>>
                            <?php eT("Corporation"); ?> (법인)
                        </option>
                        <option value="개인" <?php echo (getGlobalSetting('business_corporate_status') == '개인') ? "selected='selected'" : "" ?>>
                            <?php eT("Individual"); ?> (개인)
                        </option>
                    </select>
                </div>
            </div>

            <!-- Business Name (상호) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_name'>
                    <?php eT("Business name:"); ?>
                    <span class="text-muted">(상호)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_name' 
                           name='business_name' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_name')); ?>"
                           placeholder="예: (주) 비바리퍼블리카"/>
                </div>
            </div>

            <!-- Representative Name (대표자명) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_representative_name'>
                    <?php eT("Representative name:"); ?>
                    <span class="text-muted">(대표자명)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_representative_name' 
                           name='business_representative_name' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_representative_name')); ?>"
                           placeholder="예: 홍길동"/>
                </div>
            </div>

            <!-- Main Phone Number (대표전화번호) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_phone'>
                    <?php eT("Main phone number:"); ?>
                    <span class="text-muted">(대표전화번호)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_phone' 
                           name='business_phone' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_phone')); ?>"
                           placeholder="예: 1599-4905"/>
                </div>
            </div>

            <!-- Sales Method (판매방식) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_sales_method'>
                    <?php eT("Sales method:"); ?>
                    <span class="text-muted">(판매방식)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_sales_method' 
                           name='business_sales_method' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_sales_method')); ?>"
                           placeholder="예: 인터넷, 기타"/>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Products Handled (취급품목) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_products'>
                    <?php eT("Products handled:"); ?>
                    <span class="text-muted">(취급품목)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_products' 
                           name='business_products' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_products')); ?>"
                           placeholder="예: 기타"/>
                </div>
            </div>

            <!-- Email (전자우편) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_email'>
                    <?php eT("Email:"); ?>
                    <span class="text-muted">(전자우편)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='email' size='50' id='business_email' 
                           name='business_email' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_email')); ?>"
                           placeholder="예: support@example.com"/>
                </div>
            </div>

            <!-- Registration Date (신고일자) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_registration_date'>
                    <?php eT("Registration date:"); ?>
                    <span class="text-muted">(신고일자)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_registration_date' 
                           name='business_registration_date' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_registration_date')); ?>"
                           placeholder="예: 20141201 또는 2014-12-01"/>
                </div>
            </div>

            <!-- Business Location (사업장소재지) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_location'>
                    <?php eT("Business location:"); ?>
                    <span class="text-muted">(사업장소재지)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_location' 
                           name='business_location' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_location')); ?>"
                           placeholder="예: 서울특별시 강남구 역삼동 736-1"/>
                </div>
            </div>

            <!-- Street Address (도로명) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_street_address'>
                    <?php eT("Street address:"); ?>
                    <span class="text-muted">(도로명)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_street_address' 
                           name='business_street_address' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_street_address')); ?>"
                           placeholder="예: 서울특별시 강남구 테헤란로 142"/>
                </div>
            </div>

            <!-- Internet Domain (인터넷도메인) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_domain'>
                    <?php eT("Internet domain:"); ?>
                    <span class="text-muted">(인터넷도메인)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='url' size='50' id='business_domain' 
                           name='business_domain' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_domain')); ?>"
                           placeholder="예: http://example.com"/>
                </div>
            </div>

            <!-- Host Server Location (호스트서버소재지) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_server_location'>
                    <?php eT("Host server location:"); ?>
                    <span class="text-muted">(호스트서버소재지)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_server_location' 
                           name='business_server_location' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_server_location')); ?>"
                           placeholder="예: 서울특별시 서초구 법원로1길 6"/>
                </div>
            </div>

            <!-- Registration Authority (통신판매업신고기관명) -->
            <div class="mb-3">
                <label class="col-12 form-label" for='business_registration_authority'>
                    <?php eT("Registration authority:"); ?>
                    <span class="text-muted">(통신판매업신고기관명)</span>
                </label>
                <div class="col-12">
                    <input class="form-control" type='text' size='50' id='business_registration_authority' 
                           name='business_registration_authority' 
                           value="<?php echo htmlspecialchars((string) getGlobalSetting('business_registration_authority')); ?>"
                           placeholder="예: 서울특별시 강남구 02-3423-5382"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                <strong><?php eT("Note:"); ?></strong>
                <?php eT("This information is required by the Electronic Commerce Act of Korea (전자상거래법) for online businesses operating in Korea."); ?>
            </div>
        </div>
    </div>
</div>
