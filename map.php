<!DOCTYPE html>
<html lang="en">
<head>
    <title>Infobox:showPointer&actions</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="map.css">
</head>
<body>

<div id="myMap" style='position:relative;width:100%;height:800px;'></div>

<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=' async defer></script>
<script>
<?php
// データベース接続
try {
    $pdo = new PDO('mysql:dbname=sotsu_map;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM sotsu_map");
$status = $stmt->execute();

// データをJavaScriptで使用できる形式に変換
$locations = [];
if ($status==false) {
    // エラーハンドリング
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $locations[] = $result;
    }
}

// PHPの配列をJSON形式に変換
echo "let locations = ".json_encode($locations).";";
?>

function GetMap() {
    let map = new Microsoft.Maps.Map('#myMap', {
        zoom: 14
    });

    navigator.geolocation.getCurrentPosition(function(position) {
        let currentLat = position.coords.latitude;
        let currentLon = position.coords.longitude;
        let currentLocation = new Microsoft.Maps.Location(currentLat, currentLon);
        map.setView({ center: currentLocation });

        let userPin = new Microsoft.Maps.Pushpin(currentLocation, {
            title: '現在地',
            color: 'red'
        });
        map.entities.push(userPin);
    });

    locations.forEach(function(location) {
    let loc = new Microsoft.Maps.Location(parseFloat(location.lat), parseFloat(location.lng));
    let pin = new Microsoft.Maps.Pushpin(loc, {
        title: location.name,
        subTitle: location.adress
    });

    // PDFファイルへのリンクをcompa_info.phpに設定。ここではlocation.idを渡す例を示します。
    let description = `<a href="${location.hp}">HP</a><br>` +
                      `<a href="sample.php?id=${location.ID}">求人票</a><br>` +
                      `<a href="ohbo.php">応募</a>`;

    let infobox = new Microsoft.Maps.Infobox(loc, {
        title: location.name,
        description: description,
        showPointer: true,
        showCloseButton: true
    });

    infobox.setMap(map);
    map.entities.push(pin);
});

}
</script>
</body>
</html>