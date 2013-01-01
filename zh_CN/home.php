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
$trans["indexHeading"]       = "\$text='欢迎来到OpenBiblio图书馆';";
$trans["indexIntro"]         = "\$text=
  '利用每页顶部的导航标签访问图书馆以下各功能区。';";
$trans["indexTab"]           = "\$text='导航标签';";
$trans["indexDesc"]          = "\$text='说明';";
$trans["indexCirc"]          = "\$text='流通';";
$trans["indexCircDesc1"]     = "\$text='利用此标签管理会员记录。';";
$trans["indexCircDesc2"]     = "\$text='会员管理（添加、搜索、编辑、删除）';";
$trans["indexCircDesc3"]     = "\$text='会员书目借阅、当前借阅状态、帐目和借阅历史）';";
$trans["indexCircDesc4"]     = "\$text='还书和书架车列表';";
//$trans["indexCircDesc5"]     = "\$text='会员超期罚款';";
$trans["indexCat"]           = "\$text='编目';";
$trans["indexCatDesc1"]      = "\$text='利用此标签管理书目。';";
$trans["indexCatDesc2"]      = "\$text='著作管理（添加、搜索、编辑、删除）';";
//$trans["indexCatDesc3"]      = "\$text='从USMarc记录中导入书目';";
$trans["indexAdmin"]         = "\$text='管理';";
$trans["indexAdminDesc1"]    = "\$text='利用此标签管理工作人员信息和事务记录。';";
$trans["indexAdminDesc2"]    = "\$text='工作人员管理（添加、编辑、密码修改、删除）';";
$trans["indexAdminDesc3"]    = "\$text='常规图书馆设定';";
$trans["indexAdminDesc5"]    = "\$text='图书馆馆藏类型列表';";
$trans["indexAdminDesc4"]    = "\$text='图书馆作品集列表';";
$trans["indexAdminDesc6"]    = "\$text='图书馆主题编辑器';";
$trans["indexReports"]       = "\$text='报告';";
$trans["indexReportsDesc1"]  = "\$text='利用此标签生成关于图书馆各类数据统计的报告。';";
$trans["indexReportsDesc2"]  = "\$text='报告';";
$trans["indexReportsDesc3"]  = "\$text='标识签';";

?>
