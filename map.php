<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Map:Circle</title>
    <style>html,body{height:100%;}body{padding:0;margin:0;}h1{padding:0;margin:0;font-size:50%;}</style>
</head>
<body>


<!-- MAP[START] -->
<div id="myMap" style='width:100%;height:100%;float:left;'></div>
<!-- MAP[END] -->


<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=' async defer></script>
<script src="BmapQuery.js"></script>
<script>
    //****************************************************************************************
    // BingMaps&BmapQuery
    //****************************************************************************************
    //Init
    function GetMap(){
        //------------------------------------------------------------------------
        //1. Instance
        //------------------------------------------------------------------------
        const map = new Bmap("#myMap");

        //------------------------------------------------------------------------
        //2. Display Map
        //   startMap(lat, lon, "MapType", Zoom[1~20]);
        //   MapType:[load, aerial,canvasDark,canvasLight,birdseye,grayscale,streetside]
        //--------------------------------------------------
        map.startMap(35.680944, 139.767275, "load", 14);

        //------------------------------------------------------------------------
        //3.Circle Add
        //  circleSet( Meter, style={pinColor,fillColor,strokeWidth} );
        //------------------------------------------------------------------------
        //Blue
        const style1 = {
            pinColor:"#FF0000",
            fillColor:"rgba(0,0,100,0.3)",
            strokeWidth:1
        };
        map.circle(1000, style1); //1000m=1km
        map.circle(2000, style1); //2000m=2Km
        map.circle(3000, style1); //3000m=3km

    }
</script>
</body>
</html>