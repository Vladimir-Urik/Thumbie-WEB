function setCookie(cname, cvalue, dn) {
    var d = new Date();
    d.setTime(d.getTime() + (dn*2*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}