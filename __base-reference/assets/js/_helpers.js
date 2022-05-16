const getUrlParams = (url = location.href) => {
	if (!url.includes("?")) {
		return [];
	}

	const search = url.split("?");

	return search[1]
		.split("&")
		.reduce((arr, param) => {
			const param_pair = param.split("=");

			arr[param_pair[0]] = param_pair[1];

			return arr;
		}, []);
};

const updateUrlParam = (param, paramVal, url = location.href) => {
	var TheAnchor = null;
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";

    if (additionalURL) {
        var tmpAnchor = additionalURL.split("#");
        var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];

        if(TheAnchor)
            additionalURL = TheParams;

        tempArray = additionalURL.split("&");

        for (var i=0; i<tempArray.length; i++) {
            if(tempArray[i].split('=')[0] != param) {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }
    else
    {
        var tmpAnchor = baseURL.split("#");
        var TheParams = tmpAnchor[0];
            TheAnchor  = tmpAnchor[1];

        if(TheParams)
            baseURL = TheParams;
    }

    if(TheAnchor)
        paramVal += "#" + TheAnchor;

    var rows_txt = temp + "" + param + "=" + paramVal;

	return baseURL + "?" + newAdditionalURL + rows_txt;
	// window.history.replaceState('', '', baseURL + "?" + newAdditionalURL + rows_txt);
};

const validateEmail = (email) => {
	return email.match(
		/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	);
};

const getVimeoId = (url = "") => {
	return url.match(
		/^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$/im
	)[3];
};

const getYoutubeId = (url = "") => {
	return url.match(
		/(?:youtube(?:-nocookie)?\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i
	)[1];
};

const getVideoIframe = (url = "") => {
	if (url.includes("you")) {
		return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + getYoutubeId(url) + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	}

	if (url.includes("vim")) {
		return '<iframe src="https://player.vimeo.com/video/' + getVimeoId(url) + '?h=576a682a3a&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
	}

	return "";
};
