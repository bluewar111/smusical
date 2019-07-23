<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>미래문화의 큰별 - 극단서울</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<link rel="stylesheet" type="text/css" href="/wn/media/css/style.css" />
<link rel="stylesheet" type="text/css" href="/media/css/nanumsquare.css" />
<link rel="shortcut icon" href="http://www.smusical.com/new/images/favicon.ico">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="/wn/common/js/jquery-3.3.1.min.js"></script>
<script src="/wn/common/js/common.js"></script>
<script src="/wn/common/js/menu_script.js"></script>

<script type="text/javascript">
    $(function() {
        $('ul.tab li').click(function() {
            var activeTab = $(this).attr('data-tab');
            $('ul.tab li').removeClass('current');
            $('.tabcontent').removeClass('current');
            $(this).addClass('current');
            $('#' + activeTab).addClass('current');
        });
    });
</script>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ko', includedLanguages: 'de,en,es,fr,it,ja,ko,mn,ru,th,tl,tr,uz,vi,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?
// 일반 페이지 로그인 정보
$memID = $_COOKIE[memID];
$memNAME = $_COOKIE[memNAME];

if ($memID != "") {
    $memGRP = code_name($Board[Member], 'id', $memID, 'grp');
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>CodeIgniter</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link type="text/css" rel='stylesheet' href="/bbs/include/css/bootstrap.css" />
    </head>
    <body>
        <div id="main">
            <header id="header" data-role="header" data-position="fixed">
                <blockquote>
                    <p>
                        만들면서 배우는 CodeIgniter
                    </p>
                    <small>실행 예제</small>
                    <p>
<?php
    if ( @$this -> session -> userdata('logged_in') == TRUE) {
?>
<?php echo $this -> session -> userdata('username');?> 님 환영합니다. <a href="/bbs/auth/logout" class="btn">로그아웃</a>
<?php
    } else {
?>
<a href="/bbs/auth/login" class="btn btn-primary"> 로그인 </a>
<?php
    }
?>
                    </p>
                </blockquote>
            </header>
            <nav id="gnb">
                <ul>
                    <li>
                        <a rel="external" href="/bbs/<?php echo $this -> uri -> segment(1); ?>/lists/<?php echo $this -> uri -> segment(3); ?>"> 게시판 프로젝트 </a>
                    </li>
                </ul>
            </nav>


출처: https://palpit.tistory.com/636 [palpit Vlog]