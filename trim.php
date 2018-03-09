<script>
    function showGoogleAdds() {
        var ad = [];
        ad.push({
            "display": "div-gpt-ad-1491363159720-0",
            "adUnit": window.metadataDFP.adUnit + '/lb',
            "adSize": [[300, 250], [320, 50], [970, 90], [728, 90], [320, 100], [300, 100]],
            "screenSize": [[[320, 400], [[300, 250], [320, 100], [320, 50], [300, 100]]], [[320, 700], [[300, 250], [320, 100], [320, 50], [300, 100]]], [[768, 200], [[728, 90]]], [[992, 200], [[728, 90], [970, 90]]], [[1024, 200], [[320, 100]]], [[1200, 200], [[728, 90], [970, 90]]]]
        });
        ad.push({
            "display": "div-gpt-ad-1491377408082-0",
            "adUnit": window.metadataDFP.adUnit + '/Rec',
            "adSize": [[300, 250]]
        });
        if (window.jQuery) {
            googletag.cmd.push(function () {
                try {
                    $.each(ad, function (key, value) {
                        if (typeof value.adUnit != "undefined" && typeof value.display != "undefined" && typeof value.adSize != "undefined") {
                            if (typeof value.screenSize != "undefined" && value.screenSize.length > 0) {
                                var mapping = new Array();
                                for (var i = 0; i < value.screenSize.length; i++) {
                                    if (typeof value.screenSize[i][0] != "undefined" && typeof value.screenSize[i][1] != "undefined") {
                                        mapping.push([value.screenSize[i][0], value.screenSize[i][1]]);
                                    }
                                }
                                mapping.sort(function (a, b) {
                                    if (a[0][0] > b[0][0]) {
                                        return -1;
                                    }
                                    if (a[0][0] < b[0][0]) {
                                        return 1;
                                    }
                                    if (a[0][0] == b[0][0]) {
                                        if (a[0][1] > b[0][1]) {
                                            return -1;
                                        }
                                        if (a[0][1] < b[0][1]) {
                                            return 1;
                                        }
                                    }
                                    return 0;
                                });
                                googletag.defineSlot(value.adUnit, value.adSize, value.display).defineSizeMapping(mapping).addService(googletag.pubads());
                            } else {
                                googletag.defineSlot(value.adUnit, value.adSize, value.display).addService(googletag.pubads());
                            }
                        }
                    });
                } catch (err) {
                }
                if (typeof window.metadataDFP != "undefined" && typeof window.metadataDFP.keyValue != "undefined") {
                    if (Object.keys(window.metadataDFP.keyValue).length > 0) {
                        for (var adKey in window.metadataDFP.keyValue) {
                            googletag.pubads().setTargeting($.trim(adKey), $.trim(window.metadataDFP.keyValue[adKey]));
                        }
                    }
                }
                googletag.pubads().enableSingleRequest();
                googletag.pubads().enableAsyncRendering();
                googletag.pubads().collapseEmptyDivs();
                googletag.enableServices();
            });
            try {
                $.each(ad, function (key, value) {
                    if (value.display != '') {
                        googletag.cmd.push(function () {
                            googletag.display(value.display);
                        });
                    }
                });
            } catch (err) {
            }
        }
    }

</script>

