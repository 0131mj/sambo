<html style="cursor:auto;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=euc-kr">
    <title>메인페이지</title>
    <meta name="generator" content="Namo WebEditor">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery.bxslider.css">
    <script type="text/javascript" language="javascript" src="./js/jquery-1.8.3.min.js"></script>
    <script src="./js/jquery.bxslider.js"></script>
    <script src="./js/sb_common.js"></script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0"
      marginheight="0">
<?php include_once('./inc/header.php');?>
<div id="main_bnr_wrapper">
    <ul id="main_bnr">
        <li style="background:url('./img/main_bnr_01.jpg') 50% 0px no-repeat rgb(255, 255, 255);"></li>
        <li style="background:url('./img/main_bnr_02.jpg') 50% 0px no-repeat rgb(255, 255, 255);"></li>
        <li style="background:url('./img/main_bnr_01.jpg') 50% 0px no-repeat rgb(255, 255, 255);"></li>
        <li style="background:url('./img/main_bnr_02.jpg') 50% 0px no-repeat rgb(255, 255, 255);"></li>
    </ul>
</div>

<div id="examples">
    <div class="content_wrapper">
        <div class="p_icon"></div>
        <h1 id="examples_title">삼보토건 <b>시공사례</b></h1>
        <ul>
            <li class="example">
                <a href="">
                    <img src="./img/example.jpg" class="example_img">
                    <p class="example_topic">울산광역시 오산대교 공사현장</p>
                </a>
            </li>
            <li class="example">
                <a href="">
                    <img src="./img/example.jpg" class="example_img">
                    <p class="example_topic">울산광역시 오산대교 공사현장</p>
                </a>
            </li>
            <li class="example">
                <a href="">
                    <img src="./img/example.jpg" class="example_img">
                    <p class="example_topic">울산광역시 오산대교 공사현장</p>
                </a>
            </li>
            <li class="example">
                <a href="">
                    <img src="./img/example.jpg" class="example_img">
                    <p class="example_topic">울산광역시 오산대교 공사현장</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="tile_menu">
    <div class="content_wrapper">
        <div id="tile_bnr_wrapper">
            <ul id="tile_bnr">
                <li style="width:430px; height:400px; background:url('./img/tile_bnr_01.jpg') 50% 0px no-repeat rgb(255, 255, 255); display: block;"></li>
                <li style="width:430px; height:400px; background:url('./img/tile_bnr_02.jpg') 50% 0px no-repeat rgb(255, 255, 255); display: block;"></li>
            </ul>
        </div>
        <ul id="tile_link">
            <li style="background:url('./img/tile_link_01.jpg') 50% 0px no-repeat;" class="tile_upper"><a href="#"></a></li>
            <li style="background:url('./img/tile_link_02.jpg') 50% 0px no-repeat;" class="tile_upper"><a href="#"></a></li>
            <li style="background:url('./img/tile_link_03.jpg') 50% 0px no-repeat"><a href=""></a></li>
            <li style="background:url('./img/tile_link_04.jpg') 50% 0px no-repeat"><a href=""></a></li>
        </ul>
    </div>
</div>
<div id="bottom_menu_wrapper">
    <ul id="bottom_menu" class="content_wrapper">
        <li>
            <a href="#">회사소개</a>
            <ul class="sub_menu">
                <li><a href="#">인사말</a></li>
                <li><a href="#">조직도</a></li>
                <li><a href="#">연혁</a></li>
                <li><a href="#">공사실적</a></li>
                <li><a href="#">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="#">기술소개</a>
            <ul class="sub_menu">
                <li><a href="#">공법비교</a></li>
                <li><a href="#">개량CIP란</a></li>
                <li><a href="#">개량CIP절차</a></li>
            </ul>
        </li>
        <li>
            <a href="#">보유장비/면허</a>
            <ul class="sub_menu">
                <li><a href="#">보유장비소개</a></li>
                <li><a href="#">면허소개</a></li>
            </ul>
        </li>
        <li>
            <a href="#">시공사례</a>
            <ul class="sub_menu">
                <li><a href="#">개량 CIP</a></li>
                <li><a href="#">기타 시공사례</a></li>
            </ul>
        </li>
        <li>
            <a href="#">고객센터</a>
            <ul class="sub_menu">
                <li><a href="#">공지사항</a></li>
                <li><a href="#">질문과답변</a></li>
                <li><a href="#">자주하는질문</a></li>
                <li><a href="#">견적문의</a></li>
            </ul>
        </li>
    </ul>
</div>
<?php include_once('./inc/footer.php');?>
</body>
<script>
    $(document).ready(function () {
        $("#main_bnr").bxSlider({
            mode: "fade",
            auto:true,
            autoControls: true,
            controls:false,
            autoControlsCombine:true
        });

        set_bxcontroller();

        $("#tile_bnr").bxSlider({
            mode: "fade",
            controls:false
        });
    });

    $( window ).resize(function() {
        set_bxcontroller();
    });

    function set_bxcontroller() {
        var pager_pos = $('.bx-pager').position();
        var pager_left = pager_pos.left;
        var pager_width = $('.bx-pager').width();
        console.log(pager_left);

        $('.bx-controls-auto').css('left',pager_left+pager_width);
    }

</script>
</html>