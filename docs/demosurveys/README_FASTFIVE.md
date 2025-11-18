# FASTFIVE Office Promotion Survey

## Overview
This is a Korean language survey form for FASTFIVE's office space promotion campaign. It collects consultation requests for their "Double Benefit Event" for small office spaces.

## File
- `fastfive_office_promotion_korean.lss` - LimeSurvey survey file

## Survey Details

### Event Information
- **Campaign Name**: 패파 최초 혜택! 초역세권 소형 사무실 더블 혜택 이벤트 (First FASTFIVE Benefit! Ultra-accessible Small Office Double Benefit Event)
- **Valid Until**: November 30, 2025
- **Language**: Korean (ko)

### Benefits Offered
1. **Contract Period 2x**: Double the contract period usage
2. **Personnel 2x**: Double the number of access passes for contracted personnel
3. **Access Pass Value**: ₩300,000 per person per month

### Form Fields

The survey includes the following required fields:

1. **Company Name / Full Name** (`company_name`)
   - Type: Short text (S)
   - Required: Yes
   - Description: Company name or personal name if no company

2. **Mobile Phone Number** (`mobile_phone`)
   - Type: Short text (S)
   - Required: Yes
   - Description: Contact phone number

3. **Number of Users** (`user_count`)
   - Type: Numeric (N)
   - Required: Yes
   - Description: Number of people who will use the office space

4. **Email** (`email`)
   - Type: Short text (S)
   - Required: Yes
   - Validation: Email format regex
   - Description: Contact email address

5. **Agreement Checkboxes** (`agreements`)
   - Type: Multiple choice (M)
   - Required: Yes
   - Options:
     - Personal information collection and usage consent (Required)
     - Marketing usage consent (Optional, but required for benefits)

### Important Notes
- Only available to new contract customers
- Subject to availability on a first-come, first-served basis
- No additional costs beyond membership fee
- Marketing consent is required to receive benefits

### Contact Information
- **Phone**: 1833-5550
- **Email**: contact@fastfive.co.kr
- **Hours**: 
  - Mon-Thu: 9:30 - 18:00
  - Fri: 9:30 - 17:00
  - Lunch: 12:00 - 13:00
- **KakaoTalk**: @FASTFIVE
- **Website**: https://www.fastfive.co.kr

## Usage

To import this survey into LimeSurvey:

1. Log in to your LimeSurvey admin panel
2. Go to "Create survey" or "Import"
3. Select "Import survey from file"
4. Choose the `fastfive_office_promotion_korean.lss` file
5. The survey will be imported with all questions, settings, and Korean language content

## Company Information

**패스트파이브(주) (FASTFIVE Co., Ltd.)**
- **Representative**: 김대일 (Kim Dae-il)
- **Business Registration**: 151-81-00025
- **Address**: 서울특별시 서초구 남부순환로333길 10, 1층(101호), 2, 3층(서초동, 원일빌딩)
  (10 Nambusunhwan-ro 333-gil, Seocho-gu, Seoul, 1st floor (101), 2nd & 3rd floors, Wonil Building)

## Technical Details
- Survey ID: 100001
- Survey Format: Group by group (G)
- Template: vanilla
- Admin: FASTFIVE
- Expiry Date: 2025-11-30 23:59:59
