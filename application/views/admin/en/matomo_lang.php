<?php
/**
 * Matomo (Piwik) Analytics for OXID eShop
 * Copyright (C) 2018  bestlife AG
 * info:  oxid@bestlife.ag
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author      bestlife AG <oxid@bestlife.ag>
 * @author      Klaus Weidenbach
 * @author      Rafael Dabrowski
 * @author      Marat Bedoev
 * @link        http://www.bestlife.ag
 *
 * @license     GPLv3
 */

$sLangName = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$css = '<style type="text/css">
.groupExp dd > h3 { display: inline-block; margin: 0 15px; border: none; }
.groupExp a.rc b {font-size:medium;color:#ff3600;}.groupExp dt input.txt {width:430px !important} .groupExp dl {display:block !important;} input.confinput {position:fixed;top:20px;right:70px;background:#008B2D;padding:10px 25px;color:white;border:1px solid black;cursor:pointer;font-size:125%;} input.confinput:hover {outline:3px solid #ff3600;} .groupExp dt textarea.txtfield {width:430px;height:150px;}</style>';
$aLang = [
    'charset'                                      => 'UTF-8',
    'SHOP_MODULE_GROUP_blaMatomo_Main'             => $css . 'Matomo Configuration',
    'SHOP_MODULE_blaMatomo_sUrl'                   => '<h3>Matomo Server URL</h3><em>Example: https://matomo.domain.tld/</em>',
    'SHOP_MODULE_blaMatomo_sToken'                 => '<h3>Auth Token</h3><em>Can under <b>Administration -> Platform -> API</b> be copied by the appropriate user</em>',
    'SHOP_MODULE_blaMatomo_iSiteID'                => '<h3>Matomo site ID</h3><em>Insert here the Matomo site ID.</em>',
    'SHOP_MODULE_blaMatomo_blUseUserID'            => '<h3>Track your customers accurately with their unique User ID</h3><em>If set to true you can accurately track your customers between devices and browsers. For further information what consequences this has take a look at the Matomo documentation about <a href="http://matomo.org/docs/user-id/" target="_blank">User ID</a>. This feature requires Matomo >= 2.7.0</em>',
    'SHOP_MODULE_blaMatomo_blEnableJSErrorTrackin' => '<h3>Track uncatched frontend JavaScript errors</h3><em>Matomo can track uncaught JavaScript errors from the Shop frontend in it\'s <a href="http://matomo.org/docs/event-tracking/" target="_blank" title="Event Tracking Documentation">Event Tracking</a>.<br>Notice, this feature requires Matomo >= 2.2.0</em>',
    'SHOP_MODULE_blaMatomo_blFirstReferrerConv'    => '<h3>First Referrer Conversion Attribution</h3><em>If set to true attribute a conversion to the first referrer. By default, conversion is attributed to the most recent referrer.</em>',

    // goals
    'SHOP_MODULE_GROUP_blaMatomo_Goals'                => 'Goal',
    'SHOP_MODULE_blaMatomo_iNewsletterOptinGoal'       => 'Target-ID for newsletter opt-in confirmation',
    'SHOP_MODULE_blaMatomo_iNewsletterSubscribedGoal'  => 'Target-ID for newsletter sign-up',
    'SHOP_MODULE_blaMatomo_iNewsletterUnsubscribedGoal'=> 'Target-ID for newsletter sign-cancellation',

    // custom dimensions
    'SHOP_MODULE_GROUP_blaMatomo_CustomDimensions'    => 'Custom dimensions',
    'SHOP_MODULE_blaMatomo_iLanguageDimension'        => 'Index of the language dimension',
    'SHOP_MODULE_blaMatomo_iPaymentDimension'         => 'Index of payment type dimension',
    'SHOP_MODULE_blaMatomo_iDeliveryMetodDimension'   => 'Index of shipping type dimension',
    'SHOP_MODULE_blaMatomo_iDeliveryAddressDimension' => 'Index of delivery address dimension',
    'SHOP_MODULE_blaMatomo_iMediacodeDimension'       => 'Index of the mediacode dimension',


    // -----------------------------------------
    'SHOP_MODULE_blaMatomo_iCustindexNewsletter'   => '<h3>Custom variable index for newsletter registration tracking</h3><em>Matomo\'s page-scope <a href="http://matomo.org/docs/custom-variables/" target="_blank" title="What is a custom variable">custom variable</a> index between 1 and 5 where the newsletter registration tracking should get stored. (set 0 to disable this feature)</em>',
    'SHOP_MODULE_blaMatomo_iCustindexPayment'      => '<h3>Custom variable index for payment method tracking</h3><em>Matomo\'s visit-scope <a href="http://matomo.org/docs/custom-variables/" target="_blank" title="What is a custom variable">custom variable</a> index between 1 and 5 where the payment method tracking should get stored. (set 0 to disable this feature)</em>',


    'SHOP_MODULE_blaMatomo_CUSTOM_NEWSLETTER'      => 'Newsletter',
    'SHOP_MODULE_blaMatomo_sCustomvarNewsletter'   => 'This text will be shown in Matomo\'s custom variable for the newsletter registration tracking.',
    'SHOP_MODULE_blaMatomo_CUSTOM_PAYMENT'         => 'Payment method',
    'SHOP_MODULE_blaMatomo_sCustomvarPayment'      => 'This text will be shown in Matomo\'s custom variable for the payment method tracking.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_ACCOUNT'     => 'View account newsletter settings',
    'SHOP_MODULE_blaMatomo_sNewsletterAccount'     => 'This text will be shown in Matomo if a customer has viewed the newsletter settings page in the account settings.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_ACCOUNT_ON'  => 'Account newsletter activated',
    'SHOP_MODULE_blaMatomo_sNewsletterAccountOn'   => 'This text will be shown in Matomo if a customer has activated the newsletter in the account settings.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_ACCOUNT_OFF' => 'Account newsletter deactivated',
    'SHOP_MODULE_blaMatomo_sNewsletterAccountOff'  => 'This text will be shown in Matomo if a customer has deactivated the newsletter in the account settings.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_VIEWED'      => 'Viewed',
    'SHOP_MODULE_blaMatomo_sNewsletterViewed'      => 'This text will be shown in Matomo if a customer has seen the newsletter registration page.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_ORDERED'     => 'Ordered',
    'SHOP_MODULE_blaMatomo_sNewsletterOrdered'     => 'This text will be shown in Matomo if a customer has submitted the newsletter registration form.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_ACTIVATED'   => 'Activated',
    'SHOP_MODULE_blaMatomo_sNewsletterActivated'   => 'This text will be shown in Matomo if a customer has confirmed the newsletter double-opt-in.',
    'SHOP_MODULE_blaMatomo_NEWSLETTER_CANCELED'    => 'Canceled',
    'SHOP_MODULE_blaMatomo_sNewsletterCanceled'    => 'This text will be shown in Matomo if a customer has signed-off from the newsletter.',


    // additional mapping
    'SHOP_MODULE_GROUP_blaMatomo_Params'           => 'Additional parameter mapping',
    'SHOP_MODULE_blaMatomo_aParamMapVisit'         => '<h3>Parameter mapping for visit-scope custom variables</h3><em>You can define addition URL parameters that will get stored in Matomo\'s visit-scope <a href="http://matomo.org/docs/custom-variables/" target="_blank" title="What is a custom variable">custom variable</a>. (let it empty if you do not need this feature)<p><b>Configuration:</b> parameter => index|Label<br><code>foo => 4|Parameter 1<br>foo2 => 5|Parameter2</code><br>On a request like "http://www.shop.tld/index.php?foo=bar" Matomo will store in the custom variable with the the index 4 and the label "Parameter 1" the value "bar".<br><b>Caution</b> one visit-scope index is already used for payment method tracking!</p></em>',
    'SHOP_MODULE_blaMatomo_aParamMapPage'          => '<h3>Parameter mapping for page-scope custom variables</h3><em>You can define additional URL parameters that will get stored in Matomo\'s page-scope <a href="http://matomo.org/docs/custom-variables/" target="_blank" title="What is a custom variable">custom variable</a>. (let it empty if you do not need this feature)<br> See visit-scope parameter mapping for instructions.<br><b>Caution</b> one page-scope index is already used for the newsletter registration tracking!</em>',

    // content tracking
    'SHOP_MODULE_GROUP_blaMatomo_contentTracking'  => 'Content Tracking <a href="https://matomo.org/docs/content-tracking/" target="_blank">( ? )</a>',
    'SHOP_MODULE_blaMatomo_ct_enable'              => 'content on content tracking',
    'SHOP_MODULE_blaMatomo_ct_flexprev'            => 'jQuery Selector for Slider back',
    'SHOP_MODULE_blaMatomo_ct_flexnext'            => 'jQuery Selector for Slider forward',
    'SHOP_MODULE_blaMatomo_ct_zoom1'               => 'jQuery Selector for product image zoom view trigger',
    'SHOP_MODULE_blaMatomo_ct_pic1'                => 'jQuery Selector for product image 1 Trigger',
    'SHOP_MODULE_blaMatomo_ct_pic2'                => 'jQuery Selector for product image 2 Trigger',
    'SHOP_MODULE_blaMatomo_ct_pic13'               => 'jQuery Selector for product image 3 Trigger',
    'SHOP_MODULE_blaMatomo_ct_pic4'                => 'jQuery Selector for product image 4 Trigger',
    'SHOP_MODULE_blaMatomo_ct_description'         => 'jQuery Selector for product description (Tab) Trigger',
    'SHOP_MODULE_blaMatomo_ct_pricealarm'          => 'jQuery Selector for price alert (Tab) Trigger',
    'SHOP_MODULE_blaMatomo_ct_tags'                => 'jQuery Selector for product tags (Tab) Trigger',
    'SHOP_MODULE_blaMatomo_ct_productFbComments'   => 'jQuery Selector for Facebook comments (tab) Trigger',
];
