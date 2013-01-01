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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = '取消';";
$trans["sharedDelete"]             = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = '著作信息';";
$trans["biblioViewMaterialType"]   = "\$text = '馆藏类型';";
$trans["biblioViewCollection"]     = "\$text = '作品集';";
$trans["biblioViewCallNmbr"]       = "\$text = '编目号码';";
$trans["biblioViewTble2Hdr"]       = "\$text = '著作副本信息';";
$trans["biblioViewTble2Col1"]      = "\$text = '条形码 #';";
$trans["biblioViewTble2Col2"]      = "\$text = '说明';";
$trans["biblioViewTble2Col3"]      = "\$text = '状态';";
$trans["biblioViewTble2Col4"]      = "\$text = '当前状态时间';";
$trans["biblioViewTble2Col5"]      = "\$text = '还书日期';";
$trans["biblioViewTble2ColFunc"]   = "\$text = '功能';";
$trans["biblioViewTble2Coldel"]    = "\$text = '删除';";
$trans["biblioViewTble2Coledit"]   = "\$text = '编辑';";
$trans["biblioViewTble3Hdr"]       = "\$text = '附加著作信息';";
$trans["biblioViewNoAddInfo"]      = "\$text = '无附加著作信息。';";
$trans["biblioViewNoCopies"]       = "\$text = '没有创建副本。';";
$trans["biblioViewOpacFlg"]        = "\$text = '在OPAC中显示';";
$trans["biblioViewNewCopy"]        = "\$text = '添加新副本';";
$trans["biblioViewNeweCopy"]       = "\$text = '添加新电子副本';";
$trans["biblioViewYes"]            = "\$text = '是';";
$trans["biblioViewNo"]             = "\$text = '否';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = '没有找到结果。';";
$trans["biblioSearchResults"]      = "\$text = '搜索结果';";
$trans["biblioSearchResultPages"]  = "\$text = '结果页面';";
$trans["biblioSearchPrev"]         = "\$text = '前一页';";
$trans["biblioSearchNext"]         = "\$text = '下一页';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '找到了 %items% 个结果';
                                      } else {
                                        \$text = '找到了 %items% 个结果';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = '按作者排序';";
$trans["biblioSearchtitle"]        = "\$text = '按书名排序';";
$trans["biblioSearchSortByAuthor"] = "\$text = '按作者排序';";
$trans["biblioSearchSortByTitle"]  = "\$text = '按书名排序';";
$trans["biblioSearchTitle"]        = "\$text = '书名';";
$trans["biblioSearchAuthor"]       = "\$text = '作者';";
$trans["biblioSearchMaterial"]     = "\$text = '馆藏类型';";
$trans["biblioSearchCollection"]   = "\$text = '作品集';";
$trans["biblioSearchCall"]         = "\$text = '编目号码';";
$trans["biblioSearchCopyBCode"]    = "\$text = '副本条形码';";
$trans["biblioSearchCopyStatus"]   = "\$text = '状态';";
$trans["biblioSearchNoCopies"]     = "\$text = '无副本。';";
$trans["biblioSearchHold"]         = "\$text = '借阅请求';";
$trans["biblioSearchOutIn"]        = "\$text = '借出/还书';";
$trans["biblioSearchDetail"]       = "\$text = '显示详细著作信息';";
$trans["biblioSearchBCode2Chk"]    = "\$text = '输入条形码进行 借出/还书';";
$trans["biblioSearchBCode2Hold"]   = "\$text = '输入条形码进行 借阅请求';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = '工作人员登录';";
$trans["loginFormUsername"]        = "\$text = '用户名';";
$trans["loginFormPassword"]        = "\$text = '密码';";
$trans["loginFormLogin"]           = "\$text = '登录';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = '确认想删除此借阅请求？';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='借阅请求成功删除。';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='OpenBiblio帮助';";
$trans["helpHeaderCloseWin"]       = "\$text='关闭窗口';";
$trans["helpHeaderContents"]       = "\$text='内容';";
$trans["helpHeaderPrint"]          = "\$text='打印';";

$trans["catalogResults"]           = "\$text='搜索结果';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='今日是：';";
$trans["headerDateFormat"]         = "\$text='M d, Y';";
$trans["headerLibraryHours"]       = "\$text='图书馆开馆时间：';";
$trans["headerLibraryPhone"]       = "\$text='图书馆联系电话：';";
$trans["headerHome"]               = "\$text='首页';";
$trans["headerCirculation"]        = "\$text='流通';";
$trans["headerCataloging"]         = "\$text='编目';";
$trans["headerAdmin"]              = "\$text='管理';";
$trans["headerReports"]            = "\$text='报告';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='图书馆首页';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='帮助';";
$trans["footerPoweredBy"]          = "\$text='架构：OpenBiblio';";
$trans["footerDatabaseVersion"]    = "\$text='数据库';";
$trans["footerCopyright"]          = "\$text='版权';";
$trans["footerUnderThe"]           = "\$text='遵循';";
$trans["footerGPL"]                = "\$text='GNU通用公共许可证（GPL）';";

?>
