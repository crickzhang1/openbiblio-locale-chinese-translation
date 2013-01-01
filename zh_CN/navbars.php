<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = '登录';";
$trans["logout"]                   = "\$text = '退出';";
$trans["help"]                     = "\$text = '帮助';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = '首页';";
$trans["homeLicenseLink"]          = "\$text = '许可';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = '管理一览';";
$trans["adminStaff"]               = "\$text = '工作人员管理';";
$trans["adminSettings"]            = "\$text = '图书馆设置';";
$trans["adminMaterialTypes"]       = "\$text = '馆藏类型';";
$trans["adminCollections"]         = "\$text = '作品集';";
$trans["adminThemes"]              = "\$text = '主题';";
$trans["adminTranslation"]         = "\$text = '翻译';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = '编目一览';";
$trans["catalogSearch1"]           = "\$text = '著作搜索';";
$trans["catalogSearch2"]           = "\$text = '著作搜索';";
$trans["catalogResults"]           = "\$text = '搜索结果';";
$trans["catalogBibInfo"]           = "\$text = '著作信息';";
$trans["catalogBibEdit"]           = "\$text = '编辑-基本信息';";
$trans["catalogBibEditMarc"]       = "\$text = '编辑-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = '新增MARC字段';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = '新增MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = '编辑MARC字段';";
$trans["catalogCopyNew"]           = "\$text = '新增副本';";
$trans["catalogCopyEdit"]          = "\$text = '编辑副本';";
$trans["catalogHolds"]             = "\$text = '借阅请求';";
$trans["catalogDelete"]            = "\$text = '删除';";
$trans["catalogBibNewLike"]        = "\$text = '添加喜欢作品';";
$trans["catalogBibNew"]            = "\$text = '添加著作';";
$trans["Upload Marc Data"]         = "\$text = '上传Marc数据';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = '报告一览';";
$trans["reportsReportListLink"]    = "\$text = '报告列表';";
$trans["reportsLabelsLink"]        = "\$text = '打印标识签';";
$trans["reportsLettersLink"]        = "\$text = '打印Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = '搜索';";
$trans["catalogSearch2"]           = "\$text = '著作搜索';";
$trans["catalogResults"]           = "\$text = '搜索结果';";
$trans["catalogBibInfo"]           = "\$text = '著作信息';";

#Added

$trans["memberInfo"]="\$text = '会员信息';";
$trans["memberSearch"]="\$text = '会员搜索';";
$trans["editInfo"]="\$text = '编辑信息';";
$trans["checkoutHistory"]= "\$text = '借出历史';";
$trans["account"]="\$text = '账目';";
$trans["checkIn"]="\$text = '还书';";
$trans["memberSearch"]= "\$text = '会员搜索';";
$trans["newMember"]= "\$text = '添加会员';";
//$trans["account"]        	= "\$text = '帐目';";
?>
