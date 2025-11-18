# LimeSurvey REST API Maintenance and Troubleshooting Guide

## Overview

This document provides guidelines for maintaining, troubleshooting, and repairing issues with the LimeSurvey REST API.

## Common Issues and Solutions

### Authentication Issues

#### Problem: Unable to authenticate / Token rejected

**Symptoms:**
- HTTP 401 Unauthorized responses
- "Invalid token" error messages
- Authentication endpoint not responding

**Solutions:**
1. Verify credentials are correct
2. Check that the user account is active
3. Ensure the API is enabled in LimeSurvey settings
4. Verify the token hasn't expired
5. Check server logs for detailed error messages

**Example:**
```bash
# Test authentication
curl -X POST https://your-limesurvey.com/rest/v1/auth \
  -d "username=admin&password=yourpassword" \
  -H "Content-Type: application/x-www-form-urlencoded"
```

#### Problem: Token expiration issues

**Solutions:**
1. Implement token refresh logic in your application
2. Use the PUT `/rest/v1/auth` endpoint to refresh tokens
3. Configure appropriate token lifetime in server settings

### Data Access Issues

#### Problem: Cannot access survey data

**Symptoms:**
- HTTP 403 Forbidden responses
- Empty survey lists
- Permission denied errors

**Solutions:**
1. Verify user has appropriate permissions for the survey
2. Check survey group permissions
3. Ensure the survey is not in a restricted group
4. Verify the survey ID is correct

### Performance Issues

#### Problem: Slow API responses

**Symptoms:**
- Requests taking longer than expected
- Timeout errors
- Degraded application performance

**Solutions:**
1. Implement pagination for large datasets
2. Use caching for frequently accessed data
3. Optimize database queries
4. Enable API response compression
5. Monitor server resources (CPU, memory, database connections)

**Performance Optimization:**
```javascript
// Use pagination
const response = await fetch('/rest/v1/survey?page=1&pageSize=50');

// Cache responses
const cache = new Map();
function getCachedSurvey(id) {
  if (cache.has(id)) {
    return Promise.resolve(cache.get(id));
  }
  return fetch(`/rest/v1/survey-detail/${id}`)
    .then(r => r.json())
    .then(data => {
      cache.set(id, data);
      return data;
    });
}
```

#### Problem: Rate limiting triggered

**Symptoms:**
- HTTP 429 Too Many Requests responses
- Temporary access restrictions

**Solutions:**
1. Implement exponential backoff
2. Respect the Retry-After header
3. Reduce request frequency
4. Cache responses to minimize API calls
5. Contact administrator to adjust rate limits if needed

## Maintenance Tasks

### Regular Maintenance

1. **Token Cleanup**
   - Regularly purge expired tokens from the database
   - Monitor token table size
   - Set up automated cleanup jobs

2. **Log Rotation**
   - Configure log rotation for API access logs
   - Archive old logs for compliance
   - Monitor log disk usage

3. **Performance Monitoring**
   - Track API response times
   - Monitor error rates
   - Set up alerts for unusual patterns

4. **Security Updates**
   - Keep LimeSurvey updated to latest version
   - Apply security patches promptly
   - Review and update API security policies

### Database Maintenance

1. **Index Optimization**
   ```sql
   -- Ensure proper indexes exist for API queries
   SHOW INDEX FROM lime_surveys;
   SHOW INDEX FROM lime_tokens;
   ```

2. **Table Optimization**
   ```sql
   -- Optimize API-related tables periodically
   OPTIMIZE TABLE lime_surveys;
   OPTIMIZE TABLE lime_questions;
   OPTIMIZE TABLE lime_answers;
   ```

3. **Connection Pool Management**
   - Monitor database connection usage
   - Adjust pool size based on API load
   - Close idle connections

## Monitoring and Diagnostics

### Health Checks

Implement health check endpoints to monitor API status:

```bash
# Check site settings (public endpoint)
curl https://your-limesurvey.com/rest/v1/site-settings

# Check authentication
curl -X POST https://your-limesurvey.com/rest/v1/auth \
  -d "username=test&password=test"
```

### Log Analysis

Important log locations:
- Application logs: `/application/logs/`
- Web server logs: Check your web server configuration
- PHP error logs: Check php.ini configuration

Common log patterns to monitor:
```
# Authentication failures
grep "401 Unauthorized" /var/log/limesurvey/access.log

# Rate limiting triggers
grep "429 Too Many Requests" /var/log/limesurvey/access.log

# API errors
grep "ERROR.*rest/v1" /application/logs/error.log
```

### Performance Metrics

Key metrics to track:
- Request rate (requests per minute)
- Response time (average, p95, p99)
- Error rate (percentage)
- Active tokens count
- Database query time
- Memory usage

## Backup and Recovery

### API Configuration Backup

Regularly backup:
1. API configuration settings
2. User permissions and roles
3. Custom API modifications
4. SSL certificates

### Disaster Recovery

In case of API failure:
1. Check server status and logs
2. Verify database connectivity
3. Test authentication endpoints
4. Review recent configuration changes
5. Restore from backup if necessary

## Security Hardening

### Best Practices

1. **HTTPS Only**
   - Disable HTTP access to API endpoints
   - Use TLS 1.2 or higher
   - Configure proper SSL certificates

2. **IP Whitelisting**
   - Restrict API access to known IP ranges
   - Implement firewall rules
   - Use VPN for sensitive operations

3. **Token Security**
   - Use strong token generation algorithms
   - Implement token rotation policies
   - Monitor for token abuse

4. **Request Validation**
   - Validate all input parameters
   - Implement request size limits
   - Sanitize user input

### Security Checklist

- [ ] HTTPS enabled and enforced
- [ ] Strong authentication credentials required
- [ ] Rate limiting configured
- [ ] API access logs enabled
- [ ] Regular security audits scheduled
- [ ] Intrusion detection system configured
- [ ] Backup and recovery procedures tested

## Upgrading the API

### Pre-upgrade Checklist

1. Review changelog and breaking changes
2. Backup database and configuration
3. Test in staging environment
4. Update API client libraries
5. Notify API consumers of scheduled maintenance

### Post-upgrade Validation

1. Test authentication flows
2. Verify all endpoints respond correctly
3. Check for deprecation warnings
4. Monitor error rates
5. Validate data integrity

## Support Resources

### Documentation
- OpenAPI Spec: `/docs/open-api/v1.json`
- Main Documentation: https://www.limesurvey.org/manual

### Community Support
- Forums: https://forums.limesurvey.org
- Discord: https://discord.gg/DEjguXn
- Bug Tracker: https://bugs.limesurvey.org

### Professional Support
- Email: support@limesurvey.org
- Enterprise support plans available

## Troubleshooting Decision Tree

```
API Issue
├── Authentication Problem?
│   ├── Yes → Check credentials, verify user active, check logs
│   └── No → Continue
├── Permission Problem?
│   ├── Yes → Verify user permissions, check survey access
│   └── No → Continue
├── Performance Problem?
│   ├── Yes → Check pagination, implement caching, monitor resources
│   └── No → Continue
├── Data Problem?
│   ├── Yes → Verify survey exists, check data integrity
│   └── No → Continue
└── Unknown → Check logs, contact support

```

---

*Last Updated: 2025-11-18*  
*Version: 1.0*
