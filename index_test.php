{embed="inc/.header_2014" kingram9_header="yes" vwo="yes" title="ช่อง7สี ทีวีเพื่อคุณ : ดูทีวีออนไลน์ช่อง7 ผังรายการช่อง7 วันนี้ ข่าวช่อง7 ดูละครช่อง7 ดาราช่อง7สี ซีรีย์ช่อง7" section="main" page="index" d13="yes"
meta='<meta name="description" content="{exp:char_limit total='600'}{exp:html_strip}สถานีโทรทัศน์สีกองทัพบกช่อง 7 (ช่อง 7 สี) ผังรายการวันนี้ ดูทีวีออนไลน์ช่อง7 ดาราช่อง7สี เรื่องย่อละคร ซีรีย์ช่อง7 รายการต่างๆของช่อง7 ดูทีวีออนไลน์ช่อง7 ดูละครช่อง7 ทีวีย้อนหลังช่อง7 ดูละครย้อนหลัง และข่าวช่อง7สี{/exp:html_strip}{/exp:char_limit}" />
<meta name="keywords" content="ช่อง 7 สี,สถานีโทรทัศน์สีกองทัพบกช่อง 7,บริษัท กรุงเทพโทรทัศน์และวิทยุ จำกัด,เรื่องย่อละคร,ดูทีวีออนไลน์,ดูละครย้อนหลัง,ละครช่อง7,ผังรายการช่อง7,ดูทีวีออนไลน์ช่อง7,ดาราช่อง7สี,ซีรีย์ช่อง7,ดูละครช่อง7,ดูทีวีย้อนหลังช่อง7,ดูละครย้อนหลังช่อง7,ข่าวช่อง7สี,ข่าวกีฬาช่อง7" />
<meta property="og:title" content="{exp:char_limit total='180'}ช่อง7สี ทีวีเพื่อคุณ: ดูทีวีออนไลน์ ผังรายการ ละคร ข่าวช่อง7สี{/exp:char_limit}" />
<meta property="og:type" content="tv_show" />
<meta property="og:url" content="{site_url}" />
<meta property="og:image" content="{site_images}/images/theme2014/thumb2014.jpg?2" />
<meta property="og:site_name" content="{site_name}"/>
<meta property="og:description" content="CH7.com ติดตามข่าวสารต่างๆช่อง7สี ผังรายการ ดูทีวีออนไลน์ ดารา7สี เรื่องย่อละคร คลิปข่าวช่อง7"/>
<link rel="image_src" type="image/jpeg" href="http://i.webch7.com/images/ch7/theme2012/logo/logo.jpg" />
<meta property="fb:pages" content="175246082972" />
'

link='
<link rel="stylesheet" href="{site_css}/style/owl.carousel.css">
<link rel="stylesheet" href="{site_css}/style/owl.theme.css">'
}

<style>
    #div-gpt-ad-1432884533127-0 { margin: 0 auto;}
    .oth-thumb-list-banner  {width: 100%;}
    .oth-thumb-list-banner > li {text-align:center; width: 100%;}
    .oth-thumb-list-banner > li img {width: 100%; float: none;}
    .oth-thumb-list-banner { display: inherit;}

    @media (min-width: 768px) {
        .oth-thumb-list-banner > li img {width:auto;}
    }
    @media (min-width: 992px) {
        .oth-thumb-list-banner  {width: 30%;}
        .oth-thumb-list-banner > li img {width:100%;}
    }
</style>

<?php
$cover_page = strtolower('{live2017}');
if($cover_page == "no"){
    ?>

    <?php if(true){ ?>

        {embed="banner/fbanner_greeting_lightbox_kingrama10"}
    <?php }else{ ?>
        {embed="banner/fbanner_greeting_lightbox_8Jan"}

    <?php } ?>
    <?php
}
?>

{!--embed="banner/fbanner_greeting_lightbox3"--}
{!--embed="inc/.header_event_2014"  section="main" page="index"--}

{embed="inc/.header_menu_2015"  section="main" page="index" }
<?php
$t = floor(time()/1000)*1000;
?>
{!--
<div class="banner_expand">
    <div class="inner_expand" style="width: 970px;margin: 0 auto;margin-top: 10px;margin-bottom: 10px;">
        { embed="banner/.home_expand" }
    </div>
</div>
--}
{!-- language --}
<?php
$this->ee =& get_instance();
if(!isset($this->EE->language)){
    $this->ee->load->library('language');
}
$a = &$this->ee->language;
$get_lang = array(
    "home.DomesticNews",
    "home.ForeignNews",
    "home.Scoop7see",
    "home.OilPrice",
    "home.ExchangeRate",
    "home.GoldPrice",
    "home.MovementNews",
    "home.MumKhao",
    "home.ImportantDays",
    "home.DramaRerun",
    "home.ProgramRerun",
    "home.Entertainment",
    "home.LatestNews"
);

