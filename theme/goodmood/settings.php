<?php

/**
 * Settings for the goodmood theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // font size reference
    $name = 'theme_goodmood/fontsizereference';
    $title = get_string('fontsizereference','theme_goodmood');
    $description = get_string('fontsizereferencedesc', 'theme_goodmood');
    $default = '13';
    $choices = array(11=>'11px', 12=>'12px', 13=>'13px', 14=>'14px', 15=>'15px', 16=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // moodle 1.* like setting
    $name = 'theme_goodmood/noframe';
    $title = get_string('noframe','theme_goodmood');
    $description = get_string('noframedesc', 'theme_goodmood');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $settings->add($setting);

    // Frame margin
    $name = 'theme_goodmood/framemargin';
    $title = get_string('framemargin','theme_goodmood');
    $description = get_string('framemargindesc', 'theme_goodmood', get_string('noframe','theme_goodmood'));
    $default = '15';
    $choices = array(0=>'0px', 5=>'5px', 10=>'10px', 15=>'15px', 20=>'20px', 25=>'25px', 30=>'30px', 35=>'35px', 40=>'40px', 45=>'45px', 50=>'50px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Display logo or heading
    $name = 'theme_goodmood/headercontent';
    $title = get_string('headercontent','theme_goodmood');
    $description = get_string('headercontentdesc', 'theme_goodmood');
    $default = '1';
    $choices = array(1=>get_string('displaylogo', 'theme_goodmood'), 0=>get_string('displayheading', 'theme_goodmood'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Custom site logo setting
    $name = 'theme_goodmood/customlogourl';
    $title = get_string('customlogourl','theme_goodmood');
    $description = get_string('customlogourldesc', 'theme_goodmood');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW); // we want it accepting ../ at the beginning. Security is not at its top but Moodle trusts admins.
    $settings->add($setting);

    // Custom front page site logo setting
    $name = 'theme_goodmood/frontpagelogourl';
    $title = get_string('frontpagelogourl','theme_goodmood');
    $description = get_string('frontpagelogourldesc', 'theme_goodmood');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW); // we want it accepting ../ at the beginning. Security is not at its top but Moodle trusts admins.
    $settings->add($setting);

    // page header background colour setting
    $name = 'theme_goodmood/headerbgc';
    $title = get_string('headerbgc','theme_goodmood');
    $description = get_string('headerbgcdesc', 'theme_goodmood');
    $default = '#E3DFD4';
    $previewconfig = array('selector'=>'#page-header', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // creditstomoodleorg: ctmo
    $name = 'theme_goodmood/creditstomoodleorg';
    $title = get_string('creditstomoodleorg','theme_goodmood');
    $description = get_string('creditstomoodleorgdesc', 'theme_goodmood');
    $default = '2';
    $choices = array(2 => get_string('ctmo_ineverypage', 'theme_goodmood'), 1 => get_string('ctmo_onfrontpageonly', 'theme_goodmood'), 0 => get_string('ctmo_no', 'theme_goodmood'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Block region width
    $name = 'theme_goodmood/blockcolumnwidth';
    $title = get_string('blockcolumnwidth','theme_goodmood');
    $description = get_string('blockcolumnwidthdesc', 'theme_goodmood');
    $default = '200';
    $choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Block padding
    $name = 'theme_goodmood/blockpadding';
    $title = get_string('blockpadding','theme_goodmood');
    $description = get_string('blockpaddingdesc', 'theme_goodmood');
    $default = '8';
    $choices = array(1=>'1px', 2=>'2px', 4=>'4px', 8=>'8px', 12=>'12px', 16=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Block content background colour setting
    $name = 'theme_goodmood/blockcontentbgc';
    $title = get_string('blockcontentbgc','theme_goodmood');
    $description = get_string('blockcontentbgcdesc', 'theme_goodmood');
    $default = '#F6F6F6';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Left column colour setting
    $name = 'theme_goodmood/lblockcolumnbgc';
    $title = get_string('lblockcolumnbgc','theme_goodmood');
    $description = get_string('lblockcolumnbgcdesc', 'theme_goodmood');
    $default = '#E3DFD4';
    $previewconfig = array('selector'=>'#page-content, #page-content #region-pre, #page-content #region-post-box', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Right column colour setting
    $name = 'theme_goodmood/rblockcolumnbgc';
    $title = get_string('rblockcolumnbgc','theme_goodmood');
    $description = get_string('rblockcolumnbgcdesc', 'theme_goodmood');
    $default = '';
    $previewconfig = array('selector'=>'#page-content #region-post-box, #page-content #region-post', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Foot note setting
    $name = 'theme_goodmood/footnote';
    $title = get_string('footnote','theme_goodmood');
    $description = get_string('footnotedesc', 'theme_goodmood');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_goodmood/customcss';
    $title = get_string('customcss','theme_goodmood');
    $description = get_string('customcssdesc', 'theme_goodmood');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);
}
