<h1>条形码查询页面</h1>
<br><br>
借出、还书和借阅请求表格中的搜索链接会打开一个二级弹出窗口，和联机公共检索目录中的几乎一样。在搜索结果页面中，每个副本的条形码都有一个额外的链接（借出/还书和借阅请求）。当选择这些链接后会关闭此窗口并将条形码返回到主窗口中的对应表格里，便于提交。
<br><br>

帮助小节：
<ul>
  <li><a href="#exam">示例：选择搜索结果中的条形码</a></li>
  <li><a href="#seri">从自动生成的条形码中识别副本的顺序号。</a></li>
</ul>
<br><br>

<a name="exam">下面的搜索结果示例显示了选择条形码的链接。</a>如果您的浏览器显示能显示工具提示，将鼠标置于链接上时会解释链接的目的。
<br><br>

<!--**************************************************************************
    *  Printing result table EXAMPLE ALMOST COMPLETELY TRANSLATED BY $loc->getText 
    ************************************************************************** -->
<table class="primary">
  <tbody><tr>
    <th colspan="3" align="left" nowrap="yes" valign="top">
      <?php echo $loc->getText("biblioSearchResults"); ?>:
    </th>
  </tr>
  
  <tr>

    <td class="primary" rowspan="2" align="center" nowrap="true" valign="top">
      1.<br>
      <a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">
      <img src="../images/book.gif" alt="book" align="bottom" border="0" height="20" width="20"></a>
    </td>
    <td class="primary" colspan="2" valign="top">
      <table class="primary" width="100%">
        <tbody><tr>

          <td class="noborder" valign="top" width="1%"><b><?php echo $loc->getText("biblioSearchTitle"); ?>:</b></td>
          <td class="noborder" colspan="3"><a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">Ribsy</a></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><b><?php echo $loc->getText("biblioSearchAuthor"); ?>:</b></td>
          <td class="noborder" colspan="3">Cleary,Beverly</td>
        </tr>

        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchMaterial"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">book</font></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCollection"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">Juvenile Fiction</font></td>

        </tr>
        <tr>
          <td class="noborder" nowrap="yes" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCall"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">JF Cle </font></td>
        </tr>
      </tbody></table>
    </td>
  </tr>

        <tr>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000051          
            <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>
                  </font></td>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
      </tr>

    
  <tr>
    <td class="primary" rowspan="2" align="center" nowrap="true" valign="top">
      2.<br>
      <a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">
      <img src="../images/book.gif" alt="book" align="bottom" border="0" height="20" width="20"></a>
    </td>
    <td class="primary" colspan="2" valign="top">
      <table class="primary" width="100%">

        <tbody><tr>
          <td class="noborder" valign="top" width="1%"><b><?php echo $loc->getText("biblioSearchTitle"); ?>:</b></td>
          <td class="noborder" colspan="3"><a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">Henry Huggins</a></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><b><?php echo $loc->getText("biblioSearchAuthor"); ?>:</b></td>
          <td class="noborder" colspan="3">Cleary,Beverly</td>

        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchMaterial"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">book</font></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCollection"); ?>:</b></font></td>

          <td class="noborder" colspan="3"><font class="small">Juvenile Fiction</font></td>
        </tr>
        <tr>
          <td class="noborder" nowrap="yes" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCall"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">JF Cle </font></td>
        </tr>
      </tbody></table>

    </td>
  </tr>
        <tr>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000061          
            <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>
                  </font></td>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>

      </tr>
              <tr>
            <td class="primary" align="center" nowrap="true" valign="top"><font class="small">
              3.
            </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000062              
                <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>

                          </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
          </tr>
                    <tr>
            <td class="primary" align="center" nowrap="true" valign="top"><font class="small">
              4.
            </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000063              
                <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>

                          </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
          </tr>
            </tbody>
</table><br>

<a name="seri">上面的条形码查询搜索结果示例中，仅著作条形码的最后一位（或几位）数字不同。</a>这是因为添加副本时按照<a href="../shared/help.php?page=biblioCopyEdit#seri">条形码集成副本顺序号</a>来生成副本条形码的。
<br>

<a href="../shared/help.php?page=biblioCopyEdit">副本添加和编辑页面</a>中的帮助对此和更多的关于添加副本进行了解释。
<br><br>
需要注意的是，搜索结果的编号，即结果表格的最左列，和条形码中集成的副本顺序号没有任何关系。