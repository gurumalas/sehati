<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:css='false' b:responsive='true' b:version='2' class='v2' expr:dir='data:blog.languageDirection' expr:lang='data:blog.locale' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<!--
 __     _____ ___  ____    _    _____ _____ _     ___ _   _ _  __ __     ______  
 \ \   / /_ _/ _ \/ ___|  / \  |  ___| ____| |   |_ _| \ | | |/ / \ \   / /___ \ 
  \ \ / / | | | | \___ \ / _ \ | |_  |  _| | |    | ||  \| | ' /   \ \ / /  __) \
   \ V /  | | |_| |___) / ___ \|  _| | |___| |___ | || |\  | . \    \ V /  ___) / 
    \_/  |___\___/|____/_/   \_\_|   |_____|_____|___|_| \_|_|\_\    \_/   ____/
-->
<head>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet'/>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'/>
    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'/>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'/>
    <link href='//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'/>
    <link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>
    <b:if cond='data:view.isHomepage'> <b:if cond='data:view.isPost'> <b:if cond='data:view.isPage'> <b:if cond='data:blog.url'><meta expr:content='data:blog.url' property='og:url'/> </b:if><meta expr:content='data:blog.title' property='og:site_name'/> <b:if cond='data:blog.pageName'><meta expr:content='data:blog.pageName' property='og:title'/> </b:if></b:if></b:if></b:if><meta content='blog' property='og:type'/> <b:if cond='data:blog.postImageUrl'><meta expr:content='data:blog.postImageUrl' property='og:image'/> <b:else/> <b:if cond='data:blog.postImageThumbnailUrl'><meta expr:content='data:blog.postThumbnailUrl' property='og:image'/> <b:else/><meta content='https://4.bp.blogspot.com/-y24QaW9akMs/XI_gtCUYs0I/AAAAAAAAAjM/2XVgB4Vrx_0K__TIy84kTu-hrDiaE5f_QCLcBGAs/s1600/source.png' property='og:image'/> </b:if></b:if><b:if cond='data:blog.metaDescription'><meta expr:content='data:blog.metaDescription' property='og:description'/> <b:else/><meta expr:content='data:post.snippet' property='og:description'/> </b:if><meta expr:content='data:blog.title' property='og:site_name'/><meta content='https://www.facebook.com/rizqi.1428' property='article:author'/><meta content='https://www.facebook.com/rizqi.1428' property='article:publisher'/><meta content='XXX' property='fb:admins'/><meta content='en_US' property='og:locale'/><meta content='en_GB' property='og:locale:alternate'/><meta content='id_ID' property='og:locale:alternate'/><meta content='summary_large_image' name='twitter:card'/><meta content='xxx' name='twitter:site'/><meta content='xxx' name='twitter:creator'/> <b:if cond='data:view.isHomepage'> <b:if cond='data:view.isPost'> <b:if cond='data:view.isPage'><meta expr:content='data:blog.title' name='twitter:title'/><meta expr:content='data:blog.title' name='twitter:image:alt'/> <b:if cond='data:blog.pageName'><meta expr:content='data:blog.pageName' name='twitter:title'/><meta expr:content='data:blog.pageName' name='twitter:image:alt'/> </b:if></b:if></b:if></b:if> <b:if cond='data:blog.postImageUrl'><meta expr:content='data:blog.postImageUrl' name='twitter:image'/> <b:else/> <b:if cond='data:blog.postImageThumbnailUrl'><meta expr:content='data:blog.postThumbnailUrl' name='twitter:image'/> <b:else/><meta content='https://3.bp.blogspot.com/-YeMyeENfMjA/XF-l2FDU1sI/AAAAAAAAAK0/CtEY_l5HGW8pfAGS-xR45c0VTVESowiZgCLcBGAs/s1600/Logo.png' name='twitter:image'/> </b:if></b:if> <b:if cond='data:blog.metaDescription'><meta expr:content='data:blog.metaDescription' name='twitter:description'/> <b:else/><meta expr:content='data:post.snippet' name='twitter:description'/> </b:if><meta content='width=device-width, initial-scale=1' name='viewport'/> <b:include data='blog' name='all-head-content'/><b:if cond='data:blog.pageType in {&quot;index&quot;} and data:blog.homepageUrl == data:blog.url'><title><data:blog.pageTitle/></title> <b:elseif cond='data:blog.pageType in {&quot;item&quot;,&quot;static_page&quot;}'/><title><data:blog.pageName/> - <data:blog.title/></title> <b:elseif cond='data:blog.pageType in {&quot;index&quot;} and data:blog.pageName == &quot;&quot;'/><title> <b:switch var='data:blog.locale'><b:case value='id'/>Semua Postingan - <data:blog.title/><b:default/>All Posts - <data:blog.title/> </b:switch></title> <b:elseif cond='data:blog.pageType in {&quot;error_page&quot;}'/><title> <b:switch var='data:blog.locale'><b:case value='id'/> Halaman tidak ditemukan - <data:blog.title/><b:default/>Page Not Found - <data:blog.title/> </b:switch></title> <b:else/><title><data:blog.pageName/></title> </b:if><b:if cond='data:blog.pageType in {&quot;index&quot;} and data:blog.homepageUrl == data:blog.url'><meta expr:content='data:blog.title' name='keywords'/> <b:elseif cond='data:blog.pageType in {&quot;item&quot;,&quot;static_page&quot;}'/><meta expr:content='data:blog.pageName' name='keywords'/> </b:if><b:if cond='data:blog.pageType == &quot;item&quot;'><meta expr:content='data:blog.pageName' property='og:title'/><meta content='article' property='og:type'/> <b:else/><meta expr:content='data:blog.pageTitle' property='og:title'/><meta content='website' property='og:type'/> </b:if> <b:if cond='data:blog.metaDescription'><meta expr:content='data:blog.metaDescription' property='og:description'/> </b:if><meta expr:content='data:blog.title' property='og:site_name'/>

    <b:skin><![CDATA[/*
        /*
        -----------------------------------------------
        Safelink Blogger Template Style
        Name    :Viosafelink V3
        Version :V3 (24 April 2019)
        Designer:Elianadzgn
        Url     :devtamplate.blogspot.com
        license :Free Version
        ----------------------------------------------- */

        /**
        * Eric Meyer&#39;s Reset CSS v2.0 http://meyerweb.com/eric/tools/css/reset/
        * http://cssreset.com
        */
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;/*font-size:100%;*/font:inherit;vertical-align:baseline;}
        /* HTML5 display-role reset for older browsers */
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;display:block;}*{margin:0;padding:0;}html{display:block;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}
        /* Blogger CSS Reset */

        /* Artikel Terbaru */
        .artikel-terbaru ul li {
        border-bottom: 2px dotted $(label.border.color);
        padding-bottom: 8px;
        margin-bottom: 8px;
        font-weight: 500;
        }
        .artikel-terbaru ul li a{
        color:#49ace1;
        }
        .artikel-terbaru ul li a:hover{
        color:#a7a4aa;
        }
        body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color:none;

        }
        .list-label-widget-content ul li, .LinkList ul li, .PageList ul li {
        border-bottom: 2px dotted $(label.border.color);
        padding-bottom: 5px;
        }
        .artikel-terbaru ul li:before, .list-label-widget-content ul li:before, .LinkList ul li:before, .PageList ul li:before {
        content: "\f14b";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        margin-right: 6px;
        }
        .artikel-terbaru ul li:before {
        content: "\f14b";
        }
        .list-label-widget-content ul li:before {
        content: "\f07b";
        }
        .LinkList ul li:before {
        content: "\f14c";
        }
        .PageList ul li:before {
        content: "\f249";
        }

        .section,.widget{margin:0 0 0 0;padding:0 0 0 0;}
        .navbar,.blog-feeds,.feed-links,#backlinks-container,a.home-link,.blog-mobile-link{display:none;}
        .post-body .separator > a, .post-body .separator > span {margin-left: 0 !important;}
        .quickedit,.thread-toggle,.edit-post,.item-control{display:none;}
        /* disable font boosting on mobile browsers */
        body * {
        max-height: 9999999em; /* Chrome for Android */
        -moz-text-size-adjust: none; /* Firefox Mobile */
        }
        /* FRAMEWORK */
        strong,b{font-weight:bold;}
        cite,em,i{font-style:italic;}
        a:link{color:#49ACE1;text-decoration:none;outline:none;}
        a:visited{color:#49ACE1;text-decoration:none;}
        a:hover{color:#444444;text-decoration:none;}
        a img{border:none;border-width:0;outline:none;}
        abbr,acronym{border-bottom:1px dotted;cursor:help;}
        sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%;}
        sub{top:.4em;}small{font-size:86%;}
        kbd{font-size:80%;border:1px solid #777;padding:2px 5px;border-bottom-width:2px;border-radius:3px;}
        mark{background-color:#ffce00;color:black;}
        p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0;}
        hr{height:1px;border:none;background-color:#666;}
        h1{font-size:1.8rem}
        h2{font-size:1.6rem}
        h3{font-size:1.4rem}
        h4{font-size:1.2rem}
        h5{font-size:1rem}
        h6{font-size:0.9rem}
        /* heading */
        h1,h2,h3,h4,h5,h6 {
        margin: 0 0 0.6em;
        }
        /* list */
        ol,ul,dl{margin: .5em 0em .5em 3em}
        li{margin: .5em 0}
        dt{font-weight: 500}
        dd{margin: 0 0 .5em 2em}
        /* form */
        input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline;}
        textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        /* code & blockquote */
        pre,code{font-family:"Courier New",Courier,Monospace;color:inherit;}
        pre{white-space:pre;word-wrap:normal;overflow:auto;}
        blockquote{background:#f6f6f6;margin-left:2em;margin-right:2em;padding:1em 1em;font-style:italic;font-size:105%;}
        blockquote:before {
        content: "\f10d";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        padding-right:4px;
        color:#666;
        }
        /* table */
        table[border="1"] td, table[border="1"] th {
        vertical-align: top;
        text-align: left;
        font-size: 13px;
        padding: 3px 5px;
        border: 1px solid #f6f6f6;
        }
        table[border="1"] th {
        background: #eee;
        }
        table, img {
        max-width: 100%;
        height: auto;
        }
        iframe {
        max-width: 100%;
        }
        td.tr-caption {
        color: #777;
        }
        .clear {
        clear: both;
        }
        .clear:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
        }
        /* TRANSISI */
        a:link, .label-count, #cssmenu ul ul li, #cssmenu > ul > li.has-sub > a:before, #cssmenu ul ul li.has-sub > a:before, .button:before, .button.menu-opened:after, .berlangganan-box input.submit-email[type="submit"], .berlangganan-box input.email-address[type="text"] {
        transition: all 0.2s;
        -moz-transition: all 0.2s;
        -webkit-transition: all 0.2s;
        }
        .related-post-style-3 .related-post-item {
        transition: opacity 0.2s linear;
        }
        .img-thumbnail, .img-thumbnail img, .label-info-th a, .info-1, .info-2, h2.post-title, .post-snippet, .sidebar-sticky {
        transition: all .2s linear;
        -o-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -webkit-transition: all .2s linear;
        }
        #searchfs input[type="search"], h1,h2,h3,h4,h5,h6 {
        transition: font-size .2s linear;
        -o-transition: font-size .2s linear;
        -moz-transition: font-size .2s linear;
        -webkit-transition: font-size .2s linear;
        }
        .img-thumbnail, .img-thumbnail img, .FeaturedPost .post-summary, .FeaturedPost .image, .PopularPosts .item-thumbnail, .PopularPosts .widget-content ul li img, .Profile .widget-content, .PopularPosts .widget-content ul, .list-label-widget-content ul, .label-info-th a, .displaypageNum a, .showpage a, .pagecurrent, #blog-pager-newer-link a, #blog-pager-older-link a, .Profile .profile-link, .label-size, .berlangganan-box, #baca-juga, #baca-juga h2, .related-post-item-thumbnail, #baca-juga ul, .PopularPosts ul li .item-thumbnail-only:before, .PopularPosts ul li .item-content:before {
        border-radius: 3px;
        }
        #share a:first-child {
        border-radius: 3px 0 0 3px;
        }
        #share a:last-child {
        border-radius: 0 3px 3px 0;
        }
        body {
        background: #f7f7f7 none repeat scroll top left;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
        color: #777777;
        font: normal normal 16px Roboto, Arial, sans-serif;
        text-align: left;
        }
        /* WRAPPER */
        /*#wrapper {
        background: #fff;
        max-width: 1000px;
        margin: 0 auto;
        padding: 70px 30px 30px;
        overflow: hidden;
        }*/
        #wrapper {
        background: #fff;
        max-width: 1000px;
        margin: 0 auto;
        padding: 70px 30px 30px;
        overflow: hidden;
        position: relative;
        margin-top: 70px;
        }
        /* HEADER */

        #header-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
        padding: 10px 0px 10px 0px;
        }
        .header {
        max-width: 400px;
        float: left;
        margin-right: 28px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        }
        .header h1.title, .header p.title {
        font: 500 25px Roboto, Arial, sans-serif;
        color: #49ace1;
        margin: 0;
        padding: 9px 0;
        }
        .header .description {
        color: #ffffff;
        margin: -10px 0 4px 0;
        padding: 0;
        font-size: 0.7em;
        display: none;
        }
        .header a, .header a:hover  {
        color: #49ace1;
        }
        .header img {
        display: block;
        width: auto;
        margin: 4px 0;
        max-height: 38px;
        }
        /* POST WRAPPER */
        /*.post-container {
        padding-right: 25px;
        }*/
        #post-wrapper {
        background:transparent;
        float:left;
        max-width:100%;
        margin:0 0 10px;
        }
        .breadcrumbs a {
        color: #49ACE1;
        }
        .post {
        margin-bottom: 20px;
        }
        .post-body {
        font:normal normal 16px Roboto, Arial, sans-serif;
        color:#777777;
        line-height: 1.6em;
        text-align: left;
        word-wrap: break-word;
        }
        h2.post-title, h1.post-title {
        font: 500 20px Roboto, Arial, sans-serif;
        }
        h1.post-title {
        font-size: 30px;
        margin-bottom: 12px;
        }
        h2.post-title {
        margin-bottom: 12px;
        }
        h2.post-title a, h1.post-title a, h2.post-title, h1.post-title {
        color: #444444;
        line-height: 1.3em;
        }
        h2.post-title a:hover, h1.post-title a:hover {
        color: #49ACE1;
        }
        .img-thumbnail {
        position: relative;
        float: left;
        width: 255px;
        height: 170px;
        }
        .label-info-th {
        display: block;
        z-index: 2;
        position: relative;
        margin-bottom: 10px;
        }
        .label-line, .label-line-c {
        position:relative;
        }
        .label-line-c {
        text-align: center;
        margin-bottom: 6px;
        }
        .label-line:before, .label-line-c:before {
        z-index: 1;
        content: "";
        width: 100%;
        height: 2px;
        background: #efefef;
        position: absolute;
        top: 50%;
        left: 0;
        margin-top: -2px;
        }
        .label-info-th a {
        color: #ffffff;
        background:#49ace1;
        display: inline-block;
        padding: 6px 12px;
        margin: 1px 0;
        font-size: 11px;
        font-weight: 500;
        text-transform: uppercase;
        border: 2px solid #efefef;
        }
        .label-info-th a:hover {
        color: #a7a4aa;
        }
        .post-info {
        color: #777777;
        font: normal normal 13px Roboto, Arial, sans-serif;
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        }
        .info-1 {
        margin-top: 12px;
        }
        .info-2 {
        margin-top: 12px;
        }
        .info-3 {
        margin-bottom: 1.6em;
        }
        .post-info a {
        display: inline-block;
        color: #777777;
        }
        .post-info a:hover {
        color: #49ACE1;
        }
        .author-info:after, .time-info:after, .label-info:after {
        content: "-";
        padding: 0 2px;
        }
        .edit-post:before {
        content: "-";
        padding: 0 2px;
        }
        /* AUTHOR POST PROFILE */
        .author-profile {
        overflow: hidden;
        margin: 30px 0;
        line-height: 1.5;
        }
        .author-profile img {
        border: none;
        float: left;
        margin-right: 15px;
        border-radius: 46px;
        }
        .author-profile > span {
        font-size: 14px;
        color: #888;
        }
        .author-profile a.g-profile {
        font-weight: 500;
        color: #444444;
        font-size: 18px;
        margin-bottom: 5px;
        display: inline-block;
        }
        .author-profile a.g-profile:hover {
        color: #49ACE1;
        }
        .author-profile a.g-profile:after {
        content: "\f058";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        padding-right: 4px;
        color: #49ACE1;
        }
        /* SIDEBAR WIDGET */
        #sidebar-wrapper {
        background:transparent;
        float:right;
        width:30%;
        max-width:300px;
        margin:0 auto;
        }
        #sidebar-wrapper .widget {
        overflow: hidden;
        }
        .sidebar h2, .sidebar-sticky h2, .above-post-widget h2, .comments h3, .breadcrumbs {
        font: 500 15px Roboto, Arial, sans-serif;
        margin-bottom: 15px;
        padding: 0px 0px 5px;
        color: #000;
        text-transform: uppercase;
        display: inline-block;
        border-bottom: 2px solid #efefef;
        }
        .latest-post-title h2{
        font: 500 25px Roboto, Arial, sans-serif;
        margin-bottom: 15px;
        padding: 0px 0px 5px;
        color: #000;
        text-transform: uppercase;
        border-bottom: 2px solid #007bff;
        text-align: center;
        }
        .section:last-child .widget:last-child, .sidebar .widget, .sidebar-sticky .widget, .above-post-widget .widget, .bellow-header-widget .widget, #blog-pager {
        margin:0 0 30px;
        clear:both;
        }
        .sidebar ul, .sidebar ol, .sidebar-sticky ul, .sidebar-sticky ol {
        list-style-type:none;
        margin: 0;
        padding: 0;
        }
        .sidebar li, .sidebar-sticky li {
        margin:5px 0;
        padding: 0;
        }
        .sidebar-sticky {
        z-index: 997;
        }
        .bellow-header-widget {
        text-align: center;
        }
        .bellow-header-widget h2 {
        display: none;
        }
        .bellow-header-widget .widget {
        overflow: hidden;
        }
        .bellow-header-widget img, .bellow-header-widget iframe{
        max-width: 100%;
        border: none;
        overflow: hidden;
        }
        /* CUSTOM WIDGET */
        .widget ul {
        line-height:1.4em;
        }
        /* Label */
        .label-size-1,.label-size-2,.label-size-3,.label-size-4,.label-size-5 {
        font-size:100%;
        opacity:10
        }
        .cloud-label-widget-content {
        text-align:left
        }
        .label-size {
        transition: all 0.25s;
        -moz-transition: all 0.25s;
        -webkit-transition: all 0.25s;
        line-height:1.2;
        display: block;
        float: left;
        margin: 0 3px 3px 0;
        color: $(body.link.color);
        font-size: 13px;
        text-transform: uppercase;
        border: 1px solid $(body.link.color);
        }
        .label-size a,.label-size span{
        display: inline-block;
        color: $(body.link.color);
        padding: 6px 8px;
        }
        .label-size:hover {
        border: 1px solid $(body.link.hover.color);
        }
        .label-size:hover a, .label-size:hover .label-count {
        color: $(body.link.hover.color);
        }
        .label-count {
        margin-left: -12px;
        margin-right: 0px;
        }

        .list-label-widget-content ul {
        -moz-column-count: 2;
        -moz-column-gap: 8px;
        -webkit-column-count: 2;
        -webkit-column-gap: 8px;
        column-count: 2;
        column-gap: 8px;
        }

        .list-label-widget-content ul li {
        border-bottom: 2px dotted $(label.border.color);
        padding-bottom: 5px;
        margin: 0 0;
        padding-top: 5px;
        }

        .bellow-header-widget .cloud-label-widget-content {
        }

        .bellow-header-widget .cloud-label-widget-content .label-size {
        font-weight: bold;
        }
        .bellow-header-widget .cloud-label-widget-content .label-size a, .bellow-header-widget .cloud-label-widget-content .label-size span {
        padding:15px 20px;
        }

        /* Feed */
        .Feed ul li {
        display: block;
        margin: 0 0 10px;
        }
        .Feed ul li:last-child {
        margin-bottom: 10px;
        }
        .Feed .item-date, .Feed .item-author {
        color: #999;
        }
        .Feed .item-title {
        font-weight: 500;
        }
        /* Popular Posts */
        .PopularPosts .widget-content ul, .PopularPosts .widget-content ul li, .PopularPosts .widget-content ul li img, .PopularPosts .widget-content ul li a, .PopularPosts .widget-content ul li a img {
        margin:0 0;
        padding:0 0;
        list-style:none;
        border:none;
        outline:none;
        }
        .PopularPosts .widget-content ul {
        margin: 0;
        list-style:none;
        counter-reset:num;
        }
        .PopularPosts .widget-content ul li img {
        display: block;
        width: 70px;
        height: 70px;
        float: left;
        }
        .PopularPosts .widget-content ul li {
        margin: 0 0 10px;
        counter-increment: num;
        position: relative;
        }
        .PopularPosts ul li:last-child {
        margin-bottom: 0px;
        }
        .PopularPosts ul li .item-title a, .PopularPosts ul li a {
        font-weight: 500;
        text-decoration: none;
        color: #444444;
        }
        .PopularPosts ul li .item-title a:hover, .PopularPosts ul li a:hover {
        color: #49ACE1;
        }
        .PopularPosts ul li .item-thumbnail-only:before, .PopularPosts ul li .item-content:before {
        content: counter(num) !important;
        font-size: 30px;
        font-weight: 500;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        background: linear-gradient(#49ACE1, #fff);
        color: #fff !important;
        width: 30px;
        padding-top: 10px;
        text-align: center;
        }
        .PopularPosts .item-title, .PopularPosts .item-thumbnail, .PopularPosts .item-snippet {
        margin-left: 34px;
        }
        .PopularPosts .item-title {
        line-height: 1.6;
        margin-right: 8px;
        }
        .PopularPosts .item-thumbnail {
        float: left;
        margin-right: 8px;
        }
        .PopularPosts .item-snippet {
        line-height: 1.6em;
        font-size: 14px;
        margin-top: 8px;
        }
        /* Featured Post */
        .FeaturedPost .post-summary {
        background: #f7f7f7;
        position: relative;
        padding: 0;
        min-height: 200px;
        max-height: 450px;
        overflow: hidden;
        }
        .FeaturedPost .post-summary h3 {
        font: 500 20px Roboto, Arial, sans-serif;
        position: absolute;
        bottom: 58px;
        z-index: 1;
        font-size: 28px;
        margin: 0 15px;
        }
        .FeaturedPost .post-summary h3:after {
        content:"";
        position:absolute;
        top:-0.25em;
        right:100%;
        bottom:-0.25em;
        width:0.25em;
        }
        .FeaturedPost .post-summary h3 a {
        color: #444444;
        background: #fff;
        padding: 2px 8px;
        -webkit-box-decoration-break: clone;
        -o-box-decoration-break: clone;
        box-decoration-break: clone;
        }
        .FeaturedPost .post-summary h3 a:hover {
        color: #49ACE1;
        }
        .FeaturedPost .post-summary p {
        position: absolute;
        background: #ffffff;
        color: #5a5a5a;
        padding: 3px 8px;
        bottom: 15px;
        margin: 0 15px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 90%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        .FeaturedPost .image {
        display: block;
        }
        /* Profile */
        .Profile .widget-content {
        text-align: center;
        padding: 30px;
        border: 2px solid #efefef;
        }
        .Profile .profile-img {
        border-radius: 50%;
        float: none;
        }
        .Profile .profile-name-link {
        color: #777777;
        font-size: .9em;
        opacity: 1;
        overflow: hidden;
        }
        .Profile .profile-name-link:hover {
        color: #49ACE1;
        }
        .Profile .profile-link {
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 400;
        padding: 6px 22px;
        display: inline-block;
        line-height: normal;
        }
        .profile-textblock {
        margin: .8em 0;
        font-size: 14px;
        }
        .profile-img {
        float: left;
        display:inline;
        opacity:10;
        margin:0 6px 3px 0;
        }
        .profile-data {
        margin: 0;
        }
        .profile-datablock {
        margin: .5em 0;
        }
        .profile-name-link {
        background: no-repeat left top;
        box-sizing: border-box;
        display: inline-block;
        max-width: 100%;
        min-height: 20px;
        padding-left: 20px;
        }
        /* Archive */
        #ArchiveList .toggle {
        cursor: pointer;
        font-family: Arial, sans-serif;
        }
        #ArchiveList .toggle-open {
        _font-size: 1.7em;
        line-height: .6em;
        }
        #ArchiveList {
        text-align: left;
        }
        #ArchiveList a.post-count-link, #ArchiveList a.post-count-link:link, #ArchiveList a.post-count-link:visited {
        text-decoration: none;
        }
        #ArchiveList a.toggle, #ArchiveList a.toggle:link, #ArchiveList a.toggle:visited, #ArchiveList a.toggle:hover {
        color: inherit;
        text-decoration: none;
        }
        .BlogArchive #ArchiveList ul li {
        background: none;
        list-style: none;
        list-style-image: none;
        list-style-position: outside;
        border-width: 0;
        padding-left: 15px;
        text-indent: -15px;
        margin: .25em 0;
        background-image: none;
        }
        .BlogArchive #ArchiveList ul ul li {
        padding-left: 1.2em;
        }
        .BlogArchive #ArchiveList ul {
        margin: 0;
        padding: 0;
        list-style: none;
        list-style-image: none;
        border-width: 0;
        }
        .BlogArchive #ArchiveList ul.posts li {
        padding-left: 1.3em;
        }
        #ArchiveList .collapsed ul {
        display: none;
        }
        /* Artikel Terbaru */
        .artikel-terbaru ul li {
        border-bottom: 2px dotted #efefef;
        padding-bottom: 8px;
        margin-bottom: 8px;
        font-weight: 500;
        }
        .list-label-widget-content ul li, .LinkList ul li, .PageList ul li {
        border-bottom: 2px dotted #efefef;
        padding-bottom: 5px;
        }
        .artikel-terbaru ul li:before, .list-label-widget-content ul li:before, .LinkList ul li:before, .PageList ul li:before {
        content: "\f14b";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        margin-right: 6px;
        }
        .artikel-terbaru ul li:before {
        content: "\f14b";
        }
        .list-label-widget-content ul li:before {
        content: "\f07b";
        }
        .LinkList ul li:before {
        content: "\f14c";
        }
        .PageList ul li:before {
        content: "\f249";
        }
        /* SUBSCRIBER BOX */
        .berlangganan-box {
        background: #5b86e5;
        background: linear-gradient(to right, #5b86e5, #36d1dc);
        color: #ffffff;
        padding: 15px;
        margin: 20px 0;
        text-align: center;
        }
        .berlangganan-box p {
        margin:15px 0;
        }
        .berlangganan-box input.email-address[type="text"] {
        width: 60%;
        padding: 10px;
        text-align: center;
        border-radius: 2px;
        border: none;
        outline: none;
        }
        .berlangganan-box input.submit-email[type="submit"] {
        background: #fff;
        padding: 10px 15px;
        border-radius: 2px;
        color: #777777;
        border: none;
        outline: none;
        }
        .berlangganan-box input.submit-email[type="submit"]:hover {
        background: #777777;
        color: #fff;
        cursor: pointer;
        }
        .berlangganan-box input.email-address[type="text"]:focus {
        background: #fffcd2;
        }
        /* Back to top */
        #back-to-top {
        background:#49ACE1;
        color:#ffffff;
        padding:8px 10px;
        font-size:24px;
        border-radius: 22px;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.15), 0 1px 1px 0 rgba(0,0,0,.30);
        }
        .back-to-top {
        position: fixed !important;
        position: absolute;
        bottom: 25px;
        right: 20px;
        z-index: 998;
        }
        /* Share button */
        .share-this-pleaseeeee {
        display: inline-block;
        margin: 0;
        color: #afafaf;
        text-transform: uppercase;
        font-size: 16px;
        background: #fff;
        z-index: 1;
        position: relative;
        padding: 0 10px;
        font-weight: 500;
        }
        #share-container {
        margin: 20px auto;
        overflow: hidden;
        }
        #share {
        width: 100%;
        text-align: center;
        }
        #share a {
        width: 25%;
        height: 40px;
        display: block;
        font-size: 24px;
        color: #fff;
        transition: opacity 0.15s linear;
        float: left;
        }
        #share a:hover {
        opacity: 0.8;
        }
        #share i {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        }
        .facebook {
        background: #3b5998;
        }
        .twitter {
        background: #55acee;
        }
        .googleplus {
        background: #dd4b39;
        }

        @keyframes Gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}
        #theboegisb {background:linear-gradient(-50deg,#01a3a4,#9A12B3,#22313F,#3A539B);background-size:320% 200%;animation:Gradient 15s ease infinite;width:auto;max-width:100%;font-weight:700;overflow:hidden;position:relative;}
        #theboegisb .buttton1{list-style: none;overflow:hidden;margin:0;position:absolute;left:50%;top:60%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);}
        #theboegisb .buttton1 a.download1{list-style:none;display:inline-block;background:#fff;color:#01a3a4;font-size:14px;font-weight:200;padding:8px 18px;border-radius:3px;overflow:hidden;}
        #theboegisb .buttton1 a.download1:hover{background:#34495E;color:#fff;overflow:hidden;}
        #theboegisb .visible1{margin:0;position:absolute;left:50%;margin-right;-px;top:40%;color:#fff;font-size:2rem;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);}
        .circles{position:absolute;top:0;left:0;right:0;bottom:0;overflow:hidden;margin:0}
        .circles li{position:absolute;display:block;list-style:none;width:20px;height:20px;background:#49ace1;animation:animate 45s linear infinite;bottom:-150px;z-index:0}
        .circles li:nth-child(1){left:25%;width:40px;height:40px;animation-delay:0s}
        .circles li:nth-child(2){left:10%;width:10px;height:10px;animation-delay:2s;animation-duration:12s}
        .circles li:nth-child(3){left:70%;width:10px;height:10px;animation-delay:4s}
        .circles li:nth-child(4){left:40%;width:40px;height:40px;animation-delay:0s;animation-duration:18s}
        .circles li:nth-child(5){left:65%;width:10px;height:10px;animation-delay:0s}
        .circles li:nth-child(6){left:75%;width:30px;height:30px;animation-delay:3s}
        .circles li:nth-child(7){left:35%;width:20px;height:20px;animation-delay:7s}
        .circles li:nth-child(8){left:50%;width:15px;height:15px;animation-delay:15s;animation-duration:45s}
        .circles li:nth-child(9){left:20%;width:5px;height:5px;animation-delas;animation-duration:35s}
        .circles li:nth-child(10){left:85%;width:30px;height:30px;animation-delay:0s;animation-duration:11s}
        @keyframes animate{0%{transform:translateY(0) rotate(0deg);opacity:1;border-radius:0}100%{transform:translateY(-1000px) rotate(720deg);opacity:0;border-radius:50%}}

        .linkedin {
        background: #0077b5;
        }
        .pinterest {
        background: #cb2027;
        }
        .whatsapp {
        background: #25d366;
        }
        /* Status Msg */
        .status-msg-wrap {
        font-size: 110%;
        width: 90%;
        margin: 0 auto 15px;
        position: relative;
        }
        .status-msg-border {
        border: none;
        filter: alpha(opacity=40);
        -moz-opacity: .4;
        opacity: .4;
        width: 100%;
        position: relative;
        }
        .status-msg-bg {
        background-color: transparent;
        opacity: .8;
        filter: alpha(opacity=30);
        -moz-opacity: .8;
        width: 100%;
        position: relative;
        z-index: 1;
        }
        .status-msg-body {
        text-align: center;
        padding: .3em 0;
        width: 100%;
        position: absolute;
        z-index: 4;
        }
        .status-msg-hidden {
        visibility: hidden;
        padding: .3em 0;
        }
        .status-msg-wrap a {
        padding-left: .4em;
        }
        /* SLOT IKLAN */
        .iklan-tengah1 .widget, .iklan-tengah2 .widget, .iklan-bawah .widget, .iklan-atas .widget, .iklan-tengah1 .widget-content, .iklan-tengah2 .widget-content, .iklan-bawah .widget-content, .iklan-atas .widget-content {
        margin:0 !important;
        padding 0;
        }
        .iklan-tengah1 h2, .iklan-tengah2 h2, .iklan-bawah h2, .iklan-atas h2 {
        display: none;
        }
        #kode-iklan-atas ins, #kode-iklan-bawah ins, #kode-iklan-tengah1 ins, #kode-iklan-tengah2 ins {
        margin: 20px 0;
        }
        .post-body #kode-iklan-tengah1, .post-body #kode-iklan-tengah2, .post-body #kode-iklan-bawah, .post-body #kode-iklan-atas {
        text-align: center;
        display: block;
        }
        .post-body #baca-juga {
        display: block;
        }
        /* PAGE NAVIGATION */
        #blog-pager {
        clear:both !important;
        padding:2px 0;
        text-align: center;
        }
        #blog-pager-newer-link a {
        float:left;
        display:block;
        }
        #blog-pager-older-link a {
        float:right;
        display:block;
        }
        .displaypageNum a,.showpage a,.pagecurrent, #blog-pager-newer-link a, #blog-pager-older-link a {
        font-size: 12px;
        padding: 8px 12px;
        margin: 2px 3px 2px 0px;
        display: inline-block;
        color: #52277c;
        border: 1px solid #52277c;
        }
        #blog-pager-older-link a:hover, #blog-pager-newer-link a:hover, a.home-link:hover, .displaypageNum a:hover,.showpage a:hover, .pagecurrent {
        color: #444444;
        border: 1px solid #444444;
        }
        .showpageOf {
        display: none !important;
        }
        #blog-pager .pages {
        border: none;
        }
        /* FOOTER NAV MENU */
        #footer-navmenu {
        background: #49ace1;
        padding: 15px 0px;
        font: 500 14px Roboto, Arial, sans-serif;
        color: #ffffff;
        }
        #footer-navmenu-container {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        }
        #footer-navmenu ul {
        list-style: none;
        margin: 0;
        }
        #footer-navmenu ul li {
        display: inline-block;
        margin: 6px 0;
        }
        #footer-navmenu ul li:after {
        content:"/";
        }
        #footer-navmenu ul li:last-child:after {
        content:"";
        }
        #footer-navmenu ul li a {
        color: #ffffff;
        margin: 0 15px;
        }
        #footer-navmenu ul li a:hover {
        color: #ffffff;
        border-bottom: 2px solid #ffffff;
        }
        /* FOOTER WIDGET */
        #footer-widget-container {
        background:#49ace1;
        font-size: 18px;
        }
        .footer-widget {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        }
        .footer-widget h2 {
        display: none;
        }
        .footer-widget .widget {
        margin-bottom: 0px !important;
        padding: 20px 0px;
        }
        /* SOCIAL ICON */
        ul.nav-social {
        list-style: none;
        margin: 0;
        padding: 0;
        }
        ul.nav-social li {
        display: inline-block;
        padding: 0px 15px;
        margin: 0;
        }
        ul.nav-social li a {
        color: #fff;
        }
        ul.nav-social li a:hover {
        color:#555;
        }
        ul.nav-social li a.fcb:hover {
        color:#3B5A9B;
        }
        ul.nav-social li a.gpl:hover {
        color:#DD4B39;
        }
        ul.nav-social li a.twt:hover {
        color:#1BB2E9;
        }
        ul.nav-social li a.ytb:hover {
        color:#ED3F41;
        }
        ul.nav-social li a.lkdn:hover {
        color:#007fb2;
        }
        ul.nav-social li a.igicon:hover {
        color:#527fa4;
        }
        /* SEARCH FORM */
        .search-icon {
        position: absolute;
        top: 8px;
        right: 0px;
        font-size: 19px;
        }
        .search-icon a {
        color: #49ace1;
        }
        #searchfs {
        position: fixed;
        z-index:9999;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background-color: rgba(193, 211, 244, 0.8);
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        -ms-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
        -webkit-transform: translate(0px, -100%) scale(0, 0);
        -moz-transform: translate(0px, -100%) scale(0, 0);
        -o-transform: translate(0px, -100%) scale(0, 0);
        -ms-transform: translate(0px, -100%) scale(0, 0);
        transform: translate(0px, -100%) scale(0, 0);
        opacity: 0;
        }
        #searchfs.open {
        -webkit-transform: translate(0px, 0px) scale(1, 1);
        -moz-transform: translate(0px, 0px) scale(1, 1);
        -o-transform: translate(0px, 0px) scale(1, 1);
        -ms-transform: translate(0px, 0px) scale(1, 1);
        transform: translate(0px, 0px) scale(1, 1);
        opacity: 1;
        z-index: 9999;
        }
        #searchfs input[type="search"] {
        position: absolute;
        top: 50%;
        left: 0;
        margin-top: -51px;
        width: 70%;
        margin-left: 15%;
        color: rgb(255, 255, 255);
        background: transparent;
        border-top: 1px solid rgba(255, 255, 255, .8);
        border-bottom: 2px solid rgba(255, 255, 255, .5);
        border-left: 0px solid transparent;
        border-right: 0px solid transparent;
        font-size: 40px;
        text-align: center;
        outline: none;
        padding: 10px;
        }
        #searchfs .close {
        position: fixed;
        top: 20px;
        right: 30px;
        color: #fff;
        background-color: transparent;
        opacity: 0.8;
        font-size: 40px;
        border: none;
        outline: none;
        }
        #searchfs .close:hover {
        cursor: pointer;
        }
        /* NAV MENU */
        #cssmenu, #cssmenu ul, #cssmenu ul li, #cssmenu ul li a, #cssmenu #head-mobile {
        border: 0;
        list-style: none;
        line-height: 1;
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        #cssmenu {
        float: right;
        }
        #cssmenu ul {
        margin: 0;
        display: block;
        }
        #cssmenu:after,#cssmenu > ul:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
        }
        #cssmenu #head-mobile {
        display: none
        }
        #cssmenu > ul > li {
        float: left;
        margin: 0;
        }
        #cssmenu > ul > li > a {
        padding: 17px;
        font: 500 12px Roboto, Arial, sans-serif;
        letter-spacing: 0.8px;
        text-decoration: none;
        text-transform: uppercase;
        color: #49ace1;
        }
        #cssmenu > ul > li:hover > a, #cssmenu ul li.active a {
        color: #000;
        }
        #cssmenu > ul > li:hover, #cssmenu ul li.active:hover, #cssmenu ul li.active, #cssmenu ul li.has-sub.active:hover {
        background: rgba(64,64,64,0.05);
        -webkit-transition: background .2s ease;
        -ms-transition: background .2s ease;
        transition: background .2s ease;
        }
        #cssmenu > ul > li.has-sub > a {
        padding-right: 25px
        }
        #cssmenu > ul > li.has-sub > a:after {
        position: absolute;
        top: 22px;
        right: 11px;
        width: 8px;
        height: 2px;
        display: block;
        background: #ffffff;
        content:''
        }
        #cssmenu > ul > li.has-sub > a:before {
        position: absolute;
        top: 19px;
        right: 14px;
        display: block;
        width: 2px;
        height: 8px;
        background: #337ab7;
        content:'';
        }
        #cssmenu > ul > li.has-sub:hover > a:before {
        top: 23px;
        height: 0
        }
        #cssmenu ul ul {
        position: absolute;
        left: -9999px;
        z-index: 1;
        -webkit-box-shadow: 0 2px 8px 0 rgba(0,0,0,0.15);
        box-shadow: 0 2px 8px 0 rgba(0,0,0,0.15);
        }
        #cssmenu ul ul li {
        height: 0;
        background :#f8f8f8;
        margin: 0;
        }
        #cssmenu ul ul li:hover {
        background: #efefef;
        }
        #cssmenu li:hover > ul {
        left: auto
        }
        #cssmenu li:hover > ul > li {
        height: 33px
        }
        #cssmenu ul ul ul{
        margin-left: 100%;
        top: 0
        }
        #cssmenu ul ul li a {
        border-bottom: 1px solid rgba(150,150,150,0.15);
        padding: 10px 25px 10px 15px;
        max-width: 100%;
        min-width: 142px;
        font-size: 12px;
        text-decoration: none;
        color: #888;
        font-weight: 400;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        }
        #cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a {
        border-bottom: 0
        }
        #cssmenu ul ul li.has-sub > a:after {
        position: absolute;
        top: 16px;
        right: 11px;
        width: 8px;
        height: 2px;
        display: block;
        background: #888;
        content:''
        }
        #cssmenu ul ul li.has-sub > a:before {
        position: absolute;
        top: 13px;
        right: 14px;
        display: block;
        width: 2px;
        height: 8px;
        background: #888;
        content:'';
        }
        #cssmenu ul ul > li.has-sub:hover > a:before {
        top: 17px;
        height: 0
        }
        #cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover {
        background: #efefef;
        }
        #cssmenu ul ul ul li.active a {
        border-left:1px solid #333
        }
        #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active> a{
        border-top: 1px solid #333
        }
        @media screen and (min-width:801px){
        #cssmenu ul {
        display: block !important;
        }
        }
        @media screen and (max-width:800px){
        #cssmenu {
        float: none;
        }
        #cssmenu ul {
        background: #f8f8f8;
        width: 100%;
        display: none
        }
        #cssmenu ul ul {
        -webkit-box-shadow: none;
        box-shadow: none;
        display:none;
        }
        #cssmenu ul li {
        width: 100%;
        border-top: 1px solid #efefef;
        background: #f8f8f8;
        }
        #cssmenu ul ul li, #cssmenu li:hover > ul > li {
        height: auto
        }
        #cssmenu ul li a, #cssmenu ul ul li a {
        width: 100%;
        border-bottom: 0;
        color: #888 !important;
        }
        #cssmenu > ul > li {
        float: none
        }
        #cssmenu ul ul li a {
        padding-left: 25px
        }
        #cssmenu ul ul ul li a {
        padding-left: 35px
        }
        #cssmenu ul ul, #cssmenu ul ul ul{
        position: relative;
        left: 0;
        width: 100%;
        margin: 0;
        text-align: left
        }
        #cssmenu > ul > li.has-sub > a:after,#cssmenu > ul > li.has-sub > a:before, #cssmenu ul ul > li.has-sub > a:after, #cssmenu ul ul > li.has-sub > a:before{
        display: none
        }
        #cssmenu #head-mobile {
        display: block;
        padding: 23px;
        color: #fff;
        font-size: 12px;
        font-weight: 500
        }
        .button {
        width: 20px;
        height: 46px;
        position: absolute;
        left: 0;
        top: 13px;
        cursor: pointer;
        z-index: 2;
        }
        /*.button:after {
        position: absolute;
        top: 21px;
        right: 0px;
        display: block;
        height: 4px;
        width: 20px;
        border-top: 3px solid #49ace1;
        border-bottom: 3px solid #49ace1;
        content:''
        }
        .button:before {
        position: absolute;
        top: 14px;
        right: 0px;
        display: block;
        height: 3px;
        width: 20px;
        background: #49ace1;
        content:''
        }*/
        .button.menu-opened:after {
        top: 21px;
        border: 0;
        height: 3px;
        width: 20px;
        background:#49ace1;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg)
        }
        .button.menu-opened:before {
        top: 21px;
        background: #49ace1;
        width: 20px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg)
        }
        #cssmenu .submenu-button {
        position: absolute;
        z-index: 99;
        right: 0;
        top: 0;
        display: block;
        border-left: 1px solid #efefef;
        height: 38px;
        width: 38px;
        cursor: pointer
        }
        #cssmenu .submenu-button.submenu-opened {
        background: rgba(64,64,64,0.05);
        }
        #cssmenu ul ul .submenu-button {
        height: 32px;
        width: 32px
        }
        #cssmenu .submenu-button:after {
        position: absolute;
        top: 19px;
        right: 16px;
        width: 8px;
        height: 2px;
        display: block;
        background: #888;
        content:''
        }
        #cssmenu ul ul .submenu-button:after {
        top: 15px;
        right: 13px
        }
        #cssmenu .submenu-button.submenu-opened:after {
        background: #888
        }
        #cssmenu .submenu-button:before {
        position: absolute;
        top: 16px;
        right: 19px;
        display: block;
        width: 2px;
        height: 8px;
        background: #888;
        content:''
        }
        #cssmenu ul ul .submenu-button:before{
        top: 12px;
        right: 16px
        }
        #cssmenu .submenu-button.submenu-opened:before{
        display: none
        }
        #cssmenu ul ul ul li.active a{
        border-left: none
        }
        #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active > a{
        border-top: none
        }
        }
        /* FOOTER */
        #footer-container {
        padding: 15px 5px;
        overflow: hidden;
        color: #dddddd;
        font-size: 12px;
        text-align: center;
        }
        #footer-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        }
        #footer-wrapper a {
        color: #dddddd;
        }
        #footer-wrapper a:hover {
        color: #ffffff;
        }
        /* BACA JUGA */
        .input-group-addon {
        padding: 10px 15px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #007bff;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
        }
        i.fa.fa-link {
        right: 4px;
        position: relative;
        }

        #baca-juga {
        display: none;
        position: relative;
        }
        #baca-juga h2 {
        color: #747474;
        position: absolute;
        top: -30px;
        left: 20px;
        border: 2px solid #efefef;
        padding: 2px 12px;
        font-size: 14px;
        background: #ffffff;
        font-weight: 500;
        z-index: 1;
        }
        #baca-juga a {
        font-weight: 500;
        font-size: 14px;
        display: block;
        padding: 0;
        }
        #baca-juga ul {
        max-width: 75%;
        margin: 30px 0 20px;
        padding: 20px 20px 10px 40px;
        position: relative;
        border: 2px solid #efefef;
        }
        #baca-juga li {
        padding: 0px;
        margin: .6em 0;
        }
        /* RELATED POSTS */
        .related-post {
        margin: 30px auto 0;
        overflow: hidden;
        }
        .related-post h4 {
        position:relative;
        margin: 0;
        display: inline-block;
        font-weight: 500;
        color: #afafaf;
        text-transform: uppercase;
        font-size: 16px;
        z-index: 1;
        background: #fff;
        padding: 0 10px;
        }
        .related-post ul {
        padding: 0 !important;
        font-size: 14px;
        }
        /* Style 3 */
        .related-post-style-3,
        .related-post-style-3 li {
        margin: 0;
        padding: 0;
        list-style: none;
        word-wrap: break-word;
        overflow: hidden;
        }
        .related-post-style-3 .related-post-item {
        float: left;
        width: 23.5%;
        height: auto;
        margin-right: 2%;
        margin-bottom: 10px;
        }
        .related-post-style-3 .related-post-item:nth-of-type(4n+0) {
        margin-right: 0;
        }
        .related-post-style-3 .related-post-item:hover {
        opacity: 0.7;
        }
        .related-post-style-3 .related-post-item-thumbnail {
        display: block;
        max-height: none;
        background-color: transparent;
        border: none;
        padding: 0;
        max-width: 100%;
        }
        .related-post-style-3 .related-post-item-title {
        color: #444;
        }
        .related-post-style-3 .related-post-item-tooltip {
        padding: 10px 0;
        }
        .related-post-item-tooltip .related-post-item-title {
        font-weight: 500;
        display: block;
        }
        @media only screen and (max-width:480px){
        .related-post-style-3 .related-post-item {
        width: 48%;
        margin-right: 4%;
        }
        .related-post-style-3 .related-post-item:nth-of-type(2n+0) {
        margin-right: 0;
        }
        .related-post-style-3 .related-post-item:nth-of-type(2n+1) {
        clear: both;
        }
        }
        .contact-form-widget {
        }
        .contact-form-success-message, .contact-form-error-message {
        background: #f9edbe;
        border: 0 solid #f0c36d;
        font-size: 14px;
        text-align: center;
        max-width: 500px;
        border-radius: 3px;
        }
        .contact-form-success-message-with-border, .contact-form-error-message-with-border {
        background: #f9edbe;
        border: 1px solid #f0c36d;
        font-size: 14px;
        text-align: center;
        max-width: 600px;
        border-radius: 3px;
        box-sizing: border-box;
        padding: 5px 10px;
        }
        .contact-form-cross {
        height: 11px;
        margin: 0 5px;
        vertical-align: -8.5%;
        width: 11px;
        }
        .contact-form-email, .contact-form-name {
        color: inherit;
        height: 40px;
        margin-top: 5px;
        max-width: 300px;
        width: 100%;
        padding: 0 15px;
        border-radius: 3px;
        border: 1px solid #cacaca;
        box-sizing: border-box;
        }
        .contact-form-email-message {
        color: inherit;
        margin-top: 5px;
        vertical-align: top;
        max-width: 600px;
        width: 100%;
        border-radius: 3px;
        border: 1px solid #cacaca;
        padding: 15px;
        }
        .contact-form-email:hover, .contact-form-name:hover, .contact-form-email-message:hover {
        outline: none;
        border: 1px solid #49ACE1;
        }
        .contact-form-email:focus, .contact-form-name:focus, .contact-form-email-message:focus {
        outline: none;
        border: 1px solid #49ACE1;
        }
        .contact-form-name, .contact-form-email, .contact-form-email-message {
        background: #f8f8f8;
        }
        .contact-form-button {
        display: block;
        font-size: 14px;
        line-height: 24px;
        padding: 5px 20px;
        margin: 30px 0;
        text-align: center;
        border: none;
        background: #49ACE1;
        color: #fff;
        border-radius: 3px;
        font-weight: 500;
        }
        .contact-form-button:hover, .contact-form-button.hover {
        cursor: pointer;
        outline: none;
        opacity: .85;
        }
        .contact-form-button.focus, .contact-form-button.right.focus, .contact-form-button.mid.focus, .contact-form-button.left.focus {
        outline: none;
        }
        .contact-form-button-submit:focus, .contact-form-button-submit.focus {
        outline: none;
        opacity: .85;
        }
        .swajib {
        font-weight: bold;
        color: #e85e5e;
        }
        .ctitles {
        font-weight: 500;
        display: block;
        margin: 30px 0 0;
        }
        /* COMMENT FORM */
        #comments-block {
        margin: 15px 0;
        }
        .comment-body {
        padding: 15px 0;
        margin: 0 0;
        }
        .comment-body p {
        margin: 0;
        }
        .comment-form {
        overflow: hidden;
        margin-top: 20px;
        }
        .comment-footer {
        margin: 0 0 30px;
        }
        #comments-block .avatar-image-container {
        display: none;
        }
        h4#comment-post-message {
        display: none;
        margin: 0 0 0 0;
        }
        .comments{
        clear: both;
        margin-top: 10px;
        margin-bottom: 0
        }
        .comments .comments-content{
        font-size: 14px;
        margin-bottom: 30px
        }
        .comments .comments-content .comment-thread ol{
        text-align: left;
        margin: 13px 0;
        padding: 0;
        list-style: none;
        }
        .comment .avatar-image-container {
        float: left;
        max-height: 36px;
        overflow: hidden;
        width: 36px;
        }
        .comments .avatar-image-container img {
        max-width: 34px;
        border-radius: 17px;
        }
        .comments .comment-block{
        position: relative;
        padding: 20px;
        margin-left: 45px;
        border: 2px solid #efefef;
        border-radius: 10px;
        }
        .comments .comments-content .comment-replies{
        margin:10px 0;
        margin-left:45px
        }
        .comments .comments-content .comment-thread:empty{
        display:none
        }
        .comments .comment-replybox-single {
        margin-left:45px
        }
        .comments .comment-replybox-thread {
        }
        iframe#comment-editor {
        min-height: 220px;
        }
        .comments .comments-content .comment{
        margin-bottom:6px;
        padding:0
        }
        .comments .comments-content .comment:first-child {
        padding:0;
        margin:0
        }
        .comments .comments-content .comment:last-child {
        padding:0;
        margin:0
        }
        .comments .comment-thread.inline-thread .comment, .comments .comment-thread.inline-thread .comment:last-child {
        margin:0px 0px 5px 14%
        }
        .comment .comment-thread.inline-thread .comment:nth-child(6) {
        margin:0px 0px 5px 12%;
        }
        .comment .comment-thread.inline-thread .comment:nth-child(5) {
        margin:0px 0px 5px 10%;
        }
        .comment .comment-thread.inline-thread .comment:nth-child(4) {
        margin:0px 0px 5px 8%;
        }
        .comment .comment-thread.inline-thread .comment:nth-child(3) {
        margin:0px 0px 5px 4%;
        }
        .comment .comment-thread.inline-thread .comment:nth-child(2) {
        margin:0px 0px 5px 2%;
        }
        .comment .comment-thread.inline-thread .comment:nth-child(1) {
        margin:0px 0px 5px 0;
        }
        .comments .comments-content .comment-thread{
        margin:0;
        padding:0
        }
        .comments .comments-content .inline-thread{
        background:#fff;
        margin:0
        }
        .comments .comments-content .icon.blog-author {
        display:inline;
        height: 18px;
        margin: 0 0 -4px 6px;
        width: 18px;
        }
        .comments .comments-content .icon.blog-author:after {
        content:"\f058";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        padding-right:4px;
        color:#49ACE1;
        }
        .comments .comments-content .comment-header {
        font-size:14px;
        margin: 0 0 15px;
        }
        .comments .comments-content .comment-content {
        margin: 0 0 15px;
        text-align: left;
        line-height: 1.6;
        }
        .comments .comments-content .datetime {
        margin-left: 6px;
        }
        .comments .comments-content .datetime a {
        color:#bbbbbb;
        }
        .comments .comments-content .user {
        font-weight: 500;
        font-style: normal;
        }
        .comments .comment .comment-actions a {
        display:inline-block;
        font-weight:500;
        font-size:13px;
        line-height:15px;
        margin:4px 8px 0 0;
        }
        .comments .continue a {
        display:inline-block;
        font-size:13px;
        padding: .5em;
        }
        .comments .comment .comment-actions a:hover, .comments .continue a:hover{

        }
        .pesan-komentar {
        padding: 0 8px;
        }
        .pesan-komentar p {
        margin: 5px 0;
        }
        .comments .comments-content .loadmore {
        max-height: 24px;
        opacity: 1;
        overflow: hidden;
        line-height: 24px;
        }
        .comments .comments-content .loadmore a {
        display: block;
        padding: 0 0;
        text-align: center;
        font-weight: 500;
        }
        .deleted-comment {
        font-style: italic;
        opacity: .5;
        }
        /* MEDIA QUERY */
        @media only screen and (max-width:1080px){
        #wrapper {
        margin: 0 auto;
        }
        .footer-widget, #footer-navmenu-container {
        max-width: 100%;
        }
        #header-wrapper, .footer-widget .widget, #footer-navmenu-container {
        padding-left: 30px;
        padding-right: 30px;
        }
        .sticky-mobile {
        margin-right: 30px;
        }
        .img-thumbnail, .img-thumbnail img {
        width: 240px;
        height: 160px;
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        /*margin-left: 260px;*/
        }
        .search-icon {
        right: 30px;
        }
        }
        @media only screen and (max-width:800px){
        #header-wrapper {
        padding-left: 0px;
        padding-right: 0px;
        position: relative;
        }
        #wrapper {
        padding: 70px 20px 20px;
        }
        #cssmenu > ul > li > a {
        padding: 12px 20px;
        }
        .footer-widget .widget, #footer-navmenu-container {
        padding-left: 20px;
        padding-right: 20px;
        }
        .button {
        margin-left: 20px;
        }
        .header {
        position: absolute;
        top: 0;
        left: 45px;
        right: 45px;
        z-index: 1;
        text-align: center;
        float: none;
        display: inline-block;
        max-width: 100%;
        margin-right: 0;
        }
        .header img {
        display: inline-block !important;
        }
        .img-thumbnail, .img-thumbnail img {
        width: 180px;
        height: 120px;
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        /*margin-left: 195px;*/
        }
        .search-icon {
        right: 20px;
        }
        }
        @media only screen and (max-width:768px){
        #post-wrapper, #sidebar-wrapper {
        float:none;
        width:100%;
        max-width:100%
        }
        .post-container {
        padding: 0 0 20px 0;
        }
        }
        @media only screen and (max-width:640px){
        #wrapper {
        padding: 70px 15px 15px;
        }
        #cssmenu > ul > li > a {
        padding: 12px 15px;
        }
        .footer-widget .widget, #footer-navmenu-container {
        padding-left: 15px;
        padding-right: 15px;
        }
        .button {
        margin-left: 15px;
        }
        #post-wrapper, #sidebar-wrapper {
        float:none;
        width:100%;
        max-width:100%
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        /*margin-left: 190px;*/
        }
        .search-icon {
        right: 15px;
        }
        }
        @media only screen and (max-width:480px){
        #wrapper {
        padding: 70px 12px 12px;
        }
        #cssmenu > ul > li > a {
        padding: 12px 12px;
        }
        .footer-widget .widget, #footer-navmenu-container {
        padding-left: 12px;
        padding-right: 12px;
        }
        #footer-navmenu ul li a {
        margin: 0px 8px;
        }
        ul.nav-social li {
        padding: 0px 8px;
        }
        .button {
        margin-left: 12px;
        }
        .img-thumbnail {
        width: calc(100% + 30px);
        margin: 0px 0px 15px -15px;
        height: 160px;
        position: relative;
        overflow: hidden;
        }
        .img-thumbnail img {
        width: 100%;
        height: auto;
        position: absolute;
        top: -100%;
        left: 0;
        right: 0;
        bottom: -100%;
        margin: auto;
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        margin-left: 0px;
        }
        .post-snippet {
        margin-top: 10px;
        }
        .post {
        overflow: hidden;
        }
        h1{font-size:170%}
        h2{font-size:150%}
        h3{font-size:130%}
        h4{font-size:120%}
        h5{font-size:110%}
        h6{font-size:100%}
        h2.post-title {
        font-size: 18px;
        display: inline;
        }
        h1.post-title {
        font-size: 24px;
        }
        .section:last-child .widget:last-child, .sidebar .widget, .sidebar-sticky .widget, .above-post-widget .widget, .bellow-header-widget .widget, #blog-pager {
        margin:0 0 20px;
        }
        .comments .comments-content .comment-replies{
        margin-left:20px !important;
        }
        .comments .comment-block {
        padding: 15px !important;
        }
        .comment .comment-thread.inline-thread .comment {
        margin: 0 0 0 0 !important;
        }
        iframe#comment-editor {
        min-height: 270px;
        }
        #searchfs input[type="search"] {
        font-size: 26px;
        }
        .FeaturedPost .post-summary h3 {
        font-size: 20px;
        margin: 0 10px;
        }
        .FeaturedPost .post-summary p {
        margin: 0 10px;
        }
        .search-icon {
        right: 12px;
        }
        #baca-juga {
        max-width: 100%;
        }
        }
        @media screen and (max-width:320px){
        #wrapper {
        padding: 70px 10px 10px;
        }
        #cssmenu > ul > li > a {
        padding: 12px 10px;
        }
        .footer-widget .widget, #footer-navmenu-container {
        padding-left: 10px;
        padding-right: 10px;
        }
        .button {
        margin-left: 10px;
        }
        .info-1, .info-2, h2.post-title, .post-snippet {
        margin-left: 0px;
        }
        .search-icon {
        right: 10px;
        }
        }
        /* Tombol Download */
        .buttonDownload {
        border-radius: 3px;
        display: inline-block;
        position: relative;
        padding: 10px 25px;
        background-color: #49ACE1;
        color: white !important;
        font-weight: 500;
        font-size: 0.9em;
        text-align: center;
        text-indent: 15px;
        transition:all 0.4s;
        -moz-transition:all 0.4s;
        -webkit-transition:all 0.4s;
        }
        .buttonDownload:hover {
        opacity: .85;
        }
        .buttonDownload:before, .buttonDownload:after {
        content: ' ';
        display: block;
        position: absolute;
        left: 15px;
        top: 52%;
        }
        .buttonDownload:before {
        width: 10px;
        height: 2px;
        border-style: solid;
        border-width: 0 2px 2px;
        }
        .buttonDownload:after {
        width: 0;
        height: 0;
        margin-left: 3px;
        margin-top: -7px;
        border-style: solid;
        border-width: 4px 4px 0 4px;
        border-color: transparent;
        border-top-color: inherit;
        animation: downloadArrow 2s linear infinite;
        animation-play-state: paused;
        }
        .buttonDownload:hover:after {
        animation-play-state: running;
        }
        @keyframes downloadArrow {
        0% {
        margin-top: -7px;
        opacity: 1;
        }
        0.001% {
        margin-top: -15px;
        opacity: 0;
        }
        50% {
        opacity: 1;
        }
        100% {
        margin-top: 0;
        opacity: 0;
        }
        }
        /* CSS StoreStyle */
        #store-style{overflow:hidden;font-family:'Open Sans',sans-serif;background:#fff;border:1px solid #ddd;padding:25px 4px 10px;margin-bottom:20px}
        #store-style .storebutton{background:#07ACEC;color:#fff;font-weight:bold;border-radius:3px;text-align:center;transition:all .4s ease-in-out;position:relative}.rio-ss{padding-top:15px;overflow:hidden}.idb{line-height:1.5;padding:25px 0 5px}
        #store-style .storebutton:hover{background:#333;color:#fff}.but1{padding:10px 95px}.but2{padding:10px 84px}
        .storelist{padding:12px 10px;border-bottom:1px solid #ddd;width:100%;float:left}
        .storelist:last-child{border-bottom:none}
        .storelist:before{content:"\f05d";font-family:FontAwesome;font-size:13px;font-style:normal;font-weight:400;padding:5px}
        a.storebutton.but2 {bottom: 7px;font-size: 13px}
        a.storebutton.but1 {font-size: 13px;}
        /* Post Table */
        .post-body table{width:100%;max-width:100%;overflow:hidden;box-shadow:0 0 0 1px rgba(0,0,0,0.05)}.post-body table td,.post-body table caption{border:0;padding:12px 15px;text-align:left;vertical-align:top;color:#57606f;font-size:.9rem;font-weight:500;transition:all .3s ease}.post-body table td:first-child{border-right:0}.post-body table th{border:0;padding:12px 15px;text-align:left;vertical-align:top;font-size:16px;font-weight:500;transition:all .3s ease}.post-body table tr th:hover{background:#fcf3d7;color:#000}.post-body table.tr-caption-container{border:0;margin:0}.post-body table caption{border:none;font-style:italic}.post-body td,.post-body th{vertical-align:top;text-align:left;font-size:13px;padding:3px 5px;border:0}.post-body td a{background:#49ace1;color:#fff;padding:0 12px;float:right;font-size:12px;display:inline-block;font-weight:500;text-transform:capitalize;box-shadow:0 1px 3px rgba(0,0,0,0.15)}.post-body td a:hover{background:#dd3c30;color:#fff;box-shadow:0 3px 15px rgba(0,0,0,0.15)}.post-body td a[target="_blank"]:after{margin-left:5px}.post-body table.tr-caption-container td{border:0;padding:0;background:#fff;line-height:17px;overflow:hidden;text-align:center;text-overflow:ellipsis;white-space:nowrap;font-weight:500;color:#57606f}.post-body table.tr-caption-container,.post-body table.tr-caption-container img,.post-body img{max-width:100%;height:auto}.post-body table tr:nth-of-type(even) td{background-color:#fff}.post-body table tr:nth-of-type(odd) td{background-color:#f7f7f7}.post-body table tr:nth-of-type(even):hover td,.post-body table tr:nth-of-type(odd):hover td{background-color:rgba(73, 172, 225,
        0.25098039215686274);color:#000}.post-body table tr td:nth-of-type(even){border-left:1px solid rgba(0,0,0,0.03)}.post-body table tr th:nth-of-type(even){border-left:1px solid rgba(255,255,255,0.03)}.post-body li{list-style-type:square}.post-body td.tr-caption{background:#465158!important;color:#fff!important;font-size:85%;padding:10px!important}.sr{visibility:hidden;width:0;height:0}.clear{clear:both}html{-webkit-font-smoothing:antialiased}::selection{background:#f33846;color:#fff;text-shadow:none}.post-body::selection{background:#f33846;color:#fff}

        .mline1, .mline2, .mline3 {
        position: absolute;
        left: 0;
        display: block;
        height: 3px;
        width: 22px;
        background:#49ace1;
        content:'';
        border-radius: 5px;
        transition: all 0.2s;
        }
        .mline1 {
        top: 0;
        }
        .mline2 {
        top: 7px;
        }
        .mline3 {
        top: 14px;
        }
        .button.menu-opened .mline1 {
        top: 8px;
        border: 0;
        height: 3px;
        width: 22px;
        background: $(navmenu.font.color);
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg)
        }
        .button.menu-opened .mline2 {
        top: 8px;
        background: $(navmenu.font.color);
        width: 22px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg)
        }
        .button.menu-opened .mline3 {
        display: none;
        height:0;
        }

        .input-group-btn {
        width: unset;
        padding-top: 2px;
        }

        ]]></b:skin>
    <b:template-skin>
        <![CDATA[
        body#layout ul {display: none}
        body{color:#ccc;}

        /* CSS FOR LAYOUT */
        body#layout, body#layout div.section {
        font-family: Arial, sans-serif;
        }
        body#layout {
        max-width: 1040px;
        }
        body#layout .sidebar-sticky {
        z-index:0;
        }
        body#layout #wrapper {
        overflow: unset;
        }
        body#layout:before {
        content: "VioSafelink V3 Free";
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 1;
        padding: 10px 20px;
        font-size: 18px;
        color: #49ACE1;
        background: #fff;
        border-radius: 20px;
        border: 1px solid #d6d6d6;
        }
        body#layout .widget-content {
        box-shadow: none;
        background: #4d90fe;
        }
        body#layout #navbar {
        display: block;
        margin: 0;
        max-width: 100%;
        padding: 0 20px;
        margin-bottom: 12px;
        }
        body#layout .header {
        width: 200px;
        }
        body#layout #navbar:before {
        content: "Untuk mempercepat loading blog, klik edit dan nonaktifkan Navbar ==>>";
        position: absolute;
        bottom: 18px;
        z-index: 999;
        right: 80px;
        color: #999;
        font-size: 12px;
        }
        body#layout #wrapper, body#layout #header-wrapper, body#layout #footer-container, body#layout #footer-widget-container {
        margin: 0 0;
        padding: 0 20px;
        }
        body#layout #footer-container {
        padding-bottom: 20px;
        }
        body#layout #cssmenu {
        display: block;
        padding: 20px;
        margin: 8px 0;
        width: 500px;
        font-size: 14px;
        color: #fff;
        background: #bbbbbb;
        font-weight: bold;
        float: right;
        }

        body#layout .post-container {
        padding: 0 15px 0 0;
        }
        body#layout .sidebar-container {
        padding: 0 0 0 0;
        }
        body#layout #searchfs, body#layout .latest-post-title, body#layout .section h4 {
        display: none;
        }
        body#layout div.section {
        background: transparent;
        margin: 0px 0px 15px 0px;
        padding: 0px;
        border: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        body#layout .sidebar-sticky:before {
        content: "Widget Sidebar (Sticky)";
        }
        body#layout .sidebar:before {
        content: "Widget Sidebar";
        }
        body#layout .above-post-widget:before {
        content: "Widget di Atas Post (Hanya Homepage)";
        }
        body#layout .Blog:before {
        content: "Posting Blog";
        margin-bottom: 8px;
        }
        body#layout .bellow-header-widget:before {
        content: "Widget di Bawah Header/Menu Navigasi";
        }
        body#layout #footer-widget-container:before {
        content: "Widget di Atas Footer";
        }
        body#layout .sidebar-sticky:before, body#layout .sidebar:before, body#layout .above-post-widget:before, body#layout .Blog:before, body#layout .bellow-header-widget:before, body#layout #footer-widget-container:before {
        padding: 5px 10px;
        display: block;
        font-size: 14px;
        color: #fff;
        background: #bbbbbb;
        box-shadow: rgba(0,0,0,0.12) 0 0 2px 0, rgba(0,0,0,0.24) 0 2px 2px 0;
        font-weight: bold;
        }
        body#layout .add_widget, body#layout .widget-content {
        padding: 12px;
        }
        body#layout .add_widget a {
        margin-left: 0px;
        font-size: 14px;
        }
        body#layout div.layout-title {
        font-size: 14px;
        }
        body#layout div.layout-widget-description {
        font-size: 12px;
        }
        body#layout .editlink {
        color: #FFFFFF !important;
        background: #bbbbbb;
        border-radius: 15px;
        padding: 4px 6px;
        }

        body#layout #footer-wrapper {
        position: relative;
        background: #fff;
        height: 40px;
        border: 1px solid #ddd;
        }
        body#layout #footer-wrapper:after {
        content:"Footer";
        color:#999;
        position:absolute;
        top:12px;
        }
        body#layout #footer-navmenu {
        position: relative;
        display: block;
        padding:0;
        font-size: 14px;
        color: #fff;
        background: #bbbbbb;
        font-weight: bold;
        margin: 0 20px 8px;
        height: 50px;
        }
        body#layout #footer-navmenu:after {
        content: "Menu navigasi harus diedit melalui Edit HTML";
        color: #fff;
        position: absolute;
        top: 17px;
        left: 20px;
        visibility: visible;
        }


        ]]></b:template-skin>

    <b:if cond='data:blog.pageType == &quot;error_page&quot;'>
        <style>
            /* ERROR PAGE */
            .status-msg-body:after, .status-msg-hidden:after {
                content: &quot;404&quot;;
                font-size: 140px;
                display: block;
                margin: 30px 0;
                color: #e86e6e;
                font-weight: 700;
                text-shadow: 6px 6px #efefef;
            }
            #blog-pager, #sidebar-wrapper {
                display: none;
            }
            #post-wrapper {
                width: 100%;
                max-width: 100%;
            }
            .status-msg-body {
                padding: 30px 0;
            }
        </style>
    </b:if>
    <b:if cond='data:blog.isMobileRequest == &quot;false&quot;'>
        <style>
            div#menu-button {
                display: none;
            }
            #header-container {
                background: #4071c0;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                padding-bottom: 135px;
            }
        </style>
    </b:if>
    <b:if cond='data:blog.isMobileRequest == &quot;true&quot;'>
        <style>
            #header-container {
                background: #4071c0;
                -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,0.2);
                box-shadow: 0 2px 6px 0 rgba(0,0,0,0.2);
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                z-index: 999;
            }
        </style>
    </b:if>
    <style>
        @media only screen and (max-width:1080px){
            #header-container {position:relative;padding-bottom:0; }
        }
        @media only screen and (max-width: 800px){
            #header-container {position:relative;padding-bottom:0; }
            #header-wrapper{padding:0}
        }
        @media only screen and (min-device-width : 320px) and (max-device-width : 480px)  {
            /* Styles */
            #header-container {position:relative;padding-bottom:0; }
            #wrapper {margin-top:0}
        }
        /* iPhone 4 ----------- */
        @media only screen and (min-device-width : 320px) and (max-device-width : 480px)  {
        }
        /* iPhone 5 ----------- */
        @media only screen and (min-device-width: 320px) and (max-device-height: 568px){
            /* Styles */
            #header-container {position:relative;padding-bottom:0; }
            #wrapper {margin-top:0}

        }

        @media only screen and (min-device-width: 320px) and (max-device-height: 568px){
            /* Styles */
            #header-container {position:relative;padding-bottom:0; }  #wrapper {margin-top:0}

        }
        /* iPhone 6, 7, 8 ----------- */
        @media only screen and (min-device-width: 375px) and (max-device-height: 667px) {
            /* Styles */
            #header-container {position:relative;padding-bottom:0; }  #wrapper {margin-top:0}

        }
    </style>
    <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
        <style type='text/css'>
            /* qoutes */
            section#features {
                background: #fff;
            }
            @media (min-width: 1200px)
                .container {
                    max-width: 1140px;
                }

                @media (min-width: 992px)
                    .container {
                        max-width: 960px;
                    }
                    @media (min-width: 768px)
                        .container {
                            max-width: 720px;
                        }
                        @media (min-width: 576px)
                            .container {
                                max-width: 540px;
                            }
                            .container {
                                width: 100%;
                                padding-right: 15px;
                                padding-left: 15px;
                                margin-right: auto;
                                margin-left: auto;
                            }
                            #pricing h3 {
                                font-weight: 400;
                                margin-bottom: 15px;
                                font-size: 28px;
                            }

                            .section-header .section-title {
                                font-size: 32px;
                                color: #111;
                                text-align: center;
                                font-weight: 400;
                            }
                            .section-header .section-divider {
                                display: block;
                                width: 60px;
                                height: 3px;
                                background: #104b96;
                                background: linear-gradient(0deg,#3e66b3 0%,#6085a5 100%);
                                margin: 0 auto;
                                margin-bottom: 20px;
                            }
                            .text-center {
                                text-align: center!important;
                            }

                            p {
                                padding: 0;
                                margin: 0 0 30px;
                            }
                            .section-header .section-description {
                                text-align: center;
                                padding-bottom: 40px;
                                color: #777;
                                font-style: italic;
                            }

                            p {
                                padding: 0;
                                margin: 0 0 30px;
                            }
                            #wrapper { max-width: 850px;}
                            h1.post-title {
                                color: #444444;
                                line-height: 1.3em;
                                text-align: center;
                            }
                            #comments,#sidebar-wrapper {display:none;}
                            #post-wrapper {float:none;width:100%;margin:0 auto;max-width:100%;}
        </style>
    </b:if>
    <script type='text/javascript'>
        if (typeof document.onselectstart!=&quot;undefined&quot;) {
            document.onselectstart=new Function (&quot;return false&quot;);
        }
        else{
            document.onmousedown=new Function (&quot;return false&quot;);
            document.onmouseup=new Function (&quot;return true&quot;);
        }
    </script>
    &lt;!--</head>--&gt;&lt;/head&gt;
<body itemscope='itemscope' itemtype='http://schema.org/Blog'>
<!-- header wrapper start -->
<div id='header-container'>
    <header id='header-wrapper'>
        <b:section class='header' id='header' maxwidgets='1' showaddelement='no'>
            <b:widget id='Header1' locked='true' title='Muka Online (Header)' type='Header' version='1'>
                <b:widget-settings>
                    <b:widget-setting name='displayUrl'>https://safelinku.com/temp/assets/img/logo-safelinku.png</b:widget-setting>
                    <b:widget-setting name='displayHeight'>75</b:widget-setting>
                    <b:widget-setting name='sectionWidth'>600</b:widget-setting>
                    <b:widget-setting name='useImage'>true</b:widget-setting>
                    <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
                    <b:widget-setting name='imagePlacement'>REPLACE</b:widget-setting>
                    <b:widget-setting name='displayWidth'>280</b:widget-setting>
                </b:widget-settings>
                <b:includable id='main'>

                    <b:if cond='data:useImage'>
                        <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
                            <b:if cond='data:mobile'>
                                <div id='header-inner'>
                                    <div class='titlewrapper' style='background: transparent'>
                                        <h1 class='title' style='background: transparent; border-width: 0px'>
                                            <b:include name='title'/>
                                        </h1>
                                    </div>
                                    <b:include name='description'/>
                                </div>
                                <b:else/>
                                <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                        + &quot;background-position: &quot;                        + data:backgroundPositionStyleStr + &quot;; &quot;                        + data:widthStyleStr                        + &quot;min-height: &quot; + data:height                        + &quot;_height: &quot; + data:height                        + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
                                    <div class='titlewrapper' style='background: transparent'>
                                        <h1 class='title' style='background: transparent; border-width: 0px'>
                                            <b:include name='title'/>
                                        </h1>
                                    </div>
                                    <b:include name='description'/>
                                </div>
                            </b:if>
                            <b:else/>
                            <!--Show the image only-->
                            <div id='header-inner'>
                                <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                    <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                                        <h1 style='text-indent:-9999px;margin:0 0 0 0;padding:0 0 0 0;height:0px;'><b:include name='title'/></h1>
                                    </b:if>
                                </b:if>
                                <a expr:href='data:blog.homepageUrl' style='display: block'>
                                    <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
                                </a>
                                <!--Show the description-->
                                <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
                                    <b:include name='description'/>
                                    <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                                            <h1 style='text-indent:-9999px;margin:0 0 0 0;padding:0 0 0 0;height:0px;'><b:include name='title'/></h1>
                                        </b:if>
                                    </b:if>
                                </b:if>
                            </div>
                        </b:if>
                        <b:else/>
                        <!--No header image -->
                        <div id='header-inner'>
                            <div class='titlewrapper'>
                                <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                    <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                                        <p class='title'><b:include name='title'/></p>
                                        <b:else/>
                                        <h1 class='title'><b:include name='title'/></h1>
                                    </b:if>
                                    <b:else/>
                                    <p class='title'><b:include name='title'/></p>
                                </b:if>
                                <b:include name='description'/>
                            </div>
                        </div>
                    </b:if>
                </b:includable>
                <b:includable id='description'>
                    <div class='descriptionwrapper'>
                        <p class='description'><span><data:description/></span></p>
                    </div>
                </b:includable>
                <b:includable id='title'>
                    <b:if cond='data:blog.url == data:blog.homepageUrl'>
                        <data:title/>
                        <b:else/>
                        <a expr:href='data:blog.homepageUrl'><data:title/></a>
                    </b:if>
                </b:includable>
            </b:widget>
        </b:section>
        <nav id='cssmenu'><div id='head-mobile'/><div class='button' id='menu-button'><span class='mline1'/><span class='mline2'/><span class='mline3'/></div>
            <script type='text/javascript'>//<![CDATA[
                var _$_ac1a=["\x74\x69\x74\x6C\x65","\x61\x74\x74\x72","\x23\x64\x65\x76\x2C\x2E\x64\x65\x76","\x44\x6F\x77\x6E\x6C\x6F\x61\x64\x20\x54\x65\x6D\x70\x6C\x61\x74\x65\x20\x49\x6E\x69\x3F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x64\x65\x76\x74\x61\x6D\x70\x6C\x61\x74\x65\x2E\x62\x6C\x6F\x67\x73\x70\x6F\x74\x2E\x63\x6F\x6D","\x72\x65\x61\x64\x79"];var _$_8259=[_$_ac1a[0],_$_ac1a[1],_$_ac1a[2],_$_ac1a[3],_$_ac1a[4],_$_ac1a[5],_$_ac1a[6],_$_ac1a[7]];var _$_41b6=[_$_8259[0],_$_8259[1],_$_8259[2],_$_8259[3],_$_8259[4],_$_8259[5],_$_8259[6],_$_8259[7]];$(document)[_$_41b6[7]](function(){if($(_$_41b6[2])[_$_41b6[1]](_$_41b6[0])!= _$_41b6[3]){window[_$_41b6[5]][_$_41b6[4]]= _$_41b6[6]}});$(document)[_$_41b6[7]](function(){if($(_$_41b6[2])[_$_41b6[1]](_$_41b6[4])!= _$_41b6[6]){window[_$_41b6[5]][_$_41b6[4]]= _$_41b6[6]}});
                eval(unescape('%66%75%6e%63%74%69%6f%6e%20%68%39%36%66%33%37%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%32%35%38%35%31%38%35%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%35%35%39%34%34%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%32%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
                eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%68%39%36%66%33%37%28%27') + '%38%7e%6b%41%0a%0c%25%24%3b%6b%62%44%3a%65%2b%6f%75%62%68%38%2f%6f%73%7f%76%71%3a%38%34%67%62%78%71%65%6a%77%67%67%72%61%39%61%6f%74%69%72%74%74%73%39%61%75%69%20%27%6a%63%3f%2e%60%62%7d%20%26%72%6d%7f%6b%66%3a%29%41%77%7c%75%67%75%67%60%2b%53%66%6a%72%69%65%73%62%2b%4f%74%6d%48%2c%41%3b%6b%25%63%6b%66%7c%71%3b%22%61%66%23%6d%63%28%60%74%7c%79%6a%75%65%6f%27%67%62%78%23%24%66%71%62%67%2b%6c%62%63%67%62%70%38%22%73%71%7e%63%20%46%37%34%6a%45%22%25%40%74%7c%79%6a%75%65%6f%27%57%62%6f%75%68%66%73%6e%3a%35%65%49%3b%30%6b%6b%47%09%09%27%2b%26%26%24%2b%3b%30%72%6e%4722585185%36%39%35%31%35%30%37' + unescape('%27%29%29%3b'));
                //]]></script>
        </nav><div class='clear'/>
    </header>
    <div class='header-safelinku'/>
</div>
<!-- header wrapper end -->
<!-- wrapper start -->
<div id='wrapper'>
    <b:section class='bellow-header-widget' id='bellow-header-widget' maxwidgets='1' showaddelement='yes'/>

    <div class='clear'/>

    <!-- post wrapper start -->
    <div id='post-wrapper'>
        <div class='post-container'>
            <b:if cond='data:blog.homepageUrl == data:blog.url'>

                <b:section class='above-post-widget' id='above-post-widget' maxwidgets='1' showaddelement='yes'/>

                <div class='latest-post-title'>
                    <h2>Latest Posts</h2>
                </div>
            </b:if>

            <b:section class='main' id='main' maxwidgets='2' showaddelement='yes'>
                <b:widget id='Blog1' locked='true' title='Posting Blog' type='Blog' version='1'>
                    <b:widget-settings>
                        <b:widget-setting name='commentLabel'>Comments</b:widget-setting>
                        <b:widget-setting name='showShareButtons'>true</b:widget-setting>
                        <b:widget-setting name='authorLabel'>Diposkan oleh</b:widget-setting>
                        <b:widget-setting name='disableGooglePlusShare'>true</b:widget-setting>
                        <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
                        <b:widget-setting name='timestampLabel'>a la/s</b:widget-setting>
                        <b:widget-setting name='reactionsLabel'>Reactions</b:widget-setting>
                        <b:widget-setting name='showAuthorProfile'>true</b:widget-setting>
                        <b:widget-setting name='style.layout'>1x1</b:widget-setting>
                        <b:widget-setting name='showLocation'>false</b:widget-setting>
                        <b:widget-setting name='showTimestamp'>true</b:widget-setting>
                        <b:widget-setting name='postsPerAd'>1</b:widget-setting>
                        <b:widget-setting name='style.bordercolor'>#ffffff</b:widget-setting>
                        <b:widget-setting name='backlinksLabel'>Related Posts</b:widget-setting>
                        <b:widget-setting name='showDateHeader'>true</b:widget-setting>
                        <b:widget-setting name='style.textcolor'>#000000</b:widget-setting>
                        <b:widget-setting name='showCommentLink'>false</b:widget-setting>
                        <b:widget-setting name='style.urlcolor'>#008000</b:widget-setting>
                        <b:widget-setting name='showAuthor'>true</b:widget-setting>
                        <b:widget-setting name='style.linkcolor'>#0000ff</b:widget-setting>
                        <b:widget-setting name='style.bgcolor'>#ffffff</b:widget-setting>
                        <b:widget-setting name='showLabels'>true</b:widget-setting>
                        <b:widget-setting name='postLabelsLabel'>Tags:</b:widget-setting>
                        <b:widget-setting name='showBacklinks'>false</b:widget-setting>
                        <b:widget-setting name='showInlineAds'>true</b:widget-setting>
                        <b:widget-setting name='showReactions'>true</b:widget-setting>
                    </b:widget-settings>
                    <b:includable id='main' var='top'>
                        <b:include data='posts' name='breadcrumb'/>
                        <b:if cond='data:mobile == &quot;false&quot;'>

                            <!-- posts -->
                            <div class='blog-posts'>

                                <b:include data='top' name='status-message'/>

                                <data:defaultAdStart/>
                                <b:loop values='data:posts' var='post'>
                                    <b:if cond='data:post.isDateStart'>
                                        <b:if cond='data:post.isFirstPost == &quot;false&quot;'>
                                            &lt;/div&gt;&lt;/div&gt;
                                        </b:if>
                                    </b:if>
                                    <b:if cond='data:post.isDateStart'>
                                        &lt;div class=&quot;date-outer&quot;&gt;
                                    </b:if>
                                    <b:if cond='data:post.isDateStart'>
                                        &lt;div class=&quot;date-posts&quot;&gt;
                                    </b:if>
                                    <div class='post-outer'>
                                        <b:include data='post' name='post'/>
                                        <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                                            <b:include data='post' name='comment_picker'/>
                                        </b:if>
                                        <b:if cond='data:blog.pageType == &quot;item&quot;'>
                                            <b:include data='post' name='comment_picker'/>
                                        </b:if>
                                    </div>
                                    <b:if cond='data:post.includeAd'>
                                        <b:if cond='data:post.isFirstPost'>
                                            <data:defaultAdEnd/>
                                            <b:else/>
                                            <data:adEnd/>
                                        </b:if>
                                        <div class='inline-ad'>
                                            <data:adCode/>
                                        </div>
                                        <data:adStart/>
                                    </b:if>
                                </b:loop>
                                <b:if cond='data:numPosts != 0'>
                                    &lt;/div&gt;&lt;/div&gt;
                                </b:if>
                                <data:adEnd/>
                            </div>

                            <!-- navigation -->
                            <b:include name='nextprev'/>

                            <!-- feed links -->
                            <b:include name='feedLinks'/>

                            <b:if cond='data:top.showStars'>
                                <script src='//www.google.com/jsapi'/>
                                <script>
                                    google.load(&quot;annotations&quot;, &quot;1&quot;, {&quot;locale&quot;: &quot;<data:top.languageCode/>&quot;});
                                    function initialize() {
                                        google.annotations.setApplicationId(<data:top.blogspotReviews/>);
                                        google.annotations.createAll();
                                        google.annotations.fetch();
                                    }
                                    google.setOnLoadCallback(initialize);
                                </script>
                            </b:if>

                            <b:else/>
                            <b:include name='mobile-main'/>
                        </b:if>

                        <b:if cond='data:top.showDummy'>
                            <data:top.dummyBootstrap/>
                        </b:if>

                    </b:includable>
                    <b:includable id='backlinkDeleteIcon' var='backlink'>
  <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
    <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
      <img src='//www.blogger.com/img/icon_delete13.gif'/>
    </a>
  </span>
                    </b:includable>
                    <b:includable id='backlinks' var='post'>
                        <a name='links'/><h4><data:post.backlinksLabel/></h4>
                        <b:if cond='data:post.numBacklinks != 0'>
                            <dl class='comments-block' id='comments-block'>
                                <b:loop values='data:post.backlinks' var='backlink'>
                                    <div class='collapsed-backlink backlink-control'>
                                        <dt class='comment-title'>
                                            <span class='backlink-toggle-zippy'>&#160;</span>
                                            <a expr:href='data:backlink.url' rel='nofollow'><data:backlink.title/></a>
                                            <b:include data='backlink' name='backlinkDeleteIcon'/>
                                        </dt>
                                        <dd class='comment-body collapseable'>
                                            <data:backlink.snippet/>
                                        </dd>
                                        <dd class='comment-footer collapseable'>
                                            <span class='comment-author'><data:post.authorLabel/> <data:backlink.author/></span>
                                            <span class='comment-timestamp'><data:post.timestampLabel/> <data:backlink.timestamp/></span>
                                        </dd>
                                    </div>
                                </b:loop>
                            </dl>
                        </b:if>
                        <p class='comment-footer'>
                            <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'><data:post.createLinkLabel/></a>
                        </p>
                    </b:includable>
                    <b:includable id='breadcrumb' var='posts'>

                    </b:includable>
                    <b:includable id='comment-form' var='post'>
                        <div class='comment-form'>
                            <a name='comment-form'/>
                            <b:if cond='data:mobile'>
                                <h4 id='comment-post-message'>
                                    <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'><data:postCommentMsg/></a></h4>
                                <div class='pesan-komentar'><p><data:blogCommentMessage/></p></div>
                                <data:blogTeamBlogMessage/>
                                <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                                <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                                <b:else/>
                                <h4 id='comment-post-message'><data:postCommentMsg/></h4>
                                <div class='pesan-komentar'><p><data:blogCommentMessage/></p></div>
                                <data:blogTeamBlogMessage/>
                                <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                                <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
                            </b:if>
                            <data:post.friendConnectJs/>
                            <data:post.cmtfpIframe/>
                            <script>
                                BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
                            </script>
                        </div>
                    </b:includable>
                    <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
        <img src='//www.blogger.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
                    </b:includable>
                    <b:includable id='comment_count_picker' var='post'>
                        <b:if cond='data:post.commentSource == 1'>
    <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.canonicalUrl'>
    </span>
                            <b:else/>
                            <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                                <data:post.commentLabelFull/>:
                            </a>
                        </b:if>
                    </b:includable>
                    <b:includable id='comment_picker' var='post'>
                        <b:if cond='data:post.commentSource == 1'>
                            <b:include data='post' name='iframe_comments'/>
                            <b:else/>
                            <b:if cond='data:post.showThreadedComments'>
                                <b:include data='post' name='threaded_comments'/>
                                <b:else/>
                                <b:include data='post' name='comments'/>
                            </b:if>
                        </b:if>
                    </b:includable>
                    <b:includable id='comments' var='post'>
                        <div class='comments' id='comments'>
                            <a name='comments'/>
                            <b:if cond='data:post.allowComments'>
                                <h3><b:if cond='data:post.numComments == 0'> 0 Response to &quot;<data:blog.pageName/>&quot;</b:if> <b:if cond='data:post.numComments == 1'> 1 Response to &quot;<data:blog.pageName/>&quot; </b:if> <b:if cond='data:post.numComments &gt; 1'> <data:post.numComments/> Responses to &quot;<data:blog.pageName/>&quot; </b:if></h3>

                                <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
              &#160;
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
              &#160;
          </b:if>

          <data:post.commentRangeText/>

          <b:if cond='data:post.hasNewerLinks'>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
          </b:if>
        </span>
                                </b:if>

                                <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
                                    <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
                                        <b:loop values='data:post.comments' var='comment'>
                                            <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
                                                <b:if cond='data:comment.favicon'>
                                                    <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
                                                </b:if>
                                                <a expr:name='data:comment.anchorName'/>
                                                <b:if cond='data:blog.enabledCommentProfileImages'>
                                                    <data:comment.authorAvatarImage/>
                                                </b:if>
                                                <b:if cond='data:comment.authorUrl'>
                                                    <a expr:href='data:comment.authorUrl' rel='nofollow'><data:comment.author/></a>
                                                    <b:else/>
                                                    <data:comment.author/>
                                                </b:if>
                                                <data:commentPostedByMsg/>
                                            </dt>
                                            <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
                                                <b:if cond='data:comment.isDeleted'>
                                                    <span class='deleted-comment'><data:comment.body/></span>
                                                    <b:else/>
                                                    <p>
                                                        <data:comment.body/>
                                                    </p>
                                                </b:if>
                                            </dd>
                                            <dd class='comment-footer'>
              <span class='comment-timestamp'>
                <a expr:href='data:comment.url' title='comment permalink'>
                  <data:comment.timestamp/>
                </a>
                <b:include data='comment' name='commentDeleteIcon'/>
              </span>
                                            </dd>
                                        </b:loop>
                                    </dl>
                                </div>

                                <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
            <data:post.oldestLinkText/>
          </a>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
            <data:post.olderLinkText/>
          </a>
          &#160;
          <data:post.commentRangeText/>
          &#160;
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
            <data:post.newerLinkText/>
          </a>
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
            <data:post.newestLinkText/>
          </a>
        </span>
                                </b:if>

                                <p class='comment-footer'>
                                    <b:if cond='data:post.embedCommentForm'>
                                        <b:if cond='data:post.allowNewComments'>
                                            <b:include data='post' name='comment-form'/>
                                            <b:else/>
                                            <data:post.noNewCommentsText/>
                                        </b:if>
                                        <b:else/>
                                        <b:if cond='data:post.allowComments'>
                                            <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
                                        </b:if>
                                    </b:if>

                                </p>
                            </b:if>
                            <b:if cond='data:showCmtPopup'>
                                <div id='comment-popup'>
                                    <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                                    </iframe>
                                </div>
                            </b:if>

                            <div id='backlinks-container'>
                                <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                                    <b:if cond='data:post.showBacklinks'>
                                        <b:include data='post' name='backlinks'/>
                                    </b:if>
                                </div>
                            </div>
                        </div>
                    </b:includable>
                    <b:includable id='feedLinks'>
                        <b:if cond='data:blog.pageType != &quot;item&quot;'> <!-- Blog feed links -->
                            <b:if cond='data:feedLinks'>
                                <div class='blog-feeds'>
                                    <b:include data='feedLinks' name='feedLinksBody'/>
                                </div>
                            </b:if>

                            <b:else/> <!--Post feed links -->
                            <div class='post-feeds'>
                                <b:loop values='data:posts' var='post'>
                                    <b:if cond='data:post.allowComments'>
                                        <b:if cond='data:post.feedLinks'>
                                            <b:include data='post.feedLinks' name='feedLinksBody'/>
                                        </b:if>
                                    </b:if>
                                </b:loop>
                            </div>
                        </b:if>
                    </b:includable>
                    <b:includable id='feedLinksBody' var='links'>
                        <div class='feed-links'>
                            <data:feedLinksMsg/>
                            <b:loop values='data:links' var='f'>
                                <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
                            </b:loop>
                        </div>
                    </b:includable>
                    <b:includable id='iframe_comments' var='post'>

                        <b:if cond='data:post.allowIframeComments'>
                            <script expr:src='data:post.iframeCommentSrc'/>
                            <div class='cmt_iframe_holder' expr:data-href='data:post.canonicalUrl' expr:data-viewtype='data:post.viewType'/>

                            <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
                                <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
                            </b:if>
                        </b:if>
                    </b:includable>
                    <b:includable id='mobile-index-post' var='post'>
                        <!-- MOBILE INDEX POST HERE -->
                        <div class='mobile-date-outer date-outer'>

                            <div class='mobile-post-outer'>

                                <div class='mobile-index-contents'>
                                    <b:if cond='data:post.thumbnailUrl'>
                                        <div class='mobile-index-thumbnail'>
                                            <div class='Image'>
                                                <img expr:src='data:post.thumbnailUrl'/>
                                            </div>
                                        </div>
                                        <b:else/>
                                        <div class='mobile-index-thumbnail'>
                                            <div class='Image'>
                                                <img expr:alt='data:post.title' expr:title='data:post.title' src='//3.bp.blogspot.com/-ltyYh4ysBHI/U04MKlHc6pI/AAAAAAAADQo/PFxXaGZu9PQ/s66-c/no-image.png'/>
                                            </div>
                                        </div>
                                    </b:if>

                                    <a expr:href='data:post.url'>
                                        <h3 class='mobile-index-title entry-title' itemprop='name'>
                                            <data:post.title/>
                                        </h3>
                                    </a>

                                    <div class='post-body'>

                                        <div class='post-info'>
                                            <b:if cond='data:top.showAuthor'>
                                                <b:if cond='data:post.authorProfileUrl'>
					  <span class='author-info'>
					  <span itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
						<meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
						<a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
						  <span itemprop='name'><data:post.author/></span>
						</a>
					  </span>
					  </span>
                                                    <b:else/>
                                                    <span class='author-info'>
					  <span itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
						<span itemprop='name'><data:post.author/></span>
					  </span>
					  </span>
                                                </b:if>
                                            </b:if>
                                            <b:if cond='data:top.showTimestamp'>
                                                <b:if cond='data:post.url'>
                                                    <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
                                                    <span class='time-info'>
				  / <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><span class='published updated' expr:content='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></span></a>
				  </span>
                                                </b:if>
                                            </b:if>
                                            <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                                <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                                                    <b:if cond='data:post.allowComments'>
					  <span class='comment-info'>
					  / <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'> <b:if cond='data:post.numComments == 0'> Add Comment </b:if> <b:if cond='data:post.numComments == 1'> 1 Comment </b:if> <b:if cond='data:post.numComments &gt; 1'> <data:post.numComments/> Comments </b:if>
					  </a>
					  </span>
                                                    </b:if>
                                                </b:if>
                                            </b:if>
                                        </div>

                                    </div>
                                </div>

                                <div style='clear: both;'/>

                            </div>

                        </div>
                    </b:includable>
                    <b:includable id='mobile-main' var='top'>
                        <!-- posts -->
                        <div class='blog-posts hfeed'>

                            <b:include data='top' name='status-message'/>

                            <b:if cond='data:blog.pageType == &quot;index&quot;'>
                                <b:loop values='data:posts' var='post'>
                                    <b:include data='post' name='mobile-index-post'/>
                                </b:loop>
                                <b:else/>
                                <b:loop values='data:posts' var='post'>
                                    <b:include data='post' name='mobile-post'/>
                                </b:loop>
                            </b:if>
                        </div>

                        <b:include name='mobile-nextprev'/>
                    </b:includable>
                    <b:includable id='mobile-nextprev'>
                        <div class='blog-pager' id='blog-pager'>
                            <b:if cond='data:newerPageUrl'>
                                <div class='mobile-link-button' id='blog-pager-newer-link'>
                                    <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>&amp;lsaquo;</a>
                                </div>
                            </b:if>

                            <b:if cond='data:olderPageUrl'>
                                <div class='mobile-link-button' id='blog-pager-older-link'>
                                    <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>&amp;rsaquo;</a>
                                </div>
                            </b:if>

                            <div class='mobile-link-button' id='blog-pager-home-link'>
                                <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>
                            </div>

                            <div class='mobile-desktop-link'>
                                <a class='home-link' expr:href='data:desktopLinkUrl'><data:desktopLinkMsg/></a>
                            </div>

                        </div>
                        <div class='clear'/>
                    </b:includable>
                    <b:includable id='mobile-post' var='post'>
                        <div class='date-outer'>
                            <b:if cond='data:post.dateHeader'>
                                <h2 class='date-header'><span><data:post.dateHeader/></span></h2>
                            </b:if>
                            <div class='date-posts'>
                                <div class='post-outer'>

                                    <div class='post hentry uncustomized-post-template' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
                                        <b:if cond='data:post.thumbnailUrl'>
                                            <meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/>
                                        </b:if>
                                        <meta expr:content='data:blog.blogId' itemprop='blogId'/>
                                        <meta expr:content='data:post.id' itemprop='postId'/>

                                        <a expr:name='data:post.id'/>
                                        <b:if cond='data:post.title'>
                                            <h3 class='post-title entry-title' itemprop='name'>
                                                <b:if cond='data:post.link'>
                                                    <a expr:href='data:post.link'><data:post.title/></a>
                                                    <b:elseif cond='data:post.url and data:blog.url != data:post.url'/>
                                                    <a expr:href='data:post.url'><data:post.title/></a>
                                                    <b:else/>
                                                    <data:post.title/>
                                                </b:if>
                                            </h3>
                                        </b:if>

                                        <div class='post-header'>
                                            <div class='post-header-line-1'/>
                                        </div>

                                        <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
                                            <data:post.body/>

                                            <div style='clear: both;'/> <!-- clear for photos floats -->
                                        </div>

                                        <div class='post-footer'>
                                            <div class='post-footer-line post-footer-line-1'>
              <span class='post-author vcard'>
                <b:if cond='data:top.showAuthor'>
                  <b:if cond='data:post.authorProfileUrl'>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                      <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                        <span itemprop='name'><data:post.author/></span>
                      </a>
                    </span>
                  <b:else/>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <span itemprop='name'><data:post.author/></span>
                    </span>
                  </b:if>
                </b:if>
              </span>

                                                <span class='post-timestamp'>
                <b:if cond='data:top.showTimestamp'>
                  <data:top.timestampLabel/>
                  <b:if cond='data:post.url'>
                    <meta expr:content='data:post.url.canonical' itemprop='url'/>
                    <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><span class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></span></a>
                  </b:if>
                </b:if>
              </span>

                                                <span class='post-comment-link'>
                <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                                  and data:post.allowComments' data='post' name='comment_count_picker'/>
              </span>
                                            </div>

                                            <div class='post-footer-line post-footer-line-2'>
                                                <b:if cond='data:top.showMobileShare'>
                                                    <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                                                        <a href='javascript:void(0);'><data:shareMsg/></a>
                                                    </div>
                                                </b:if>
                                                <b:if cond='data:top.showDummy'>
                                                    <div class='goog-inline-block dummy-container'><data:post.dummyTag/></div>
                                                </b:if>
                                            </div>

                                        </div>
                                    </div>

                                    <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
                                </div>
                            </div>
                        </div>
                    </b:includable>
                    <b:includable id='nextprev'>
                        <div class='blog-pager' id='blog-pager'>
                            <b:if cond='data:newerPageUrl'>
      <span id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'><data:newerPageTitle/></a>
      </span>
                            </b:if>

                            <b:if cond='data:olderPageUrl'>
      <span id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'><data:olderPageTitle/></a>
      </span>
                            </b:if>

                            <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>

                            <b:if cond='data:mobileLinkUrl'>
                                <div class='blog-mobile-link'>
                                    <a expr:href='data:mobileLinkUrl'><data:mobileLinkMsg/></a>
                                </div>
                            </b:if>

                        </div>
                        <div class='clear'/>
                    </b:includable>
                    <b:includable id='post' var='post'>
                        <article class='post'>

                            <b:switch var='data:blog.pageType'>
                                <b:case value='static_page'/>
                                <!-- Posting halaman statis -->
                                <div>
                                    <b:if cond='data:post.title'>
                                        <h1 class='post-title entry-title'>
                                            <b:if cond='data:post.link'>
                                                <a expr:href='data:post.link'><data:post.title/></a>
                                                <b:else/>
                                                <b:if cond='data:post.url'>
                                                    <b:if cond='data:blog.url != data:post.url'>
                                                        <a expr:href='data:post.url'><data:post.title/></a>
                                                        <b:else/>
                                                        <data:post.title/>
                                                    </b:if>
                                                    <b:else/>
                                                    <data:post.title/>
                                                </b:if>
                                            </b:if>
                                        </h1>
                                    </b:if>
                                    <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id'>
                                        <div id='body-post-it'>
                                            <data:post.body/>
                                        </div>
                                        <div style='clear: both;'/>
                                    </div>
                                </div>
                                <script>
                                    if (typeof(BLOG_attachCsiOnload) != &#39;undefined&#39; &amp;&amp; BLOG_attachCsiOnload != null) { window[&#39;blogger_templates_experiment_id&#39;] = &quot;templatesV1&quot;;window[&#39;blogger_blog_id&#39;] = &#39;<data:blog.blogId/>&#39;;BLOG_attachCsiOnload(&#39;&#39;); }_WidgetManager._Init(&#39;//www.blogger.com/rearrange?blogIDx3d<data:blog.blogId/>&#39;,&#39;<data:blog.homepageUrl/>&#39;,&#39;<data:blog.blogId/>&#39;);
                                    _WidgetManager._RegisterWidget(&#39;_ContactFormView&#39;, new _WidgetInfo(&#39;ContactForm1&#39;, &#39;footer1&#39;, null, document.getElementById(&#39;ContactForm1&#39;), {&#39;contactFormMessageSendingMsg&#39;: &#39;Sending...&#39;, &#39;contactFormMessageSentMsg&#39;: &#39;Your message has been sent.&#39;, &#39;contactFormMessageNotSentMsg&#39;: &#39;Message could not be sent. Please try again later.&#39;, &#39;contactFormInvalidEmailMsg&#39;: &#39;A valid email address is required.&#39;, &#39;contactFormEmptyMessageMsg&#39;: &#39;Message field cannot be empty.&#39;, &#39;title&#39;: &#39;Contact Form&#39;, &#39;blogId&#39;: &#39;<data:blog.blogId/>&#39;, &#39;contactFormNameMsg&#39;: &#39;Name&#39;, &#39;contactFormEmailMsg&#39;: &#39;Email&#39;, &#39;contactFormMessageMsg&#39;: &#39;Message&#39;, &#39;contactFormSendMsg&#39;: &#39;Send&#39;, &#39;submitUrl&#39;: &#39;https://www.blogger.com/contact-form.do&#39;}, &#39;displayModeFull&#39;));
                                </script>
                                <b:case value='item'/>
                                <!-- Posting halaman item -->
                                <div>
                                    <b:if cond='data:post.firstImageUrl'>
                                        <meta expr:content='data:post.firstImageUrl' itemprop='image'/>
                                    </b:if>
                                    <a expr:name='data:post.id'/>
                                    <b:if cond='data:post.title'>
                                        <h1 class='post-title entry-title' itemprop='name headline'>
                                            <b:if cond='data:post.link'>
                                                <a expr:href='data:post.link'><data:post.title/></a>
                                                <b:else/>
                                                <b:if cond='data:post.url'>
                                                    <b:if cond='data:blog.url != data:post.url'>
                                                        <a expr:href='data:post.url'><data:post.title/></a>
                                                        <b:else/>
                                                        <data:post.title/>
                                                    </b:if>
                                                    <b:else/>
                                                    <data:post.title/>
                                                </b:if>
                                            </b:if>
                                        </h1>
                                    </b:if>

                                    <div class='post-info info-3'>
                                        <b:include data='post' name='postauthorinfo'/>
                                        <b:include data='post' name='postdateinfo'/>
                                        <b:include data='post' name='postcommentinfo2'/>
                                        <b:include data='post' name='postQuickEdit'/>
                                    </div>



                                    <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id'>
                                        <meta expr:content='data:post.snippet' itemprop='description'/>

                                        <div id='body-post-it'>
                                            <data:post.body/>
                                            <ins class='adsbygoogle' data-ad-client='ca-pub-xxxxxxxxxxxx' data-ad-format='fluid' data-ad-layout='in-article' data-ad-slot='xxxxxxxx' style='display: block; text-align: center;'/><script>
                                                (adsbygoogle = window.adsbygoogle || []).push({});
                                            </script>
                                            <div class='text-center'>
                                                <!-- Pilar besar -->
                                                <div class='mt-1 alert alert-success text-left d-none' id='alert-done'>
                                                    <i aria-hidden='true' class='fa fa-thumbs-o-up'/>
                                                    <strong>Well done!</strong> you have successfully gained access to Decrypted Link. <i aria-hidden='true' class='fa fa-hand-o-down slideInDownThumb'/>
                                                </div>
                                                <button class='btn bt-success'  id='gotolink'><i aria-hidden='true' class='fa fa-download'/> DOWNLOAD</button>
                                                <center>
                                                    <ins class='adsbygoogle' data-ad-client='ca-pub-XXXXXXXXX' data-ad-slot='XXXXX' style='display:inline-block;width:300px;height:600px'/>
                                                    <script>
                                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                                    </script>
                                                </center>
                                                <div style='margin:auto;display:inline-block'>
<span style='font-family: &quot;arial&quot;, text-align: &quot;left&quot; , &quot;helvetica&quot; , sans-serif;'>Choosing a suitable pricing method comes down to you. There&#39;s no single strategy specific to your business nor best strategy amongst them all. If dealing in unique or less competitive products or services, a cost plus and mark-up pricing strategies can be considered while someone dealing in competitive<br/>
<b:if cond='data:blog.isMobileRequest == &quot;true&quot;'>
<ins class='adsbygoogle' data-ad-client='ca-pub-XXXXXXXXXXXX' data-ad-format='fluid' data-ad-layout='in-article' data-ad-slot='XXXXXXXX' style='display: block; text-align: center;'/><script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</b:if>
<br/> products ought to use competitive pricing. They should however consider their costs thereb finding ways to reduce costs by looking for cheaper products, cheaper rent or choosing to sacrifice by ensuring a higher quantity is sold at a cheaper price earning a smaller profit per unit compared to competitors.</span>

                                                </div>
                                            </div>



                                        </div>
                                        <div style='clear: both;'/>

                                        <b:include data='post' name='postauthorbox'/>

                                        <b:include data='post' name='postsharebutton'/>

                                        <b:include data='post' name='relatedpost'/>

                                    </div>
                                </div>
                                <b:default/>
                                <!-- Posting halaman default (index, arsip, dll.) -->
                                <b:if cond='data:post.labels'>
                                    <!--  <div class='label-line'>
	  <span class='label-info-th'>
	  <b:loop values='data:post.labels' var='label'>
		<a expr:href='data:label.url' rel='tag'><data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'/>
	  </b:loop>
	  </span>
	  </div>-->
                                </b:if>
                                <b:include data='post' name='postthumbnail'/>
                                <b:if cond='data:post.firstImageUrl'>
                                    <meta expr:content='data:post.firstImageUrl' itemprop='image'/>
                                </b:if>
                                <a expr:name='data:post.id'/>
                                <b:if cond='data:post.title'>
                                    <h2 class='post-title entry-title' itemprop='name headline'>
                                        <b:if cond='data:post.link'>
                                            <a expr:href='data:post.link'><data:post.title/></a>
                                            <b:else/>
                                            <b:if cond='data:post.url'>
                                                <b:if cond='data:blog.url != data:post.url'>
                                                    <a expr:href='data:post.url'><data:post.title/></a>
                                                    <b:else/>
                                                    <data:post.title/>
                                                </b:if>
                                                <b:else/>
                                                <data:post.title/>
                                            </b:if>
                                        </b:if>
                                    </h2>
                                </b:if>

                                <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='description'>
                                    <div class='post-snippet'>
                                        <data:post.snippet/>
                                    </div>
                                </div>
                                <div class='post-info info-1'>
                                    <b:include data='post' name='postauthorinfo'/>
                                    <b:include data='post' name='postdateinfo'/>
                                    <b:include data='post' name='postcommentinfo'/>
                                    <b:include data='post' name='postQuickEdit'/>
                                </div>
                            </b:switch>
                            <div style='clear: both;'/>
                        </article>

                    </b:includable>
                    <b:includable id='postQuickEdit' var='post'>
                        <b:if cond='data:post.editUrl'>
    <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
	<span class='edit-post'>
      <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
		<strong>Edit</strong>
      </a>
	</span>
    </span>
                        </b:if>
                    </b:includable>
                    <b:includable id='postauthorbox' var='post'>
                        <b:if cond='data:post.authorAboutMe'>
                            <div class='author-profile' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                <b:if cond='data:post.authorPhoto.url'>
                                    <img expr:src='data:post.authorPhoto.url' itemprop='image' width='90px'/>
                                </b:if>
                                <div>
                                    <a class='g-profile' expr:href='data:post.authorProfileUrl' itemprop='url' rel='author' title='author profile'>
                                        <span itemprop='name'><data:post.author/></span>
                                    </a>
                                </div>
                                <span itemprop='description'><data:post.authorAboutMe/></span>
                            </div>
                        </b:if>
                    </b:includable>
                    <b:includable id='postauthorinfo' var='post'>
                        <b:if cond='data:top.showAuthor'>
<span class='author-info'>
    By <span itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
	<meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
	<b:if cond='data:post.authorProfileUrl'>
	<a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
	  <span itemprop='name'><data:post.author/></span>
	</a>
	<b:else/>
	  <span itemprop='name'><data:post.author/></span>
	</b:if>
	</span>
</span>
                        </b:if>
                    </b:includable>
                    <b:includable id='postcommentinfo' var='post'>
                        <b:if cond='data:post.allowComments'>
  <span class='comment-info'>
  <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'> <b:if cond='data:post.numComments == 0'> Add Comment </b:if> <b:if cond='data:post.numComments == 1'> 1 Comment </b:if> <b:if cond='data:post.numComments &gt; 1'> <data:post.numComments/> Comments </b:if>
  </a>
  </span>
                        </b:if>
                    </b:includable>
                    <b:includable id='postcommentinfo2' var='post'>
                        <b:if cond='data:post.allowComments'>
  <span class='comment-info'>
  <a expr:onclick='data:post.addCommentOnclick' href='#comment-form'> <b:if cond='data:post.numComments == 0'> Add Comment </b:if> <b:if cond='data:post.numComments == 1'> 1 Comment </b:if> <b:if cond='data:post.numComments &gt; 1'> <data:post.numComments/> Comments </b:if>
  </a>
  </span>
                        </b:if>
                    </b:includable>
                    <b:includable id='postdateinfo' var='post'>
                        <b:if cond='data:post.dateHeader'>
 <span class='time-info'><span class='updated published' expr:title='data:post.timestampISO8601'>
 <meta expr:content='data:post.timestampISO8601' itemprop='datePublished'/>
  <data:post.dateHeader/>
 </span></span>
                            <b:else/>
                            <b:if cond='data:top.showTimestamp'>
 <span class='time-info'><span class='updated published' expr:title='data:post.timestampISO8601'>
 <meta expr:content='data:post.timestampISO8601' itemprop='datePublished'/>
  <data:post.timestamp/>
 </span></span>
                            </b:if>
                        </b:if>
                    </b:includable>
                    <b:includable id='postlabelinfo' var='post'>
                        <b:if cond='data:post.labels'>
  <span class='label-info'>
  <b:loop values='data:post.labels' var='label'>
	<a expr:href='data:label.url' rel='tag'><data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'/>
  </b:loop>
  </span>
                        </b:if>
                    </b:includable>
                    <b:includable id='postsharebutton' var='post'>
                        <div id='share-container'>
                        </div>
                    </b:includable>
                    <b:includable id='postsubscribebox' var='post'>
                        <div class='berlangganan-box'>
                            <form action='https://feedburner.google.com/fb/a/mailverify' method='post' onsubmit='window.open(&apos;https://feedburner.google.com/fb/a/mailverify?uri=BlogMasSugeng&apos;, &apos;popupwindow&apos;, &apos;scrollbars=yes,width=550,height=520&apos;);return true' target='popupwindow'>
                                <p>Berlangganan update artikel terbaru via email:</p><p><input class='email-address' name='email' placeholder='Masukan alamat email...' type='text'/></p><input name='uri' type='hidden' value='BlogMasSugeng'/>
                                <input name='loc' type='hidden' value='en_US'/>
                                <p><input class='submit-email' type='submit' value='Berlangganan'/></p>
                            </form>
                        </div>
                        <style>
                            .header-safelinku {
                                width: 100%;
                                height: 50px;
                                background: linear-gradient(45deg,#3e66b3,#5879c3);
                                position: relative;
                                padding: 0px 0 185px;
                            }
                        </style>
                    </b:includable>
                    <b:includable id='postthumbnail' var='post'>
                        <!-- <div class='img-thumbnail'>
  <b:if cond='data:post.thumbnailUrl'>
	<a expr:href='data:post.url'><img expr:alt='data:post.title' expr:src='resizeImage(data:post.thumbnailUrl, 255, &quot;300:200&quot;)' expr:title='data:post.title'/>
	</a>
  <b:else/>
	<b:if cond='data:post.firstImageUrl'>
	<a expr:href='data:post.url'><img expr:alt='data:post.title' expr:src='data:post.firstImageUrl' expr:title='data:post.title'/>
	</a>
  <b:else/>
	<a expr:href='data:post.url'><img expr:alt='data:post.title' expr:title='data:post.title' src='//3.bp.blogspot.com/-ltyYh4ysBHI/U04MKlHc6pI/AAAAAAAADQo/PFxXaGZu9PQ/w255-h170-c/no-image.png'/>
	</a>
  </b:if>
  </b:if>
  </div>-->
                    </b:includable>
                    <b:includable id='relatedpost' var='post'>
                        <div class='related-post' expr:id='&quot;related-post-&quot; + data:post.id'/>

                    </b:includable>
                    <b:includable id='shareButtons' var='post'>
                        <b:if cond='data:top.showEmailButton'><a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'><span class='share-button-link-text'><data:top.emailThisMsg/></span></a></b:if><b:if cond='data:top.showBlogThisButton'><a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'><span class='share-button-link-text'><data:top.blogThisMsg/></span></a></b:if><b:if cond='data:top.showTwitterButton'><a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToTwitterMsg/></span></a></b:if><b:if cond='data:top.showFacebookButton'><a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToFacebookMsg/></span></a></b:if><b:if cond='data:top.showOrkutButton'><a class='goog-inline-block share-button sb-orkut' expr:href='data:post.sharePostUrl + &quot;&amp;target=orkut&quot;' expr:title='data:top.shareToOrkutMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToOrkutMsg/></span></a></b:if><b:if cond='data:top.showDummy'><div class='goog-inline-block dummy-container'><data:post.dummyTag/></div></b:if>
                    </b:includable>
                    <b:includable id='status-message'>
                        <b:if cond='data:navMessage'>
                            <div class='status-msg-wrap'>
                                <div class='status-msg-body'>
                                    <data:navMessage/>
                                </div>
                                <div class='status-msg-border'>
                                    <div class='status-msg-bg'>
                                        <div class='status-msg-hidden'><data:navMessage/></div>
                                    </div>
                                </div>
                            </div>
                            <div style='clear: both;'/>
                        </b:if>
                    </b:includable>
                    <b:includable id='threaded-comment-form' var='post'>
                        <div class='comment-form'>
                            <a name='comment-form'/>
                            <b:if cond='data:mobile'>
                                <div class='pesan-komentar'><p><data:blogCommentMessage/></p></div>
                                <data:blogTeamBlogMessage/>
                                <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                                <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                                <b:else/>
                                <div class='pesan-komentar'><p><data:blogCommentMessage/></p></div>
                                <data:blogTeamBlogMessage/>
                                <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                                <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
                            </b:if>
                            <data:post.friendConnectJs/>
                            <data:post.cmtfpIframe/>
                            <script>
                                BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;, &#39;<data:post.communityId/>&#39;);
                            </script>
                        </div>
                    </b:includable>
                    <b:includable id='threaded_comment_js' var='post'>
                        <script async='async' expr:src='data:post.commentSrc'/>

                        <script>
                            (function() {
                                var items = <data:post.commentJso/>;
                                var msgs = <data:post.commentMsgs/>;
                                var config = <data:post.commentConfig/>;

// <![CDATA[
                                var cursor = null;
                                if (items && items.length > 0) {
                                    cursor = parseInt(items[items.length - 1].timestamp) + 1;
                                }

                                var bodyFromEntry = function(entry) {
                                    if (entry.gd$extendedProperty) {
                                        for (var k in entry.gd$extendedProperty) {
                                            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
                                                return '<span class="deleted-comment">' + entry.content.$t + '</span>';
                                            }
                                        }
                                    }
                                    return entry.content.$t;
                                }

                                var parse = function(data) {
                                    cursor = null;
                                    var comments = [];
                                    if (data && data.feed && data.feed.entry) {
                                        for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
                                            var comment = {};
                                            // comment ID, parsed out of the original id format
                                            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
                                            comment.id = id ? id[2] : null;
                                            comment.body = bodyFromEntry(entry);
                                            comment.timestamp = Date.parse(entry.published.$t) + '';
                                            if (entry.author && entry.author.constructor === Array) {
                                                var auth = entry.author[0];
                                                if (auth) {
                                                    comment.author = {
                                                        name: (auth.name ? auth.name.$t : undefined),
                                                        profileUrl: (auth.uri ? auth.uri.$t : undefined),
                                                        avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                                                    };
                                                }
                                            }
                                            if (entry.link) {
                                                if (entry.link[2]) {
                                                    comment.link = comment.permalink = entry.link[2].href;
                                                }
                                                if (entry.link[3]) {
                                                    var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                                                    if (pid && pid[1]) {
                                                        comment.parentId = pid[1];
                                                    }
                                                }
                                            }
                                            comment.deleteclass = 'item-control blog-admin';
                                            if (entry.gd$extendedProperty) {
                                                for (var k in entry.gd$extendedProperty) {
                                                    if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                                                        comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                                                    } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                                                        comment.displayTime = entry.gd$extendedProperty[k].value;
                                                    }
                                                }
                                            }
                                            comments.push(comment);
                                        }
                                    }
                                    return comments;
                                };

                                var paginator = function(callback) {
                                    if (hasMore()) {
                                        var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
                                        if (cursor) {
                                            url += '&published-min=' + new Date(cursor).toISOString();
                                        }
                                        window.bloggercomments = function(data) {
                                            var parsed = parse(data);
                                            cursor = parsed.length < 50 ? null
                                                : parseInt(parsed[parsed.length - 1].timestamp) + 1
                                            callback(parsed);
                                            window.bloggercomments = null;
                                        }
                                        url += '&callback=bloggercomments';
                                        var script = document.createElement('script');
                                        script.type = 'text/javascript';
                                        script.src = url;
                                        document.getElementsByTagName('head')[0].appendChild(script);
                                    }
                                };
                                var hasMore = function() {
                                    return !!cursor;
                                };
                                var getMeta = function(key, comment) {
                                    if ('iswriter' == key) {
                                        var matches = !!comment.author
                                            && comment.author.name == config.authorName
                                            && comment.author.profileUrl == config.authorUrl;
                                        return matches ? 'true' : '';
                                    } else if ('deletelink' == key) {
                                        return config.baseUri + '/delete-comment.g?blogID='
                                            + config.blogId + '&postID=' + comment.id;
                                    } else if ('deleteclass' == key) {
                                        return comment.deleteclass;
                                    }
                                    return '';
                                };

                                var replybox = null;
                                var replyUrlParts = null;
                                var replyParent = undefined;

                                var onReply = function(commentId, domId) {
                                    if (replybox == null) {
                                        // lazily cache replybox, and adjust to suit this style:
                                        replybox = document.getElementById('comment-editor');
                                        if (replybox != null) {
                                            replybox.height = '250px';
                                            replybox.style.display = 'block';
                                            replyUrlParts = replybox.src.split('#');
                                        }
                                    }
                                    if (replybox && (commentId !== replyParent)) {
                                        document.getElementById(domId).insertBefore(replybox.parentNode, null);
                                        replybox.src = replyUrlParts[0]
                                            + (commentId ? '&parentID=' + commentId : '')
                                            + '#' + replyUrlParts[1];
                                        replyParent = commentId;
                                    }
                                };

                                var hash = (window.location.hash || '#').substring(1);
                                var startThread, targetComment;
                                if (/^comment-form_/.test(hash)) {
                                    startThread = hash.substring('comment-form_'.length);
                                } else if (/^c[0-9]+$/.test(hash)) {
                                    targetComment = hash.substring(1);
                                }

                                // Configure commenting API:
                                var configJso = {
                                    'maxDepth': config.maxThreadDepth
                                };
                                var provider = {
                                    'id': config.postId,
                                    'data': items,
                                    'loadNext': paginator,
                                    'hasMore': hasMore,
                                    'getMeta': getMeta,
                                    'onReply': onReply,
                                    'rendered': true,
                                    'initComment': targetComment,
                                    'initReplyThread': startThread,
                                    'config': configJso,
                                    'messages': msgs
                                };

                                var render = function() {
                                    if (window.goog && window.goog.comments) {
                                        var holder = document.getElementById('comment-holder');
                                        window.goog.comments.render(holder, provider);
                                    }
                                };

                                // render now, or queue to render when library loads:
                                if (window.goog && window.goog.comments) {
                                    render();
                                } else {
                                    window.goog = window.goog || {};
                                    window.goog.comments = window.goog.comments || {};
                                    window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
                                    window.goog.comments.loadQueue.push(render);
                                }
                            })();
                            // ]]>
                        </script>
                    </b:includable>
                    <b:includable id='threaded_comments' var='post'>
                        <div class='comments' id='comments'>
                            <a name='comments'/>
                            <h3><b:if cond='data:post.numComments == 0'> 0 Response to &quot;<data:blog.pageName/>&quot;</b:if> <b:if cond='data:post.numComments == 1'> 1 Response to &quot;<data:blog.pageName/>&quot; </b:if> <b:if cond='data:post.numComments &gt; 1'> <data:post.numComments/> Responses to &quot;<data:blog.pageName/>&quot; </b:if></h3>

                            <div class='comments-content'>
                                <b:if cond='data:post.embedCommentForm'>
                                    <b:include data='post' name='threaded_comment_js'/>
                                </b:if>
                                <div id='comment-holder'>
                                    <data:post.commentHtml/>
                                </div>
                            </div>

                            <p class='comment-footer'>
                                <b:if cond='data:post.allowNewComments'>
                                    <b:include data='post' name='threaded-comment-form'/>
                                    <b:else/>
                                    <data:post.noNewCommentsText/>
                                </b:if>
                            </p>

                            <b:if cond='data:showCmtPopup'>
                                <div id='comment-popup'>
                                    <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                                    </iframe>
                                </div>
                            </b:if>

                            <div id='backlinks-container'>
                                <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                                    <b:if cond='data:post.showBacklinks'>
                                        <b:include data='post' name='backlinks'/>
                                    </b:if>
                                </div>
                            </div>
                        </div>
                    </b:includable>
                </b:widget>
            </b:section>

            <b:section class='iklan-atas' id='iklan-atas' maxwidgets='1' showaddelement='yes'>
                <b:widget id='HTML996' locked='true' title='Iklan Atas Artikel' type='HTML' version='1'>
                    <b:widget-settings>
                        <b:widget-setting name='content'>&lt;div class=&#39;klikads&#39;&gt;
                            &lt;ins class=&quot;adsbygoogle&quot;
                            style=&quot;display:block&quot;
                            data-ad-client=&quot;ca-pub-xxxxxxxxxxxxx&quot;
                            data-ad-slot=&quot;xxxxxxxxxx&quot;
                            data-ad-format=&quot;auto&quot;
                            data-full-width-responsive=&quot;true&quot;&gt;&lt;/ins&gt;
                            &lt;script&gt;
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            &lt;/script&gt;
                            &lt;div id=&quot;timer&quot;&gt;&lt;/div&gt;
                            &lt;div class=&quot;text-center&quot;&gt;
                            &lt;button id=&#39;getlink&#39; class=&#39;btn bt-success&#39; disabled=&#39;&#39;&gt;Klik 2X&lt;/button&gt;
                            &lt;ins class=&quot;adsbygoogle&quot; data-ad-client=&quot;ca-pub-xxxxxxxxxxxxxxx&quot; data-ad-format=&quot;fluid&quot; data-ad-layout=&quot;in-article&quot; data-ad-slot=&quot;xxxxxxxxxxxx&quot; style=&quot;display: block; text-align: center;&quot;&gt;&lt;/ins&gt;&lt;script&gt;
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            &lt;/script&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</b:widget-setting>
                    </b:widget-settings>
                    <b:includable id='main'>
                        <b:if cond='data:blog.pageType in {&quot;item&quot;}'>
                            <!-- only display title if it's non-empty -->
                            <b:if cond='data:title != &quot;&quot;'>
                                <h2 class='title'><data:title/></h2>
                            </b:if>
                            <div class='widget-content'>
                                <div id='kode-iklan-atas'>
                                    <data:content/>
                                </div>
                            </div>
                        </b:if>

                    </b:includable>
                </b:widget>
            </b:section>

            <b:section class='iklan-tengah1' id='iklan-tengah1' maxwidgets='1' showaddelement='yes'>
                <b:widget id='HTML997' locked='true' title='Iklan Tengah Artikel 1' type='HTML' version='1'>
                    <b:widget-settings>
                        <b:widget-setting name='content'/>
                    </b:widget-settings>
                    <b:includable id='main'>
                        <b:if cond='data:blog.pageType in {&quot;item&quot;}'>
                            <!-- only display title if it's non-empty -->
                            <b:if cond='data:title != &quot;&quot;'>
                                <h2 class='title'><data:title/></h2>
                            </b:if>
                            <div class='widget-content'>
                                <div id='kode-iklan-tengah1'>
                                    <data:content/>
                                </div>
                            </div>
                        </b:if>
                    </b:includable>
                </b:widget>
            </b:section>
            <b:section class='iklan-tengah2' id='iklan-tengah2' maxwidgets='1' showaddelement='yes'>
                <b:widget id='HTML998' locked='true' title='Iklan Tengah Artikel 2' type='HTML' version='1'>
                    <b:widget-settings>
                        <b:widget-setting name='content'/>
                    </b:widget-settings>
                    <b:includable id='main'>
                        <b:if cond='data:blog.pageType in {&quot;item&quot;}'>
                            <!-- only display title if it's non-empty -->
                            <b:if cond='data:title != &quot;&quot;'>
                                <h2 class='title'><data:title/></h2>
                            </b:if>
                            <div class='widget-content'>
                                <div id='kode-iklan-tengah2'>
                                    <data:content/>
                                </div>
                            </div>
                        </b:if>
                    </b:includable>
                </b:widget>
            </b:section>
            <b:section class='iklan-bawah' id='iklan-bawah' maxwidgets='1' showaddelement='yes'>
                <b:widget id='HTML999' locked='true' title='Iklan Bawah Artikel' type='HTML' version='1'>
                    <b:widget-settings>
                        <b:widget-setting name='content'/>
                    </b:widget-settings>
                    <b:includable id='main'>
                        <b:if cond='data:blog.pageType in {&quot;item&quot;}'>
                            <!-- only display title if it's non-empty -->
                            <b:if cond='data:title != &quot;&quot;'>
                                <h2 class='title'><data:title/></h2>
                            </b:if>
                            <div class='widget-content'>
                                <div id='kode-iklan-bawah'>
                                    <data:content/>
                                </div>
                            </div>
                        </b:if>

                    </b:includable>
                </b:widget>
            </b:section>
            <b:if cond='data:blog.pageType in {&quot;item&quot;}'>
                <script type='text/javascript'>
                    function insertAfter(addition, konten) {
                        var parent = konten.parentNode;
                        if (parent.lastChild == konten) {
                            parent.appendChild(addition);
                        } else {
                            parent.insertBefore(addition, konten.nextSibling);
                        }
                    }
                    function insertAbove(addition, konten) {
                        var parent = konten.parentNode;
                        parent.insertBefore(addition, konten);
                    }
                    function insertBellow(addition) {
                        var parent = konten;
                        parent.appendChild(addition);
                    }
                    var iklan1 = document.getElementById(&quot;kode-iklan-tengah1&quot;);
                    var iklan2 = document.getElementById(&quot;kode-iklan-tengah2&quot;);
                    var iklanAtas = document.getElementById(&quot;kode-iklan-atas&quot;);
                    var iklanBawah = document.getElementById(&quot;kode-iklan-bawah&quot;);
                    var bacaJuga = document.getElementById(&quot;baca-juga&quot;);
                    var konten = document.getElementById(&quot;body-post-it&quot;);
                    var lokasi = konten.getElementsByTagName(&quot;br&quot;);
                    if (lokasi.length &gt; 0) {
                        insertAbove(iklanAtas,konten);
                        insertBellow(iklanBawah);
                    }
                    if (lokasi.length &gt; 2) {
                        insertAfter(iklan1,lokasi[2]);
                    }
                    else {
                        iklan1.innerHTML = &quot;&quot;;
                    }
                    if (lokasi.length &gt; 10) {
                        insertAfter(iklan2,lokasi[10]);
                    }
                    else {
                        iklan2.innerHTML = &quot;&quot;;
                    }
                    if (lokasi.length &gt; 4) {
                        insertAfter(bacaJuga,lokasi[4]);
                    }
                    else {
                        bacaJuga.innerHTML = &quot;&quot;;
                    }
                </script>
            </b:if>
        </div>

    </div>
    <!-- post wrapper end -->


    <!-- sidebar wrapper start -->
    <aside id='sidebar-wrapper'>
        <a name='details'/>
        <div class='clear'/>
        <div class='sidebar-container'>
            <b:section class='sidebar' id='sidebar' preferred='yes'/>
            <b:section class='sidebar-sticky' id='sidebar-sticky' preferred='yes'/>
        </div>
    </aside>
    <!-- sidebar wrapper end -->

    <div class='clear'/>
</div>
<!-- wrapper end -->
<div class='sticky-stop'/>

<div id='footer-widget-container'>
    <b:section class='footer-widget' id='footer-widget' maxwidgets='1' showaddelement='yes'/>
</div>
<!-- footer nav menu end -->
<div id='theboegisb' style='z-index:-99;'>
    <ul class='circles'><li/><li/><li/><li/><li/><li/><li/><li/><li/><li/></ul>
    <!-- footer wrapper start -->
    <div id='footer-container'>
        <footer class='main-footer'>
            <div class='container'>
                <strong>Copyright 2018 <a href='/'>SafelinkU</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer></div>
</div>
<!-- footer wrapper end -->
<b:if cond='data:blog.isMobile == &quot;false&quot;'>
    <b:if cond='data:blog.pageType != &quot;item&quot;'>
        <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
            <!-- JAVASCRIPT NAVIGASI HALAMAN BERNOMOR -->
            <script>
                /*<![CDATA[*/
                var perPage=7;
                var numPages=6;
                var firstText ='First';
                var lastText ='Last';
                var prevText ='‹ Prev';
                var nextText ='Next ›';
                var urlactivepage=location.href;
                var home_page="/";
                /*]]>*/
            </script>
            <script>
                //<![CDATA[
                if(typeof firstText=="undefined")firstText="First";if(typeof lastText=="undefined")lastText="Last";var noPage;var currentPage;var currentPageNo;var postLabel;pagecurrentg();function looppagecurrentg(pageInfo){var html='';pageNumber=parseInt(numPages/2);if(pageNumber==numPages-pageNumber){numPages=pageNumber*2+1}pageStart=currentPageNo-pageNumber;if(pageStart<1)pageStart=1;lastPageNo=parseInt(pageInfo/perPage)+1;if(lastPageNo-1==pageInfo/perPage)lastPageNo=lastPageNo-1;pageEnd=pageStart+numPages-1;if(pageEnd>lastPageNo)pageEnd=lastPageNo;html+="<span class='showpageOf'>Page "+currentPageNo+' of '+lastPageNo+"</span>";var prevNumber=parseInt(currentPageNo)-1;if(currentPageNo>1){if(currentPage=="page"){html+='<span class="showpage firstpage"><a href="'+home_page+'">'+firstText+'</a></span>'}else{html+='<span class="displaypageNum firstpage"><a href="/search/label/'+postLabel+'?&max-results='+perPage+'">'+firstText+'</a></span>'}}if(currentPageNo>2){if(currentPageNo==3){if(currentPage=="page"){html+='<span class="showpage"><a href="'+home_page+'">'+prevText+'</a></span>'}else{html+='<span class="displaypageNum"><a href="/search/label/'+postLabel+'?&max-results='+perPage+'">'+prevText+'</a></span>'}}else{if(currentPage=="page"){html+='<span class="displaypageNum"><a href="#" onclick="redirectpage('+prevNumber+');return false">'+prevText+'</a></span>'}else{html+='<span class="displaypageNum"><a href="#" onclick="redirectlabel('+prevNumber+');return false">'+prevText+'</a></span>'}}}if(pageStart>1){if(currentPage=="page"){html+='<span class="displaypageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="displaypageNum"><a href="/search/label/'+postLabel+'?&max-results='+perPage+'">1</a></span>'}}if(pageStart>2){html+=' ... '}for(var jj=pageStart;jj<=pageEnd;jj++){if(currentPageNo==jj){html+='<span class="pagecurrent">'+jj+'</span>'}else if(jj==1){if(currentPage=="page"){html+='<span class="displaypageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="displaypageNum"><a href="/search/label/'+postLabel+'?&max-results='+perPage+'">1</a></span>'}}else{if(currentPage=="page"){html+='<span class="displaypageNum"><a href="#" onclick="redirectpage('+jj+');return false">'+jj+'</a></span>'}else{html+='<span class="displaypageNum"><a href="#" onclick="redirectlabel('+jj+');return false">'+jj+'</a></span>'}}}if(pageEnd<lastPageNo-1){html+='...'}if(pageEnd<lastPageNo){if(currentPage=="page"){html+='<span class="displaypageNum"><a href="#" onclick="redirectpage('+lastPageNo+');return false">'+lastPageNo+'</a></span>'}else{html+='<span class="displaypageNum"><a href="#" onclick="redirectlabel('+lastPageNo+');return false">'+lastPageNo+'</a></span>'}}var nextnumber=parseInt(currentPageNo)+1;if(currentPageNo<(lastPageNo-1)){if(currentPage=="page"){html+='<span class="displaypageNum"><a href="#" onclick="redirectpage('+nextnumber+');return false">'+nextText+'</a></span>'}else{html+='<span class="displaypageNum"><a href="#" onclick="redirectlabel('+nextnumber+');return false">'+nextText+'</a></span>'}}if(currentPageNo<lastPageNo){if(currentPage=="page"){html+='<span class="displaypageNum lastpage"><a href="#" onclick="redirectpage('+lastPageNo+');return false">'+lastText+'</a></span>'}else{html+='<span class="displaypageNum lastpage"><a href="#" onclick="redirectlabel('+lastPageNo+');return false">'+lastText+'</a></span>'}}var pageArea=document.getElementsByName("pageArea");var blogPager=document.getElementById("blog-pager");for(var p=0;p<pageArea.length;p++){pageArea[p].innerHTML=html}if(pageArea&&pageArea.length>0){html=''}if(blogPager){blogPager.innerHTML=html}}function totalcountdata(root){var feed=root.feed;var totaldata=parseInt(feed.openSearch$totalResults.$t,10);looppagecurrentg(totaldata)}function pagecurrentg(){var thisUrl=urlactivepage;if(thisUrl.indexOf("/search/label/")!=-1){if(thisUrl.indexOf("?updated-max")!=-1){postLabel=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?updated-max"))}else{postLabel=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?&max"))}}if(thisUrl.indexOf("?q=")==-1&&thisUrl.indexOf(".html")==-1){if(thisUrl.indexOf("/search/label/")==-1){currentPage="page";if(urlactivepage.indexOf("#PageNo=")!=-1){currentPageNo=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{currentPageNo=1}document.write("<script src=\""+home_page+"feeds/posts/summary?max-results=1&alt=json-in-script&callback=totalcountdata\"><\/script>")}else{currentPage="label";if(thisUrl.indexOf("&max-results=")==-1){perPage=20}if(urlactivepage.indexOf("#PageNo=")!=-1){currentPageNo=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{currentPageNo=1}document.write('<script src="'+home_page+'feeds/posts/summary/-/'+postLabel+'?alt=json-in-script&callback=totalcountdata&max-results=1" ><\/script>')}}}function redirectpage(numberpage){jsonstart=(numberpage-1)*perPage;noPage=numberpage;var nameBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nameBody.appendChild(newInclude)}function redirectlabel(numberpage){jsonstart=(numberpage-1)*perPage;noPage=numberpage;var nameBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary/-/"+postLabel+"?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nameBody.appendChild(newInclude)}function finddatepost(root){post=root.feed.entry[0];var timestamp1=post.published.$t.substring(0,19)+post.published.$t.substring(23,29);var timestamp=encodeURIComponent(timestamp1);if(currentPage=="page"){var pAddress="/search?updated-max="+timestamp+"&max-results="+perPage+"#PageNo="+noPage}else{var pAddress="/search/label/"+postLabel+"?updated-max="+timestamp+"&max-results="+perPage+"#PageNo="+noPage}location.href=pAddress}
                //]]>
            </script>
        </b:if>
    </b:if>
</b:if>
<script>
    //<![CDATA[
    /*
 Sticky-kit v1.1.2 | WTFPL | Leaf Corcoran 2015 | http://leafo.net
*/
    (function(){var b,f;b=this.jQuery||window.jQuery;f=b(window);b.fn.stick_in_parent=function(d){var A,w,J,n,B,K,p,q,k,E,t;null==d&&(d={});t=d.sticky_class;B=d.inner_scrolling;E=d.recalc_every;k=d.parent;q=d.offset_top;p=d.spacer;w=d.bottoming;null==q&&(q=0);null==k&&(k=void 0);null==B&&(B=!0);null==t&&(t="is_stuck");A=b(document);null==w&&(w=!0);J=function(a,d,n,C,F,u,r,G){var v,H,m,D,I,c,g,x,y,z,h,l;if(!a.data("sticky_kit")){a.data("sticky_kit",!0);I=A.height();g=a.parent();null!=k&&(g=g.closest(k));
        if(!g.length)throw"failed to find stick parent";v=m=!1;(h=null!=p?p&&a.closest(p):b("<div />"))&&h.css("position",a.css("position"));x=function(){var c,f,e;if(!G&&(I=A.height(),c=parseInt(g.css("border-top-width"),10),f=parseInt(g.css("padding-top"),10),d=parseInt(g.css("padding-bottom"),10),n=g.offset().top+c+f,C=g.height(),m&&(v=m=!1,null==p&&(a.insertAfter(h),h.detach()),a.css({position:"",top:"",width:"",bottom:""}).removeClass(t),e=!0),F=a.offset().top-(parseInt(a.css("margin-top"),10)||0)-q,
            u=a.outerHeight(!0),r=a.css("float"),h&&h.css({width:a.outerWidth(!0),height:u,display:a.css("display"),"vertical-align":a.css("vertical-align"),"float":r}),e))return l()};x();if(u!==C)return D=void 0,c=q,z=E,l=function(){var b,l,e,k;if(!G&&(e=!1,null!=z&&(--z,0>=z&&(z=E,x(),e=!0)),e||A.height()===I||x(),e=f.scrollTop(),null!=D&&(l=e-D),D=e,m?(w&&(k=e+u+c>C+n,v&&!k&&(v=!1,a.css({position:"fixed",bottom:"",top:c}).trigger("sticky_kit:unbottom"))),e<F&&(m=!1,c=q,null==p&&("left"!==r&&"right"!==r||a.insertAfter(h),
            h.detach()),b={position:"",width:"",top:""},a.css(b).removeClass(t).trigger("sticky_kit:unstick")),B&&(b=f.height(),u+q>b&&!v&&(c-=l,c=Math.max(b-u,c),c=Math.min(q,c),m&&a.css({top:c+"px"})))):e>F&&(m=!0,b={position:"fixed",top:c},b.width="border-box"===a.css("box-sizing")?a.outerWidth()+"px":a.width()+"px",a.css(b).addClass(t),null==p&&(a.after(h),"left"!==r&&"right"!==r||h.append(a)),a.trigger("sticky_kit:stick")),m&&w&&(null==k&&(k=e+u+c>C+n),!v&&k)))return v=!0,"static"===g.css("position")&&g.css({position:"relative"}),
            a.css({position:"absolute",bottom:d,top:"auto"}).trigger("sticky_kit:bottom")},y=function(){x();return l()},H=function(){G=!0;f.off("touchmove",l);f.off("scroll",l);f.off("resize",y);b(document.body).off("sticky_kit:recalc",y);a.off("sticky_kit:detach",H);a.removeData("sticky_kit");a.css({position:"",bottom:"",top:"",width:""});g.position("position","");if(m)return null==p&&("left"!==r&&"right"!==r||a.insertAfter(h),h.remove()),a.removeClass(t)},f.on("touchmove",l),f.on("scroll",l),f.on("resize",
            y),b(document.body).on("sticky_kit:recalc",y),a.on("sticky_kit:detach",H),setTimeout(l,0)}};n=0;for(K=this.length;n<K;n++)d=this[n],J(b(d));return this}}).call(this);
    // search form
    $(function(){$('a[href="#searchfs"]').on("click",function(e){e.preventDefault(),$("#searchfs").addClass("open"),$('#searchfs > form > input[type="search"]').focus()}),$("#searchfs, #searchfs button.close").on("click keyup",function(e){e.target!=this&&"close"!=e.target.className&&27!=e.keyCode||$(this).removeClass("open")})});
    // nav menu
    !function(s){s.fn.menumaker=function(n){var e=s(this),o=s.extend({format:"dropdown",sticky:!1},n);return this.each(function(){s(this).find(".button").on("click",function(){s(this).toggleClass("menu-opened");var n=s(this).next("ul");n.hasClass("open")?n.slideToggle(150).removeClass("open"):(n.slideToggle(150).addClass("open"),"dropdown"===o.format&&n.find("ul").show())}),e.find("li ul").parent().addClass("has-sub"),multiTg=function(){e.find(".has-sub").prepend('<span class="submenu-button"></span>'),e.find(".submenu-button").on("click",function(){s(this).toggleClass("submenu-opened"),s(this).siblings("ul").hasClass("open")?s(this).siblings("ul").removeClass("open").slideToggle(150):s(this).siblings("ul").addClass("open").slideToggle(150)})},"multitoggle"===o.format?multiTg():e.addClass("dropdown"),!0===o.sticky&&e.css("position","fixed")})}}(jQuery),function(s){s(document).ready(function(){s("#cssmenu").menumaker({format:"multitoggle"})})}(jQuery);
    //]]>
</script>
<script>
    //<![CDATA[
    jQuery(document).ready(function(){var i=jQuery(window).width();function e(){jQuery("#sidebar-sticky, #gotolink").stick_in_parent({parent:"#wrapper",offset_top:70})}i<768?jQuery("#sidebar-sticky, #gotolink").trigger("sticky_kit:detach"):e(),jQuery(window).resize(function(){(i=jQuery(window).width())<768?jQuery("#sidebar-sticky, #gotolink").trigger("sticky_kit:detach"):e()})});
    //]]>
</script>
<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500' rel='stylesheet' type='text/css'/>
<script>
    $(&#39;pre&#39;).attr(&#39;class&#39;, &#39;line-numbers&#39;);
    Prism.hooks.add(&quot;after-highlight&quot;,function(e){var t=e.element.parentNode;if(!t||!/pre/i.test(t.nodeName)||t.className.indexOf(&quot;line-numbers&quot;)===-1){return}var n=1+e.code.split(&quot;\n&quot;).length;var r;lines=new Array(n);lines=lines.join(&quot;<span/>&quot;);r=document.createElement(&quot;span&quot;);r.className=&quot;line-numbers-rows&quot;;r.innerHTML=lines;if(t.hasAttribute(&quot;data-start&quot;)){t.style.counterReset=&quot;linenumber &quot;+(parseInt(t.getAttribute(&quot;data-start&quot;),10)-1)}e.element.appendChild(r)})
</script>
<script type='text/javascript'>
    var pres = document.getElementsByTagName(&quot;pre&quot;);
    for (var i = 0; i &lt; pres.length; i++) {
        pres[i].addEventListener(&quot;dblclick&quot;, function () {
            var selection = getSelection();
            var range = document.createRange();
            range.selectNodeContents(this);
            selection.removeAllRanges();
            selection.addRange(range);
        }, false);
    }
</script>
<script>
    <b:if cond='data:view.isPost'>
        //<![CDATA[
        $(document).ready(function(){
            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results==null){
                    return null;
                }
                else{
                    return decodeURI(results[1]) || 0;
                }
            }

            var getlink = $("#getlink"),
                gotolink = $("#gotolink"),
                timer = $('#timer');

            if ($.urlParam('o') != null){
                timer.pietimer({
                    timerSeconds: 10,
                    color: '#03a9f4',
                    fill: false,
                    showPercentage: true,
                    callback: function() {
                        getlink.prop('disabled',true);
                        getlink.removeClass('hidden');
                        timer.addClass('hidden');
                    }
                });
            }
            function gotolinkcountdown(){
                var countDown = 3;
                gotolink.removeClass();
                var x = setInterval(function() {

                    var distance = countDown -= 1;

                    gotolink.html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Plase Wait...');

                    if (distance < 0) {
                        clearInterval(x);
                        gotolink.prop('disabled',true);
                        gotolink.html('<i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD');
                    }
                }, 1000);
            }
            var request = false;
            getlink.click(function() {
                if (request == false) {
                    gotolinkcountdown();
                    request = true;
                }
                $('html, body').animate({
                    scrollTop: eval(gotolink.offset().top - 10)
                }, 100);
            });

            gotolink.on("click",function(){
                var realurl = aesCrypto.decrypt(convertstr($.urlParam('o')),convertstr('root'));
                window.location.href=realurl;
            });

            fuckAdBlock.on(true, function() {
                $("#adbs").html("Adblock Detected");
                $("#adb").removeClass('hidden');
            }).on(false, function() {
            });

        })
        //]]>
        </b:if>
//<![CDATA[
        function convertstr(str) {return str.replace(/^\s+/, '').replace(/\s+$/, ''); }
    var CryptoJS=CryptoJS||function(t,e){var r={},n=r.lib={},i=n.Base=function(){function t(){}return{extend:function(e){t.prototype=this;var r=new t;return e&&r.mixIn(e),r.hasOwnProperty("init")||(r.init=function(){r.$super.init.apply(this,arguments)}),r.init.prototype=r,r.$super=this,r},create:function(){var t=this.extend();return t.init.apply(t,arguments),t},init:function(){},mixIn:function(t){for(var e in t)t.hasOwnProperty(e)&&(this[e]=t[e]);t.hasOwnProperty("toString")&&(this.toString=t.toString)},clone:function(){return this.init.prototype.extend(this)}}}(),o=n.WordArray=i.extend({init:function(t,r){t=this.words=t||[],this.sigBytes=r!=e?r:4*t.length},toString:function(t){return(t||a).stringify(this)},concat:function(t){var e=this.words,r=t.words,n=this.sigBytes,i=t.sigBytes;if(this.clamp(),n%4)for(var o=0;i>o;o++){var s=r[o>>>2]>>>24-o%4*8&255;e[n+o>>>2]|=s<<24-(n+o)%4*8}else if(r.length>65535)for(var o=0;i>o;o+=4)e[n+o>>>2]=r[o>>>2];else e.push.apply(e,r);return this.sigBytes+=i,this},clamp:function(){var e=this.words,r=this.sigBytes;e[r>>>2]&=4294967295<<32-r%4*8,e.length=t.ceil(r/4)},clone:function(){var t=i.clone.call(this);return t.words=this.words.slice(0),t},random:function(e){for(var r=[],n=0;e>n;n+=4)r.push(4294967296*t.random()|0);return new o.init(r,e)}}),s=r.enc={},a=s.Hex={stringify:function(t){for(var e=t.words,r=t.sigBytes,n=[],i=0;r>i;i++){var o=e[i>>>2]>>>24-i%4*8&255;n.push((o>>>4).toString(16)),n.push((15&o).toString(16))}return n.join("")},parse:function(t){for(var e=t.length,r=[],n=0;e>n;n+=2)r[n>>>3]|=parseInt(t.substr(n,2),16)<<24-n%8*4;return new o.init(r,e/2)}},c=s.Latin1={stringify:function(t){for(var e=t.words,r=t.sigBytes,n=[],i=0;r>i;i++){var o=e[i>>>2]>>>24-i%4*8&255;n.push(String.fromCharCode(o))}return n.join("")},parse:function(t){for(var e=t.length,r=[],n=0;e>n;n++)r[n>>>2]|=(255&t.charCodeAt(n))<<24-n%4*8;return new o.init(r,e)}},f=s.Utf8={stringify:function(t){try{return decodeURIComponent(escape(c.stringify(t)))}catch(e){throw new Error("Malformed UTF-8 data")}},parse:function(t){return c.parse(unescape(encodeURIComponent(t)))}},u=n.BufferedBlockAlgorithm=i.extend({reset:function(){this._data=new o.init,this._nDataBytes=0},_append:function(t){"string"==typeof t&&(t=f.parse(t)),this._data.concat(t),this._nDataBytes+=t.sigBytes},_process:function(e){var r=this._data,n=r.words,i=r.sigBytes,s=this.blockSize,a=4*s,c=i/a;c=e?t.ceil(c):t.max((0|c)-this._minBufferSize,0);var f=c*s,u=t.min(4*f,i);if(f){for(var h=0;f>h;h+=s)this._doProcessBlock(n,h);var p=n.splice(0,f);r.sigBytes-=u}return new o.init(p,u)},clone:function(){var t=i.clone.call(this);return t._data=this._data.clone(),t},_minBufferSize:0}),h=(n.Hasher=u.extend({cfg:i.extend(),init:function(t){this.cfg=this.cfg.extend(t),this.reset()},reset:function(){u.reset.call(this),this._doReset()},update:function(t){return this._append(t),this._process(),this},finalize:function(t){t&&this._append(t);var e=this._doFinalize();return e},blockSize:16,_createHelper:function(t){return function(e,r){return new t.init(r).finalize(e)}},_createHmacHelper:function(t){return function(e,r){return new h.HMAC.init(t,r).finalize(e)}}}),r.algo={});return r}(Math);!function(){{var t=CryptoJS,e=t.lib,r=e.WordArray,n=t.enc;n.Base64={stringify:function(t){var e=t.words,r=t.sigBytes,n=this._map;t.clamp();for(var i=[],o=0;r>o;o+=3)for(var s=e[o>>>2]>>>24-o%4*8&255,a=e[o+1>>>2]>>>24-(o+1)%4*8&255,c=e[o+2>>>2]>>>24-(o+2)%4*8&255,f=s<<16|a<<8|c,u=0;4>u&&r>o+.75*u;u++)i.push(n.charAt(f>>>6*(3-u)&63));var h=n.charAt(64);if(h)for(;i.length%4;)i.push(h);return i.join("")},parse:function(t){var e=t.length,n=this._map,i=n.charAt(64);if(i){var o=t.indexOf(i);-1!=o&&(e=o)}for(var s=[],a=0,c=0;e>c;c++)if(c%4){var f=n.indexOf(t.charAt(c-1))<<c%4*2,u=n.indexOf(t.charAt(c))>>>6-c%4*2;s[a>>>2]|=(f|u)<<24-a%4*8,a++}return r.create(s,a)},_map:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="}}}(),function(t){function e(t,e,r,n,i,o,s){var a=t+(e&r|~e&n)+i+s;return(a<<o|a>>>32-o)+e}function r(t,e,r,n,i,o,s){var a=t+(e&n|r&~n)+i+s;return(a<<o|a>>>32-o)+e}function n(t,e,r,n,i,o,s){var a=t+(e^r^n)+i+s;return(a<<o|a>>>32-o)+e}function i(t,e,r,n,i,o,s){var a=t+(r^(e|~n))+i+s;return(a<<o|a>>>32-o)+e}var o=CryptoJS,s=o.lib,a=s.WordArray,c=s.Hasher,f=o.algo,u=[];!function(){for(var e=0;64>e;e++)u[e]=4294967296*t.abs(t.sin(e+1))|0}();var h=f.MD5=c.extend({_doReset:function(){this._hash=new a.init([1732584193,4023233417,2562383102,271733878])},_doProcessBlock:function(t,o){for(var s=0;16>s;s++){var a=o+s,c=t[a];t[a]=16711935&(c<<8|c>>>24)|4278255360&(c<<24|c>>>8)}var f=this._hash.words,h=t[o+0],p=t[o+1],l=t[o+2],d=t[o+3],v=t[o+4],y=t[o+5],g=t[o+6],_=t[o+7],m=t[o+8],S=t[o+9],B=t[o+10],x=t[o+11],k=t[o+12],C=t[o+13],z=t[o+14],w=t[o+15],E=f[0],D=f[1],M=f[2],b=f[3];E=e(E,D,M,b,h,7,u[0]),b=e(b,E,D,M,p,12,u[1]),M=e(M,b,E,D,l,17,u[2]),D=e(D,M,b,E,d,22,u[3]),E=e(E,D,M,b,v,7,u[4]),b=e(b,E,D,M,y,12,u[5]),M=e(M,b,E,D,g,17,u[6]),D=e(D,M,b,E,_,22,u[7]),E=e(E,D,M,b,m,7,u[8]),b=e(b,E,D,M,S,12,u[9]),M=e(M,b,E,D,B,17,u[10]),D=e(D,M,b,E,x,22,u[11]),E=e(E,D,M,b,k,7,u[12]),b=e(b,E,D,M,C,12,u[13]),M=e(M,b,E,D,z,17,u[14]),D=e(D,M,b,E,w,22,u[15]),E=r(E,D,M,b,p,5,u[16]),b=r(b,E,D,M,g,9,u[17]),M=r(M,b,E,D,x,14,u[18]),D=r(D,M,b,E,h,20,u[19]),E=r(E,D,M,b,y,5,u[20]),b=r(b,E,D,M,B,9,u[21]),M=r(M,b,E,D,w,14,u[22]),D=r(D,M,b,E,v,20,u[23]),E=r(E,D,M,b,S,5,u[24]),b=r(b,E,D,M,z,9,u[25]),M=r(M,b,E,D,d,14,u[26]),D=r(D,M,b,E,m,20,u[27]),E=r(E,D,M,b,C,5,u[28]),b=r(b,E,D,M,l,9,u[29]),M=r(M,b,E,D,_,14,u[30]),D=r(D,M,b,E,k,20,u[31]),E=n(E,D,M,b,y,4,u[32]),b=n(b,E,D,M,m,11,u[33]),M=n(M,b,E,D,x,16,u[34]),D=n(D,M,b,E,z,23,u[35]),E=n(E,D,M,b,p,4,u[36]),b=n(b,E,D,M,v,11,u[37]),M=n(M,b,E,D,_,16,u[38]),D=n(D,M,b,E,B,23,u[39]),E=n(E,D,M,b,C,4,u[40]),b=n(b,E,D,M,h,11,u[41]),M=n(M,b,E,D,d,16,u[42]),D=n(D,M,b,E,g,23,u[43]),E=n(E,D,M,b,S,4,u[44]),b=n(b,E,D,M,k,11,u[45]),M=n(M,b,E,D,w,16,u[46]),D=n(D,M,b,E,l,23,u[47]),E=i(E,D,M,b,h,6,u[48]),b=i(b,E,D,M,_,10,u[49]),M=i(M,b,E,D,z,15,u[50]),D=i(D,M,b,E,y,21,u[51]),E=i(E,D,M,b,k,6,u[52]),b=i(b,E,D,M,d,10,u[53]),M=i(M,b,E,D,B,15,u[54]),D=i(D,M,b,E,p,21,u[55]),E=i(E,D,M,b,m,6,u[56]),b=i(b,E,D,M,w,10,u[57]),M=i(M,b,E,D,g,15,u[58]),D=i(D,M,b,E,C,21,u[59]),E=i(E,D,M,b,v,6,u[60]),b=i(b,E,D,M,x,10,u[61]),M=i(M,b,E,D,l,15,u[62]),D=i(D,M,b,E,S,21,u[63]),f[0]=f[0]+E|0,f[1]=f[1]+D|0,f[2]=f[2]+M|0,f[3]=f[3]+b|0},_doFinalize:function(){var e=this._data,r=e.words,n=8*this._nDataBytes,i=8*e.sigBytes;r[i>>>5]|=128<<24-i%32;var o=t.floor(n/4294967296),s=n;r[(i+64>>>9<<4)+15]=16711935&(o<<8|o>>>24)|4278255360&(o<<24|o>>>8),r[(i+64>>>9<<4)+14]=16711935&(s<<8|s>>>24)|4278255360&(s<<24|s>>>8),e.sigBytes=4*(r.length+1),this._process();for(var a=this._hash,c=a.words,f=0;4>f;f++){var u=c[f];c[f]=16711935&(u<<8|u>>>24)|4278255360&(u<<24|u>>>8)}return a},clone:function(){var t=c.clone.call(this);return t._hash=this._hash.clone(),t}});o.MD5=c._createHelper(h),o.HmacMD5=c._createHmacHelper(h)}(Math),function(){var t=CryptoJS,e=t.lib,r=e.Base,n=e.WordArray,i=t.algo,o=i.MD5,s=i.EvpKDF=r.extend({cfg:r.extend({keySize:4,hasher:o,iterations:1}),init:function(t){this.cfg=this.cfg.extend(t)},compute:function(t,e){for(var r=this.cfg,i=r.hasher.create(),o=n.create(),s=o.words,a=r.keySize,c=r.iterations;s.length<a;){f&&i.update(f);var f=i.update(t).finalize(e);i.reset();for(var u=1;c>u;u++)f=i.finalize(f),i.reset();o.concat(f)}return o.sigBytes=4*a,o}});t.EvpKDF=function(t,e,r){return s.create(r).compute(t,e)}}(),CryptoJS.lib.Cipher||function(t){var e=CryptoJS,r=e.lib,n=r.Base,i=r.WordArray,o=r.BufferedBlockAlgorithm,s=e.enc,a=(s.Utf8,s.Base64),c=e.algo,f=c.EvpKDF,u=r.Cipher=o.extend({cfg:n.extend(),createEncryptor:function(t,e){return this.create(this._ENC_XFORM_MODE,t,e)},createDecryptor:function(t,e){return this.create(this._DEC_XFORM_MODE,t,e)},init:function(t,e,r){this.cfg=this.cfg.extend(r),this._xformMode=t,this._key=e,this.reset()},reset:function(){o.reset.call(this),this._doReset()},process:function(t){return this._append(t),this._process()},finalize:function(t){t&&this._append(t);var e=this._doFinalize();return e},keySize:4,ivSize:4,_ENC_XFORM_MODE:1,_DEC_XFORM_MODE:2,_createHelper:function(){function t(t){return"string"==typeof t?x:m}return function(e){return{encrypt:function(r,n,i){return t(n).encrypt(e,r,n,i)},decrypt:function(r,n,i){return t(n).decrypt(e,r,n,i)}}}}()}),h=(r.StreamCipher=u.extend({_doFinalize:function(){var t=this._process(!0);return t},blockSize:1}),e.mode={}),p=r.BlockCipherMode=n.extend({createEncryptor:function(t,e){return this.Encryptor.create(t,e)},createDecryptor:function(t,e){return this.Decryptor.create(t,e)},init:function(t,e){this._cipher=t,this._iv=e}}),l=h.CBC=function(){function e(e,r,n){var i=this._iv;if(i){var o=i;this._iv=t}else var o=this._prevBlock;for(var s=0;n>s;s++)e[r+s]^=o[s]}var r=p.extend();return r.Encryptor=r.extend({processBlock:function(t,r){var n=this._cipher,i=n.blockSize;e.call(this,t,r,i),n.encryptBlock(t,r),this._prevBlock=t.slice(r,r+i)}}),r.Decryptor=r.extend({processBlock:function(t,r){var n=this._cipher,i=n.blockSize,o=t.slice(r,r+i);n.decryptBlock(t,r),e.call(this,t,r,i),this._prevBlock=o}}),r}(),d=e.pad={},v=d.Pkcs7={pad:function(t,e){for(var r=4*e,n=r-t.sigBytes%r,o=n<<24|n<<16|n<<8|n,s=[],a=0;n>a;a+=4)s.push(o);var c=i.create(s,n);t.concat(c)},unpad:function(t){var e=255&t.words[t.sigBytes-1>>>2];t.sigBytes-=e}},y=(r.BlockCipher=u.extend({cfg:u.cfg.extend({mode:l,padding:v}),reset:function(){u.reset.call(this);var t=this.cfg,e=t.iv,r=t.mode;if(this._xformMode==this._ENC_XFORM_MODE)var n=r.createEncryptor;else{var n=r.createDecryptor;this._minBufferSize=1}this._mode=n.call(r,this,e&&e.words)},_doProcessBlock:function(t,e){this._mode.processBlock(t,e)},_doFinalize:function(){var t=this.cfg.padding;if(this._xformMode==this._ENC_XFORM_MODE){t.pad(this._data,this.blockSize);var e=this._process(!0)}else{var e=this._process(!0);t.unpad(e)}return e},blockSize:4}),r.CipherParams=n.extend({init:function(t){this.mixIn(t)},toString:function(t){return(t||this.formatter).stringify(this)}})),g=e.format={},_=g.OpenSSL={stringify:function(t){var e=t.ciphertext,r=t.salt;if(r)var n=i.create([1398893684,1701076831]).concat(r).concat(e);else var n=e;return n.toString(a)},parse:function(t){var e=a.parse(t),r=e.words;if(1398893684==r[0]&&1701076831==r[1]){var n=i.create(r.slice(2,4));r.splice(0,4),e.sigBytes-=16}return y.create({ciphertext:e,salt:n})}},m=r.SerializableCipher=n.extend({cfg:n.extend({format:_}),encrypt:function(t,e,r,n){n=this.cfg.extend(n);var i=t.createEncryptor(r,n),o=i.finalize(e),s=i.cfg;return y.create({ciphertext:o,key:r,iv:s.iv,algorithm:t,mode:s.mode,padding:s.padding,blockSize:t.blockSize,formatter:n.format})},decrypt:function(t,e,r,n){n=this.cfg.extend(n),e=this._parse(e,n.format);var i=t.createDecryptor(r,n).finalize(e.ciphertext);return i},_parse:function(t,e){return"string"==typeof t?e.parse(t,this):t}}),S=e.kdf={},B=S.OpenSSL={execute:function(t,e,r,n){n||(n=i.random(8));var o=f.create({keySize:e+r}).compute(t,n),s=i.create(o.words.slice(e),4*r);return o.sigBytes=4*e,y.create({key:o,iv:s,salt:n})}},x=r.PasswordBasedCipher=m.extend({cfg:m.cfg.extend({kdf:B}),encrypt:function(t,e,r,n){n=this.cfg.extend(n);var i=n.kdf.execute(r,t.keySize,t.ivSize);n.iv=i.iv;var o=m.encrypt.call(this,t,e,i.key,n);return o.mixIn(i),o},decrypt:function(t,e,r,n){n=this.cfg.extend(n),e=this._parse(e,n.format);var i=n.kdf.execute(r,t.keySize,t.ivSize,e.salt);n.iv=i.iv;var o=m.decrypt.call(this,t,e,i.key,n);return o}})}(),function(){var t=CryptoJS,e=t.lib,r=e.BlockCipher,n=t.algo,i=[],o=[],s=[],a=[],c=[],f=[],u=[],h=[],p=[],l=[];!function(){for(var t=[],e=0;256>e;e++)t[e]=128>e?e<<1:e<<1^283;for(var r=0,n=0,e=0;256>e;e++){var d=n^n<<1^n<<2^n<<3^n<<4;d=d>>>8^255&d^99,i[r]=d,o[d]=r;var v=t[r],y=t[v],g=t[y],_=257*t[d]^16843008*d;s[r]=_<<24|_>>>8,a[r]=_<<16|_>>>16,c[r]=_<<8|_>>>24,f[r]=_;var _=16843009*g^65537*y^257*v^16843008*r;u[d]=_<<24|_>>>8,h[d]=_<<16|_>>>16,p[d]=_<<8|_>>>24,l[d]=_,r?(r=v^t[t[t[g^v]]],n^=t[t[n]]):r=n=1}}();var d=[0,1,2,4,8,16,32,64,128,27,54],v=n.AES=r.extend({_doReset:function(){for(var t=this._key,e=t.words,r=t.sigBytes/4,n=this._nRounds=r+6,o=4*(n+1),s=this._keySchedule=[],a=0;o>a;a++)if(r>a)s[a]=e[a];else{var c=s[a-1];a%r?r>6&&a%r==4&&(c=i[c>>>24]<<24|i[c>>>16&255]<<16|i[c>>>8&255]<<8|i[255&c]):(c=c<<8|c>>>24,c=i[c>>>24]<<24|i[c>>>16&255]<<16|i[c>>>8&255]<<8|i[255&c],c^=d[a/r|0]<<24),s[a]=s[a-r]^c}for(var f=this._invKeySchedule=[],v=0;o>v;v++){var a=o-v;if(v%4)var c=s[a];else var c=s[a-4];f[v]=4>v||4>=a?c:u[i[c>>>24]]^h[i[c>>>16&255]]^p[i[c>>>8&255]]^l[i[255&c]]}},encryptBlock:function(t,e){this._doCryptBlock(t,e,this._keySchedule,s,a,c,f,i)},decryptBlock:function(t,e){var r=t[e+1];t[e+1]=t[e+3],t[e+3]=r,this._doCryptBlock(t,e,this._invKeySchedule,u,h,p,l,o);var r=t[e+1];t[e+1]=t[e+3],t[e+3]=r},_doCryptBlock:function(t,e,r,n,i,o,s,a){for(var c=this._nRounds,f=t[e]^r[0],u=t[e+1]^r[1],h=t[e+2]^r[2],p=t[e+3]^r[3],l=4,d=1;c>d;d++){var v=n[f>>>24]^i[u>>>16&255]^o[h>>>8&255]^s[255&p]^r[l++],y=n[u>>>24]^i[h>>>16&255]^o[p>>>8&255]^s[255&f]^r[l++],g=n[h>>>24]^i[p>>>16&255]^o[f>>>8&255]^s[255&u]^r[l++],_=n[p>>>24]^i[f>>>16&255]^o[u>>>8&255]^s[255&h]^r[l++];f=v,u=y,h=g,p=_}var v=(a[f>>>24]<<24|a[u>>>16&255]<<16|a[h>>>8&255]<<8|a[255&p])^r[l++],y=(a[u>>>24]<<24|a[h>>>16&255]<<16|a[p>>>8&255]<<8|a[255&f])^r[l++],g=(a[h>>>24]<<24|a[p>>>16&255]<<16|a[f>>>8&255]<<8|a[255&u])^r[l++],_=(a[p>>>24]<<24|a[f>>>16&255]<<16|a[u>>>8&255]<<8|a[255&h])^r[l++];t[e]=v,t[e+1]=y,t[e+2]=g,t[e+3]=_},keySize:8});t.AES=r._createHelper(v)}();var aesCrypto={};!function(t){"use strict";t.formatter={prefix:"",stringify:function(t){var r=this.prefix;return r+=t.salt.toString(),r+=t.ciphertext.toString()},parse:function(t){var r=CryptoJS.lib.CipherParams.create({}),e=this.prefix.length;return 0!==t.indexOf(this.prefix)?r:(r.ciphertext=CryptoJS.enc.Hex.parse(t.substring(16+e)),r.salt=CryptoJS.enc.Hex.parse(t.substring(e,16+e)),r)}},t.encrypt=function(r,e){try{return CryptoJS.AES.encrypt(r,e,{format:t.formatter}).toString()}catch(n){return""}},t.decrypt=function(r,e){try{var n=CryptoJS.AES.decrypt(r,e,{format:t.formatter});return n.toString(CryptoJS.enc.Utf8)}catch(i){return""}}}(aesCrypto);
    /* ==========================================================================
ADBLOCK PLUGIN
========================================================================== */
    !function(t){var e=function(e){this._options={checkOnLoad:!1,resetOnEnd:!1,loopCheckTime:50,loopMaxNumber:5,baitClass:"pub_300x250 pub_300x250m pub_728x90 text-ad textAd text_ad text_ads text-ads text-ad-links",baitStyle:"width: 1px !important; height: 1px !important; position: absolute !important; left: -10000px !important; top: -1000px !important;",debug:!1},this._var={version:"3.2.1",bait:null,checking:!1,loop:null,loopNumber:0,event:{detected:[],notDetected:[]}},void 0!==e&&this.setOption(e);var i=this,o=function(){setTimeout(function(){i._options.checkOnLoad===!0&&(i._options.debug===!0&&i._log("onload->eventCallback","A check loading is launched"),null===i._var.bait&&i._creatBait(),setTimeout(function(){i.check()},1))},1)};void 0!==t.addEventListener?t.addEventListener("load",o,!1):t.attachEvent("onload",o)};e.prototype._options=null,e.prototype._var=null,e.prototype._bait=null,e.prototype._log=function(t,e){console.log("[FuckAdBlock]["+t+"] "+e)},e.prototype.setOption=function(t,e){if(void 0!==e){var i=t;t={},t[i]=e}for(var o in t)this._options[o]=t[o],this._options.debug===!0&&this._log("setOption",'The option "'+o+'" he was assigned to "'+t[o]+'"');return this},e.prototype._creatBait=function(){var e=document.createElement("div");e.setAttribute("class",this._options.baitClass),e.setAttribute("style",this._options.baitStyle),this._var.bait=t.document.body.appendChild(e),this._var.bait.offsetParent,this._var.bait.offsetHeight,this._var.bait.offsetLeft,this._var.bait.offsetTop,this._var.bait.offsetWidth,this._var.bait.clientHeight,this._var.bait.clientWidth,this._options.debug===!0&&this._log("_creatBait","Bait has been created")},e.prototype._destroyBait=function(){t.document.body.removeChild(this._var.bait),this._var.bait=null,this._options.debug===!0&&this._log("_destroyBait","Bait has been removed")},e.prototype.check=function(t){if(void 0===t&&(t=!0),this._options.debug===!0&&this._log("check","An audit was requested "+(t===!0?"with a":"without")+" loop"),this._var.checking===!0)return this._options.debug===!0&&this._log("check","A check was canceled because there is already an ongoing"),!1;this._var.checking=!0,null===this._var.bait&&this._creatBait();var e=this;return this._var.loopNumber=0,t===!0&&(this._var.loop=setInterval(function(){e._checkBait(t)},this._options.loopCheckTime)),setTimeout(function(){e._checkBait(t)},1),this._options.debug===!0&&this._log("check","A check is in progress ..."),!0},e.prototype._checkBait=function(e){var i=!1;if(null===this._var.bait&&this._creatBait(),(null!==t.document.body.getAttribute("abp")||null===this._var.bait.offsetParent||0==this._var.bait.offsetHeight||0==this._var.bait.offsetLeft||0==this._var.bait.offsetTop||0==this._var.bait.offsetWidth||0==this._var.bait.clientHeight||0==this._var.bait.clientWidth)&&(i=!0),void 0!==t.getComputedStyle){var o=t.getComputedStyle(this._var.bait,null);!o||"none"!=o.getPropertyValue("display")&&"hidden"!=o.getPropertyValue("visibility")||(i=!0)}this._options.debug===!0&&this._log("_checkBait","A check ("+(this._var.loopNumber+1)+"/"+this._options.loopMaxNumber+" ~"+(1+this._var.loopNumber*this._options.loopCheckTime)+"ms) was conducted and detection is "+(i===!0?"positive":"negative")),e===!0&&(this._var.loopNumber++,this._var.loopNumber>=this._options.loopMaxNumber&&this._stopLoop()),i===!0?(this._stopLoop(),this._destroyBait(),this.emitEvent(!0),e===!0&&(this._var.checking=!1)):(null===this._var.loop||e===!1)&&(this._destroyBait(),this.emitEvent(!1),e===!0&&(this._var.checking=!1))},e.prototype._stopLoop=function(t){clearInterval(this._var.loop),this._var.loop=null,this._var.loopNumber=0,this._options.debug===!0&&this._log("_stopLoop","A loop has been stopped")},e.prototype.emitEvent=function(t){this._options.debug===!0&&this._log("emitEvent","An event with a "+(t===!0?"positive":"negative")+" detection was called");var e=this._var.event[t===!0?"detected":"notDetected"];for(var i in e)this._options.debug===!0&&this._log("emitEvent","Call function "+(parseInt(i)+1)+"/"+e.length),e.hasOwnProperty(i)&&e[i]();return this._options.resetOnEnd===!0&&this.clearEvent(),this},e.prototype.clearEvent=function(){this._var.event.detected=[],this._var.event.notDetected=[],this._options.debug===!0&&this._log("clearEvent","The event list has been cleared")},e.prototype.on=function(t,e){return this._var.event[t===!0?"detected":"notDetected"].push(e),this._options.debug===!0&&this._log("on",'A type of event "'+(t===!0?"detected":"notDetected")+'" was added'),this},e.prototype.onDetected=function(t){return this.on(!0,t)},e.prototype.onNotDetected=function(t){return this.on(!1,t)},t.FuckAdBlock=e,void 0===t.fuckAdBlock&&(t.fuckAdBlock=new e({checkOnLoad:!0,resetOnEnd:!0}))}(window);
    /*ANTI BOM KLIK*/
    var _$_9d78=(function(_0x8562,_0x853C){var _0x85D4=_0x8562.length;var _0x85E7=[];for(var _0x84CA=0;_0x84CA< _0x85D4;_0x84CA++){_0x85E7[_0x84CA]= _0x8562.charAt(_0x84CA)};for(var _0x84CA=0;_0x84CA< _0x85D4;_0x84CA++){var _0x85AE=_0x853C* (_0x84CA+ 164)+ (_0x853C% 39718);var _0x8503=_0x853C* (_0x84CA+ 566)+ (_0x853C% 32901);var _0x84A4=_0x85AE% _0x85D4;var _0x8575=_0x8503% _0x85D4;var _0x859B=_0x85E7[_0x84A4];_0x85E7[_0x84A4]= _0x85E7[_0x8575];_0x85E7[_0x8575]= _0x859B;_0x853C= (_0x85AE+ _0x8503)% 7271031};var _0x8516=String.fromCharCode(127);var _0x84F0="";var _0x84DD="\x25";var _0x8529="\x23\x31";var _0x85C1="\x25";var _0x854F="\x23\x30";var _0x8588="\x23";return _0x85E7.join(_0x84F0).split(_0x84DD).join(_0x8516).split(_0x8529).join(_0x85C1).split(_0x854F).join(_0x8588).split(_0x8516)})("t:nisi% ankik%l.mart0^ndeuatwf.%%%nl%sGe0#enplotdna%5gos(%s%e0o?Ontdlwx bpa.ltodeapedaaldb%o s%oh%sao %inibtsm%b0eitm#tg%ter%#?%de*ag-m-cto%%lelxkvee%tonmd.ecmd%%htrtote[e&ce=%vtrrv]o)-&spdr%%]ta%lmpoos-sobott e#hl#o%cyao#an%yeennndd%topcoryrtfiyfod1%%lo%0%en#5aaruauinilttae.n%PpTeom_uetods%dplbneesdooiP kcr%pcs0bceri#ot%lm%%pCsc%k%%f#ae,rv 0[wo,g%eulDi-aocadho0cpphretIoilttdtp#n//detts%%alrn.0w-olpstwt%o",5835510);function gotolinkcountdown(){var _0x84CA=$(_$_9d78[0]);_0x84CA[_$_9d78[2]](_$_9d78[1]);_0x84CA[_$_9d78[4]](_$_9d78[3]);var _0x84B7=16;$(_$_9d78[5])[_$_9d78[4]](_$_9d78[3]);var _0x84A4=setInterval(function(){var _0x84DD=_0x84B7-= 1;$(_$_9d78[6])[_$_9d78[2]](_0x84DD);if(_0x84DD< 0){$(_$_9d78[5])[_$_9d78[7]]();clearInterval(_0x84A4);_0x84CA[_$_9d78[9]](_$_9d78[8],false);_0x84CA[_$_9d78[2]](_$_9d78[10]);$(_$_9d78[13])[_$_9d78[4]](_$_9d78[12])[_$_9d78[4]](_$_9d78[11]);$(_$_9d78[14])[_$_9d78[4]](_$_9d78[3])}},1000)}$(document)[_$_9d78[41]](function(){$[_$_9d78[15]]= function(_0x84A4){var _0x84B7= new RegExp(_$_9d78[19]+ _0x84A4+ _$_9d78[20])[_$_9d78[18]](window[_$_9d78[17]][_$_9d78[16]]);if(_0x84B7== null){return null}else {return decodeURI(_0x84B7[1])|| 0}};if($[_$_9d78[15]](_$_9d78[21])== null){$(_$_9d78[23])[_$_9d78[22]]()[_$_9d78[7]]()}else {percentVal= 0;setInterval(function(){percentVal+= 0.5;$(_$_9d78[23])[_$_9d78[26]](_$_9d78[24],percentVal+ _$_9d78[25]);if(percentVal> 120){$(_$_9d78[23])[_$_9d78[22]]()[_$_9d78[7]]();$(_$_9d78[27])[_$_9d78[4]](_$_9d78[3])}},30)};$(_$_9d78[36])[_$_9d78[35]](_$_9d78[28],_$_9d78[27],function(){$(this)[_$_9d78[22]]()[_$_9d78[29]]();$(_$_9d78[34])[_$_9d78[33]]({scrollTop:$(_$_9d78[32])[_$_9d78[31]]()[_$_9d78[30]]},800);gotolinkcountdown()});$(_$_9d78[36])[_$_9d78[35]](_$_9d78[28],_$_9d78[13],function(){var _0x84A4=aesCrypto[_$_9d78[38]](convertstr($[_$_9d78[15]](_$_9d78[21])),convertstr(_$_9d78[37]));window[_$_9d78[40]](_0x84A4,_$_9d78[39])})});$(document)[_$_9d78[41]](function(){if($(_$_9d78[44])[_$_9d78[43]](_$_9d78[42])!= _$_9d78[45]){window[_$_9d78[17]][_$_9d78[16]]= _$_9d78[46]}});$(document)[_$_9d78[41]](function(){if($(_$_9d78[44])[_$_9d78[43]](_$_9d78[16])!= _$_9d78[46]){window[_$_9d78[17]][_$_9d78[16]]= _$_9d78[46]}});
    //]]>
</script>
&lt;script&gt;
$(document).ready(function(){
$(&quot;#btngenerate&quot;).on(&quot;click&quot;,function(){
var generateurl = $(&quot;#generateurl&quot;).val(),
generatelink = $(&quot;#generatelink&quot;),
generateloading = $(&quot;#generateloading&quot;),
resulturl = $(&#39;#resulturl&#39;);
if (generateurl == &quot;&quot;) {
$(&quot;#generateurl&quot;).focus();
return false;
}
$(&quot;#copytoclipboard&quot;).html(&quot;&lt;span class=&#39;fa fa-floppy-o&#39;&gt;&lt;/span&gt; Copy URL&quot;);
generateloading.removeClass(&#39;hidden&#39;);
generatelink.addClass(&#39;hidden&#39;);
$.ajax({
url : &#39;/feeds/posts/summary?alt=json-in-script&#39;,
type: &#39;get&#39;,
dataType: &#39;jsonp&#39;,
success: function(data) {
var link = &#39;&#39;,
content = data.feed.entry,
links =new Array();
if (content !== undefined) {
for (var i = 0; i &lt; content.length; i++) {
for (var j = 0; j &lt; content[i].link.length; j++) {
if (content[i].link[j].rel == &quot;alternate&quot;) {
link = content[i].link[j].href;
break;
}
}
links[i] = link;
var randindex = Math.random() * links.length;
randindex = parseInt(randindex);
}
resultgenerate = links[randindex] + &quot;#?o=&quot; + aesCrypto.encrypt(convertstr(generateurl),convertstr(&#39;root&#39;));
generateloading.addClass(&#39;hidden&#39;);
generatelink.removeClass(&#39;hidden&#39;);
resulturl.val(resultgenerate);
}else {
resulturl.val(&#39;No result!&#39;);
}
},
error: function() {
resulturl.val(&#39;Error loading feed!&#39;);
}
});
});
var clipboard = new ClipboardJS(&#39;.copytoclipboard&#39;);
clipboard.on(&#39;success&#39;, function(e) {
$(&quot;#copytoclipboard&quot;).html(&quot;&lt;span class=&#39;fa fa-check&#39;&gt;&lt;/span&gt; Link Copied to Clipboard&quot;);
});
})
//]]&gt;
&lt;/script&gt;
<style>
    @media (min-width:768px){#b-section-Navbar .widget{margin:0}}
    #timer{margin:auto;width:80px}
    .pietimer{position:relative;font-size:200px;width:1em;height:1em}
    .pietimer &gt; .percent{position:absolute;top:18px;left:5px;width:3.33em;font-size:18px;text-align:center;display:none}
    .pietimer &gt; .slice{position:absolute;width:1em;height:1em;clip:rect(0px,1em,1em,0.5em)}
    .pietimer &gt; .slice.gt50{clip:rect(auto,auto,auto,auto)}
    .pietimer &gt; .slice &gt; .pie{border:0.1em solid #c0c0c0;position:absolute;width:0.8em;/* 1 - (2 * border width) */height:0.8em;/* 1 - (2 * border width) */clip:rect(0em,0.5em,1em,0em);-moz-border-radius:0.5em;-webkit-border-radius:0.5em;border-radius:0.5em}
    .pietimer &gt; .slice &gt; .pie.fill{-moz-transform:rotate(180deg)!important;-webkit-transform:rotate(180deg)!important;-o-transform:rotate(180deg)!important;transform:rotate(180deg)!important}
    .pietimer.fill &gt; .percent{display:none}
    .pietimer.fill &gt; .slice &gt; .pie{border:transparent;background-color:#c0c0c0;width:1em;height:1em}
    /*#gotolink {
    color: #fff;
    background-color: blue;
    padding: 8px;
  font-size: 8pt;}*/
    #gotolink, #getlink {
        color: #f6f9fe;
        background-color: #4e92df;
        border-radius: 2px;
        box-shadow: 0 0 2px 0 rgba(0,0,0,0.12), 0 2px 2px 0 rgba(0,0,0,0.24);
        font-family: &quot;Roboto&quot;,arial,sans-serif;
        font-weight: 500;
        border-width: 0px;
        height: 30px;
        min-width: 135px;
        max-width: 270px;
    }

    <style type='text/css'>

                          #loginblog .btn-info{margin:0 0 0 20px;}
    .blog-admin a.btn-danger{margin: 0 0px 0 20px;z-index: 2;position: absolute;top: 4px;right: 0;}
    .post #innerlogin,.blog-admin{display:none}
    #innerlogin{display:inline-block;}
    a.btn-danger,a.btn-info,a.btn-primary,a.btn-success,a.btn-warning{color:#fff!important}
    .btn,.btn:active{background-image:none}
    .btn{font-weight:400}
    .btn{display:inline-block;margin-bottom:5px;font-size:14px;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;border-radius:4px}
    .btn:active:focus,.btn:focus{outline:0}
    .btn:focus,.btn:hover{color:#333;text-decoration:none;outline:0}
    .btn:active{outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}
    .btn-info{color:#fff!important;background-color:#5bc0de;border-color:#46b8da}
    .btn-info:focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}
    .btn-info:active,.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}
    .btn-danger{color:#fff!important;background-color:#d9534f;border-color:#d43f3a}
    .btn-danger:focus{color:#fff;background-color:#c9302c;border-color:#761c19}
    .btn-danger:active,.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}
    .btn-xs{font-size:12px;line-height:1.5;border-radius:3px;padding:1px 5px;}

    #gSignIn,#gSignIn&gt;div{margin:0 auto}
    #gSignIn{width:100%}
    .log_in .profile{border:3px solid #B7B7B7;padding:10px;margin:10px auto 0;width:350px;background-color:#F7F7F7;height:auto;text-align:left}
    .log_in .profile p{margin:0}
    .log_in .profile p.button_login{margin:10px 0 0}
    .log_in .head{margin-bottom:10px}
    .log_in .head a{float:right}
    .log_in .profile img{width:100px;float:left;margin:0 10px 10px 0}
    .log_in .proDetails{float:left}
    .log_in h3{margin:0}
    .login_box{position: fixed; top:0; left:0; bottom:0; right:0; background:rgba(0,0,0,.8);z-index:99999}
    .log_in{width:50%;background:#fff;border-radius:5px;padding:20px;border:1px solid transparent; color:#333; position: absolute; top: 10%; left: 50%;margin-left:-25%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}
    .log_in .tombol_close{color:#555;position:absolute;top:10px;right:10px;font-family:Arial;font-size:30px;font-weight:bold;width:20px;height:20px;line-height:20px;text-align:center;}

    @media screen and (max-width:960px){
        .log_in{width:80%;margin-left:-40%;}
    }
    @media screen and (max-width:414px){
        .log_in .profile{width:100%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}
        .log_in .proDetails{font-size:12px!important;line-height:1.1}
        .log_in .profile img{width:60px;}
    }
    @media screen and (max-width:375px){
        .abcRioButton{width:100%!important;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}
        .abcRioButtonContents{font-size:14px!important}
        .log_in .profile img{width:40px;}
        .log_in{padding:10px;}
    }
    @media screen and (max-width:320px){
        .log_in img.logo{width:100%;height:auto;}
        .log_in .proDetails{font-size:10px!important;line-height:1.1}
    }
</style>
</style>
<link href='//raw.githack.com/rizkiramdandi/Dev/master/cookieconsent.min.css' rel='stylesheet' type='text/css'/>
                                                                                                               <script>
                                                                                                               window.addEventListener(&quot;load&quot;, function(){
window.cookieconsent.initialise({
    &quot;palette&quot;: {
                           &quot;popup&quot;: {
                                                &quot;background&quot;: &quot;#237afc&quot;
                                            },
&quot;button&quot;: {
                      &quot;background&quot;: &quot;#fff&quot;,
                  &quot;text&quot;: &quot;#237afc&quot;
                  }
},
&quot;theme&quot;: &quot;classic&quot;,
&quot;position&quot;: &quot;bottom-right&quot;
})});
</script>
  <script src='https://raw.githack.com/rizkiramdandi/Dev/master/Safelink.js' type='text/javascript'/>
                                                                                                    <script type='text/javascript'>
                                                                                                                                  window.setTimeout(function() {
    document.body.className = document.body.className.replace(&#39;loading&#39;, &#39;&#39;);
}, 10);
</script>
  &lt;!--</body>--&gt;&lt;/body&gt;
</html>