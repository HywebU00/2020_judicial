<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>司法院全球資訊網</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/judicial.css">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <div class="container">
        <!-- 內頁新增一個classname-->
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">書狀參考範例</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- LP Start -->
          <section class="lp document">
            <!-- advanced_search -->
            <!-- 進階搜尋 -->
            <div class="advanced_search_block">
              <div class="search_btn">
                <a href="">查詢</a>
              </div>
              <div class="adr_block" style="">
                <form action="" class="form_grid">
                  <div class="form_grp">
                    <label for="" class="form_title">
                      紛爭類型
                      <input type="button" id="SubTypeBtn" value="全選">
                    </label>
                    <div class="form_content">
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" id="check_SubType_1" value="1,16">勞動類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="2" id="check_SubType_2">政府採購類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" id="check_SubType_3" value="3,18">環境類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="4" id="check_SubType_4">醫療類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="5" id="check_SubType_5">不動產類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="6" id="check_SubType_6">財稅類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="7" id="check_SubType_7">智慧財產類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="8" id="check_SubType_8">營建類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="9" id="check_SubType_9">電信類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="10" id="check_SubType_10">(鄉鎮市)調解委員會</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="11" id="check_SubType_11">消保類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="12" id="check_SubType_12">性平類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="13" id="check_SubType_13">公寓大廈類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="15" id="check_SubType_15">公平交易類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="17" id="check_SubType_17">金融類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" value="19" id="check_SubType_19">仲裁類</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DTCColumn2" id="check_SubType_14" value="14,20">其他</label>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">
                      機構所在地區
                      <input type="button" id="CityBtn" value="取消全選">
                    </label>
                    <div class="form_content">
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="1" id="check_City_1">臺北市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="2" id="check_City_2">新北市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="3" id="check_City_3">基隆市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="4" id="check_City_4">桃園市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="5" id="check_City_5">新竹縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="6" id="check_City_6">新竹市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="7" id="check_City_7">苗栗縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="8" id="check_City_8">臺中市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="9" id="check_City_9">彰化縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="10" id="check_City_10">南投縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="11" id="check_City_11">雲林縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="12" id="check_City_12">嘉義縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="13" id="check_City_13">嘉義市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="14" id="check_City_14">臺南市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="15" id="check_City_15">高雄市</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="16" id="check_City_16">屏東縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="17" id="check_City_17">宜蘭縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="18" id="check_City_18">花蓮縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="19" id="check_City_19">臺東縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="20" id="check_City_20">澎湖縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="21" id="check_City_21">金門縣</label>
                      <label for="" class="adr_check"><input type="checkbox" name="Q_DMCatCode" checked="" value="22" id="check_City_22">連江縣</label>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">
                      機構名稱
                    </label>
                    <div class="form_content">
                      <input type="text" id="" value="" placeholder="請輸入代碼">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="" type="submit" value="查詢">
                    <input name="" type="reset" value="重設">
                  </div>
                </form>
              </div>
            </div>
            <p>本網頁僅為便利民眾查詢行政型或民間型ADR (Alterative Dispute Resolution)機構、團體所建置之平臺，各該機構、團體非隸屬本院，且本網頁相關之資料僅供參考，如欲進一步瞭解各機構、團體之詳情，請直接向該機構、團體洽詢。</p>
            <!-- 表格列表 -->
            <!-- 表格列表 -->
            <div class="table_list">
              <table summary="" class="table_sprite table_hover">
                  <thead>
                    <tr>
                      <th style="width:5%">項次</th>
                      <th style="width:10%">機構類型</th>
                      <th style="width:10%">紛爭類型</th>
                      <th style="width:30%">機構名稱</th>
                      <th style="width:20%">地址</th>
                      <th style="width:25%">電話</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="項次" class="num nowrap">1</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://www.mol.gov.tw/topic/3073/19164/" title="勞資爭議仲裁委員會(臨時任務編組)">勞資爭議仲裁委員會(臨時任務編組)</a></span></td>
                      <td data-title="地址">10346臺北市大同區延平北路二段83號9樓</td>
                      <td data-title="電話" class="nowrap">0800-085151</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">2</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://bola.gov.taipei/ct.asp?xItem=41083873&amp;ctNode=62848&amp;mp=116003" title="勞資爭議調解委員會(臺北市)">勞資爭議調解委員會(臺北市)</a></span></td>
                      <td data-title="地址">11008臺北市信義區市府路1號5樓</td>
                      <td data-title="電話" class="nowrap">(02)27208889</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">3</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://www.mol.gov.tw/topic/3073/19164/" title="勞資爭議調解委員會(臨時任務編組)">勞資爭議調解委員會(臨時任務編組)</a></span></td>
                      <td data-title="地址">10346臺北市大同區延平北路二段83號9樓</td>
                      <td data-title="電話" class="nowrap">0800-085151</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">4</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://ilabor.ntpc.gov.tw/page/labor-dispute-resolution" title="新北市政府勞資爭議調解委員會">新北市政府勞資爭議調解委員會</a></span></td>
                      <td data-title="地址">22001新北市板橋區中山路一段161號7樓</td>
                      <td data-title="電話" class="nowrap">(02)29642708、1999</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">5</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www.kl-labor.tw/line/Mediation_index.asp" title="基隆市政府社會處勞工線上申請系統">基隆市政府社會處勞工線上申請系統</a></span></td>
                      <td data-title="地址">202基隆市中正區義一路1號</td>
                      <td data-title="電話" class="nowrap">(02)2420-1122分機2209、2210</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">6</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://social.klcg.gov.tw/laborer_srv/info_view.php?Kid=13&amp;Mid=30&amp;Sid=0&amp;Tid=0&amp;sid=762&amp;serno=20160110173842&amp;page_num=1" title="勞資爭議仲裁委員會(基隆市)">勞資爭議仲裁委員會(基隆市)</a></span></td>
                      <td data-title="地址">202基隆市中正區義一路1號</td>
                      <td data-title="電話" class="nowrap">(02)24287801</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">7</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://social.klcg.gov.tw/laborer_srv/info_view.php?Kid=13&amp;Mid=30&amp;Sid=0&amp;Tid=0&amp;sid=762&amp;serno=20160110173842&amp;page_num=1" title="勞資爭議調解委員會(基隆市)">勞資爭議調解委員會(基隆市)</a></span></td>
                      <td data-title="地址">20201基隆市中正區義一路1號</td>
                      <td data-title="電話" class="nowrap">(02)24201122</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">8</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://saturn.sipa.gov.tw/eCompanyPortal/program/popFlowInfo.jsp?sopID=06.23" title="新竹科學工業園區勞資爭議調解委員會、仲裁委員會">新竹科學工業園區勞資爭議調解委員會、仲裁委員會</a></span></td>
                      <td data-title="地址">30016新竹市東區新安路2號</td>
                      <td data-title="電話" class="nowrap">(03)5773311</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">9</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://www.ctsp.gov.tw/chinese/04-Manufacturer/04-01-business_view.aspx?v=1&amp;fr=1045&amp;no=1063&amp;sn=257" title="科技部中部科學工業園區管理局勞資爭議調解委員會">科技部中部科學工業園區管理局勞資爭議調解委員會</a></span></td>
                      <td data-title="地址">40763臺中市西屯區中科路2號</td>
                      <td data-title="電話" class="nowrap">(04)25658588</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">10</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="https://www.labor.taichung.gov.tw/868469/868470/868471/868501/post" title="勞資爭議調解會、勞資爭議調解委員會、勞資爭議仲裁會、勞資爭議仲裁委員會(臺中市)">勞資爭議調解會、勞資爭議調解委員會、勞資爭議仲裁會、勞資爭議仲裁委員會(臺中市)</a></span></td>
                      <td data-title="地址">40701臺中市西屯區臺灣大道三段99號惠中樓4樓</td>
                      <td data-title="電話" class="nowrap">(04)22289111分機35099</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">11</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://labor.chcg.gov.tw/07other/other01_list.asp?topsn=2119" title="勞資爭議仲裁委員會(彰化縣)">勞資爭議仲裁委員會(彰化縣)</a></span></td>
                      <td data-title="地址">50050彰化縣彰化市中興路100號8樓</td>
                      <td data-title="電話" class="nowrap">(04)7264150</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">12</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://labor.chcg.gov.tw/07other/other01_list.asp?topsn=2119" title="勞資爭議調解委員會(彰化縣)">勞資爭議調解委員會(彰化縣)</a></span></td>
                      <td data-title="地址">50050彰化縣彰化市中興路100號8樓</td>
                      <td data-title="電話" class="nowrap">(04)7264150</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">13</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www4.yunlin.gov.tw/labor/home.jsp?mserno=200710140003&amp;serno=200710140016&amp;menudata=LaborMenu&amp;contlink=ap/down_view.jsp&amp;dataserno=201201100001" title="雲林縣勞資爭議調解委員會">雲林縣勞資爭議調解委員會</a></span></td>
                      <td data-title="地址">64001雲林縣斗六市雲林路二段515號</td>
                      <td data-title="電話" class="nowrap">(05)5522810</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">14</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www.stsp.gov.tw/guide/contact_us/contact_0101.jsp?frontTarget=DEFAULT" title="科技部南部科學工業園區管理局勞資爭議調解委員會">科技部南部科學工業園區管理局勞資爭議調解委員會</a></span></td>
                      <td data-title="地址">82151高雄市路竹區路科五路23號</td>
                      <td data-title="電話" class="nowrap">(07)6075545</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">15</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://labor.kcg.gov.tw/LaborRights/Controversy" title="勞資爭議仲裁委員會(高雄市)">勞資爭議仲裁委員會(高雄市)</a></span></td>
                      <td data-title="地址">80669高雄市前鎮區鎮中路6號</td>
                      <td data-title="電話" class="nowrap">(07)8124613</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">16</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://labor.kcg.gov.tw/LaborRights/Controversy" title="勞資爭議調解委員會(高雄市)">勞資爭議調解委員會(高雄市)</a></span></td>
                      <td data-title="地址">80669高雄市前鎮區鎮中路6號</td>
                      <td data-title="電話" class="nowrap">(07)8124613</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">17</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www.pthg.gov.tw/planlab/Cus_Petition_Detail.aspx?s=2C13413C7370AB85&amp;n=960283D22D8CB258" title="勞資爭議調解委員會(屏東縣)">勞資爭議調解委員會(屏東縣)</a></span></td>
                      <td data-title="地址">90081屏東縣屏東市自由路17號</td>
                      <td data-title="電話" class="nowrap">(08)7558048</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">18</td>
                      <td data-title="機構類型" class="num nowrap">行政型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://labor.e-land.gov.tw/cp.aspx?n=658E582CE8863596&amp;s=EC43C5584B2C331D" title="宜蘭縣政府勞資爭議調解（仲裁）委員會">宜蘭縣政府勞資爭議調解（仲裁）委員會</a></span></td>
                      <td data-title="地址">26060宜蘭縣宜蘭市南津里13鄰縣政北路1號</td>
                      <td data-title="電話" class="nowrap">(03)9251000</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">19</td>
                      <td data-title="機構類型" class="num nowrap">民間型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www.airroc.org.tw/newweb/index_ch.asp" title="中華民國勞資關係協進會">中華民國勞資關係協進會</a></span></td>
                      <td data-title="地址">10557台北市敦化南路一段7號11樓之1</td>
                      <td data-title="電話" class="nowrap">(02)25782881</td>
                    </tr>
                    <tr>
                      <td data-title="項次" class="num nowrap">20</td>
                      <td data-title="機構類型" class="num nowrap">民間型</td>
                      <td data-title="紛爭類型">勞動類</td>
                      <td data-title="機構名稱"><span><a target="_blank" href="http://www.alr.org.tw/about_5.php" title="中華民國勞資關係服務協會">中華民國勞資關係服務協會</a></span></td>
                      <td data-title="地址">10074台北市羅斯福路一段28號11樓</td>
                      <td data-title="電話" class="nowrap">(02)33225233</td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </section>
            <!-- LP End -->
            <!-- Pagination -->
            <?php require_once('include/pagination.html'); ?>
          </div>
        </div>
        <!-- container -->
      </div>
      <!-- innerpage -->
      <!-- fatfooter Start -->
      <?php require_once('include/fatfooter.html'); ?>
      <!-- fatfooter End -->
      <!-- footer Start-->
      <?php require_once('include/footer.html'); ?>
      <!-- footer End -->
    </div>
    <?php require_once('include/js.html'); ?>
  </body>

  </html>