$_GET["arr_lang"] = array();
foreach($get_lang as $k => $v){
    $th = $a->get(trim($v),"th");
    $en = $a->get(trim($v),"en");
    $_GET["arr_lang"][$v] = array("th"=>$th ,"en"=>$en);
}
//print_r($_GET["arr_lang"]);
?>

<div class="hightlight_area">
    {embed="2014_home/.index_hightlight" param='cache="yes" refresh="301"'}
</div>


<div class="content_area">
    <div class="container">
        <div class="row">
            <!--drama-->
            {!--
            <style>
                .drama-hilight {
                    float: left;
                    width: 100%;
                    padding: 10px;
                }

                .drama-hilight a {
                    display: block;
                    float: left;
                    width: 50%;
                    padding: 10px;
                }

                .drama-hilight img {
                    max-width: 100%;
                }
            </style>
            <div class="drama-hilight">
                <a href="http://drama.bugaboo.tv/สายโลหิต" title="สายโลหิต" target="_blank"><img
                        src="{site_images}/images/theme2016/sai.jpg?1"></a>
                <a href="http://drama.bugaboo.tv/ปู่โสมเฝ้าทรัพย์" title="ปู่โสมเฝ้าทรัพย์" target="_blank"><img
                        src="{site_images}/images/theme2016/some.jpg?1"></a>
            </div>
            --}
            <div class="drama_area">
                {embed="2014_home/.index_drama" param='cache="yes" refresh="900"' ctime="<?php echo $t + 86400; ?>"}
            </div> <!--end drama-->

            <!--Star-->
            <div class="star_area">
                {embed="2014_home/.index_stars" }
            </div>  <!--end Star-->

            <!--News-->
            <div class="news_area">
                {embed="2014_home/.index_news" param='cache="yes" refresh="900" '}
            </div> <!--end News-->

            <div class="tab-area">
                {embed="2014_home/.index_news_tab"}
            </div>
            <div class="economy-area">
                {!--embed="2014_home/.index_economy"--}
            </div>

            <!--sport-->
            <div class="sport_area">
                {embed="2014_home/.index_sports" param='cache="yes" refresh="900" cache_key="2014_home_index_sports_v2"
                '}
            </div> <!--end sport-->


            <!--show-download-->
            <div class="show_download_area">
                <!--show-->
                <div class="row">
                    <div class="shows_area ">
                        {embed="2014_home/.index_shows" param='cache="yes" refresh="901" ' ctime="<?php echo $t; ?>"}
                    </div> <!--end show-->
                    <div class="promote_clip">
                        <div class="img_promote">
                            <h3 class="title_partner"> TV Preview </h3>
                            {embed="banner/.spot_promote_bb"}
                        </div>
                    </div>

                </div>
            </div> <!--end show-download-->

            <div class="tab-area" id="info">
                {embed="2014_home/.index_info"}
            </div>

            <div class="tab-area" id="rerun">
                {embed="2014_home/.index_rerun"}
            </div>

            <div class="movie_area">
                {!--embed="2014_home/.index_movie" ctime="<?php echo $t; ?>"--}
            </div> <!--end drama-->


            <div id="partner" class="partner-area">
                <h3 class="title_partner"> Exclusive Site </h3>
                <div class="owl-area">
                    {embed="2014_home/.index_event_banner"}
                </div>
            </div>


            <div class="tab-area" style="width:100%;">
                {embed="banner/ads_plista" zone = "http://www.ch7.com"}
            </div>


        </div>
    </div>
</div>

{!--embed="banner/.fbanner_countdown"  param='entry_id="92024"'--}
{!--embed="banner/.fbanner_stream" url_watch="http://www.ch7.com/livespecial.html"--}
{!--embed="banner/.video_promote_lightbox"--}





{embed="inc/.footer_menu_2014" section="main" page="index" truehits_page="home"}
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1565140-2']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
{embed="inc/.footer_2014_test" section="main" page="index" fbanner_warning="index"
link='<script src="{site_js}/js/jquery.easing.min.js"></script>
<script src="{site_js}/js/fluid.thumbs.js"></script>
<script src="{site_js}/js/owl.carousel.js"></script>
<script src="{site_js}/js/2014_home/index.js?4"></script>
<script type="text/javascript" charset="utf-8" src="{site_main}/js/policy.js?v=5"></script>'
}
<?php

if('{live2017_test}' == 'yes'){
    echo '{embed="banner/.fbanner_countdown_system2"  entry_id="138430"}';
}

?>