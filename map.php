<?php
require __DIR__ . '/vendor/autoload.php';
//phpdotenvの機能を使って__DIR__=ファイルの存在する階層にある.envを指定する
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//.env中の設定値をロードし、$_ENVとして使用できるようにする
$dotenv->load();

//API_KEYの定義
$API_KEY = $_ENV['API_KEY'];

// データベース接続
try {
    $pdo = new PDO('mysql:dbname=koukeishou_sotsusample;charset=utf8;host=mysql634.db.sakura.ne.jp','koukeishou','koukeishou12');
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

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Infobox:showPointer&actions</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="map.css">
</head>
<body>

<div id="myMap" style='position:relative;width:100%;height:800px;'></div>

<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=<?= $API_KEY ?>' async defer></script>

<script>
<?= "let locations = ".json_encode($locations).";"?>
console.log(locations);

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

    // 例: PDFファイルへの直接リンクを使用
    let description = `<a href="${location.hp}">HP</a><br>` +
                  `<a href="kyujin_hyoji.php?id=${location.ID}">求人票</a><br>` +
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