<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once 'header.php';
echo <<<_information
<h2>Check out a few of our songs!</h2>
<p> We actually haven't put any of our songs on soundcloud yet. But this is how we would show them on this
website</p>
_information;


echo <<<_soundcloud
<iframe width="50%" height="350" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1136770459&color=%23465902&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/realestk" title="RealestK" target="_blank" style="color: #cccccc; text-decoration: none;">RealestK</a> · <a href="https://soundcloud.com/realestk/realestk-wfm" title="RealestK - WFM" target="_blank" style="color: #cccccc; text-decoration: none;">RealestK - WFM</a></div>
_soundcloud;
require_once 'footer.php';
?>