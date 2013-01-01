<h1>了解著作状态变更：</h1>
下表列出了著作副本可能的状态情形。<br><br>
<table class="primary">
  <tr><th>状态</th><th>说明</th></tr>
  <tr><td class="primary" valign="top">已还回</td><td class="primary">著作在架，可以借出。</td></tr>
  <tr><td class="primary" valign="top">已借出</td><td class="primary">著作已被某图书馆会员借出。</td></tr>
  <tr><td class="primary" valign="top">已保留</td><td class="primary">著作保留给对此著作发出借阅请求的某会员，正等待其借出。</td></tr>
  <tr><td class="primary" valign="top">书架车</td><td class="primary">著作正在书架车上等待上架。</td></tr>
  <tr><td class="primary" valign="top">已损坏/正补版</td><td class="primary">著作目前由于损坏正在修补。</td></tr>
  <tr><td class="primary" valign="top">展示区</td><td class="primary">著作现在展示柜里，无法借出。</td></tr>
  <tr><td class="primary" valign="top">已丢失</td><td class="primary">著作找不到了，无法借出。</td></tr>
  <tr><td class="primary" valign="top">已出借</td><td class="primary">著作已出借。</td></tr>
  <tr><td class="primary" valign="top">订购中</td><td class="primary">著作正在订购中，还未到馆。</td></tr>
</table>
<br>
以下页面允许按照下列规则进行著作状态变更。<br><br>
<table class="primary">
  <tr><th>页面</th><th>旧状态</th><th>新状态</th><th>规则</th></tr>
  <tr>
    <td class="primary" valign="top" rowspan="3">会员信息</td>
    <td class="primary" valign="top">已还回</td>
    <td class="primary" valign="top">已借出</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top">已借出</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">已保留</td>
    <td class="primary" valign="top">已借出</td>
    <td class="primary" valign="top">仅当此会员在特定副本的借阅请求队列中排第一位或请求队列为空时允许此操作。</td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="5">还书</td>
    <td class="primary" valign="top">已借出</td>
    <td class="primary" valign="top">书架车</td>
    <td class="primary" valign="top">计算超期费用。</td>
  </tr>
  <tr>
    <td class="primary" valign="top">已借出</td>
    <td class="primary" valign="top">已保留</td>
    <td class="primary" valign="top">计算超期费用并显示书籍已被保留给借阅请求的信息。</td>
  </tr>
  <tr>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top">书架车</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">已保留</td>
    <td class="primary" valign="top">书架车</td>
    <td class="primary" valign="top">仅当请求借阅队列为空时允许此操作。</td>
  </tr>
  <tr>
    <td class="primary" valign="top">书架车</td>
    <td class="primary" valign="top">已还回</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="3">著作信息</td>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top">已还回</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">已还回</td>
    <td class="primary" valign="top">其它<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>
</table>

     <font class="small">*注意：“其它”包括已损坏/补版、展示区、丢失、已出借和订购中等状态情形。</font>
