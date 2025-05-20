<style>
    #ticket-edit input,
    #ticket-edit select,
    #ticket-edit textarea
    {
        width: 50%;
    }

    #ticket-edit textarea
    {
        height: 300px;
    }
</style>
<div id="ticket-edit">
    <a href="javascript:void(0)" onclick="Requests.Tests.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <hr/>
    <table style="width: 100%;">
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>

        <tr><td>Title</td><td><input type="text" name="title" value="<?php echo $entity->getTitle(); ?>"/></td></tr>

        <tr><td>Program</td><td><textarea name="program"><?php echo $entity->getProgram(); ?></textarea></td></tr>

        <tr><td>Status</td><td><input type="text" name="status" value="<?php echo $entity->getStatus(); ?>"/></td></tr>

        <tr><td>Type</td><td><input type="text" name="type" value="<?php echo $entity->getType(); ?>"/></td></tr>

        <tr><td>Done</td><td><input type="text" name="done" value="<?php echo $entity->getDone(); ?>"/></td></tr>

        <tr><td>Hint</td><td><textarea name="hint"><?php echo $entity->getHint(); ?></textarea></td></tr>

        <tr><td>Note</td><td><textarea name="note"><?php echo $entity->getNote(); ?></textarea></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Requests.Tests.save('<?php echo $entity->getKey(); ?>');">Save</a>
</div>