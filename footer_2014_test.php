{if embed:jquery !="no"}
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{rel_images}/js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{rel_images}/js/bootstrap.min_2014.js"></script>
{/if}

{embed:link}
{embed="stat/.stat_main_test_ad"
{if embed:page != ''}page="{embed:page}"{/if}
{if embed:section !='' }section="{embed:section}"{/if}
}


{if embed:page == "live"}
{exp:jquery:script_tag}{/exp:jquery:script_tag}
{exp:jquery:script_tag plugin='jcarousel'} {/exp:jquery:script_tag}
<script type="text/javascript" charset="utf-8" src="{rel_images}/live/live.js?s=12"></script>
{/if}
{if embed:page == "live_test"}
{exp:jquery:script_tag}{/exp:jquery:script_tag}
{exp:jquery:script_tag plugin='jcarousel'} {/exp:jquery:script_tag}
<script type="text/javascript" charset="utf-8" src="{rel_images}/live/live_test.js"></script>
{/if}
{if embed:page == "live_v2"}
{exp:jquery:script_tag}{/exp:jquery:script_tag}
{exp:jquery:script_tag plugin='jcarousel'} {/exp:jquery:script_tag}
<script type="text/javascript" charset="utf-8" src="{rel_images}/live/live_js_v2.js?a=9"></script>
{/if}

{if embed:page == "live_pagespeed"}
{exp:jquery:script_tag}{/exp:jquery:script_tag}
{exp:jquery:script_tag plugin='jcarousel'} {/exp:jquery:script_tag}
<script async type="text/javascript" charset="utf-8" src="{rel_images}/live/live_js_v2.js?a=9"></script>
{/if}

{if embed:script_section == "sport"}
<script type="text/javascript" language="javascript">
    $(function() {
        $('.wrap').dotdotdot();
    });
</script>
{/if}

{if embed:fb_page == "news"}
{embed="news_2014/facebook_script"}
{/if}

{if embed:fb_script != "false"}
{embed="facebook/.js"}
{/if}

{if embed:user_bar == "yes"}
{embed="google/login_2014"}
{/if}

{if embed:page == "index"}
{!-- embed="home/.promote_live_banner_modal" --}
{!--embed="survey_2015/survey_v1.0"--}
{/if}


{if embed:page != "live_v2"}
{!--embed="banner/.fbanner_countdown_system"--}
{/if}

{if embed:fbanner == "true"}
{!--embed="banner/.fbanner_countdown_system"--}
{!--embed="banner/.fbanner_seagames"--}
{/if}

{if embed:miniplayer == "yes"}
{embed="player/.miniplayer"}
{/if}

{!-- embed="banner/fbanner_popup" --}

<?php
$warning = '{warning}';
if("{embed:fbanner_warning}" != ""){
    if($warning == "yes"){
        echo '{embed="banner/.fbanner_warning_page"}';
    }else{
        //echo '{embed="banner/.fbanner_warning" page="{embed:fbanner_warning}"}';
    }
}
?>
{if embed:entry_view != ""}
{embed="inc/.entryView" entry="{embed:entry_view}"}
{/if}

{!--<script type="text/javascript" charset="utf-8" src="{site_main}/js/policy.js"></script>--}
</body>
</html>