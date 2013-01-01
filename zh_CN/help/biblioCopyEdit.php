<h1>副本添加和编辑页面：</h1>
<br><br>

帮助小节：
<ul>
  <li><a href="#desc">字段说明</a></li>
  <li><a href="#barc">从外部编号形式输入条形码值</a></li>
  <li><a href="#auto">条形码－自动生成</a></li>
  <li><a href="#seri">条形码集成副本顺序号</a></li>
</ul>
<br><br>

<a name="desc">下表对副本添加和编辑页面中出现的字段进行了说明。</a>
<br><br>

<table class="primary">
  <tr><th>字段</th><th>说明</th></tr>
  <tr>
    <td class="primary" valign="top">条形码</td>
    <td class="primary" valign="top">识别一本副本的唯一代码，最长20个字符。此字段是必需的，其确定了著作流通时借出、还书和借阅请求表格内的具体副本信息。
<br>请参阅：
<a href="../shared/help.php?page=barcodes">了解条形码</a>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">说明</td>
    <td class="primary" valign="top">描述副本特点的简短文字。</td>
  </tr>
  <tr>
    <td class="primary" valign="top">状态Status</td>
    <td class="primary" valign="top"><b>仅在副本编辑时。</b>.
<br>请参阅:
<a href="../shared/help.php?page=status">了解著作状态变更</a>
    </td>
  </tr>
</table>
<br><br>

<a name="barc">从外部编号形式输入条形码值</a>:
<ul>
     <li>手动输入条形码，或者在副本已打标识签时使用条形码扫描器；</li>
  <li>提交（不勾选”自动生成“）</li>
</ul>
<br>

<a name="auto">提交新副本时如果条形码字段中选项” <input name="autobarco" type="checkbox" checked>自动生成“</a> 被勾选，OpenBiblio会尝试按内部编号形式自动给出一个唯一的条形码值：
<ul>
  <li>第一部分是根据OpenBiblio内部的著作ID号码（<i>bibid</i>）计算得出，不足条形码长度的前面添0补足。默认长度是5位数字，可以通过修改文件<i>biblio_copy_new.php</i>中的变量<i>$nzeros</i>的值来改变。</li>
  <li>后一部分等于副本的内部副本ID（<i>copyid</i>）</li>
</ul>
<br><br>

<a name="seri">条形码中集成副本顺序号</a>有助于从一份简单的卡片文件（card file）中输入副本信息，卡片文件中仅有同一书名的多个副本的顺序号，而没有每一副本的唯一标识号码。
<br>
条形码查询页面中有关于<a href="../shared/help.php?page=opacLookup#seri">识别自动生成条形码中副本顺序号</a>的信息。
<br>
当添加具有著作顺序号标识信息的副本时：
<ul>
  <li>选中”自动生成“；</li>
     <li>提交新加副本直到副本顺序号与自动生成的条形码的最后一位（或几位）数字一致；</li>
  <li>永久删除不可用副本，编辑其它副本的状态。</li>
</ul>
<br><br>
