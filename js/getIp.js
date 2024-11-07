if(typeof(userIpHome) != "undefined"){
    var userIpHome;
    $(function() {
        $.getJSON("https://api.ipify.org?format=jsonp&callback=?",
        function(json) {
        userIpHome = json.ip;
        document.querySelector(".ip").value = userIpHome;
            }
        );
    });
}else{
    $(function() {
        $.getJSON("https://api.ipify.org?format=jsonp&callback=?",
        function(json) {
        userIpHome = json.ip;
        document.querySelector(".ip").value = userIpHome;
            }
        );
    });
}


