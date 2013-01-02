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
$trans["circCancel"]              = "\$text = '取消';";
$trans["circDelete"]              = "\$text = '删除';";
$trans["circLogout"]              = "\$text = '退出';";
$trans["circAdd"]                 = "\$text = '添加';";
$trans["mbrDupBarcode"]           = "\$text = '条形码 %barcode% 已被使用。';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='流通';";
$trans["indexCardHdr"]            = "\$text='按卡号搜索会员：';";
$trans["indexCard"]               = "\$text='卡号：';";
$trans["indexSearch"]             = "\$text='搜索';";
$trans["indexNameHdr"]            = "\$text='按姓搜索会员：';";
$trans["indexName"]               = "\$text='姓的起始：';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='邮寄地址：';";
$trans["mbrNewForm"]              = "\$text='新加';";
$trans["mbrEditForm"]             = "\$text='编辑';";
$trans["mbrFldsHeader"]           = "\$text='会员：';";
$trans["mbrFldsCardNmbr"]         = "\$text='卡号：';";
$trans["mbrFldsLastName"]         = "\$text='姓：';";
$trans["mbrFldsFirstName"]        = "\$text='名字：';";
$trans["mbrFldsAddr1"]            = "\$text='地址行1：';";
$trans["mbrFldsAddr2"]            = "\$text='地址行2：';";
$trans["mbrFldsCity"]             = "\$text='城市：';";
$trans["mbrFldsStateZip"]         = "\$text='省，邮编：';";
$trans["mbrFldsHomePhone"]        = "\$text='家庭电话：';";
$trans["mbrFldsWorkPhone"]        = "\$text='工作电话：';";
$trans["mbrFldsEmail"]            = "\$text='电子邮箱地址：';";
$trans["mbrFldsClassify"]         = "\$text='会员类别：';";
$trans["mbrFldsGrade"]            = "\$text='年级：';";
$trans["mbrFldsTeacher"]          = "\$text='教师：';";
$trans["mbrFldsSubmit"]           = "\$text='提交';";
$trans["mbrFldsCancel"]           = "\$text='取消';";
$trans["mbrsearchResult"]         = "\$text='结果页面： ';";
$trans["mbrsearchprev"]           = "\$text='前一页';";
$trans["mbrsearchnext"]           = "\$text='下一页';";
$trans["mbrsearchNoResults"]      = "\$text='无法找到结果。';";
$trans["mbrsearchFoundResults"]   = "\$text='结果。';";
$trans["mbrsearchSearchResults"]  = "\$text='搜索结果：';";
$trans["mbrsearchCardNumber"]     = "\$text='卡号：';";
$trans["mbrsearchClassification"] = "\$text='会员类别：';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='会员已成功添加。';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='会员已成功更新。';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='会员信息：';";
$trans["mbrViewName"]             = "\$text='名字：';";
$trans["mbrViewAddr"]             = "\$text='地址：';";
$trans["mbrViewCardNmbr"]         = "\$text='卡号：';";
$trans["mbrViewClassify"]         = "\$text='会员类型：';";
$trans["mbrViewPhone"]            = "\$text='电话：';";
$trans["mbrViewPhoneHome"]        = "\$text='家庭：';";
$trans["mbrViewPhoneWork"]        = "\$text='工作：';";
$trans["mbrViewEmail"]            = "\$text='电子邮箱地址：';";
$trans["mbrViewGrade"]            = "\$text='学校年级：';";
$trans["mbrViewTeacher"]          = "\$text='学校教师：';";
$trans["mbrViewHead2"]            = "\$text='借书状态：';";
$trans["mbrViewStatColHdr1"]      = "\$text='馆藏类型';";
$trans["mbrViewStatColHdr2"]      = "\$text='数量';";
$trans["mbrViewStatColHdr3"]      = "\$text='数量限制';";
$trans["mbrViewStatColHdr4"]      = "\$text='借出';";
$trans["mbrViewStatColHdr5"]      = "\$text='续借';";
$trans["mbrViewHead3"]            = "\$text='借出著作：';";
$trans["mbrViewBarcode"]          = "\$text='条形码：';";
$trans["mbrViewCheckOut"]         = "\$text='借出';";
$trans["mbrViewHead4"]            = "\$text='当前借出著作：';";
$trans["mbrViewOutHdr1"]          = "\$text='借出';";
$trans["mbrViewOutHdr2"]          = "\$text='馆藏类型';";
$trans["mbrViewOutHdr3"]          = "\$text='条形码';";
$trans["mbrViewOutHdr4"]          = "\$text='书名';";
$trans["mbrViewOutHdr5"]          = "\$text='作者';";
$trans["mbrViewOutHdr6"]          = "\$text='还书日期';";
$trans["mbrViewOutHdr7"]          = "\$text='超期天数';";
$trans["mbrViewOutHdr8"]          = "\$text='续借';";
$trans["mbrViewOutHdr9"]          = "\$text='time/s';";
$trans["mbrViewNoCheckouts"]      = "\$text='当前无著作借出。';";
$trans["mbrViewHead5"]            = "\$text='提交著作借阅请求：';";
$trans["mbrViewHead6"]            = "\$text='借阅请求已保留著作：';";
$trans["mbrViewPlaceHold"]        = "\$text='提交著作借阅请求';";
$trans["mbrViewHoldHdr1"]         = "\$text='功能';";
$trans["mbrViewHoldHdr2"]         = "\$text='已提交著作借阅请求';";
$trans["mbrViewHoldHdr3"]         = "\$text='馆藏类型';";
$trans["mbrViewHoldHdr4"]         = "\$text='条形码';";
$trans["mbrViewHoldHdr5"]         = "\$text='书名';";
$trans["mbrViewHoldHdr6"]         = "\$text='作者';";
$trans["mbrViewHoldHdr7"]         = "\$text='状态';";
$trans["mbrViewHoldHdr8"]         = "\$text='还书日期';";
$trans["mbrViewNoHolds"]          = "\$text='当前没有已保留借阅请求著作。';";
$trans["mbrViewBalMsg"]           = "\$text='注意：会员帐目未结平情况：%bal%。';";
$trans["mbrPrintCheckouts"]	  = "\$text='打印借出情况';";
$trans["mbrViewDel"]              = "\$text='删除';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='会员借书前必须结清未结平帐目。';";
$trans["checkoutErr1"]            = "\$text='条形码必须是全由字母和数字构成。';";
$trans["checkoutErr2"]            = "\$text='没有找到此条形码著作。';";
$trans["checkoutErr3"]            = "\$text='条形码为 %barcode% 的著作已借出。';";
$trans["checkoutErr4"]            = "\$text='条形码为 %barcode% 的著作不可借。';";
$trans["checkoutErr5"]            = "\$text='条形码为 %barcode% 的著作已保留给其他会员。';";
$trans["checkoutErr6"]            = "\$text='会员已达到指定馆藏著作类型借书数量上限。';";
$trans["checkoutErr7"]            = "\$text='条形码为 %barcode% 的著作已经达到会员续借上限。';";
$trans["checkoutErr8"]            = "\$text='条形码为 %barcode% 的著作已超期，无法续借。';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='条形码必须是全由字母和数字构成。';";
$trans["shelvingCartErr2"]        = "\$text='没有找到符合要求条形码的著作。';";
$trans["shelvingCartTrans"]       = "\$text='超期费用（条形码=%barcode%）';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='还书：';";
$trans["checkinFormBarcode"]      = "\$text='条形码：';";
$trans["checkinFormShelveButton"] = "\$text='加入书架车';";
$trans["checkinFormCheckinLink1"] = "\$text='还回已选择著作';";
$trans["checkinFormCheckinLink2"] = "\$text='还回所有著作';";
$trans["checkinFormHdr2"]         = "\$text='当前书架车列表：';";
$trans["checkinFormColHdr1"]      = "\$text='日期已扫描';";
$trans["checkinFormColHdr2"]      = "\$text='条形码';";
$trans["checkinFormColHdr3"]      = "\$text='书名';";
$trans["checkinFormColHdr4"]      = "\$text='作者';";
$trans["checkinFormEmptyCart"]    = "\$text='当前没有著作处于书架车状态。';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='没有选择著作。';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='著作已保留给借阅请求！';";
$trans["holdMessageMsg1"]         = "\$text='您正要还回的条形码为 %barcode% 的著作有一个或多个借阅请求。<b>请此有借阅请求的著作归档，不要放入书架车。</b> 此著作的状态码已设置为”保留给借阅请求“。';";
$trans["holdMessageMsg2"]         = "\$text='返回还书。';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='条形码必须由数字构成。';";
$trans["placeHoldErr2"]           = "\$text='条形码不存在。';";
$trans["placeHoldErr3"]           = "\$text='此会员已经借出这一著作，不会保留借阅请求。';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = '会员 %name% 有 %checkoutCount% 个借出和 %holdCount% 借阅请求。删除此会员前需要还回所有所有借出馆藏著作并删除所有借阅请求。';";
$trans["mbrDelConfirmReturn"]     = "\$text = '返回会员信息';";
$trans["mbrDelConfirmMsg"]        = "\$text = '确认想删除此会员  %name%？这同时会删除此会员的所有借出历史。';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='会员 %name% 已删除。';";
$trans["mbrDelReturn"]            = "\$text='返回会员搜索';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='会员借出历史：';";
$trans["mbrHistoryNoHist"]        = "\$text='没有借出历史。';";
$trans["mbrHistoryHdr1"]          = "\$text='条形码';";
$trans["mbrHistoryHdr2"]          = "\$text='书名';";
$trans["mbrHistoryHdr3"]          = "\$text='作者';";
$trans["mbrHistoryHdr4"]          = "\$text='新状态';";
$trans["mbrHistoryHdr5"]          = "\$text='状态变更日期';";
$trans["mbrHistoryHdr6"]          = "\$text='还书日期';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='添加一个交易事项：';";
$trans["mbrAccountTransTyp"]      = "\$text='交易事项类型：';";
$trans["mbrAccountAmount"]        = "\$text='数量：';";
$trans["mbrAccountDesc"]          = "\$text='说明：';";
$trans["mbrAccountHead1"]         = "\$text='会员帐目事项：';";
$trans["mbrAccountNoTrans"]       = "\$text='没有交易事项。';";
$trans["mbrAccountOpenBal"]       = "\$text='期初余额';";
$trans["mbrAccountDel"]           = "\$text='删除';";
$trans["mbrAccountHdr1"]          = "\$text='功能';";
$trans["mbrAccountHdr2"]          = "\$text='日期';";
$trans["mbrAccountHdr3"]          = "\$text='交易事项类型';";
$trans["mbrAccountHdr4"]          = "\$text='说明';";
$trans["mbrAccountHdr5"]          = "\$text='数量';";
$trans["mbrAccountHdr6"]          = "\$text='余额';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='交易事项成功完成。';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='确认想删除此交易事项？';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='交易事项已成功删除。';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='会员 %mbrName% 借出情况';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='但前日期：';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='会员：';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='卡号：';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='会员类型：';";
$trans["mbrPrintCloseWindow"]     = "\$text='关闭窗口';";

?>
