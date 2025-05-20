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
            'key': key
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
            'key': key,
            'title': jq_block.find('[name="title"]').val(),
            'goal': jq_block.find('[name="goal"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'program': jq_block.find('[name="program"]').val()
        }, function (data) {
            Requests.Tests.getCollection();
        }, function () {

        });
    }
}