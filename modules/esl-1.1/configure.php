<?php defined('SYSPATH') or die('No direct access allowed.');
class Esl_1_1_0_Configure extends Bluebox_Configure
{
    public static $version = 1.1;
    public static $packageName = 'esl';
    public static $displayName = 'ESL';
    public static $author = '<ul><li>Michael Phillips</li><li>Karl Anderson</li><li>Rockwood Cataldo</li><li>Jon Blanton</li></ul>';
    public static $vendor = 'Bluebox';
    public static $license = 'MPL';
    public static $summary = 'FreeSWTICH Event Socket Layer Support';
    public static $description = 'FreeSWITCH ESL access. Provides real-time data to modules that interact directly with the switch, such as voicemail interactions';
    public static $default = TRUE;
    public static $type = Package_Manager::TYPE_MODULE;
    public static $required = array(
        'freeswitch' => 0.1,
        'core' => 0.1,
        'sipinterface' => 0.1
    );
    public static $navBranch = '/Status/';
    public static $navURL = 'esl/index';
    /**
     * Check dynamic loading library.  Is this a security issue? Mike J mentioned statically compiling
     */
    public static function _checkESL()
    {
        $issues = array();
        /*if (!extension_loaded("ESL")) {
            $issues['warnings'][] = __('The FreeSWITCH PHP/ESL module is not installed (or not working). We will fail back to socket-based/native ESL support. Some features may not work reliably, such as voicemail indicator lights. This error is not critical, you can install now and fix this later. See ' )
                .html::anchor('http://wiki.freeswitch.org/wiki/Event_Socket_Library', NULL, array(
                        'title' => 'Learn about the freeswitch ESL PHP extension.',
                        'target' => '_blank'
                    ));
        }*/
        return $issues;
    }
}
