Requests.Tests = {
    getCollection: function ()
    {
        API.request('Tests.Collection', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key)
    {
        API.request('Tests.Show', {
            'key': key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Tests.Create', {
            'debug': true
        }, function (data) {
            Requests.Tests.getCollection();
        }, function () {

        });
    },


    edit: function (key)
    {
        API.request('Tests.Edit', {
            'key_test': key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#ticket-edit');
        API.request('Tests.Save', {
            'key_test': key,
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'type': jq_block.find('[name="type"]').val(),
            'done': jq_block.find('[name="done"]').val(),
            'hint': jq_block.find('[name="hint"]').val(),
            'note': jq_block.find('[name="note"]').val()
        }, function (data) {
            Requests.Suites.getCollection();
        }, function () {

        });
    }
}