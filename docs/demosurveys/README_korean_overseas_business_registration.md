# 국외사업자 등록현황 설문조사 템플릿 (Korean Overseas Business Registration Survey Template)

## 개요 (Overview)

이 LimeSurvey 템플릿은 전자상거래소비자보호법 제12조4항에 따라 국외통신판매업자의 신원정보를 수집하기 위한 설문조사 양식입니다.

This LimeSurvey template is designed to collect overseas e-commerce business registration information as required by Article 12-4 of the Korean Electronic Commerce Consumer Protection Act.

## 수집 항목 (Data Fields)

| 필드명 (Korean) | Field Name (English) | 필수여부 (Required) |
|----------------|----------------------|-------------------|
| 통신판매번호 | Mail-order Business Number | 필수 |
| 사업자등록번호 | Business Registration Number | 선택 |
| 운영상태 | Operating Status | 필수 |
| 법인여부 | Corporate Status | 필수 |
| 상호 | Business Name | 필수 |
| 대표자명 | Representative Name | 필수 |
| 대표 전화번호 | Representative Phone Number | 필수 |
| 전자우편(E-mail) | E-mail | 필수 |
| 판매방식 | Sales Method | 필수 |
| 취급품목 | Product Category | 필수 |
| 신고일자 | Registration Date | 필수 |
| 사업장 소재지 | Business Address | 필수 |
| 사업장 소재지(도로명) | Street Address | 선택 |
| 인터넷 도메인 | Internet Domain | 필수 |
| 호스트 서버 소재지 | Host Server Location | 필수 |

## 설문조사 그룹 (Survey Groups)

### 그룹 1: 기본 사업자 정보 (Basic Business Information)
- 통신판매번호, 사업자등록번호, 운영상태, 법인여부, 상호, 대표자명

### 그룹 2: 연락처 정보 (Contact Information)
- 대표 전화번호, 전자우편, 판매방식, 취급품목, 신고일자, 사업장 소재지

### 그룹 3: 인터넷 및 서버 정보 (Internet and Server Information)
- 인터넷 도메인, 호스트 서버 소재지

## 사용 방법 (How to Use)

1. LimeSurvey 관리자 패널에 로그인합니다.
2. "설문조사" → "설문조사 가져오기"를 클릭합니다.
3. `ls_korean_overseas_business_registration.lss` 파일을 선택합니다.
4. 필요에 따라 설문조사 설정을 수정합니다.
5. 설문조사를 활성화합니다.

## 법적 근거 (Legal Basis)

이 설문조사 템플릿은 다음 법령에 근거합니다:

- **전자상거래 등에서의 소비자보호에 관한 법률 제12조4항**
  - 전자상거래시장에서 소비자가 정확한 사업자 정보를 가지고 안전한 거래를 할 수 있도록 국외통신판매업자의 신원정보를 공개합니다.

## 예시 데이터 (Sample Data)

```
통신판매번호: 2025-공정-0013
사업자등록번호: (해당없음)
운영상태: 통신판매업 신고
법인여부: 법인
상호: Elementary Innovation Pte. Ltd.
대표자명: Qin Sun
대표 전화번호: 6567173228
판매방식: 인터넷
취급품목: 종합몰
전자우편: example@company.com
신고일자: 2025-03-19
사업장 소재지: Raffles Quay, Singapore
인터넷 도메인: https://www.example.com
호스트 서버 소재지: Microsoft Azure; 1 Microsoft Way, Redmond, WA 98052-6399 USA
```

## 주의사항 (Important Notes)

1. **정보 정확성**: 사업자 정보에 대한 궁금한 사항이나 사업자의 신원정보가 정보공개 내용과 불일치할 경우에는 해당 신고기관(지방자치단체)에 문의하시기 바랍니다.

2. **사업자 폐업 확인**: 일부 사업자의 경우, 부가가치세법상 사업자 폐업 신고는 하였으나 전자상거래법상 통신판매업 폐업 신고는 하지 않은 사례가 있을 수 있습니다. 소비자 피해를 방지하기 위해 부가가치세법상 사업자 폐업 여부도 국세청 홈택스 페이지(www.hometax.go.kr)의 사업자등록상태조회 코너를 통해 확인하시기 바랍니다.

## 관련 링크 (Related Links)

- [국세청 홈택스 사업자등록상태조회](https://www.hometax.go.kr)
- [전자상거래 등에서의 소비자보호에 관한 법률](https://www.law.go.kr)
- [공정거래위원회](https://www.ftc.go.kr)

## 라이선스 (License)

This survey template follows the LimeSurvey licensing terms.
