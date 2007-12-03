<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

/**
 * Table Definition for preference
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Preference extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'preference';                      // table name
    var $agencyid;                        // int(9)  not_null primary_key
    var $config_version;                  // real(9)  not_null
    var $company_name;                    // string(255)
    var $override_gd_imageformat;         // string(4)
    var $begin_of_week;                   // int(2)
    var $percentage_decimals;             // int(2)
    var $type_txt_allow;                  // string(1)  enum
    var $banner_html_auto;                // string(1)  enum
    var $admin;                           // string(64)
    var $admin_pw;                        // string(64)
    var $admin_fullname;                  // string(255)
    var $admin_email;                     // string(64)
    var $warn_admin;                      // string(1)  enum
    var $warn_agency;                     // string(1)  enum
    var $warn_client;                     // string(1)  enum
    var $warn_limit;                      // int(9)  not_null
    var $admin_novice;                    // string(1)  enum
    var $default_banner_weight;           // int(4)
    var $default_campaign_weight;         // int(4)
    var $default_banner_url;              // string(255)
    var $default_banner_destination;      // string(255)
    var $client_welcome;                  // string(1)  enum
    var $client_welcome_msg;              // blob(65535)  blob
    var $publisher_welcome;               // string(1)  enum
    var $publisher_welcome_msg;           // blob(65535)  blob
    var $gui_show_campaign_info;          // string(1)  enum
    var $gui_show_campaign_preview;       // string(1)  enum
    var $gui_campaign_anonymous;          // string(1)  enum
    var $gui_show_banner_info;            // string(1)  enum
    var $gui_show_banner_preview;         // string(1)  enum
    var $gui_show_banner_html;            // string(1)  enum
    var $gui_show_matching;               // string(1)  enum
    var $gui_show_parents;                // string(1)  enum
    var $gui_hide_inactive;               // string(1)  enum
    var $gui_link_compact_limit;          // int(11)
    var $updates_enabled;                 // string(1)  enum
    var $updates_cache;                   // blob(65535)  blob
    var $updates_timestamp;               // int(11)
    var $updates_last_seen;               // real(9)
    var $allow_invocation_interstitial;    // string(1)  enum
    var $allow_invocation_clickonly;      // string(1)  enum
    var $auto_clean_tables;               // string(1)  enum
    var $auto_clean_tables_interval;      // int(2)
    var $auto_clean_userlog;              // string(1)  enum
    var $auto_clean_userlog_interval;     // int(2)
    var $auto_clean_tables_vacuum;        // string(1)  enum
    var $autotarget_factor;               // real(12)
    var $maintenance_timestamp;           // int(11)
    var $compact_stats;                   // string(1)  enum
    var $statslastday;                    // date(10)  not_null binary
    var $statslasthour;                   // int(4)  not_null
    var $default_tracker_status;          // int(4)  not_null
    var $default_tracker_type;            // int(10)  unsigned
    var $default_tracker_linkcampaigns;    // string(1)  not_null enum
    var $publisher_agreement;             // string(1)  enum
    var $publisher_agreement_text;        // blob(65535)  blob
    var $publisher_payment_modes;         // blob(65535)  blob
    var $publisher_currencies;            // blob(65535)  blob
    var $publisher_categories;            // blob(65535)  blob
    var $publisher_help_files;            // blob(65535)  blob
    var $publisher_default_tax_id;        // string(1)  enum
    var $publisher_default_approved;      // string(1)  enum
    var $more_reports;                    // string(1)
    var $gui_column_id;                   // blob(65535)  blob
    var $gui_column_requests;             // blob(65535)  blob
    var $gui_column_impressions;          // blob(65535)  blob
    var $gui_column_clicks;               // blob(65535)  blob
    var $gui_column_ctr;                  // blob(65535)  blob
    var $gui_column_conversions;          // blob(65535)  blob
    var $gui_column_conversions_pending;    // blob(65535)  blob
    var $gui_column_sr_views;             // blob(65535)  blob
    var $gui_column_sr_clicks;            // blob(65535)  blob
    var $gui_column_revenue;              // blob(65535)  blob
    var $gui_column_cost;                 // blob(65535)  blob
    var $gui_column_bv;                   // blob(65535)  blob
    var $gui_column_num_items;            // blob(65535)  blob
    var $gui_column_revcpc;               // blob(65535)  blob
    var $gui_column_costcpc;              // blob(65535)  blob
    var $gui_column_technology_cost;      // blob(65535)  blob
    var $gui_column_income;               // blob(65535)  blob
    var $gui_column_income_margin;        // blob(65535)  blob
    var $gui_column_profit;               // blob(65535)  blob
    var $gui_column_margin;               // blob(65535)  blob
    var $gui_column_erpm;                 // blob(65535)  blob
    var $gui_column_erpc;                 // blob(65535)  blob
    var $gui_column_erps;                 // blob(65535)  blob
    var $gui_column_eipm;                 // blob(65535)  blob
    var $gui_column_eipc;                 // blob(65535)  blob
    var $gui_column_eips;                 // blob(65535)  blob
    var $gui_column_ecpm;                 // blob(65535)  blob
    var $gui_column_ecpc;                 // blob(65535)  blob
    var $gui_column_ecps;                 // blob(65535)  blob
    var $gui_column_epps;                 // blob(65535)  blob
    var $maintenance_cron_timestamp;      // int(11)
    var $warn_limit_days;                 // int(6)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Preference',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    /**
     * Table has no autoincrement/sequence so we override sequenceKey().
     *
     * @return array
     */
    function sequenceKey() {
        return array(false, false, false);
    }

    function _auditEnabled()
    {
        return true;
    }

    function _getContextId()
    {
        return $this->agencyid;
    }

    function _getContext()
    {
        return 'Preference';
    }

    /**
     * build a preference specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc']   = $this->name;
        switch ($actionid)
        {
            case OA_AUDIT_ACTION_INSERT:
                        break;
            case OA_AUDIT_ACTION_UPDATE:
                        break;
            case OA_AUDIT_ACTION_DELETE:
                        break;
        }
    }

    function _formatValue($field)
    {
        switch ($field)
        {
            default:
                return $this->$field;
        }
    }
}

?>