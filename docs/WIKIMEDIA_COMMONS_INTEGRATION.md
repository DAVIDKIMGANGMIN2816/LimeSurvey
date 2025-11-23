# Wikimedia Commons Integration Specification

## Overview
This document contains specifications for potential Wikimedia Commons integration with LimeSurvey.

## Wikimedia Commons App Description (Korean)
위키 미디어 공용, 재사용 가능한 미디어 저장소에 사진을 업로드

## Wikimedia Commons App Features

( March 2025 update: We have resolved the Play policy issue and Explore and Peer review are back with the latest v5.2.0. Kindly use this version and let us know in case of any feedback via our in app feedback option / issue tracker. )

Join one of the largest photo and multimedia communities in the world! Commons is not only the image repository for Wikipedia, but an independent project that seeks to document the world with photos, videos and recordings.

The Wikimedia Commons app is an open-source app created and maintained by grantees and volunteers of the Wikimedia community to allow the Wikimedia community to contribute content to Wikimedia Commons. Wikimedia Commons, along with the other Wikimedia projects, is hosted by the Wikimedia Foundation. The Wikimedia Foundation is pleased to support community developers by offering the app here, but the Foundation did not create and does not maintain this app. For more information about the app, including its privacy policy, see the information at the bottom of this page. For information about the Wikimedia Foundation, visit us at wikimediafoundation.org.

### Key Features:
- Upload photos to Commons directly from your smartphone
- Categorize your photos to make them easier for other people to find
- Categories are automatically suggested based on photo location data and title
- View nearby missing images - this helps Wikipedia to have images for all articles, and you will discover beautiful places close to you
- View all the contributions you have made to Commons in one gallery

### How to Use:
1. Install
2. Log in to your Wikimedia account (if you don't have an account, create one for free at this step)
3. Select 'From Gallery' (or the picture icon)
4. Select the picture that you wish to upload to Commons
5. Enter a title and description for the picture
6. Select the license that you wish to release your picture under
7. Enter as many relevant categories as possible
8. Press Save

### Photo Guidelines

**Acceptable Photos:**
- ✓ Photos that document the world around you - famous people, political events, festivals, monuments, landscapes, natural objects and animals, food, architecture, etc
- ✓ Photos of notable objects that you find in the Nearby List in the app

**Not Acceptable:**
- ✖ Copyrighted pictures
- ✖ Photos of you or your friends. But if you are documenting an event it doesn't matter if they are in the picture
- ✖ Photos of poor quality. Make sure the things you are trying to document are visible on the picture

### Resources

- Website: https://commons-app.github.io/
- Bug reports: https://github.com/commons-app/apps-android-commons/issues
- Discussion: https://commons.wikimedia.org/wiki/Commons_talk:Mobile_app & https://groups.google.com/forum/#!forum/commons-app-android
- Source code: https://github.com/commons-app/apps-android-commons

## Potential LimeSurvey Integration Ideas

While the above describes the Wikimedia Commons mobile app, potential integration points with LimeSurvey could include:

1. **Survey Image Question Type with Commons Integration**
   - Allow survey respondents to upload images that could optionally be shared to Wikimedia Commons
   - Implement proper licensing and categorization workflows
   
2. **Survey Documentation**
   - Enable survey creators to document survey contexts by uploading contextual images to Commons
   - Link survey data with Commons media for research documentation

3. **Open Data Publishing**
   - For public surveys, allow automatic publishing of anonymized image responses to Commons
   - Implement proper consent and licensing mechanisms

## Implementation Notes

**Note:** This integration would require:
- Wikimedia Commons API authentication
- OAuth 2.0 implementation for user authentication
- Image upload and categorization API integration
- Licensing selection interface
- Geolocation services for nearby missing images feature
- GDPR compliance considerations for image uploads

## API References

- [Wikimedia Commons API](https://commons.wikimedia.org/wiki/Commons:API)
- [MediaWiki API Upload](https://www.mediawiki.org/wiki/API:Upload)
- [OAuth 2.0 for MediaWiki](https://www.mediawiki.org/wiki/OAuth/For_Developers)
