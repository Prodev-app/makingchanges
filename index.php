<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="An awesome coming soon page designed by Prodev" />
<meta name="keywords" content="coming, soon, page, Prodev" />

<title>Prodev - Server distribute</title>
<style>
    body, html  { height: 100%; }html, body, div, span, applet, object, iframe,/*h1,2, h3, h4, h5, h6,*/ p, blockquote, pre,a, abbr, acronym, address,del, dfn, em, font, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td {margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;vertical-align: baseline;background: transparent;}body { line-height: 1; }ol, ul { list-style: none; }blockquote, q { quotes: none; }blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }:focus { outline: 0; }del { text-decoration: line-through; }table {border-spacing: 0; }

    /* Clear Floated Elements http://sonspring.com/journal/clearing-floats */
    .clear {clear: both;display: block;overflow: hidden;visibility: hidden;width: 0;height: 0;}

    /*------------------------------------------------------------------ */

    /* Page Style */
    body{
        color: #e9e2ee;
        font-size: 14px;
        font-family: sans-serif;
        line-height: 20px;
        text-shadow: 0 1px 1px rgba(0,0,0,0.75);
        background: #55575c url(bg.jpg);
        -webkit-box-shadow: inset 0 0 300px rgba(0,0,0,0.5);
        -moz-box-shadow: inset 0 0 300px rgba(0,0,0,0.5);
        box-shadow: inset 0 0 300px rgba(0,0,0,0.5);
    }
    a,
    a:link,
    a:visited {
        color: #c6eaf7;
        font-weight: bold;
        text-decoration:none;
    }
    a:active,
    a:hover {
        color: #d8f3fd;
        text-shadow: 0 1px 1px rgba(0,0,0,0.75), 0 0 5px rgba(198,234,247,0.4);
    }
    p{
        margin-bottom: 0.3em;
    }
    .center,
    img.center {
        text-align: center;
        clear: both;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    #coming-soon{
        background: rgba(0,0,0,0.0);
        display: block;
        position: absolute;
        width: 800px;
        height: 280px;
        top: 50%;
        left: 50%;
        margin: -160px 0 0 -400px;
    }
    #coming-soon h1{
        text-align: center;
        font-size: 35px;
    }
    #coming-soon img{
        clear: both;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
    }
    #coming-soon p{
        text-align: center;
    }

    /*Submit Form*/
    #subscribe{
        width: 552px;
        display: block;
        margin: 20px auto 40px auto;
        padding: 4px;
        background: rgba(0,0,0,0.1);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    #subscribe input{
        display: block;
        font-size: 13px;
        font-weight: bold;
        float: left;
        border: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        padding: 0 10px;
        height: 35px;
    }
    #subscribe input[type="text"],
    #subscribe input[type="email"]{
        color: #c4c4c4;
        margin: 0 4px 0 0;
        width: 443px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
        -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
    }
    #subscribe input[type="submit"]{
        margin:0;
        width: 85px;
        color: #5d7731;
        text-shadow: 0 1px 0 rgba(255,255,255,0.4);
        background: #b6d76f;
        background: -webkit-gradient(linear, left top, left bottom, from(#cae285), to(#9dc954));
        background: -moz-linear-gradient(top,  #cae285,  #9dc954);
        -webkit-box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3);
        -moz-box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3);
        box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3);
    }
    #subscribe input[type="submit"]:hover{
        cursor: pointer;
        -webkit-box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3), 0 0 5px rgba(255,255,190,0.5);
        -moz-box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3), 0 0 5px rgba(255,255,190,0.5);
        box-shadow: inset 0px 1px 2px rgba(255,255,255,1), 0 1px 1px rgba(0,0,0,0.3), 0 0 5px rgba(255,255,190,0.5);
    }
    #subscribe input[type="submit"]:active{
        cursor: pointer;
        position: relative;
        top: 1px;
        text-shadow: 0 -1px 0 rgba(255,255,255,0.4);
        background: #9dc954;
        background: -webkit-gradient(linear, left top, left bottom, from(#9dc954), to(#cae285));
        background: -moz-linear-gradient(top,  #9dc954,  #cae285);
        -webkit-box-shadow: inset 0 0 0 transparent, inset 0 0 0 transparent;
        -moz-box-shadow: inset 0 0 0 transparent, inset 0 0 0 transparent;
        box-shadow: inset 0 0 0 transparent, inset 0 0 0 transparent;
    }

    #coming-soon .twitter:before{
        content: '@';
        padding-top: 2px;
        padding-left: 24px;
        background: url(twitter.png) no-repeat 0 0px;
    }
    #coming-soon .twitter{
        padding-top: 5px;
    }
</style>

</head>

<body>

<div id="coming-soon">

<h1>Prodev</h1>

<p>Server distributed by Prodev.</p>
	<br>
<a href="https://prodev.app" title="Visit Prodev web site"class="center">Gosola to Prodev</a>

</div>

</body>
</html>