$(function () {
    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

    setTimeout(function(){
        $('.js-bottom-notice').addClass('bottom0');
    }, 350);

    $('.js-os-type').html(OSName);
    // $('.js-file-url').attr('src','https://download.spotify.com/SpotifyInstaller.zip')
});