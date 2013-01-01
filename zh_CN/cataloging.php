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
$trans["catalogSubmit"]            = "\$text = '提交';";
$trans["catalogCancel"]            = "\$text = '取消';";
$trans["catalogRefresh"]           = "\$text = '刷新';";
$trans["catalogDelete"]            = "\$text = '删除';";
$trans["catalogFootnote"]          = "\$text = '带有 %symbol% 的字段是必填项。';";
$trans["AnswerYes"]                = "\$text = '是';";
$trans["AnswerNo"]                 = "\$text = '否';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '编目';";
$trans["indexBarcodeHdr"]          = "\$text = '按条形码搜索著作';";
$trans["indexBarcodeField"]        = "\$text = '条形码';";
$trans["indexSearchHdr"]           = "\$text = '按查找短语搜索著作';";
$trans["indexKeyword"]             = "\$text = '关键词';";
$trans["indexTitle"]               = "\$text = '书名';";
$trans["indexAuthor"]              = "\$text = '作者';";
$trans["indexSubject"]             = "\$text = '主题';";
$trans["indexButton"]              = "\$text = '搜索';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = '著作';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = '馆藏类型';";
$trans["biblioFieldsCollection"]   = "\$text = '作品集';";
$trans["biblioFieldsCallNmbr"]     = "\$text = '编目号码';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc字段';";
$trans["biblioFieldsOpacFlg"]      = "\$text = '在OPAC中显示';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = '添加新';";
$trans["biblioNewSuccess"]         = "\$text = '下列新著作已创建。从左侧导航区选择“新加副本”或下面副本信息处“添加新副本”来添加著作副本。';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = '著作成功更新。';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = '添加新副本';";
$trans["biblioCopyNewBarcode"]     = "\$text = '条形码';";
$trans["biblioCopyNewDesc"]        = "\$text = '说明';";
$trans["biblioCopyNewAuto"]        = "\$text = '自动生成';";
$trans["biblioCopyNewValidBarco"]  = "\$text = '可以打印';";
$trans["biblioCopyEditFormLabel"]  = "\$text = '编辑副本';";
$trans["biblioCopyEditFormStatus"] = "\$text = '状态';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = '成功创建副本。';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = '成功更新副本。';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = '无法删除副本。副本删除前必须已还回。';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = '确认项删除条形码为 %barcodeNmbr% 的副本？这同时会删除此副本的所有状态变更历史。';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = '条形码为 %barcode% 的副本已成功删除。';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = '新加MARC字段';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC字段信息';";
$trans["biblioMarcListTbleCol1"]   = "\$text = '功能';";
$trans["biblioMarcListTbleCol2"]   = "\$text = '标签';";
$trans["biblioMarcListTbleCol3"]   = "\$text = '标签说明';";
$trans["biblioMarcListTbleCol4"]   = "\$text = '指标1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = '指标2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = '子字段';";
$trans["biblioMarcListTbleCol7"]   = "\$text = '子字段说明';";
$trans["biblioMarcListTbleCol8"]   = "\$text = '字段数据';";
$trans["biblioMarcListNoRows"]     = "\$text = '无法找到MARC字段。';";
$trans["biblioMarcListEdit"]       = "\$text = '编辑';";
$trans["biblioMarcListDel"]        = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC字段选择器';";
$trans["usmarcSelectInst"]         = "\$text = '选择一种字段类型';";
$trans["usmarcSelectNoTags"]       = "\$text = '无法找到标签。';";
$trans["usmarcSelectUse"]          = "\$text = '使用';";
$trans["usmarcCloseWindow"]        = "\$text = '关闭窗口';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = '新加Marc字段';";
$trans["biblioMarcNewFormTag"]     = "\$text = '标签';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = '子字段';";
$trans["biblioMarcNewFormData"]    = "\$text = '字段数据';";
$trans["biblioMarcNewFormInd1"]    = "\$text = '指标1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = '指标2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = '选择';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc字段成功添加。';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = '编辑Marc字段';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc字段成功更新。';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = '确认想删除标签为 %tag% 、子字段为 %subfieldCd% 的字段？';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc字段成功删除。';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = '此著作有 %copyCount% 个副本和 %holdCount% 个借阅请求。在删除此著作前请删除这些副本和借阅请求信息。';";
$trans["biblioDelConfirmReturn"]   = "\$text = '返回著作信息';";
$trans["biblioDelConfirmMsg"]      = "\$text = '确认想删除书名为 %title% 的著作？';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = '著作：%title% ，已删除。';";
$trans["biblioDelReturn"]          = "\$text = '返回著作搜索';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = '著作借阅请求：';";
$trans["biblioHoldListNoHolds"]    = "\$text = '当前无著作副本在架。';";
$trans["biblioHoldListHdr1"]       = "\$text = '功能';";
$trans["biblioHoldListHdr2"]       = "\$text = '副本';";
$trans["biblioHoldListHdr3"]       = "\$text = '著作已保留给借阅请求';";
$trans["biblioHoldListHdr4"]       = "\$text = '会员';";
$trans["biblioHoldListHdr5"]       = "\$text = '状态';";
$trans["biblioHoldListHdr6"]       = "\$text = '还书日期';";
$trans["biblioHoldListdel"]        = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = '您无权使用编目功能。';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = '测试加载';";
$trans["MarcUploadTestTrue"]        = "\$text = '真';";
$trans["MarcUploadTestFalse"]       = "\$text = '假';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc输入文件';";
$trans["MarcUploadRecordsUploaded"] = "\$text = '记录已上传';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC记录';";
$trans["MarcUploadTag"]             = "\$text = '标签';";
$trans["MarcUploadSubfield"]        = "\$text = '子字段';";
$trans["MarcUploadData"]            = "\$text = '数据';";
$trans["MarcUploadRawData"]         = "\$text = '原始数据：';";
$trans["UploadFile"]                = "\$text = '上传文件';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = '架构：OpenBiblio';";
$trans["Copyright"]                   = "\$text = '版权 &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = '遵循';";
$trans["GNU"]                 = "\$text = 'GNU通用公共许可证（GPL）';";

$trans["catalogResults"]                 = "\$text = '搜索结果';";



?>
