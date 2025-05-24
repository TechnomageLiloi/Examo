Requests.Maps = {
    show: function ()
    {
        API.request('Maps.Show', {
            debug: false
        }, function (data) {

            let url = window.location.href;
            if(url.indexOf('#') >= 0)
            {
                alert(url);
                return;
            }

            $('#page').html(data.render);
        }, function () {

        });
    }
}