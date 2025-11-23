# Wikimedia Commons Integration Plugin

This plugin provides integration between LimeSurvey and Wikimedia Commons, allowing survey administrators to configure automatic uploading of survey response images to the Wikimedia Commons repository.

## Features

Based on the Wikimedia Commons app functionality, this plugin provides:

- **Direct Upload**: Upload photos to Commons directly from survey responses
- **Auto-Categorization**: Automatically categorize photos based on location data and metadata
- **License Selection**: Configure default licenses for uploaded content (CC-BY-SA, CC-BY, CC0)
- **Consent Management**: Require explicit consent from respondents before uploading to Commons
- **OAuth Authentication**: Secure authentication with Wikimedia Commons using OAuth 2.0

## Installation

1. Copy the `WikimediaCommons` directory to your LimeSurvey `plugins` directory
2. Navigate to the Plugin Manager in LimeSurvey admin panel
3. Find "WikimediaCommons" in the plugin list
4. Click "Activate"

## Configuration

### Global Settings

Before using the plugin, configure the following global settings:

1. **OAuth Credentials**: Register your application at [Wikimedia OAuth](https://meta.wikimedia.org/wiki/Special:OAuthConsumerRegistration)
2. **API Endpoint**: Default is `https://commons.wikimedia.org/w/api.php`
3. **Default License**: Choose the default license for uploaded images
4. **Auto-Categorize**: Enable/disable automatic categorization based on location

### Survey Settings

For each survey, you can configure:

- **Enable Commons Upload**: Turn on/off Wikimedia Commons integration for specific surveys
- **Commons Category**: Set the default Wikimedia Commons category for uploads
- **Require Consent**: Force explicit consent from respondents before uploading

## Usage

Once configured, the plugin will automatically:

1. Monitor survey responses with file upload questions
2. Check if Wikimedia Commons upload is enabled for the survey
3. Verify user consent (if required)
4. Upload images to Wikimedia Commons with proper metadata
5. Store the Commons URL in the survey response

## Requirements

- LimeSurvey 5.0.0 or later
- PHP 7.4 or later
- Active Wikimedia Commons account
- OAuth credentials from Wikimedia

## About Wikimedia Commons

Wikimedia Commons is one of the largest photo and multimedia communities in the world. It serves as the image repository for Wikipedia and is an independent project that seeks to document the world with photos, videos, and recordings.

### Acceptable Content

✓ Photos documenting the world - events, monuments, landscapes, nature, food, architecture
✓ Photos of notable objects
✓ Educational and documentary images

✖ Copyrighted pictures
✖ Poor quality photos
✖ Personal photos without documentary value

## Resources

- [Wikimedia Commons](https://commons.wikimedia.org/)
- [Commons Mobile App](https://commons-app.github.io/)
- [MediaWiki API Documentation](https://www.mediawiki.org/wiki/API:Upload)
- [OAuth Registration](https://meta.wikimedia.org/wiki/Special:OAuthConsumerRegistration)

## License

This plugin is licensed under the GNU General Public License version 2 or later, consistent with LimeSurvey's licensing.

## Support

For issues and feature requests:
- [LimeSurvey Forums](https://forums.limesurvey.org)
- [LimeSurvey Bug Tracker](https://bugs.limesurvey.org)

For Wikimedia Commons specific questions:
- [Commons Discussion](https://commons.wikimedia.org/wiki/Commons_talk:Mobile_app)
- [Commons App Issues](https://github.com/commons-app/apps-android-commons/issues)

## Development Status

⚠️ **Note**: This plugin is a proof-of-concept implementation. The actual Wikimedia Commons API integration is not yet fully implemented. Contributions are welcome!

### TODO

- [ ] Implement OAuth 2.0 authentication flow
- [ ] Complete MediaWiki API upload integration
- [ ] Add reverse geocoding for location-based categories
- [ ] Implement nearby missing images feature
- [ ] Add bulk upload support
- [ ] Create admin UI for viewing uploaded images
- [ ] Add comprehensive error handling
- [ ] Write unit tests
- [ ] Add i18n support for multiple languages

## Contributing

Contributions are welcome! Please follow LimeSurvey's contribution guidelines when submitting pull requests.
