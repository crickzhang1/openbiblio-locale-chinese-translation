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
#*  Translation text for page index.php
#****************************************************************************
$trans["opac_Header"]        = "\$text='联机公共检索目录（OPAC）';";
$trans["opac_WelcomeMsg"]    = "\$text=
  '欢迎来到本馆的联机公共检索目录。通过搜索目录可以查看本馆馆藏著作信息。';";
$trans["opac_SearchTitle"]   = "\$text='通过短语搜索著作：';";
$trans["opac_Keyword"]       = "\$text='关键词';";
$trans["opac_Title"]         = "\$text='书名';";
$trans["opac_Author"]        = "\$text='作者';";
$trans["opac_Subject"]       = "\$text='主题';";
$trans["opac_Callno"]        = "\$text='编目号码';";
$trans["opac_Search"]        = "\$text='搜索';";

?>
