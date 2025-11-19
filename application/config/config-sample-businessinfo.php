<?php
/**
 * Sample Business Information Configuration
 * 
 * This is an example configuration for the business operator information feature.
 * Copy the relevant parts to your application/config/config.php file.
 * 
 * This example uses Samsung Electronics data from the problem statement as a reference.
 */

// Business operator information configuration
$config['businessInfo'] = [
    // Communication sales number (통신판매번호)
    'salesNumber' => '2000-경기수원-0515',
    
    // Business registration number (사업자등록번호)
    'registrationNumber' => '124-81-00998',
    
    // Operating status (운영상태)
    'operatingStatus' => '통신판매업신고',
    
    // Corporate type (법인여부)
    'corporateType' => '법인',
    
    // Company name (상호)
    'companyName' => '삼성전자㈜',
    
    // Representative name (대표자명)
    'representativeName' => '전영현',
    
    // Representative phone number (대표전화번호)
    'representativePhone' => '1588-3366',
    
    // Sales method (판매방식)
    'salesMethod' => '인터넷',
    
    // Product categories (취급품목)
    'productCategories' => '컴퓨터/사무용품, 가전, 교육/도서/완구/오락',
    
    // Email (전자우편)
    'email' => 'sec.korea@samsung.com',
    
    // Registration date (신고일자) - Format: YYYYMMDD
    'registrationDate' => '20000725',
    
    // Business address (사업장소재지)
    'businessAddress' => '경기도 수원시 영통구 매탄3동 416번지 삼성전자',
    
    // Road name address (도로명)
    'roadAddress' => '경기도 수원시 영통구 삼성로 129 (매탄동,삼성전자)',
    
    // Internet domains (인터넷도메인) - Comma-separated list
    'internetDomains' => 'www.samsungapps.com,www.samsung.com/sec,www.familynet.kr,content.samsung.com,store.samsung.com/sec,music.samsung.com,www.samsungwa.com,www.samsungcareplus.com/kr,www.samsung.com/sec/galaxycampus,samsungebiz.com/event/galaxycampus,www.bespokeshop.co.kr',
    
    // Host server location (호스트 서버소재지)
    'hostServerLocation' => '경기도 과천시 별양상가3로 8 (별양동ICT 과천센터)',
    
    // Registration authority (통신판매업신고기관명)
    'registrationAuthority' => '경기도 수원시 영통구'
];
