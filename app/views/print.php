<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/header.php")?>
</head>

<body>
    <?php
    foreach($data['tinh'] as $key => $value) {
        if ($data['ts']['nst'] == $value['ma']) {
            $tinhns = $value['ten'];
            break;
        }
    }
    foreach($data['tinh'] as $key => $value) {
        if ($data['ts']['nst'] == $value['ma']) {
            $tinhthcs = $value['ten'];
            break;
        }
    }
    foreach($data['nganh'] as $key => $value) {
        if ($data['ts']['nv1'] == $value['nganh']) {
            $nganh = $value['name'];
            break;
        }
    }
    
    $gt = $data['ts']['gt']=="1" ? "Nam" : "Nữ"
    ?>
    <textarea id="editor" class="print"><?=
    '<html>

    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <style type="text/css">
        @import url(https://themes.googleusercontent.com/fonts/css?kit=fpjTOVmNbO4Lz34iLyptLUXza5VhXqVC6o75Eld_V98);
    
        .lst-kix_list_4-1>li {
            counter-increment: lst-ctn-kix_list_4-1
        }
    
        .lst-kix_list_2-6>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-7>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_1-0 {
            list-style-type: none
        }
    
        .lst-kix_list_2-4>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-5>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-8>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_3-0>li:before {
            content: "\0025cf   "
        }
    
        .lst-kix_list_3-1>li:before {
            content: "o  "
        }
    
        .lst-kix_list_3-2>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_3-7 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-8 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-6.start {
            counter-reset: lst-ctn-kix_list_4-6 0
        }
    
        .lst-kix_list_4-0>li {
            counter-increment: lst-ctn-kix_list_4-0
        }
    
        ul.lst-kix_list_1-3 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-1 {
            list-style-type: none
        }
    
        .lst-kix_list_3-5>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_1-4 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-2 {
            list-style-type: none
        }
    
        ul.lst-kix_list_1-1 {
            list-style-type: none
        }
    
        .lst-kix_list_3-4>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_1-2 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-0 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-3.start {
            counter-reset: lst-ctn-kix_list_4-3 0
        }
    
        ul.lst-kix_list_1-7 {
            list-style-type: none
        }
    
        .lst-kix_list_3-3>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_3-5 {
            list-style-type: none
        }
    
        .lst-kix_list_4-7>li {
            counter-increment: lst-ctn-kix_list_4-7
        }
    
        ul.lst-kix_list_1-8 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-6 {
            list-style-type: none
        }
    
        ul.lst-kix_list_1-5 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-3 {
            list-style-type: none
        }
    
        ul.lst-kix_list_1-6 {
            list-style-type: none
        }
    
        ul.lst-kix_list_3-4 {
            list-style-type: none
        }
    
        .lst-kix_list_3-8>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_4-0>li:before {
            content: ""counter(lst-ctn-kix_list_4-0, decimal) ". "
        }
    
        .lst-kix_list_4-1>li:before {
            content: ""counter(lst-ctn-kix_list_4-1, lower-latin) ". "
        }
    
        .lst-kix_list_3-6>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_4-3>li {
            counter-increment: lst-ctn-kix_list_4-3
        }
    
        .lst-kix_list_3-7>li:before {
            content: "\0025aa   "
        }
    
        ol.lst-kix_list_4-5.start {
            counter-reset: lst-ctn-kix_list_4-5 0
        }
    
        .lst-kix_list_4-6>li {
            counter-increment: lst-ctn-kix_list_4-6
        }
    
        .lst-kix_list_4-4>li:before {
            content: ""counter(lst-ctn-kix_list_4-4, lower-latin) ". "
        }
    
        .lst-kix_list_4-3>li:before {
            content: ""counter(lst-ctn-kix_list_4-3, decimal) ". "
        }
    
        .lst-kix_list_4-5>li:before {
            content: ""counter(lst-ctn-kix_list_4-5, lower-roman) ". "
        }
    
        .lst-kix_list_4-2>li:before {
            content: ""counter(lst-ctn-kix_list_4-2, lower-roman) ". "
        }
    
        .lst-kix_list_4-6>li:before {
            content: ""counter(lst-ctn-kix_list_4-6, decimal) ". "
        }
    
        ol.lst-kix_list_4-2.start {
            counter-reset: lst-ctn-kix_list_4-2 0
        }
    
        ol.lst-kix_list_4-0 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-1 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-4.start {
            counter-reset: lst-ctn-kix_list_4-4 0
        }
    
        ol.lst-kix_list_4-2 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-3 {
            list-style-type: none
        }
    
        .lst-kix_list_4-4>li {
            counter-increment: lst-ctn-kix_list_4-4
        }
    
        .lst-kix_list_4-8>li:before {
            content: ""counter(lst-ctn-kix_list_4-8, lower-roman) ". "
        }
    
        .lst-kix_list_4-7>li:before {
            content: ""counter(lst-ctn-kix_list_4-7, lower-latin) ". "
        }
    
        ul.lst-kix_list_2-8 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-1.start {
            counter-reset: lst-ctn-kix_list_4-1 0
        }
    
        ol.lst-kix_list_4-8.start {
            counter-reset: lst-ctn-kix_list_4-8 0
        }
    
        ol.lst-kix_list_4-8 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-2 {
            list-style-type: none
        }
    
        .lst-kix_list_1-0>li:before {
            content: "\0025cf   "
        }
    
        ul.lst-kix_list_2-3 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-0 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-1 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-4 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-6 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-5 {
            list-style-type: none
        }
    
        .lst-kix_list_1-1>li:before {
            content: "o  "
        }
    
        .lst-kix_list_1-2>li:before {
            content: "\0025aa   "
        }
    
        ul.lst-kix_list_2-7 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-6 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-4 {
            list-style-type: none
        }
    
        ol.lst-kix_list_4-7 {
            list-style-type: none
        }
    
        ul.lst-kix_list_2-5 {
            list-style-type: none
        }
    
        .lst-kix_list_1-3>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_1-4>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_4-8>li {
            counter-increment: lst-ctn-kix_list_4-8
        }
    
        .lst-kix_list_1-7>li:before {
            content: "\0025aa   "
        }
    
        ol.lst-kix_list_4-0.start {
            counter-reset: lst-ctn-kix_list_4-0 0
        }
    
        .lst-kix_list_1-5>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_1-6>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-0>li:before {
            content: "\0025cf   "
        }
    
        .lst-kix_list_2-1>li:before {
            content: "o  "
        }
    
        .lst-kix_list_4-5>li {
            counter-increment: lst-ctn-kix_list_4-5
        }
    
        .lst-kix_list_1-8>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-2>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_2-3>li:before {
            content: "\0025aa   "
        }
    
        .lst-kix_list_4-2>li {
            counter-increment: lst-ctn-kix_list_4-2
        }
    
        ol.lst-kix_list_4-7.start {
            counter-reset: lst-ctn-kix_list_4-7 0
        }
    
        ol {
            margin: 0;
            padding: 0
        }
    
        table td,
        table th {
            padding: 0
        }
    
        .c49 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 43.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c10 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 42pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c55 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 126.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c53 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 326.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c22 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 60.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c17 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 120pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c6 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 6.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c60 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 225.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c24 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 43.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c46 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 42pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c51 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 180pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c41 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 60.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c52 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 152.2pt;
            border-top-color: #000000;
            border-bottom-style: solid;
            text-align: center;
        }
    
        .c2 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 80pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c58 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 275.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c66 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 82.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c30 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 35.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c61 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 216pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c48 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 425.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c26 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 14.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c43 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 552pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c63 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 100.6pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c34 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 87.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c47 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 13.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c32 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 183.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c33 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 118.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c42 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 432pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c64 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 276.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c5 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 172.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c13 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 35.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c16 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 14.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c27 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 13.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c37 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 116pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c8 {
            border-right-style: solid;
            padding: 0pt 5.4pt 0pt 5.4pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 32.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
    
        .c4 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 13pt;
            font-family: "Times New Roman";
            font-style: italic
        }
    
        .c36 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Times New Roman";
            font-style: italic
        }
    
        .c7 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 13pt;
            font-family: "Times New Roman";
            font-style: normal
        }
    
        .c20 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Times New Roman";
            font-style: italic
        }
    
        .c18 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        .c14 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: justify
        }
    
        .c11 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: center;
            weight:100px;
        }
    
        .c3 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left;
            height: 11pt
        }
    
        .c57 {
            margin-left: auto;
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }
    
        .c19 {
            font-size: 13pt;
            font-family: "Times New Roman";
            font-style: italic;
            font-weight: 400
        }
    
        .c31 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }
    
        .c15 {
            color: #000000;
            text-decoration: none;
            vertical-align: baseline;
            font-style: normal
        }
    
        .c62 {
            background-color: #ffffff;
            max-width: 540pt;
            padding: 36pt 36pt 36pt 36pt
        }
    
        .c45 {
            font-weight: 700;
            font-size: 18pt;
            font-family: "Times New Roman"
        }
    
        .c44 {
            font-weight: 400;
            font-size: 11pt;
            font-family: "Times New Roman"
        }
    
        .c1 {
            font-size: 13pt;
            font-family: "Times New Roman";
            font-weight: 700
        }
    
        .c38 {
            font-size: 13pt;
            font-family: "Times New Roman";
            font-weight: 400
        }
    
        .c21 {
            font-weight: 600;
            font-size: 14pt;
            font-family: "Times New Roman"
        }
    
        .c0 {
            height: 84.8pt
        }
    
        .c59 {
            height: 33pt
        }
    
        .c39 {
            height: 70.8pt
        }
    
        .c50 {
            height: 30pt
        }
    
        .c65 {
            height: 55.3pt
        }
    
        .c9 {
            height: 27.9pt
        }
    
        .c12 {
            height: 24pt
        }
    
        .c28 {
            height: 40pt
        }
    
        .c54 {
            height: 119.8pt
        }
    
        .c56 {
            height: 21.8pt
        }
    
        .c23 {
            height: 23.2pt
        }
    
        .c35 {
            height: 11pt
        }
    
        .c25 {
            height: 78pt
        }
    
        .c29 {
            height: 31.5pt
        }
    
        .c40 {
            height: 125.2pt
        }
    
        .title {
            padding-top: 24pt;
            color: #000000;
            font-weight: 700;
            font-size: 36pt;
            padding-bottom: 6pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        .subtitle {
            padding-top: 18pt;
            color: #666666;
            font-size: 24pt;
            padding-bottom: 4pt;
            font-family: "Georgia";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Calibri"
        }
    
        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Calibri"
        }
    
        h1 {
            padding-top: 24pt;
            color: #000000;
            font-weight: 700;
            font-size: 24pt;
            padding-bottom: 6pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        h2 {
            padding-top: 18pt;
            color: #000000;
            font-weight: 700;
            font-size: 18pt;
            padding-bottom: 4pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        h3 {
            padding-top: 14pt;
            color: #000000;
            font-weight: 700;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        h4 {
            padding-top: 12pt;
            color: #000000;
            font-weight: 700;
            font-size: 12pt;
            padding-bottom: 2pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        h5 {
            padding-top: 11pt;
            color: #000000;
            font-weight: 700;
            font-size: 11pt;
            padding-bottom: 2pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    
        h6 {
            padding-top: 10pt;
            color: #000000;
            font-weight: 700;
            font-size: 10pt;
            padding-bottom: 2pt;
            font-family: "Calibri";
            line-height: 1.0791666666666666;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        </style>
    </head>
    
    <body class="c62 doc-content">
        <p class="c3"><span class="c15 c44"></span></p><a id="t.3dae0a1def21eb4340db1233bb48847c510b7eaf"></a><a
            id="t.0"></a>
        <table class="c57">
            <tr class="c65">
                <td class="c60" colspan="6" rowspan="1">
                    <p class="c11" id="h.gjdgxs"><span class="c15 c1">&#272;&#7840;I H&#7884;C QU&#7888;C GIA H&Agrave;
                            N&#7896;I</span></p>
                    <p class="c11"><span class="c1">TR&#431;&#7900;NG &#272;&#7840;I H&#7884;C KHOA H&#7884;C T&#7920;
                            NHI&Ecirc;N</span></p>
                </td>
                <td class="c53" colspan="5" rowspan="1">
                    <p class="c11"><span class="c15 c1">C&#7896;NG H&Ograve;A X&Atilde; H&#7896;I CH&#7910; NGH&#296;A
                            VI&#7878;T NAM</span></p>
                    <p class="c11"><span class="c1">&#272;&#7897;c l&#7853;p &ndash; T&#7921; do &ndash; H&#7841;nh
                            ph&uacute;c</span></p>
                </td>
            </tr>
            <tr class="c54">
                <td class="c55" colspan="3" rowspan="1">
                    <p class="c3"><span class="c7"></span></p><a id="t.105f23b16598d84f424da4178d91ddc0c72920fe"></a><a
                        id="t.1"></a>
                    <table class="c31">
                        <tr class="c0">
                            <td class="c37" colspan="1" rowspan="1">
                                <p class="c11"><span class="c15 c1">S&#7889; h&#7891; s&#417;</span></p>
                                <p class="c18"><span class="c36">(TS kh&ocirc;ng ghi m&#7909;c n&agrave;y)</span></p>
                            </td>
                        </tr>
                    </table>
                    <p class="c18 c35"><span class="c7"></span></p>
                    <p class="c18 c35"><span class="c7"></span></p>
                </td>
                <td class="c48" colspan="8" rowspan="1">
                    <p class="c11"><span class="c15 c45">H&#7890; S&#416; &#272;&#258;NG K&Yacute; D&#7920; THI TUY&#7874;N
                            SINH L&#7898;P 10</span></p>
                    <p class="c11"><span class="c15 c21">TR&#431;&#7900;NG THPT CHUY&Ecirc;N KHOA H&#7884;C T&#7920;
                            NHI&Ecirc;N N&#258;M 2023</span></p>
                </td>
            </tr>
            <tr class="c9">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c18"><span class="c1">1.Nguy&#7879;n v&#7885;ng h&#7885;c chuy&ecirc;n</span><span
                            class="c38">&nbsp;(</span><span class="c19">ghi t&ecirc;n chuy&ecirc;n</span><span
                            class="c38">)</span><span class="c1">:</span><span class="c7"> '.$nganh.'</span></p>
                </td>
            </tr>
            <tr class="c9">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c18"><span class="c15 c1">2. H&#7885; v&agrave; t&ecirc;n khai sinh: </span><span class="c7">'.$data['ts']['name'].'</span></p>
                </td>
            </tr>
            <tr class="c9">
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c14"><span class="c15 c1">3. Ng&agrave;y sinh: </span></p>
                </td>
                <td class="c66" colspan="3" rowspan="1">
                    <p class="c14"><span class="c7">Ng&agrave;y:  '.explode("-",$data['ts']['ns'])[2].'</span></p>
                </td>
                <td class="c2" colspan="3" rowspan="1">
                    <p class="c14"><span class="c7">Th&aacute;ng: '.explode("-",$data['ts']['ns'])[1].'</span></p>
                </td>
                <td class="c33" colspan="3" rowspan="1">
                    <p class="c14"><span class="c7">N&#259;m: '.explode("-",$data['ts']['ns'])[0].'</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c14"><span class="c15 c1">4. D&acirc;n t&#7897;c:</span><span class="c7"> '.$data['ts']['tendt'].'</span></p>
                </td>
            </tr>
            <tr class="c9">
                <td class="c17" colspan="2" rowspan="1">
                    <p class="c14"><span class="c15 c1">5. Gi&#7899;i t&iacute;nh:</span><span class="c7"> '.$gt.'</span></p>
                </td>
                <td class="c42" colspan="9" rowspan="1">
                    <p class="c14"><span class="c15 c1">6. N&#417;i sinh(T&#7881;nh/ Th&agrave;nh ph&#7889;):</span><span class="c7"> '.$tinhns.'</span></p>
                </td>
            </tr>
            <tr class="c29">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c15 c1">7. H&#7897; kh&#7849;u th&#432;&#7901;ng tr&uacute; (Ghi r&otilde;
                            chi ti&#7871;t &#273;&#7883;a ch&#7881;): </span></p>
                </td>
            </tr>
            <tr class="c56">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c15 c1">8. L&agrave; h&#7885;c sinh tr&#432;&#7901;ng Trung h&#7885;c
                            c&#417; s&#7903;: </span><span class="c7"> '.$data['ts']['thcs'].'</span></p>
                </td>
            </tr>
            <tr class="c12">
                <td class="c58" colspan="8" rowspan="1">
                    <p class="c18"><span class="c4">Huy&#7879;n/Qu&#7853;n:</span><span class="c7"> '.$data['huyen']['ten'].'</span></p>
                </td>
                <td class="c64" colspan="3" rowspan="1">
                    <p class="c11"><span class="c4">T&#7881;nh/ Th&agrave;nh ph&#7889;:</span><span class="c7"> '.$tinhthcs.'</span></p>
                </td>
            </tr>
            <tr class="c59">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c1">9. &#272;&#7883;a ch&#7881; li&ecirc;n h&#7879;</span><span
                            class="c38">&nbsp;(</span><span class="c19">Ghi r&otilde; s&#7889; nh&agrave;,
                            &#273;&#432;&#7901;ng ph&#7889; ho&#7863;c x&oacute;m, th&ocirc;n):</span><span
                            class="c7"> '.$data['ts']['diachill']," ".$data['ts']['xall'].'</span></p>
                </td>
            </tr>
            <tr class="c50">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c15 c1">10. &#272;i&#7879;n tho&#7841;i li&ecirc;n h&#7879; (b&#7855;t
                            bu&#7897;c): </span><span
                            class="c7"> '.$data['ts']['tel'].'</span></p>
                </td>
            </tr>
            <tr class="c23">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c15 c1">11. &#272;&#7883;a ch&#7881; email:</span></span><span
                    class="c7"> '.$data['ts']['email'].'</span></p>
                </td>
            </tr>
            <tr class="c28">
                <td class="c43" colspan="11" rowspan="1">
                    <p class="c14"><span class="c7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em xin cam &#273;oan
                            c&oacute; &#273;&#7911; &#273;i&#7873;u ki&#7879;n d&#7921; thi theo Th&ocirc;ng b&aacute;o
                            tuy&#7875;n sinh c&#7911;a nh&agrave; tr&#432;&#7901;ng v&agrave; ch&#7845;p h&agrave;nh
                            &#273;&#7847;y &#273;&#7911; c&aacute;c quy &#273;&#7883;nh c&#7911;a H&#272;TS. N&#7871;u sai,
                            em xin ho&agrave;n to&agrave;n ch&#7883;u tr&aacute;ch nhi&#7879;m v&agrave; ch&#7845;p
                            nh&#7853;n m&#7885;i x&#7917; l&yacute; theo quy &#273;&#7883;nh.</span></p>
                    <p class="c14">&nbsp;</p>

                    <p class="c14">&nbsp;</p>
                </td>
              
                
            </tr>
            <tr class="c39">
                <td class="c32" colspan="5" rowspan="2">
                    <p class="c11"><span class="c15 c1">Th&iacute; sinh</span></p>
                    <p class="c11"><span class="c4">(k&yacute; v&agrave; ghi r&otilde; h&#7885; t&ecirc;n)</span></p>
                </td>
                <td class="c52" colspan="4" rowspan="2">
                    <p class="c3"><span class="c4"></span></p><a id="t.1aebe24dda1b56316fca09844ec7bf63e4290b0d"></a><a
                        id="t.2"></a>
                    <img src='.BASE_URL.'public/uploads/'.$data['ts']['shs'].".png".' height="115" weight="113">
                    <p class="c14"><span class="c20">(Y&ecirc;u c&#7847;u &#273;&oacute;ng d&#7845;u gi&aacute;p
                            l&#7841;i)</span></p>
                            
                </td>
                <td class="c61" colspan="2" rowspan="2">
                    <p class="c14"><span class="c1">Tr&#432;&#7901;ng THCS:<span class="c7"> '.$data['ts']['thcs'].'</span></span></p>
                    <p class="c14"><span class="c1">X&aacute;c nh&#7853;n em: <span class="c7"> '.$data['ts']['name'].'</span></span></p>
                    <p class="c14"><span class="c7">L&agrave; h&#7885;c sinh l&#7899;p 9 c&#7911;a Tr&#432;&#7901;ng.</span>
                    </p>
                    <p class="c14 c35"><span class="c7"></span></p>
                    <p class="c14 c35"><span class="c7"></span></p>
                    <p class="c11"><span class="c7">,ng&agrave;y&hellip;&hellip;.. th&aacute;ng&hellip;&hellip; n&#259;m
                            2023</span></p>
                    <p class="c11"><span class="c15 c1">HI&#7878;U TR&#431;&#7902;NG</span></p>
                    <p class="c11"><span class="c7">(k&yacute; t&ecirc;n v&agrave; &#273;&oacute;ng d&#7845;u)</span></p>
                </td>
            </tr>
        </table>
    </body>
    </html>'
    ?></textarea>
    <?php include("include/script.php")?>
    <script>
    CKEDITOR.replace("editor");
    CKEDITOR.config.allowedContent = true;
    </script>
</body>

</html>