Requests.Suites = {
    getCollection: function ()
    {
        API.request('Suites.Collection', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key)
    {
        API.request('Suites.Show', {
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

        API.request('Suites.Create', {
            'debug': true
        }, function (data) {
            Requests.Suites.getCollection();
        }, function () {

        });
    },


    edit: function ()
    {
        API.request('Suites.Edit', {
            'debug': true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#ticket-edit');
        API.request('Suites.Save', {
            'title': jq_block.find('[name="title"]').val(),
            'mark': jq_block.find('[name="mark"]').val(),
            'data': jq_block.find('[name="data"]').val(),
            'program': jq_block.find('[name="program"]').val()
        }, function (data) {
            Requests.Suites.getCollection();
        }, function () {

        });
    }
}