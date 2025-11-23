<?php
/**
 * Wikimedia Commons Integration Plugin
 * 
 * This plugin provides integration with Wikimedia Commons for uploading
 * survey-related images to the Wikimedia Commons repository.
 * 
 * Based on the Wikimedia Commons app features:
 * - Upload photos to Commons directly
 * - Categorize photos automatically based on location and title
 * - View nearby missing images
 * - License selection for uploaded content
 * 
 * @author LimeSurvey Community
 * @license GPL v2.0+
 */
class WikimediaCommons extends PluginBase
{
    protected $storage = 'DbStorage';
    static protected $name = 'WikimediaCommons';
    static protected $description = 'Integration with Wikimedia Commons for uploading survey images';

    /**
     * Plugin settings
     */
    protected $settings = array(
        'enabled' => array(
            'type' => 'boolean',
            'label' => 'Enable Wikimedia Commons Integration',
            'default' => false,
        ),
        'api_endpoint' => array(
            'type' => 'string',
            'label' => 'Wikimedia Commons API Endpoint',
            'default' => 'https://commons.wikimedia.org/w/api.php',
        ),
        'oauth_consumer_key' => array(
            'type' => 'string',
            'label' => 'OAuth Consumer Key',
            'help' => 'Register your application at https://meta.wikimedia.org/wiki/Special:OAuthConsumerRegistration',
        ),
        'oauth_consumer_secret' => array(
            'type' => 'string',
            'label' => 'OAuth Consumer Secret',
        ),
        'default_license' => array(
            'type' => 'select',
            'label' => 'Default License',
            'options' => array(
                'cc-by-sa-4.0' => 'Creative Commons Attribution-ShareAlike 4.0',
                'cc-by-4.0' => 'Creative Commons Attribution 4.0',
                'cc0' => 'Public Domain (CC0)',
            ),
            'default' => 'cc-by-sa-4.0',
        ),
        'auto_categorize' => array(
            'type' => 'boolean',
            'label' => 'Auto-categorize uploads based on location',
            'default' => true,
        ),
    );

    /**
     * Initialize plugin and subscribe to events
     */
    public function init()
    {
        // Subscribe to file upload events
        $this->subscribe('afterQuestionSave');
        $this->subscribe('afterSurveyComplete');
        $this->subscribe('beforeSurveySettings');
        $this->subscribe('newSurveySettings');
    }

    /**
     * Add survey-specific settings
     */
    public function beforeSurveySettings()
    {
        if (!$this->get('enabled', null, null, false)) {
            return;
        }

        $event = $this->event;
        $event->set("surveysettings.{$this->id}", array(
            'name' => get_class($this),
            'settings' => array(
                'enable_commons_upload' => array(
                    'type' => 'boolean',
                    'label' => 'Enable Wikimedia Commons upload for this survey',
                    'current' => $this->get('enable_commons_upload', 'Survey', $event->get('survey'), false)
                ),
                'commons_category' => array(
                    'type' => 'string',
                    'label' => 'Default Wikimedia Commons category:',
                    'help' => 'Images will be uploaded to this category',
                    'current' => $this->get('commons_category', 'Survey', $event->get('survey'), '')
                ),
                'require_consent' => array(
                    'type' => 'boolean',
                    'label' => 'Require explicit consent for Commons upload',
                    'current' => $this->get('require_consent', 'Survey', $event->get('survey'), true)
                ),
            )
        ));
    }

    /**
     * Save survey settings
     */
    public function newSurveySettings()
    {
        $event = $this->event;
        foreach ($event->get('settings') as $name => $value) {
            $this->set($name, $value, 'Survey', $event->get('survey'));
        }
    }

    /**
     * Handle file upload after survey completion
     * 
     * This is where the actual upload to Wikimedia Commons would happen
     */
    public function afterSurveyComplete()
    {
        if (!$this->get('enabled', null, null, false)) {
            return;
        }

        $event = $this->event;
        $surveyId = $event->get('surveyId');
        $responseId = $event->get('responseId');

        // Check if Commons upload is enabled for this survey
        $enableCommonsUpload = $this->get('enable_commons_upload', 'Survey', $surveyId, false);
        if (!$enableCommonsUpload) {
            return;
        }

        // Log the upload attempt
        $this->log("Wikimedia Commons upload triggered for survey {$surveyId}, response {$responseId}");

        // TODO: Implement actual upload logic
        // This would include:
        // 1. Extract uploaded images from response
        // 2. Authenticate with Wikimedia Commons OAuth
        // 3. Upload images with proper metadata
        // 4. Add categories and licenses
        // 5. Store Commons URLs in survey response
    }

    /**
     * Upload image to Wikimedia Commons
     * 
     * @param string $filePath Local file path
     * @param string $title File title on Commons
     * @param string $description File description
     * @param array $categories Array of category names
     * @param string $license License identifier
     * @return array Upload result with URL and status
     */
    protected function uploadToCommons($filePath, $title, $description, $categories, $license)
    {
        // Validate input
        if (!file_exists($filePath)) {
            return array('success' => false, 'error' => 'File not found');
        }

        if (!$this->get('oauth_consumer_key') || !$this->get('oauth_consumer_secret')) {
            return array('success' => false, 'error' => 'OAuth credentials not configured');
        }

        // TODO: Implement actual Wikimedia Commons API upload
        // This would use the MediaWiki API with OAuth authentication
        // Reference: https://www.mediawiki.org/wiki/API:Upload

        $this->log("Would upload {$filePath} as {$title} to Wikimedia Commons");

        return array(
            'success' => true,
            'url' => "https://commons.wikimedia.org/wiki/File:{$title}",
            'message' => 'Upload successful (simulated)',
        );
    }

    /**
     * Auto-categorize image based on metadata
     * 
     * @param array $metadata Image metadata including location
     * @return array Array of category names
     */
    protected function suggestCategories($metadata)
    {
        $categories = array();

        // Add date-based category
        if (isset($metadata['date'])) {
            $year = date('Y', strtotime($metadata['date']));
            $categories[] = "Images from {$year}";
        }

        // Add location-based categories if available
        if (isset($metadata['latitude']) && isset($metadata['longitude'])) {
            // This would use reverse geocoding to determine location
            $this->log("Would suggest categories based on location: {$metadata['latitude']}, {$metadata['longitude']}");
        }

        return $categories;
    }

    /**
     * Simple logging function
     */
    protected function log($message)
    {
        if (defined('LS_DEBUG') && LS_DEBUG) {
            Yii::log($message, 'info', 'plugins.WikimediaCommons');
        }
    }
}
