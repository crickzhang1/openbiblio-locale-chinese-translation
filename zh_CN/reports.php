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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = '取消';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '报告';";
$trans["indexDesc"]                = "\$text = '使用左侧导航区的报告或标识签列表生成报告或标识签。';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = '报告列表';";
$trans["reportListDesc"]           = "\$text = '从下列链接中选择一个来生成报告。';";
$trans["reportListXmlErr"]         = "\$text = '解析报告定义XML时发生错误。';";
$trans["reportListCannotRead"]     = "\$text = '无法读入标识签文件：%fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = '标识签列表';";
$trans["labelListDesc"]            = "\$text = '从下列链接中选择一个来生成PDF格式的标识签。';";
$trans["displayLabelsXmlErr"]      = "\$text = '解析标识签定义XML时发生错误。错误 = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = '信件列表';";
$trans["letterListDesc"]           = "\$text = '从下列链接中选择一个来生成PDF格式的信件。';";
$trans["displayLettersXmlErr"]      = "\$text = '解析信件定义XML时发生错误。错误 = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = '报告搜索标准（可选）';";
$trans["reportCriteriaHead2"]      = "\$text = '报告排序顺序（可选）';";
$trans["reportCriteriaHead3"]      = "\$text = '报告输出类型';";
$trans["reportCriteriaCrit1"]      = "\$text = '标准1：';";
$trans["reportCriteriaCrit2"]      = "\$text = '标准2：';";
$trans["reportCriteriaCrit3"]      = "\$text = '标准3：';";
$trans["reportCriteriaCrit4"]      = "\$text = '标准4：';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'not =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt or =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt or =';";
$trans["reportCriteriaBT"]         = "\$text = 'between';";
$trans["reportCriteriaAnd"]        = "\$text = 'and';";
$trans["reportCriteriaRunReport"]  = "\$text = '生成报告';";
$trans["reportCriteriaSortCrit1"]  = "\$text = '排序1：';";
$trans["reportCriteriaSortCrit2"]  = "\$text = '排序2：';";
$trans["reportCriteriaSortCrit3"]  = "\$text = '排序3：';";
$trans["reportCriteriaAscending"]  = "\$text = '升序';";
$trans["reportCriteriaDescending"] = "\$text = '降序';";
$trans["reportCriteriaStartOnLabel"] = "\$text = '开始打印标识签：';";
$trans["reportCriteriaOutput"]     = "\$text = '输出类型：';";
$trans["reportCriteriaOutputHTML"] = "\$text = '网页（HTML）';";
$trans["reportCriteriaOutputCSV"]  = "\$text = '逗号分割值文件（CSV）';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = '报告选择标准';";
$trans["runReportReturnLink2"]     = "\$text = '报告列表';";
$trans["runReportTotal"]           = "\$text = '总行数：';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = '字段必须由数字构成。';";
$trans["displayLabelsXmlErr"]      = "\$text = '解析标识签定义XML时发生错误。错误 = ';";
$trans["displayLabelsCannotRead"]  = "\$text = '无法读入标识签文件：%fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = '您无权使用报告功能区。';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = '借阅请求包含会员联系信息';";
$trans["reportCheckouts"]          = "\$text = '著作借出列表';";
$trans["Over Due Letters"]           = "\$text = '超期信件';";
$trans["reportLabels"]             = "\$text = '标识签打印查询（用于标识签）';";
$trans["popularBiblios"]           = "\$text = '最流行著作';";
$trans["overdueList"]              = "\$text = '超期会员列表';";
$trans["balanceDueList"]           = "\$text = '金额不足的会员列表';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = '多标识签示例';";
$trans["labelsSimple"]             = "\$text = '简单标识签示例';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = '著作ID';";
$trans["biblio.create_dt"]         = "\$text = '添加日期';";
$trans["biblio.last_change_dt"]    = "\$text = '最后变更';";
$trans["biblio.material_cd"]       = "\$text = '馆藏Cd';";
$trans["biblio.collection_cd"]     = "\$text = '作品集';";
$trans["biblio.call_nmbr1"]        = "\$text = '编目号码1';";
$trans["biblio.call_nmbr2"]        = "\$text = '编目号码2';";
$trans["biblio.call_nmbr3"]        = "\$text = '编目号码3';";
$trans["biblio.title_remainder"]   = "\$text = '副书名';";
$trans["biblio.responsibility_stmt"] = "\$text = '责任声明';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC标志';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = '条形码';";
$trans["biblio.title"]             = "\$text = '书名';";
$trans["biblio.author"]            = "\$text = '作者';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = '状态启始日期';";
$trans["biblio_copy.due_back_dt"]       = "\$text = '还书日期';";
$trans["member.mbrid"]             = "\$text = '会员ID';";
$trans["member.barcode_nmbr"]      = "\$text = '会员条形码';";
$trans["member.last_name"]         = "\$text = '姓';";
$trans["member.first_name"]        = "\$text = '名';";
$trans["member.address"]          = "\$text = '地址';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = '借阅请求启始日期';";
$trans["member.home_phone"]        = "\$text = '家庭电话';";
$trans["member.work_phone"]        = "\$text = '工作电话';";
$trans["member.email"]             = "\$text = '电子邮箱';";
$trans["biblio_status_dm.description"] = "\$text = '状态';";
$trans["settings.library_name"]    = "\$text = '图书馆名称';";
$trans["settings.library_hours"]   = "\$text = ' 图书馆开馆时间';";
$trans["settings.library_phone"]   = "\$text = '图书馆电话';";
$trans["days_late"]                = "\$text = '超期天数';";
$trans["title"]                    = "\$text = '书名';";
$trans["author"]                   = "\$text = '作者';";
$trans["due_back_dt"]              = "\$text = '还书日期';";
$trans["checkoutCount"]            = "\$text = '借书数量';";

?>
