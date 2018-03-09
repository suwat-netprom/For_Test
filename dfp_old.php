{embed="stat/.google"}

{embed="stat/.realtime" {if embed:pagename !=""} pagename = "{embed:pagename}" {/if}}
<!-- AudienceScience Async Data Collection Tag -->

{embed="stat/.hawkeyesurvey"}

<!-- End AudienceScience Data Collection Tag -->

{if embed:section == "news"}

{if:else}
{!-- /17471837/ch7.com_468x60_LIVE --}
<!-- Start: GPT Async -->
<script type='text/javascript'>
    var ad = new Array();
    /* New DFP */
    ad.push(['div-gpt-ad-1432884533127-0','/15825898/Ch7.com_300x250_ROS',300,250]);
    ad.push(['div-gpt-ad-1432884533127-1','/15825898/Ch7.com_728x90_ROS',728,90]);
    ad.push(['div-gpt-ad-1432884533127-2','/15825898/Ch7.com_300x250_Live',300,250]);

    if($('.content_area .container').width() > 970 || $('.live-area .container').width() > 970){
        ad.push(['div-gpt-ad-1447835487471-0','/15825898/Ch7.com_970x250_Homepage',970,250]);
    }else{
        $('.banner_expand').hide();
        $('.live-area').css("margin-top", "0px");
    }

</script>
{if embed:section == "main" AND embed:page == "live" OR  embed:section == "activities" AND embed:page == "index"}
<script type='text/javascript'>
    ad.push(['div-gpt-ad-309196592540821583-4','/15825898/Ch7.com_300x250_ROS',300,250]);
</script>
{/if}

{if embed:section == "main" AND embed:page == "live" OR  embed:section == "main" AND embed:page == "live_v2"}
<script type='text/javascript'>
    ad.push(['div-gpt-ad-1481714558531-0','/15825898/Ch7Bugaboo_300x250',300,250]);
</script>
{/if}

{if embed:section == "tsm" }
<script type='text/javascript'>
    ad.push(['div-gpt-ad-309196592540821583-5','/17471837/TSM_Web_300x350',300,350]);
</script>
{/if}
<!--  END GOOGLE AD CODE -->
{/if}
<!-- Begin comScore Tag -->
<script>
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "19592956" });
    (function() {
        var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
        s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
        el.parentNode.insertBefore(s, el);
    })();
</script>
<noscript>
    <img src="http://b.scorecardresearch.com/p?c1=2&c2=19592956&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->

<!-- Begin Turbine Tag -->

<script>

    (function() {


        function loadTurbineTag() {
            window._sf_endpt = (new Date()).getTime();
            //console.log(window._sf_endpt);
            var e = document.createElement('img');
            e.setAttribute('style', 'display:none;');
            e.setAttribute('src',"//th-gmtdmp.mookie1.com/t/v2/learn?tagid=V2_3264&&id=CH7&src.rand="+window._sf_endpt+"");
            document.body.appendChild(e);

            var el = document.createElement('img');
            el.setAttribute('style', 'display:none;');
            el.setAttribute('src',"//th-gmtdmp.mookie1.com/t/v2/activity?tagid=V2_122059&src.rand="+window._sf_endpt+"");
            document.body.appendChild(el);

        };

        var oldonload = window.onload;
        window.onload = (typeof window.onload != 'function') ?
            loadTurbineTag : function() { oldonload(); loadTurbineTag(); };
    })();


</script>
<!-- End Turbine Tag -->

<!-- GOOGLE AD CODE -->
<script type='text/javascript'>
    if(window.jQuery){
        var gptadslots=[];
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function(){ var gads = document.createElement('script');
            gads.async = true; gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();

        googletag.cmd.push(function() {
            var i = 0;
            var mapLeader = googletag.sizeMapping().
            addSize([320, 400], [300, 250]).
            addSize([320, 700], [300, 250]).
            addSize([768, 200], [728, 90]).
            addSize([992, 200], [728, 90]).
            build();
            try {
                $.each( ad , function( key, value ) {
                    if($('#'+value[0]).length > 0){
                        i+=1;
                        if(typeof(value[3]) != 'undefined' && value[3] == "mapSize"){
                            if(typeof(value[4]) != 'undefined' && value[4] !=''){
                                gptadslots[i]= googletag.defineSlot(
                                    value[1],
                                    value[2],
                                    value[0]
                                )
                                    .defineSizeMapping(mapLeader)
                                    .addService(googletag.pubads())
                                    .setTargeting("ch7_section", value[4]);
                            }else{
                                gptadslots[i]= googletag.defineSlot(
                                    value[1],
                                    value[2],
                                    value[0]
                                )
                                    .defineSizeMapping(mapLeader)
                                    .addService(googletag.pubads());
                            }

                        }else if(value[2].isArray){
                            gptadslots[i]= googletag.defineSlot(
                                value[1],
                                value[2],
                                value[0]
                            ).addService(googletag.pubads());
                        }else{
                            gptadslots[i]= googletag.defineSlot(
                                value[1],
                                [[value[2],value[3]]],
                                value[0]
                            ).addService(googletag.pubads());
                        }
                    }
                });
            }catch(err) {}

            googletag.pubads().enableSingleRequest();
            googletag.pubads().enableAsyncRendering();
            googletag.enableServices();
        });
        $(function() {
            try {
                $.each( ad , function( key, value ) {
                    if($('#'+value[0]).length > 0){
                        googletag.cmd.push(function() { googletag.display(value[0]); });
                    }
                });
            }catch(err) {}
        });
    }

</script>
<!--  END GOOGLE AD CODE -->