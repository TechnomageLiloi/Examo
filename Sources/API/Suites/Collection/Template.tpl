<div id="modules-suites-collection">
    <link href="/API/Suites/Collection/Style.css" rel="stylesheet" />

    <h1>
        [<?php echo $suite->getMark(); ?>]
        <?php echo $suite->getTitle(); ?>
    </h1>
    <?php echo $suite->getProgramParse(); ?>

    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Tests.create();">Create</a>
</div>