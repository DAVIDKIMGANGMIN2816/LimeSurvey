<?php

/*
 * LimeSurvey
 * Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 */

/**
 * BusinessInfoController
 *
 * Controller to display business operator information as required by Korean e-commerce law
 * (전자상거래소비자보호법 제12조4항)
 *
 * @package LimeSurvey
 * @access public
 */
class BusinessInfoController extends LSYii_Controller
{
    public $layout = 'bare';
    public $defaultAction = 'index';

    /**
     * Display business operator information
     */
    public function actionIndex()
    {
        // Get business information from config
        $config = Yii::app()->getConfig('businessInfo', []);
        
        $data = [
            'businessInfo' => $config
        ];
        
        $this->render('businessinfo/index', $data);
    }
}
