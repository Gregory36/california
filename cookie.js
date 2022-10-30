class Cookie {
        
    static getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        let res = matches ? decodeURIComponent(matches[1]) : undefined;
        return res == "" ? undefined : res;
    };

    static setCookie(name, value) {
        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + "; max-age=3600";
        document.cookie = updatedCookie;
    };

    static deleteCookie(name) {
        this.setCookie(name, "", {
            'max-age': -1
        });
    };
}