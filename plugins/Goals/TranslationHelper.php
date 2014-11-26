<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\Goals;


use Piwik\Piwik;

class TranslationHelper
{

    public function getTranslationForMatchAttribute($match)
    {
        switch ($match) {
            case 'manually':
                return Piwik::translate('Goals_ManuallyTriggeredUsingJavascriptFunction');

            case 'url':
                return Piwik::translate('Goals_VisitUrl');

            case 'title':
                return Piwik::translate('Goals_VisitPageTitle');

            case 'event_category':
            case 'event_action':
            case 'event_name':
                return Piwik::translate('Goals_SendEvent');

            case 'file':
                return Piwik::translate('Goals_Download');

            case 'external_website':
                return Piwik::translate('Goals_ClickOutlink');

            default:
                return '';
        }
    }
}