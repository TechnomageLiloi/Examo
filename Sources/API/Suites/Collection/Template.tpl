<div id="modules-suites-collection">
    <link href="/API/Suites/Collection/Style.css" rel="stylesheet" />

    <h1>
        [<?php echo $suite->getMark(); ?>]
        <?php echo $suite->getTitle(); ?>
    </h1>
    <?php echo $suite->getProgramParse(); ?>

    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Tests.create();">Create</a>

    <hr/>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        <?php foreach($tests as $entity): ?>
        <tr style="font-weight: bold;" class="suites">
            <td>
                <?php echo $entity->getKey(); ?>
            </td>
            <td>
                <?php echo $entity->getTitle(); ?>
            </td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Suites.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>