# LimeSurvey REST API Policy

## Overview

This document outlines the policies, guidelines, and best practices for using the LimeSurvey REST API (v1). All API consumers must adhere to these policies to ensure fair usage, security, and optimal performance.

## API Version

Current API Version: **v1**

Base URL: `/rest/v1/`

## Authentication

### Authentication Methods

1. **Bearer Token Authentication**
   - All authenticated endpoints require a valid bearer token in the Authorization header
   - Format: `Authorization: Bearer {token}`
   - Tokens are obtained via the `/rest/v1/auth` endpoint

### Token Management

- **Token Generation**: POST to `/rest/v1/auth` with username and password
- **Token Refresh**: PUT to `/rest/v1/auth` to refresh an existing token
- **Token Revocation**: DELETE to `/rest/v1/auth` to destroy the current token

### Security Requirements

- Tokens must be kept secure and never exposed in client-side code
- Implement proper token storage mechanisms (secure cookies, encrypted storage)
- Rotate tokens regularly for enhanced security
- Use HTTPS for all API communications

## Rate Limiting

### Default Limits

- **Standard Users**: 1000 requests per hour
- **Authenticated Requests**: Subject to server configuration
- **Burst Allowance**: Short bursts may exceed limits but will trigger temporary throttling

### Rate Limit Headers

Responses include rate limit information:
- `X-RateLimit-Limit`: Maximum requests allowed
- `X-RateLimit-Remaining`: Remaining requests in current window
- `X-RateLimit-Reset`: Time when the rate limit resets

### Handling Rate Limits

When rate limited (HTTP 429), clients should:
1. Respect the `Retry-After` header
2. Implement exponential backoff
3. Cache responses when appropriate

## Data Access Policies

### Survey Data

- Users can only access surveys they have permission to view/edit
- Survey responses are protected by authentication and authorization
- Personal data must be handled in compliance with GDPR and applicable privacy laws

### User Management

- User listing and details require appropriate administrative permissions
- Password changes and sensitive operations require elevated privileges

## Usage Guidelines

### Best Practices

1. **Efficient Querying**
   - Use pagination parameters (`page`, `pageSize`) for large datasets
   - Request only the data you need
   - Cache responses when data doesn't change frequently

2. **Error Handling**
   - Implement proper error handling for all error codes
   - Log errors for debugging purposes
   - Don't expose sensitive error details to end users

3. **Payload Optimization**
   - Minimize request payload size
   - Use appropriate HTTP methods (GET, POST, PATCH, DELETE)
   - Compress large payloads when supported

### Prohibited Activities

- Automated scraping or data mining without authorization
- Attempting to bypass authentication or authorization mechanisms
- Excessive requests that may impact server performance
- Sharing or exposing authentication tokens
- Accessing data without proper permissions

## API Endpoints

### Public Endpoints

- `/rest/v1/site-settings` - Site settings (no authentication required)

### Authenticated Endpoints

All other endpoints require valid authentication tokens.

## Data Privacy and GDPR Compliance

### Personal Data Handling

- Survey responses may contain personal data
- API consumers are data controllers and must comply with GDPR
- Implement proper data retention and deletion policies
- Obtain necessary consent before collecting personal data

### Data Protection

- All personal data must be transmitted over HTTPS
- Implement appropriate access controls
- Log and monitor data access for security auditing
- Report data breaches as required by law

## Versioning and Deprecation

### API Versioning

- APIs are versioned in the URL path (`/rest/v1/`)
- Breaking changes will result in a new API version
- Multiple versions may be supported simultaneously

### Deprecation Policy

- Deprecated endpoints will be announced at least 6 months in advance
- Deprecation notices will be included in API responses
- Clients should migrate to newer versions before deprecation deadline

## Support and Contact

### Documentation

- OpenAPI Specification: `/docs/open-api/v1.json`
- Manual: https://www.limesurvey.org/manual

### Reporting Issues

- Bug reports: https://bugs.limesurvey.org
- Security issues: security@limesurvey.org
- Forums: https://forums.limesurvey.org

## Changes and Updates

This policy may be updated periodically. Major changes will be communicated through:
- Release notes
- API response headers
- Email notifications to registered API users

## Compliance

Failure to comply with these policies may result in:
- Temporary suspension of API access
- Permanent revocation of API credentials
- Legal action in cases of malicious activity

---

*Last Updated: 2025-11-18*  
*Version: 1.0*
