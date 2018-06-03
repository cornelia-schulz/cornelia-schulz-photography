$(function(){
    var message;
    var flickrUrl = 'https://api.flickr.com/services/rest/?method=flickr.people.getPhotos&api_key=bdb99e8bf49184b467481bb378819781&user_id=44258935%40N04&per_page=10&page=1&format=json&jsoncallback=?';
    var flickr = $.ajax({
        url: flickrUrl,
        dataType: "jsonp",
        timeout: 20000
    });
    flickr.error(function () {
        message = $('<p>Unfortunately there was an error. To see my latest work, <a href="https://www.flickr.com/photos/cornelia-schulz/" target="_blank">click here</a>.</p>');
            $(message).appendTo('#flickrcontent');
    });
    flickr.success(function (data) {
        var images = data.photos.photo;
        if (images.length > 0) {
            $.each(images, function(i, image){
                var imageUrl = "https://farm" + image.farm + ".staticflickr.com/"     + image.server + "/" + image.id + "_" + image.secret + "_c.jpg"
                var imageTitle = image.title;
                var img_thumb = $('<img/>').attr("class", "flickrimg lightbox-switch").attr("src", imageUrl).attr("alt", imageTitle);
                $(img_thumb).appendTo("#flickrcontent");
            });
        }
        else {
            message = $('<p>Unfortunately there was an error. To see my latest work, <a href="https://www.flickr.com/photos/cornelia-schulz/" target="_blank">click here</a>.</p>');
                }

            $(message).appendTo('#flickrcontent');
        });

    });
