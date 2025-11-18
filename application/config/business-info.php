<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Business Registration Information
 * This file contains business registration information required for Korean e-commerce compliance
 * (전자상거래소비자보호법 제12조4항)
 * 
 * Configure this file with your business information if you are operating in South Korea
 * and need to comply with the Electronic Commerce Consumer Protection Act.
 */

$config['business_info'] = array(
    'enabled' => false, // Set to true to enable business information display
    
    // 통신판매번호 (Online Sales Registration Number)
    'online_sales_number' => '2014-서울강남-03377',
    
    // 사업자등록번호 (Business Registration Number)
    'business_registration_number' => '120-88-01280',
    
    // 운영상태 (Operation Status)
    'operation_status' => '통신판매업신고',
    
    // 법인여부 (Corporation Status)
    'corporation_status' => '법인',
    
    // 상호 (Company Name)
    'company_name' => '(주) 비바리퍼블리카',
    
    // 대표자명 (Representative Name)
    'representative_name' => '이승건',
    
    // 대표전화번호 (Representative Phone)
    'representative_phone' => '1599-4905',
    
    // 판매방식 (Sales Method)
    'sales_method' => '인터넷, 기타',
    
    // 취급품목 (Handled Items)
    'handled_items' => '기타',
    
    // 전자우편 (Email)
    'email' => 'support@toss.im',
    
    // 신고일자 (Registration Date)
    'registration_date' => '20141201',
    
    // 사업장소재지 (Business Location)
    'business_location' => '서울특별시 강남구 역삼동 736-1 캐피탈타워',
    
    // 사업장소재지(도로명) (Street Address)
    'street_address' => '서울특별시 강남구 테헤란로 142, 4층, 10층, 11층, 12층, 13층, 22층, 23층 (역삼동)',
    
    // 인터넷도메인 (Internet Domain)
    'internet_domain' => 'http://toss.im',
    
    // 호스트서버소재지 (Host Server Location)
    'host_server_location' => '서울특별시 서초구 법원로1길 6 (서초동)',
    
    // 통신판매업신고기관명 (Reporting Authority)
    'reporting_authority' => '서울특별시 강남구',
    
    // 통신판매업신고기관 연락처 (Reporting Authority Contact)
    'reporting_authority_contact' => '02-3423-5382',
);

