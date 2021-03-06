<?php defined('SYSPATH') or die('No direct access allowed.');
/*
 * FreePBX Modular Telephony Software Library / Application
 *
 * The contents of this file are subject to the Mozilla Public License Version 1.1 (the 'License');
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/.
 *
 * Software distributed under the License is distributed on an 'AS IS' basis, WITHOUT WARRANTY OF ANY KIND, either
 * express or implied. See the License for the specific language governing rights and limitations under the License.
 *
 * The Original Code is FreePBX Telephony Configuration API and GUI Framework.
 * The Original Developer is the Initial Developer.
 * The Initial Developer of the Original Code is Darren Schreiber
 * All portions of the code written by the Initial Developer and Bandwidth, Inc. are Copyright © 2008-2009. All Rights Reserved.
 *
 * Contributor(s):
 *
 *
 */

/**
 * location.php - FreeSWITCH Locations driver
 *
 * Allows for locations to exist as global variables when compiling the FS XML and to be used in various places as $${location_ID}
 *
 * @author Darren Schreiber <d@d-man.org>
 * @license MPL
 * @package TCAPI
 * @subpackage FreeSWITCH_Driver
 */
class FreeSwitch_NetList_Driver extends FreeSwitch_Base_Driver
{
    public static function set($netList)
    {
        // Reference to our new network list
        $xml = FreeSwitch::setSection('netlist', $netList['net_list_id']);

        $xml->setAttributeValue('', 'default', $netList['allow'] ? 'allow' : 'deny');

        // remove any of the acl's alread there
        $xml->deleteChildren();

        // Cycle through all network list items and add them to the ACL file
        foreach ($netList['NetListItem'] as $item)
        {
            $item['record'] = str_replace('/', '\/', $item['record']);

            $xml->update('/node[@bluebox="net_list_item_' . $item['net_list_item_id'] . '"]{@type="' . ($item['allow'] ? 'allow' : 'deny') . '"}{@cidr="' . $item['record'] . '"}');
        }
    }

    public static function delete($netList)
    {
        // Reference to our XML document & context
        $xml = FreeSwitch::setSection('netlist', $netList['net_list_id']);

        $xml->deleteNode();
    }
}
