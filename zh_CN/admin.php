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
$trans["adminSubmit"]              = "\$text = '提交';";
$trans["adminCancel"]              = "\$text = '取消';";
$trans["adminDelete"]              = "\$text = '删除';";
$trans["adminUpdate"]              = "\$text = '更新';";
$trans["adminFootnote"]            = "\$text = '注有 %symbol% 的字段是必填项。';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '管理';";
$trans["indexDesc"]                = "\$text = '利用左侧导航区的各功能项进行图书馆人事和行政记录的管理。';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = '返回作品集列表';";
$trans["adminCollections_delStart"]                 = "\$text = '作品集，';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = '，已经删除。';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = '确认想删除作品集，';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = '，已经更新。';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = '编辑作品集：';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = '说明:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = '还书时间（天）：';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = '超期费用（每天）：';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*注意：';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = '还书时间设置为0会使整个作品集都无法借出。';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = '添加新作品集';";
$trans["adminCollections_listCollections"]                 = "\$text = '作品集：';";
$trans["adminCollections_listFunction"]                 = "\$text = '功能';";
$trans["adminCollections_listDescription"]                 = "\$text = '说明';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = '还书时间<br>（天）';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = '超期费用<br>（每天）';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = '著作<br>数量';";
$trans["adminCollections_listEdit"]                 = "\$text = '编辑';";
$trans["adminCollections_listDel"]                 = "\$text = '删除';";
$trans["adminCollections_ListNote"]                 = "\$text = '*注意：';";
$trans["adminCollections_ListNoteText"]                 = "\$text = '“删除”功能只有当作品集中著作数量为0时可用。<br>如果想删除著作数量大于0的作品集，首先需要将此作品集中著作的类型修改为其它类型。';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = '，已经添加。';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = '添加新作品集：';";
$trans["adminCollections_new_formDescription"]                 = "\$text = '说明：';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = '还书时间（天）:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = '超期费用（每天）：';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*注意：';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = '还书时间设置为0会使整个作品集都无法借出。';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = '馆藏类型（Material type），';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = '，已经删除。';";
$trans["admin_materials_Return"]                 = "\$text = '返回馆藏类型列表';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = '确认想删除馆藏类型，';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = '编辑馆藏类型：';";
$trans["admin_materials_delDescription"]                 = "\$text = '说明：';";
$trans["admin_materials_delunlimited"]                 = "\$text = '（输入0表示不限）';";
$trans["admin_materials_delImagefile"]                 = "\$text = '图像文件：';";
$trans["admin_materials_delNote"]                 = "\$text = '*注意：';";
$trans["admin_materials_delNoteText"]                 = "\$text = '图像文件必须位于文件夹 openbiblio/images 内。';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = '，已经更新。';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = '添加新馆藏类型';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = '馆藏类型：';";
$trans["admin_materials_listFunction"]                 = "\$text = '功能';";
$trans["admin_materials_listDescription"]                 = "\$text = '说明';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limits';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = '借出';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = '续借';";
$trans["admin_materials_listImageFile"]                 = "\$text = '图像<br>文件';";
$trans["admin_materials_listBibcount"]                 = "\$text = '著作<br>数量';";
$trans["admin_materials_listEdit"]                 = "\$text = '编辑';";
$trans["admin_materials_listDel"]                 = "\$text = '删除';";
$trans["admin_materials_listNote"]                 = "\$text = '*注意：';";
$trans["admin_materials_listNoteText"]                 = "\$text = '“删除”功能只有当馆藏类型中著作数量为0时可用。如果想删除著作数量大于0的馆藏类型，首先需要将此类型中著作的类型修改为其它类型。';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = '，已经添加。';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = '图像文件必须位于文件夹 openbiblio/images 内。';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = '您没有被授权使用“管理”功能。';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = '数据已经更新。';";
$trans["admin_settingsEditsettings"]                 = "\$text = '编辑图书馆设置：';";
$trans["admin_settingsLibName"]                 = "\$text = '图书馆名称：';";
$trans["admin_settingsLibimageurl"]                 = "\$text = '图书馆图片URL：';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = '仅在页首x显示图片：';";
$trans["admin_settingsLibhours"]                 = "\$text = '图书馆开馆时间：';";
$trans["admin_settingsLibphone"]                 = "\$text = '图书馆电话：';";
$trans["admin_settingsLibURL"]                 = "\$text = '图书馆网址（URL）：';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = '登录会话超时：';";
$trans["admin_settingsMinutes"]                 = "\$text = '分钟';";
$trans["admin_settingsSearchResults"]                 = "\$text = '搜索结果：';";
$trans["admin_settingsItemsperpage"]                 = "\$text = '条每页';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = '多长时间后清除著作历史（Bibliography History）：';";
$trans["admin_settingsmonths"]                 = "\$text = '月';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = '罚款超期后禁止借阅：';";
$trans["admin_settingsLocale"]                 = "\$text = '界面语言:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Charset:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = '工作人员，';";
$trans["adminStaff_Return"]                 = "\$text = '返回工作人员列表';";
$trans["adminStaff_Yes"]                 = "\$text = '是';";
$trans["adminStaff_No"]                 = "\$text = '否';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = '，已经删除。';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = '确认想删除工作人员，';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = '，已经更新。';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = '编辑工作人员信息：';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = '姓：';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = '名：';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = '登录用户名：';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = '权限：';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = '图书流通';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = '更新会员';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = '编目';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = '管理';";
$trans["adminStaff_edit_formReports"]                 = "\$text = '报告';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = '停职：';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = '添加新的工作人员';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' 工作人员：';";
$trans["adminStaff_list_Function"]                 = "\$text = '功能';";
$trans["adminStaff_list_Edit"]                 = "\$text = '编辑';";
$trans["adminStaff_list_Pwd"]                 = "\$text = '密码修改';";
$trans["adminStaff_list_Del"]                 = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = '，已经添加。';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = '添加新的工作人员：';";
$trans["adminStaff_new_form_Password"]          = "\$text = '密码：';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = '重输一遍密码：';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = '密码已经重设。';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = '重设工作人员密码：';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = '返回主题列表';";
$trans["adminTheme_Theme"]                 = "\$text = '主题，';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = '，已经删除。';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = '确认想删除主题，';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = '，已经更新。';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = '预览主题变化';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = '修改当前使用主题：';";
$trans["adminTheme_Choosetheme"]                 = "\$text = '选择一个新主题：';";
$trans["adminTheme_Addnew"]                 = "\$text = '添加新主题';";
$trans["adminTheme_themes"]                 = "\$text = '主题：';";
$trans["adminTheme_function"]                 = "\$text = '功能';";
$trans["adminTheme_Themename"]                 = "\$text = '主题名称';";
$trans["adminTheme_Usage"]                 = "\$text = '是否在用';";
$trans["adminTheme_Edit"]                 = "\$text = '编辑';";
$trans["adminTheme_Copy"]                 = "\$text = '复制';";
$trans["adminTheme_Del"]                 = "\$text = '删除';";
$trans["adminTheme_Inuse"]                 = "\$text = '正在在用';";
$trans["adminTheme_Note"]                 = "\$text = '*注意：';";
$trans["adminTheme_Notetext"]                 = "\$text = '“删除”功能无法用于当前在用主题。';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = '主题：';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = '表格边框颜色：';";
$trans["adminTheme_Errorcolor"]                 = "\$text = '错误颜色：';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = '表格边框宽度：';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = '表格单元格间距：';";
$trans["adminTheme_Title"]                 = "\$text = '标题';";
$trans["adminTheme_Mainbody"]                 = "\$text = '正文';";
$trans["adminTheme_Navigation"]                 = "\$text = '导航区';";
$trans["adminTheme_Tabs"]                 = "\$text = '表格';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = '背景颜色：';";
$trans["adminTheme_Fontface"]                 = "\$text = '字体：';";
$trans["adminTheme_Fontsize"]                 = "\$text = '字号：';";
$trans["adminTheme_Bold"]                 = "\$text = '加粗';";
$trans["adminTheme_Fontcolor"]                 = "\$text = '字体颜色：';";
$trans["adminTheme_Linkcolor"]                 = "\$text = '链接颜色：';";
$trans["adminTheme_Align"]                 = "\$text = '对其：';";
$trans["adminTheme_Right"]                 = "\$text = '右对齐';";
$trans["adminTheme_Left"]                 = "\$text = '左对齐';";
$trans["adminTheme_Center"]                 = "\$text = '居中';";

$trans["adminTheme_HeaderWording"]                 = "\$text = '编辑';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = '，已经添加。';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = '主题预览';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = '图书馆标题';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = '关闭窗口';";
$trans["adminTheme_preview_Home"]                 = "\$text = '首页';";
$trans["adminTheme_preview_Circulation"]   = "\$text = '图书流通';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = '编目';";
$trans["adminTheme_preview_Admin"]         = "\$text = '管理';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '示例“链接”';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = '这是以下主题的预览：';";
$trans["adminTheme_preview_Thisend"]       = "\$text = '';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = '示例列表:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = '表格标题';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = '示例数据行1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = '示例数据行2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = '示例数据行3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '示例“链接”';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = '示例“错误”';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = '示例”输入“';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = '示例”按钮“';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'OpenBiblio驱动';";
$trans["adminTheme_preview_Copyright"]     = "\$text = '版权 &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = '遵循';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU通用公共许可证（GPL）';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
