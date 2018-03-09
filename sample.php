{if embed:page == "debug" || last_segment == "bbstat"}
{embed="stat_bbtv/stat_bbtv_v2" pagename="{embed:pagename}"}
{if:else}
{embed="stat_bbtv/stat_bbtv_v2" pagename="{embed:pagename}"}
{/if}


{if embed:page != "iframe" OR  embed:page == ""}
{embed="stat/.google"}
{/if}

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script type='text/javascript'>

    if(window.jQuery){
        var gptadslots=[];
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        googletag.cmd.push(function() {

            try {
                $.each( ad , function( key, value ) {

                    if ( typeof value.adUnit != "undefined" && typeof value.display != "undefined" && typeof value.adSize != "undefined" ) {

                        if ( typeof value.screenSize != "undefined" && value.screenSize.length > 0 ) {

                            var mapping = new Array();
                            //var mapping2 = googletag.sizeMapping();

                            for ( var i=0; i < value.screenSize.length; i++ ) {

                                if ( typeof value.screenSize[i][0] != "undefined" && typeof value.screenSize[i][1] != "undefined" ) {

                                    mapping.push( [value.screenSize[i][0], value.screenSize[i][1]] );
                                    //mapping2.addSize(value.screenSize[i][0], value.screenSize[i][1]);

                                }

                            }

                            //mapping2.build();
                            //console.log(mapping2);

                            // sort by screen size
                            mapping.sort(function(a, b){

                                if ( a[0][0] > b[0][0] ) {
                                    return -1;
                                }

                                if ( a[0][0] < b[0][0] ) {
                                    return 1;
                                }

                                if ( a[0][0] == b[0][0] ) {

                                    if ( a[0][1] > b[0][1] ) {
                                        return -1;
                                    }

                                    if ( a[0][1] < b[0][1] ) {
                                        return 1;
                                    }

                                }

                                return 0;

                            });

                            googletag.defineSlot(
                                value.adUnit,
                                value.adSize,
                                value.display
                            ).defineSizeMapping( mapping ).addService( googletag.pubads() );

                        }

                    }

                });
            }catch(err) {}

            if ( typeof window.metadataDFP != "undefined" && typeof window.metadataDFP.keyValue != "undefined" ) {
                if ( Object.keys( window.metadataDFP.keyValue ).length > 0 ) {
                    for ( var adKey in window.metadataDFP.keyValue ) {
                        googletag.pubads().setTargeting( $.trim(adKey), $.trim(window.metadataDFP.keyValue[adKey]) );
                    }
                }
            }

            googletag.pubads().enableSingleRequest();
            googletag.pubads().enableAsyncRendering();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });

        $(function() {
            try {
                $.each( ad , function( key, value ) {
                    if(value.display != ''){
                        googletag.cmd.push(function() { googletag.display(value.display); });
                    }
                });
            }catch(err) {}
        });
    }

    function removeLightBox(){
        $("#div-gpt-ad-1499928616905-0").remove();
    }
    function clickLightBox(url){
//console.log(url);
        window.open(url, '_blank');
    }
    function showLightBox(){
        $("#div-gpt-ad-1499928616905-0").show();
        $("#div-gpt-ad-1499928616905-0").find("iframe").css({
            position:"fixed",
            top: 0,
            left: 0,
            width:"100%",
            height:"100%",
            'z-index':9920
        });
    }
</script>
<!--  END GOOGLE AD CODE -->