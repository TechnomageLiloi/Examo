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
    <a href="javascript:void(0)" onclick="Requests.Suites.save('<?php echo $suite->getKey(); ?>');">Save</a>
    <hr/>
    <table style="width: 100%;">
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>

        <tr><td>Title</td><td><input type="text" name="title" value="<?php echo $suite->getTitle(); ?>"/></td></tr>

        <tr><td>Mark</td><td><input type="text" name="mark" value="<?php echo $suite->getMark(); ?>"/></td></tr>

        <tr><td>Program</td><td><textarea name="program"><?php echo $suite->getProgram(); ?></textarea></td></tr>

        <tr><td>Data</td><td><textarea name="data"><?php echo $suite->getData(); ?></textarea></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Requests.Suites.save('<?php echo $suite->getKey(); ?>');">Save</a>
</div>