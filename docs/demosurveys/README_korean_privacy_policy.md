# Korean Privacy Policy Survey Template (개인정보처리방침 동의 설문조사)

This directory contains a LimeSurvey template for collecting Korean privacy policy consent based on the Jeju Air (제주항공) privacy policy format.

## File

- `ls_korean_privacy_policy_survey.lss` - LimeSurvey survey template file (Korean language)

## Survey Overview

This survey template is designed to collect user consent for a comprehensive Korean privacy policy that complies with Korean data protection laws including:

- **개인정보보호법** (Personal Information Protection Act)
- **정보통신망법** (Act on Promotion of Information and Communications Network Utilization and Information Protection)
- **항공보안법** (Aviation Security Act)
- **전자상거래법** (Act on Consumer Protection in Electronic Commerce)

## Survey Structure

The survey is divided into 3 question groups with 11 questions:

### Group 1: 개인정보의 수집 및 이용 (Collection and Use of Personal Information)
- Q01: Member registration and service usage data collection consent
- Q02: Non-member flight reservation data collection consent  
- Q03: Air transport service data collection consent
- Q04: Payment and compensation data collection consent

### Group 2: 개인정보의 제3자 제공 및 위탁 (Third-Party Provision and Outsourcing)
- Q05: Third-party sharing for card/bank services consent
- Q06: Third-party sharing for travel/additional services consent
- Q07: International data transfer consent

### Group 3: 개인정보 보호 및 설문 완료 (Privacy Protection and Survey Completion)
- Q08: Data retention period acknowledgment
- Q09: Data subject rights acknowledgment
- Q10: Privacy policy comprehensibility rating
- Q11: Improvement suggestions (optional free text)

## Key Privacy Policy Topics Covered

1. **Personal Data Collection Items:**
   - Required: ID, password, name, gender, date of birth, nationality, email, phone number
   - Optional: Passport number, passenger name

2. **Third-Party Data Sharing:**
   - Financial services (KB국민카드, 신한카드, BC카드, 삼성카드, 하나카드)
   - Travel services (무브, 캐플릭스, Klook, etc.)
   - Government agencies for immigration purposes

3. **International Data Transfer:**
   - Navitaire LLC (Australia) - Reservation/ticketing
   - Klook Travel Technology (Hong Kong) - Travel products
   - Alipay Singapore - Payment services
   - Clyde & Co LLP - Legal advisory

4. **Data Retention Periods:**
   - Financial transaction records: 5 years
   - Consumer complaint records: 3 years
   - Contract/payment records: 5 years
   - Flight boarding records: 1 year minimum
   - Communication records: 3 months

## How to Import

1. Log in to your LimeSurvey admin panel
2. Go to **Surveys** → **Create survey** → **Import**
3. Upload the `.lss` file
4. Configure admin email and other settings as needed
5. Activate the survey

## Customization

Before deploying, update the following:
- Admin email address
- Company name and contact information
- Third-party partner list (if applicable)
- Privacy policy effective date (currently set to 2025.09.12)

## Contact Information Template

The survey includes contact information for:
- **Privacy Officer (CPO):** 조윤성, 정보보호실 실장
- **Customer Service:** 1599-1500 (09:00~19:00, 365 days)
- **Email:** jejuair.help@jejuair.net
- **Address:** 제주특별자치도 제주시 신대로 64

## Regulatory Compliance Resources

For more information on Korean data protection compliance:
- 개인정보침해 신고센터: 118 / privacy.kisa.or.kr
- 개인정보 분쟁조정위원회: 1833-6972 / www.kopico.go.kr
- 대검찰청 사이버수사과: 1301 / www.spo.go.kr
- 경찰청 사이버안전국: 182 / https://ecrm.police.go.kr

## License

This template is provided as part of LimeSurvey demo surveys. Customize as needed for your organization's privacy policy requirements.
