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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = '需要有编目号码。';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = '需要有字段。';";
$trans["biblioFieldError2"]       = "\$text = '标签必须由数字构成。';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = '访问著作信息错误。';";
$trans["biblioQueryQueryErr2"]    = "\$text = '访问著作字段信息粗无。';";
$trans["biblioQueryInsertErr1"]   = "\$text = '插入新加著作信息错误。';";
$trans["biblioQueryInsertErr2"]   = "\$text = '插入新著作字段信息错误。';";
$trans["biblioQueryUpdateErr1"]   = "\$text = '更新著作信息错误。';";
$trans["biblioQueryUpdateErr2"]   = "\$text = '更新时清除著作字段信息错误。';";
$trans["biblioQueryDeleteErr"]    = "\$text = '删除著作信息错误。';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = '计算著作搜索结果错误。';";
$trans["biblioSearchQueryErr2"]   = "\$text = '搜索著作信息错误。';";
$trans["biblioSearchQueryErr3"]   = "\$text = '读取著作信息错误。';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = '需要有条形码。';";
$trans["biblioCopyError2"]        = "\$text = '条形码中含有无效字符。';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = '检查重复条形码错误。';";
$trans["biblioCopyQueryErr2"]     = "\$text = '条形码 %barcodeNmbr% 已被使用。';";
$trans["biblioCopyQueryErr3"]     = "\$text = '插入新著作副本信息错误。';";
$trans["biblioCopyQueryErr4"]     = "\$text = '访问著作副本信息错误。';";
$trans["biblioCopyQueryErr5"]     = "\$text = '更新著作副本信息错误。';";
$trans["biblioCopyQueryErr6"]     = "\$text = '删除著作副本信息错误。';";
$trans["biblioCopyQueryErr7"]     = "\$text = '访问著作信息以获取作品集码错误。';";
$trans["biblioCopyQueryErr8"]     = "\$text = '访问作品集信息以检查还书天数错误。';";
$trans["biblioCopyQueryErr9"]     = "\$text = '检查以下著作副本时发生错误：';";
$trans["biblioCopyQueryErr10"]    = "\$text = '检查借出上限时发生错误';";
$trans["biblioCopyQueryErr11"]    = "\$text = '获取最高副本ID错误。';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = '读取著作字段错误。';";
$trans["biblioFieldQueryErr2"]    = "\$text = '读取著作字段错误。';";
$trans["biblioFieldQueryInsertErr"] = "\$text = '插入新著作字段信息错误。';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = '更新著作字段错误。';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = '删除著作字段错误。';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = '访问MARC块数据错误。';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = '访问MARC标签数据错误。';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = '访问MARC子字段数据错误。';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = '按著作ID访问借阅请求数据错误。';";
$trans["biblioHoldQueryErr2"]     = "\$text = '按会员ID访问借阅请求数据错误。';";
$trans["biblioHoldQueryErr3"]     = "\$text = '获取已保留给借阅请求的著作ID和副本ID错误。';";
$trans["biblioHoldQueryErr4"]     = "\$text = '插入借阅请求数据错误。';";
$trans["biblioHoldQueryErr5"]     = "\$text = '删除借阅请求数据错误。';";
$trans["biblioHoldQueryErr6"]     = "\$text = '获取副本的第一个借阅请求会员错误。';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = '运行报告错误。';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = '数字列中出现非数字值是无效的。';";
$trans["reportCriteriaDateTimeErr"] = "\$text = '无效的日期时间格式。';";
$trans["reportCriteriaDateErr"]   = "\$text = '无效的日期格式。';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = '标识签定义XML中指定的字体类型无效。有效字体类型包括：Courier，Helvetica，和Times-Roman。';";
$trans["labelFormatFontSizeErr"]  = "\$text = '标识签定义XML中指定的字号无效。字号值必须是数字。';";
$trans["labelFormatFontSizeErr2"] = "\$text = '标识签定义XML中指定的字号无效。字号值必须大于0。';";
$trans["labelFormatLMarginErr"]   = "\$text = '标识签定义XML中指定的左边距无效。左边距值必须是数字。';";
$trans["labelFormatLMarginErr2"]  = "\$text = '标识签定义XML中指定的左边距无效。左边距值必须大于0。';";
$trans["labelFormatRMarginErr"]   = "\$text = '标识签定义XML中指定的右边距无效。右边距值必须是数字。';";
$trans["labelFormatRMarginErr2"]  = "\$text = '标识签定义XML中指定的右边距无效。右边距值必须大于0。';";
$trans["labelFormatTMarginErr"]   = "\$text = '标识签定义XML中指定的上边距无效。上边距值必须是数字。';";
$trans["labelFormatTMarginErr2"]  = "\$text = '标识签定义XML中指定的上边距无效。上边距值必须大于0。';";
$trans["labelFormatBMarginErr"]   = "\$text = '标识签定义XML中指定的下边距无效。下边距值必须是数字。';";
$trans["labelFormatBMarginErr2"]  = "\$text = '标识签定义XML中指定的下边距无效。下边距值必须大于0。';";
$trans["labelFormatColErr"]       = "\$text = '标识签定义XML中指定的列无效。列值必须是数字。';";
$trans["labelFormatColErr2"]      = "\$text = '标识签定义XML中指定的列无效。列值必须大于0。';";
$trans["labelFormatWidthErr"]     = "\$text = '标识签定义XML中指定的宽度无效。宽度值必须是数字。';";
$trans["labelFormatWidthErr2"]    = "\$text = '标识签定义XML中指定的宽度无效。宽度值必须大于0。';";
$trans["labelFormatHeightErr"]    = "\$text = '标识签定义XML中指定的高度无效。高度值必须是数字。';";
$trans["labelFormatHeightErr2"]   = "\$text = '标识签定义XML中指定的高度无效。高度值必须大于0。';";
$trans["labelFormatNoLabelsErr"]  = "\$text = '标识签定义XML中指定的标识签行无效。';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = '按著作ID获取著作状态历史错误。';";
$trans["biblioStatusHistQueryErr2"] = "\$text = '按会员ID获取著作状态历史错误';";
$trans["biblioStatusHistQueryErr3"] = "\$text = '插入著作状态历史错误';";
$trans["biblioStatusHistQueryErr4"] = "\$text = '按副本ID删除著作状态历史错误';";
$trans["biblioStatusHistQueryErr5"] = "\$text = '按会员ID删除著作状态历史错误';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = '需要有数量。';";
$trans["memberAccountTransError2"]  = "\$text = '数量必须由数字构成。';";
$trans["memberAccountTransError3"]  = "\$text = '需要有说明。';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = '访问会员帐目信息错误。';";
$trans["memberAccountQueryErr2"]    = "\$text = '插入会员帐目信息错误。';";
$trans["memberAccountQueryErr3"]    = "\$text = '删除会员帐目信息错误。';";

?>
