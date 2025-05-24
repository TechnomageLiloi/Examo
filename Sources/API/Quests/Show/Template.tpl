<link href="/API/Quests/Collection/Style.css" rel="stylesheet" />
<div id="quests-collection" class="stylo">
    <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit();">Edit</a>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.create();">New</a>
    <hr/>
    <h1 style="text-align: center;"><?php echo $quest->getTitle(); ?></h1>
    <div style="text-align: center;">
        <?php echo $quest->getUID(); ?> &diams;
        <?php echo $quest->getStatusTitle(); ?> &diams;
        <?php echo $quest->getStart(); ?> &diams;
        <?php echo $quest->getTags(); ?> &diams;
        <?php echo $quest->getData(); ?>
    </div>
    <hr/>
    <?php echo $quest->getProgramParse(); ?>
</div>