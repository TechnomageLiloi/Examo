<!DOCTYPE html>
<html lang="en">
    <head>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <script><?php echo file_get_contents(dirname(__DIR__) . '/Sources/API/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Sources/API/Maps/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Sources/API/Services/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Sources/API/Levels/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Sources/API/Quests/Requests.js'); ?></script>

        <style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

        <title><?php echo $config['title']; ?></title>
    </head>
    <body>
        <div style="text-align: center;">
            <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.getCollection();">Levels</a>
            <a class="butn" href="javascript:void(0)" onclick="window.location.reload();">Refresh</a>
            <a class="butn" href="javascript:void(0)" onclick="$('#items').toggle();">Items</a>
            <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.show();">Quests</a>
        </div>
        <hr/>
        <div id="page">
            <script>Requests.Maps.show();</script>
        </div>
    </body>
</html>