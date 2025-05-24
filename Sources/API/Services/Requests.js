Requests.Services = {
    Files: {
        show: function (name) {
            API.request('Services.Files.Show', {
                name: name
            }, function (data) {
                $('#page').html(data.render);
            }, function () {

            });
        },
    },

    Text: {
        edit: function (name)
        {
            API.request('Services.Text.Edit', {
                name: name
            }, function (data) {
                $('#service').html(data.render);
            }, function () {

            });
        },

        save: function ()
        {
            if(!confirm('Are you sure?'))
            {
                return;
            }

            const jq_block = $('#services-edit-edit');

            API.request('Services.Text.Save', {
                'path': jq_block.find('[name="path"]').val(),
                'data': jq_block.find('[name="data"]').val(),
            }, function (data) {
                alert('Saved.');
                Requests.Maps.show();
            }, function () {

            });
        }
    }
}