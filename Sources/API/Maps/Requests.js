Requests.Maps = {
    show: function ()
    {
        API.request('Maps.Show', {
            debug: false
        }, function (data) {

            let url = window.location.href;
            if(url.indexOf('#') >= 0)
            {
                let file = url.split('#')[1];
                Requests.Services.Files.show(file);
                return;
            }

            $('#page').html(data.render);
        }, function () {

        });
    }
}