<!DOCTYPE html>
<html lang = "ko">

<head>
    <meta charset="UTF-8">
    <title>갤러리</title>
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Noto Sans KR", sans-serif;
            font-weight: 400;
            font-size: 16px;
        }
        .content {
            width:100%;
            height: auto;
            z-index: 1;
            position: relative;

        }

        .main_image_wrapper {
            width: 100%;
            height: 320px;
            overflow: hidden;
        }
        .main_image {
            height: 100%;
        }
        .main_image_text {
            position: absolute;
            top: 80px;
            left: 10%;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 15px;
            color: white;
        }
        a { text-decoration:none } 


        #select_product {
            margin-left: 20px;
            margin-right: 20px;
            padding-left: 55px;
            padding-right: 55px;
            padding-bottom: 5px;
            color: #555555;
            font-size: 15px;
            border-bottom: 2px solid lightgray;

        }

        #select_product:hover {
            color: black;
            border-color: black;
        }


        @media (max-width: 600px) {
            .main_image_wrapper {
                height: 250px;
            }
            .main_image_text {
                top: 60px;
                left: 8%;
            }
        }

        .include-board {
            padding-top: 80px;
            margin-left: 10%;
            width: 80%;
            height: auto;
            text-align: left;
            overflow:hidden;
        }

    </style>
</head>

<body style="margin:0px">
    <div id="header">
        <? include '/header.html'; ?>
    </div>
    <div class = "content">

        <div class="main_image_wrapper">
            <div class ="main_image">
                <img src = "/img/products.jpg" style="height: 100%; width: auto; filter: brightness(80%)">
            </div>
            <div class="main_image_text">
                <p>
                    <span style = "font-size: 40px;">Gallery</span>
                </p>
                <p>
                    <span style = "font-size: 22px";>세주의 제품 시공 및 설치 사진</span>
                </p>
            </div>
        </div>
    </div>
    <div class = "include-board">
        <? include '/gnuboard/bbs/board.php' ?>
    </div>
    <div class = "footer">
        <? include '/footer.html'; ?>
    </div>
</body>
</html>