<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<title>HoanĐoMi - Nghe nhạc mới HOT nhất, tải nhạc MP3 chất lượng cao</title>
<meta property="og:description" content="Trải nghiệm hàng triệu bài hát và MV có bản quyền chất lượng cao tại kho nhạc NhacCuaTui. Cùng nghe và tải nhạc online miễn phí trên nhiều nền tảng.">
<meta content="nhac, mp3, nghe nhac, nhac cua tui, nct, nhac vang, nhac tre, nhaccuatui, nhac tru tinh, nhac xuan, remix, karaoke, nghe nhac online, edm, bolero, tai nhac, upload nhac, trance, house, loi bai hat, lossless" name="keywords">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/img/logo.jpg">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./themify-icons/themify-icons.css">
<style>
    body {
        font-family: "Lato", sans-serif
    }
    
    .mySlides {
        display: none
    }
    /* H.CSS 4.15 December 2020 by Jan Egil and Borge Refsnes */
    
    html {
        scroll-behavior: smooth;
        box-sizing: border-box;
    }
    
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }
    /* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
    
    html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    body {
        margin: 0;
    }
    
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    main,
    menu,
    nav,
    section {
        display: block;
    }
    
    summary {
        display: list-item;
    }
    
    audio,
    canvas,
    progress,
    video {
        display: inline-block;
    }
    
    progress {
        vertical-align: baseline;
    }
    
    audio:not([controls]) {
        display: none;
        height: 0;
    }
    
    [hidden],
    template {
        display: none;
    }
    
    a {
        background-color: transparent;
    }
    
    a:active,
    a:hover {
        outline-width: 0;
    }
    
    abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        text-decoration: underline dotted;
    }
    
    b,
    strong {
        font-weight: bolder;
    }
    
    dfn {
        font-style: italic;
    }
    
    mark {
        background: #ff0;
        color: #000;
    }
    
    small {
        font-size: 80%;
    }
    
    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }
    
    sub {
        bottom: -0.25em;
    }
    
    sup {
        top: -0.5em;
    }
    
    figure {
        margin: 1em 40px;
    }
    
    img {
        border-style: none;
    }
    
    code,
    kbd,
    pre,
    samp {
        font-family: monospace, monospace;
        font-size: 1em;
    }
    
    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }
    
    button,
    input,
    select,
    textarea,
    optgroup {
        font: inherit;
        margin: 0;
    }
    
    optgroup {
        font-weight: bold;
    }
    
    button,
    input {
        overflow: visible;
    }
    
    button,
    select {
        text-transform: none;
    }
    
    button,
    [type=button],
    [type=reset],
    [type=submit] {
        -webkit-appearance: button;
    }
    
    button::-moz-focus-inner,
    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }
    
    button:-moz-focusring,
    [type=button]:-moz-focusring,
    [type=reset]:-moz-focusring,
    [type=submit]:-moz-focusring {
        outline: 1px dotted ButtonText;
    }
    
    fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: .35em .625em .75em;
    }
    
    legend {
        color: inherit;
        display: table;
        max-width: 100%;
        padding: 0;
        white-space: normal;
    }
    
    textarea {
        overflow: auto;
    }
    
    [type=checkbox],
    [type=radio] {
        padding: 0;
    }
    
    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto;
    }
    
    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
    }
    
    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none;
    }
    
     ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
    }
    /* End extract */
    
    html,
    body {
        font-family: Verdana, sans-serif;
        font-size: 15px;
        line-height: 1.5;
    }
    
    html {
        overflow-x: hidden;
    }
    
    h1 {
        font-size: 36px;
    }
    
    h2 {
        font-size: 30px;
    }
    
    h3 {
        font-size: 24px;
    }
    
    h4 {
        font-size: 20px;
    }
    
    h5 {
        font-size: 18px;
    }
    
    h6 {
        font-size: 16px;
    }
    
    .H-serif {
        font-family: serif;
    }
    
    .H-sans-serif {
        font-family: sans-serif;
    }
    
    .H-cursive {
        font-family: cursive;
    }
    
    .H-monospace {
        font-family: monospace;
    }
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Segoe UI", Arial, sans-serif;
        font-weight: 400;
        margin: 10px 0;
    }
    
    .H-wide {
        letter-spacing: 4px;
    }
    
    hr {
        border: 0;
        border-top: 1px solid #eee;
        margin: 20px 0;
    }
    
    .H-image {
        max-width: 100%;
        height: auto;
    }
    
    img {
        vertical-align: middle;
    }
    
    a {
        color: inherit;
    }
    
    .H-table,
    .H-table-all {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        display: table;
    }
    
    .H-table-all {
        border: 1px solid #ccc;
    }
    
    .H-bordered tr,
    .H-table-all tr {
        border-bottom: 1px solid #ddd;
    }
    
    .H-striped tbody tr:nth-child(even) {
        background-color: #f1f1f1;
    }
    
    .H-table-all tr:nth-child(odd) {
        background-color: #fff;
    }
    
    .H-table-all tr:nth-child(even) {
        background-color: #f1f1f1;
    }
    
    .H-hoverable tbody tr:hover,
    .H-ul.H-hoverable li:hover {
        background-color: #ccc;
    }
    
    .H-centered tr th,
    .H-centered tr td {
        text-align: center;
    }
    
    .H-table td,
    .H-table th,
    .H-table-all td,
    .H-table-all th {
        padding: 8px 8px;
        display: table-cell;
        text-align: left;
        vertical-align: top;
    }
    
    .H-table th:first-child,
    .H-table td:first-child,
    .H-table-all th:first-child,
    .H-table-all td:first-child {
        padding-left: 16px
    }
    
    .H-btn,
    .H-button {
        border: none;
        display: inline-block;
        padding: 8px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        background-color: inherit;
        text-align: center;
        cursor: pointer;
        white-space: nowrap;
    }
    
    .H-btn:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    }
    
    .H-btn,
    .H-button {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    
    .H-disabled,
    .H-btn:disabled,
    .H-button:disabled {
        cursor: not-allowed;
        opacity: 0.3;
    }
    
    .H-disabled *,
     :disabled * {
        pointer-events: none;
    }
    
    .H-btn .H-disabled:hover,
    .H-btn:disabled:hover {
        box-shadow: none;
    }
    
    .H-badge,
    .H-tag {
        background-color: #000;
        color: #fff;
        display: inline-block;
        padding-left: 8px;
        padding-right: 8px;
        text-align: center;
    }
    
    .H-badge {
        border-radius: 50%
    }
    
    .H-ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    .H-ul li {
        padding: 8px 16px;
        border-bottom: 1px solid #ddd
    }
    
    .H-ul li:last-child {
        border-bottom: none;
    }
    
    .H-tooltip,
    .H-display-container {
        position: relative;
    }
    
    .H-tooltip .H-text {
        display: none;
    }
    
    .H-tooltip:hover .H-text {
        display: inline-block;
    }
    
    .H-ripple:active {
        opacity: 0.5;
    }
    
    .H-ripple {
        transition: opacity 0s;
    }
    
    .H-input {
        padding: 8px;
        display: block;
        border: none;
        border-bottom: 1px solid #ccc;
        width: 100%;
    }
    
    .H-select {
        padding: 9px 0;
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
    }
    
    .H-dropdown-click,
    .H-dropdown-hover {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    
    .H-dropdown-hover:hover .H-dropdown-content {
        display: block;
    }
    
    .H-dropdown-hover:first-child,
    .H-dropdown-click:hover {
        background-color: #ccc;
        color: #000;
    }
    
    .H-dropdown-hover:hover>.H-button:first-child,
    .H-dropdown-click:hover>.H-button:first-child {
        background-color: #ccc;
        color: #000;
    }
    
    .H-dropdown-content {
        cursor: auto;
        color: #000;
        background-color: #fff;
        display: none;
        position: absolute;
        min-width: 160px;
        margin: 0;
        padding: 0;
        z-index: 1;
    }
    
    .H-check,
    .H-radio {
        width: 24px;
        height: 24px;
        position: relative;
        top: 6px;
    }
    
    .H-sidebar {
        height: 100%;
        width: 200px;
        background-color: #fff;
        position: fixed!important;
        z-index: 1;
        overflow: auto;
    }
    
    .H-bar-block .H-dropdown-hover,
    .H-bar-block .H-dropdown-click {
        width: 100%;
    }
    
    .H-bar-block .H-dropdown-hover .H-dropdown-content,
    .H-bar-block .H-dropdown-click .H-dropdown-content {
        min-width: 100%;
    }
    
    .H-bar-block .H-dropdown-hover .H-button,
    .H-bar-block .H-dropdown-click .H-button {
        width: 100%;
        text-align: left;
        padding: 8px 16px;
    }
    
    .H-main,
    #main {
        transition: margin-left .4s;
    }
    
    .H-modal {
        z-index: 3;
        display: none;
        padding-top: 100px;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }
    
    .H-modal-content {
        margin: auto;
        background-color: #fff;
        position: relative;
        padding: 0;
        outline: 0;
        width: 600px;
    }
    
    .H-bar {
        width: 100%;
        overflow: hidden;
    }
    
    .H-center .H-bar {
        display: inline-block;
        width: auto;
    }
    
    .H-bar .H-bar-item {
        padding: 8px 16px;
        float: left;
        width: auto;
        border: none;
        display: block;
        outline: 0;
    }
    
    .H-bar .H-dropdown-hover,
    .H-bar .H-dropdown-click {
        position: static;
        float: left;
    }
    
    .H-bar .H-button {
        white-space: normal
    }
    
    .H-bar-block .H-bar-item {
        width: 100%;
        display: block;
        padding: 8px 16px;
        text-align: left;
        border: none;
        white-space: normal;
        float: none;
        outline: 0;
    }
    
    .H-bar-block.H-center .H-bar-item {
        text-align: center;
    }
    
    .H-block {
        display: block;
        width: 100%;
    }
    
    .H-responsive {
        display: block;
        overflow-x: auto;
    }
    
    .H-container:after,
    .H-container:before,
    .H-panel:after,
    .H-panel:before,
    .H-row:after,
    .H-row:before,
    .H-row-padding:after,
    .H-row-padding:before,
    .H-cell-row:before,
    .H-cell-row:after,
    .H-clear:after,
    .H-clear:before,
    .H-bar:before,
    .H-bar:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .H-col,
    .H-half,
    .H-third,
    .H-twothird,
    .H-threequarter,
    .H-quarter {
        float: left;
        width: 100%;
    }
    
    .H-col.s1 {
        width: 8.33333%;
    }
    
    .H-col.s2 {
        width: 16.66666%;
    }
    
    .H-col.s3 {
        width: 24.99999%;
    }
    
    .H-col.s4 {
        width: 33.33333%;
    }
    
    .H-col.s5 {
        width: 41.66666%;
    }
    
    .H-col.s6 {
        width: 49.99999%;
    }
    
    .H-col.s7 {
        width: 58.33333%;
    }
    
    .H-col.s8 {
        width: 66.66666%;
    }
    
    .H-col.s9 {
        width: 74.99999%;
    }
    
    .H-col.s10 {
        width: 83.33333%;
    }
    
    .H-col.s11 {
        width: 91.66666%;
    }
    
    .H-col.s12 {
        width: 99.99999%;
    }
    
    @media (min-width:601px) {
        .H-col.m1 {
            width: 8.33333%
        }
        .H-col.m2 {
            width: 16.66666%
        }
        .H-col.m3,
        .H-quarter {
            width: 24.99999%
        }
        .H-col.m4,
        .H-third {
            width: 33.33333%
        }
        .H-col.m5 {
            width: 41.66666%
        }
        .H-col.m6,
        .H-half {
            width: 49.99999%
        }
        .H-col.m7 {
            width: 58.33333%
        }
        .H-col.m8,
        .H-twothird {
            width: 66.66666%
        }
        .H-col.m9,
        .H-threequarter {
            width: 74.99999%
        }
        .H-col.m10 {
            width: 83.33333%
        }
        .H-col.m11 {
            width: 91.66666%
        }
        .H-col.m12 {
            width: 99.99999%
        }
    }
    
    @media (min-width:993px) {
        .H-col.l1 {
            width: 8.33333%
        }
        .H-col.l2 {
            width: 16.66666%
        }
        .H-col.l3 {
            width: 24.99999%
        }
        .H-col.l4 {
            width: 33.33333%
        }
        .H-col.l5 {
            width: 41.66666%
        }
        .H-col.l6 {
            width: 49.99999%
        }
        .H-col.l7 {
            width: 58.33333%
        }
        .H-col.l8 {
            width: 66.66666%
        }
        .H-col.l9 {
            width: 74.99999%
        }
        .H-col.l10 {
            width: 83.33333%
        }
        .H-col.l11 {
            width: 91.66666%
        }
        .H-col.l12 {
            width: 99.99999%
        }
    }
    
    .H-rest {
        overflow: hidden;
    }
    
    .H-stretch {
        margin-left: -16px;
        margin-right: -16px;
    }
    
    .H-content,
    .H-auto {
        margin-left: auto;
        margin-right: auto;
    }
    
    .H-content {
        max-width: 980px;
    }
    
    .H-auto {
        max-width: 1140px;
    }
    
    .H-cell-row {
        display: table;
        width: 100%;
    }
    
    .H-cell {
        display: table-cell;
    }
    
    .H-cell-top {
        vertical-align: top;
    }
    
    .H-cell-middle {
        vertical-align: middle;
    }
    
    .H-cell-bottom {
        vertical-align: bottom;
    }
    
    .H-hide {
        display: none!important;
    }
    
    .H-show-block,
    .H-show {
        display: block!important;
    }
    
    .H-show-inline-block {
        display: inline-block!important;
    }
    
    @media (max-width:1205px) {
        .H-auto {
            max-width: 95%
        }
    }
    
    @media (max-width:600px) {
        .H-modal-content {
            margin: 0 10px;
            width: auto!important;
        }
        .H-modal {
            padding-top: 30px;
        }
        .H-dropdown-hover.H-mobile .H-dropdown-content,
        .H-dropdown-click.H-mobile .H-dropdown-content {
            position: relative;
        }
        .H-hide-small {
            display: none!important;
        }
        .H-mobile {
            display: block;
            width: 100%!important;
        }
        .H-bar-item.H-mobile,
        .H-dropdown-hover.H-mobile,
        .H-dropdown-click.H-mobile {
            text-align: center;
        }
        .H-dropdown-hover.H-mobile,
        .H-dropdown-hover.H-mobile .H-btn,
        .H-dropdown-hover.H-mobile .H-button,
        .H-dropdown-click.H-mobile,
        .H-dropdown-click.H-mobile .H-btn,
        .H-dropdown-click.H-mobile .H-button {
            width: 100%;
        }
    }
    
    @media (max-width:768px) {
        .H-modal-content {
            width: 500px
        }
        .H-modal {
            padding-top: 50px;
        }
    }
    
    @media (min-width:993px) {
        .H-modal-content {
            width: 900px
        }
        .H-hide-large {
            display: none!important;
        }
        .H-sidebar.H-collapse {
            display: block!important;
        }
    }
    
    @media (max-width:992px) and (min-width:601px) {
        .H-hide-medium {
            display: none!important;
        }
    }
    
    @media (max-width:992px) {
        .H-sidebar.H-collapse {
            display: none
        }
        .H-main {
            margin-left: 0!important;
            margin-right: 0!important;
        }
        .H-auto {
            max-width: 100%
        }
    }
    
    .H-top,
    .H-bottom {
        position: fixed;
        width: 100%;
        z-index: 1;
    }
    
    .H-top {
        top: 0;
    }
    
    .H-bottom {
        bottom: 0;
    }
    
    .H-overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100px;
        ;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }
    
    .H-display-topleft {
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .H-display-topright {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    .H-display-bottomleft {
        position: absolute;
        left: 0;
        bottom: 0;
    }
    
    .H-display-bottomright {
        position: absolute;
        right: 0;
        bottom: 0;
    }
    
    .H-display-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    
    .H-display-left {
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(-0%, -50%);
    }
    
    .H-display-right {
        position: absolute;
        top: 50%;
        right: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(0%, -50%);
    }
    
    .H-display-topmiddle {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0%);
        -ms-transform: translate(-50%, 0%);
    }
    
    .H-display-bottommiddle {
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 0%);
        -ms-transform: translate(-50%, 0%);
    }
    
    .H-display-container:hover .H-display-hover {
        display: block;
    }
    
    .H-display-container:hover span.H-display-hover {
        display: inline-block;
    }
    
    .H-display-hover {
        display: none;
    }
    
    .H-display-position {
        position: absolute;
    }
    
    .H-circle {
        border-radius: 50%;
    }
    
    .H-round-small {
        border-radius: 2px;
    }
    
    .H-round,
    .H-round-medium {
        border-radius: 4px;
    }
    
    .H-round-large {
        border-radius: 8px;
    }
    
    .H-round-xlarge {
        border-radius: 16px;
    }
    
    .H-round-xxlarge {
        border-radius: 32px;
    }
    
    .H-row-padding,
    .H-row-padding>.H-half,
    .H-row-padding>.H-third,
    .H-row-padding>.H-twothird,
    .H-row-padding>.H-threequarter,
    .H-row-padding>.H-quarter,
    .H-row-padding>.H-col {
        padding: 0 8px;
    }
    
    .H-container,
    .H-panel {
        padding: 0.01em 16px
    }
    
    .H-panel {
        margin-top: 16px;
        margin-bottom: 16px;
    }
    
    .H-code,
    .H-codespan {
        font-family: Consolas, "courier new";
        font-size: 16px;
    }
    
    .H-code {
        width: auto;
        background-color: #fff;
        padding: 8px 12px;
        border-left: 4px solid #4CAF50;
        word-wrap: break-word;
    }
    
    .H-codespan {
        color: crimson;
        background-color: #f1f1f1;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 110%;
    }
    
    .H-card,
    .H-card-2 {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    
    .H-card-4,
    .H-hover-shadow:hover {
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 4px 20px 0 rgba(0, 0, 0, 0.19);
    }
    
    .H-spin {
        animation: H-spin 2s infinite linear;
    }
    
    @keyframes H-spin {
        0% {
            transform: rotate(0deg)
        }
        100% {
            transform: rotate(359deg)
        }
        ;
    }
    
    .H-animate-fading {
        animation: fading 10s infinite;
    }
    
    @keyframes fading {
        0% {
            opacity: 0
        }
        50% {
            opacity: 1
        }
        100% {
            opacity: 0
        }
        ;
    }
    
    .H-animate-opacity {
        animation: opac 0.8s;
    }
    
    @keyframes opac {
        from {
            opacity: 0
        }
        to {
            opacity: 1
        }
        ;
    }
    
    .H-animate-top {
        position: relative;
        animation: animatetop 0.4s;
    }
    
    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }
        to {
            top: 0;
            opacity: 1
        }
        ;
    }
    
    .H-animate-left {
        position: relative;
        animation: animateleft 0.4s;
    }
    
    @keyframes animateleft {
        from {
            left: -300px;
            opacity: 0
        }
        to {
            left: 0;
            opacity: 1
        }
        ;
    }
    
    .H-animate-right {
        position: relative;
        animation: animateright 0.4s;
    }
    
    @keyframes animateright {
        from {
            right: -300px;
            opacity: 0
        }
        to {
            right: 0;
            opacity: 1
        }
        ;
    }
    
    .H-animate-bottom {
        position: relative;
        animation: animatebottom 0.4s;
    }
    
    @keyframes animatebottom {
        from {
            bottom: -300px;
            opacity: 0
        }
        to {
            bottom: 0;
            opacity: 1
        }
        ;
    }
    
    .H-animate-zoom {
        animation: animatezoom 0.6s;
    }
    
    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }
    
    .H-animate-input {
        transition: width 0.4s ease-in-out;
    }
    
    .H-animate-input:focus {
        width: 100%!important;
    }
    
    .H-opacity,
    .H-hover-opacity:hover {
        opacity: 0.60;
    }
    
    .H-opacity-off,
    .H-hover-opacity-off:hover {
        opacity: 1;
    }
    
    .H-opacity-max {
        opacity: 0.25;
    }
    
    .H-opacity-min {
        opacity: 0.75;
    }
    
    .H-greyscale-max,
    .H-grayscale-max,
    .H-hover-greyscale:hover,
    .H-hover-grayscale:hover {
        filter: grayscale(100%);
    }
    
    .H-greyscale,
    .H-grayscale {
        filter: grayscale(75%);
    }
    
    .H-greyscale-min,
    .H-grayscale-min {
        filter: grayscale(50%);
    }
    
    .H-sepia {
        filter: sepia(75%);
    }
    
    .H-sepia-max,
    .H-hover-sepia:hover {
        filter: sepia(100%)
    }
    
    .H-sepia-min {
        filter: sepia(50%);
    }
    
    .H-tiny {
        font-size: 10px!important;
    }
    
    .H-small {
        font-size: 12px!important;
    }
    
    .H-medium {
        font-size: 15px!important;
    }
    
    .H-large {
        font-size: 18px!important;
    }
    
    .H-xlarge {
        font-size: 24px!important;
    }
    
    .H-xxlarge {
        font-size: 36px!important;
    }
    
    .H-xxxlarge {
        font-size: 48px!important;
    }
    
    .H-jumbo {
        font-size: 64px!important;
    }
    
    .H-left-align {
        text-align: left!important;
    }
    
    .H-right-align {
        text-align: right!important;
    }
    
    .H-justify {
        text-align: justify!important;
    }
    
    .H-center {
        text-align: center!important;
    }
    
    .H-border-0 {
        border: 0!important;
    }
    
    .H-border {
        border: 1px solid #ccc!important;
    }
    
    .H-border-top {
        border-top: 1px solid #ccc!important;
    }
    
    .H-border-bottom {
        border-bottom: 1px solid #ccc!important;
    }
    
    .H-border-left {
        border-left: 1px solid #ccc!important;
    }
    
    .H-border-right {
        border-right: 1px solid #ccc!important;
    }
    
    .H-topbar {
        border-top: 6px solid #ccc!important;
    }
    
    .H-bottombar {
        border-bottom: 6px solid #ccc!important;
    }
    
    .H-leftbar {
        border-left: 6px solid #ccc!important;
    }
    
    .H-rightbar {
        border-right: 6px solid #ccc!important;
    }
    
    .H-section,
    .H-code {
        margin-top: 16px!important;
        margin-bottom: 16px!important;
    }
    
    .H-margin {
        margin: 16px!important;
    }
    
    .H-margin-top {
        margin-top: 16px!important;
    }
    
    .H-margin-bottom {
        margin-bottom: 16px!important;
    }
    
    .H-margin-left {
        margin-left: 16px!important;
    }
    
    .H-margin-right {
        margin-right: 16px!important;
    }
    
    .H-padding-small {
        padding: 4px 8px!important
    }
    
    .H-padding {
        padding: 8px 16px!important;
    }
    
    .H-padding-large {
        padding: 12px 24px!important;
    }
    
    .H-padding-16 {
        padding-top: 16px!important;
        padding-bottom: 16px!important;
    }
    
    .H-padding-24 {
        padding-top: 24px!important;
        padding-bottom: 24px!important;
    }
    
    .H-padding-32 {
        padding-top: 32px!important;
        padding-bottom: 32px!important;
    }
    
    .H-padding-48 {
        padding-top: 48px!important;
        padding-bottom: 48px!important;
    }
    
    .H-padding-64 {
        padding-top: 64px!important;
        padding-bottom: 64px!important;
    }
    
    .H-padding-top-64 {
        padding-top: 64px!important;
    }
    
    .H-padding-top-48 {
        padding-top: 48px!important;
    }
    
    .H-padding-top-32 {
        padding-top: 32px!important;
    }
    
    .H-padding-top-24 {
        padding-top: 24px!important;
    }
    
    .H-left {
        float: left!important;
    }
    
    .H-right {
        float: right!important;
    }
    
    .H-button:hover {
        color: #000!important;
        background-color: #ccc!important;
    }
    
    .H-transparent,
    .H-hover-none:hover {
        background-color: transparent!important;
    }
    
    .H-hover-none:hover {
        box-shadow: none!important;
    }
    /* Colors */
    
    .H-amber,
    .H-hover-amber:hover {
        color: #000!important;
        background-color: #ffc107!important;
    }
    
    .H-aqua,
    .H-hover-aqua:hover {
        color: #000!important;
        background-color: #00ffff!important;
    }
    
    .H-blue,
    .H-hover-blue:hover {
        color: #fff!important;
        background-color: #2196F3!important;
    }
    
    .H-light-blue,
    .H-hover-light-blue:hover {
        color: #000!important;
        background-color: #87CEEB!important;
    }
    
    .H-brown,
    .H-hover-brown:hover {
        color: #fff!important;
        background-color: #795548!important;
    }
    
    .H-cyan,
    .H-hover-cyan:hover {
        color: #000!important;
        background-color: #00bcd4!important;
    }
    
    .H-blue-grey,
    .H-hover-blue-grey:hover,
    .H-blue-gray,
    .H-hover-blue-gray:hover {
        color: #fff!important;
        background-color: #607d8b!important;
    }
    
    .H-green,
    .H-hover-green:hover {
        color: #fff!important;
        background-color: #4CAF50!important;
    }
    
    .H-light-green,
    .H-hover-light-green:hover {
        color: #000!important;
        background-color: #8bc34a!important;
    }
    
    .H-indigo,
    .H-hover-indigo:hover {
        color: #fff!important;
        background-color: #3f51b5!important;
    }
    
    .H-khaki,
    .H-hover-khaki:hover {
        color: #000!important;
        background-color: #f0e68c!important;
    }
    
    .H-lime,
    .H-hover-lime:hover {
        color: #000!important;
        background-color: #cddc39!important;
    }
    
    .H-orange,
    .H-hover-orange:hover {
        color: #000!important;
        background-color: #ff9800!important;
    }
    
    .H-deep-orange,
    .H-hover-deep-orange:hover {
        color: #fff!important;
        background-color: #ff5722!important;
    }
    
    .H-pink,
    .H-hover-pink:hover {
        color: #fff!important;
        background-color: #e91e63!important;
    }
    
    .H-purple,
    .H-hover-purple:hover {
        color: #fff!important;
        background-color: #9c27b0!important;
    }
    
    .H-deep-purple,
    .H-hover-deep-purple:hover {
        color: #fff!important;
        background-color: #673ab7!important;
    }
    
    .H-red,
    .H-hover-red:hover {
        color: #fff!important;
        background-color: #f44336!important;
    }
    
    .H-sand,
    .H-hover-sand:hover {
        color: #000!important;
        background-color: #fdf5e6!important;
    }
    
    .H-teal,
    .H-hover-teal:hover {
        color: #fff!important;
        background-color: #00bcd4!important;
    }
    
    .H-yellow,
    .H-hover-yellow:hover {
        color: #000!important;
        background-color: #ffeb3b!important;
    }
    
    .H-white,
    .H-hover-white:hover {
        color: #000!important;
        background-color: #fff!important;
    }
    
    .H-black,
    .H-hover-black:hover {
        color: #fff!important;
        background-color: #000!important;
    }
    
    .H-grey,
    .H-hover-grey:hover,
    .H-gray,
    .H-hover-gray:hover {
        color: #000!important;
        background-color: #9e9e9e!important;
    }
    
    .H-light-grey,
    .H-hover-light-grey:hover,
    .H-light-gray,
    .H-hover-light-gray:hover {
        color: #000!important;
        background-color: #f1f1f1!important;
    }
    
    ;
    .H-dark-grey,
    .H-hover-dark-grey:hover,
    .H-dark-gray,
    .H-hover-dark-gray:hover {
        color: #fff!important;
        background-color: #616161!important;
    }
    
    .H-pale-red,
    .H-hover-pale-red:hover {
        color: #000!important;
        background-color: #ffdddd!important;
    }
    
    .H-pale-green,
    .H-hover-pale-green:hover {
        color: #000!important;
        background-color: #ddffdd!important;
    }
    
    .H-pale-yellow,
    .H-hover-pale-yellow:hover {
        color: #000!important;
        background-color: #ffffcc!important;
    }
    
    .H-pale-blue,
    .H-hover-pale-blue:hover {
        color: #000!important;
        background-color: #ddffff!important;
    }
    
    .H-text-amber,
    .H-hover-text-amber:hover {
        color: #ffc107!important;
    }
    
    .H-text-aqua,
    .H-hover-text-aqua:hover {
        color: #00ffff!important;
    }
    
    .H-text-blue,
    .H-hover-text-blue:hover {
        color: #2196F3!important;
    }
    
    .H-text-light-blue,
    .H-hover-text-light-blue:hover {
        color: #87CEEB!important;
    }
    
    .H-text-brown,
    .H-hover-text-brown:hover {
        color: #795548!important;
    }
    
    .H-text-cyan,
    .H-hover-text-cyan:hover {
        color: #00bcd4!important;
    }
    
    .H-text-blue-grey,
    .H-hover-text-blue-grey:hover,
    .H-text-blue-gray,
    .H-hover-text-blue-gray:hover {
        color: #607d8b!important;
    }
    
    .H-text-green,
    .H-hover-text-green:hover {
        color: #4CAF50!important;
    }
    
    .H-text-light-green,
    .H-hover-text-light-green:hover {
        color: #8bc34a!important;
    }
    
    .H-text-indigo,
    .H-hover-text-indigo:hover {
        color: #3f51b5!important;
    }
    
    .H-text-khaki,
    .H-hover-text-khaki:hover {
        color: #b4aa50!important;
    }
    
    .H-text-lime,
    .H-hover-text-lime:hover {
        color: #cddc39!important;
    }
    
    .H-text-orange,
    .H-hover-text-orange:hover {
        color: #ff9800!important;
    }
    
    .H-text-deep-orange,
    .H-hover-text-deep-orange:hover {
        color: #ff5722!important;
    }
    
    .H-text-pink,
    .H-hover-text-pink:hover {
        color: #e91e63!important;
    }
    
    .H-text-purple,
    .H-hover-text-purple:hover {
        color: #9c27b0!important;
    }
    
    .H-text-deep-purple,
    .H-hover-text-deep-purple:hover {
        color: #673ab7!important;
    }
    
    .H-text-red,
    .H-hover-text-red:hover {
        color: #f44336!important;
    }
    
    .H-text-sand,
    .H-hover-text-sand:hover {
        color: #fdf5e6!important;
    }
    
    .H-text-teal,
    .H-hover-text-teal:hover {
        color: #009688!important;
    }
    
    .H-text-yellow,
    .H-hover-text-yellow:hover {
        color: #d2be0e!important;
    }
    
    .H-text-white,
    .H-hover-text-white:hover {
        color: #fff!important;
    }
    
    .H-text-black,
    .H-hover-text-black:hover {
        color: #000!important;
    }
    
    .H-text-grey,
    .H-hover-text-grey:hover,
    .H-text-gray,
    .H-hover-text-gray:hover {
        color: #757575!important;
    }
    
    .H-text-light-grey,
    .H-hover-text-light-grey:hover,
    .H-text-light-gray,
    .H-hover-text-light-gray:hover {
        color: #f1f1f1!important;
    }
    
    .H-text-dark-grey,
    .H-hover-text-dark-grey:hover,
    .H-text-dark-gray,
    .H-hover-text-dark-gray:hover {
        color: #3a3a3a!important;
    }
    
    .H-border-amber,
    .H-hover-border-amber:hover {
        border-color: #ffc107!important;
    }
    
    .H-border-aqua,
    .H-hover-border-aqua:hover {
        border-color: #00ffff!important;
    }
    
    .H-border-blue,
    .H-hover-border-blue:hover {
        border-color: #2196F3!important;
    }
    
    .H-border-light-blue,
    .H-hover-border-light-blue:hover {
        border-color: #87CEEB!important;
    }
    
    .H-border-brown,
    .H-hover-border-brown:hover {
        border-color: #795548!important;
    }
    
    .H-border-cyan,
    .H-hover-border-cyan:hover {
        border-color: #00bcd4!important;
    }
    
    .H-border-blue-grey,
    .H-hover-border-blue-grey:hover,
    .H-border-blue-gray,
    .H-hover-border-blue-gray:hover {
        border-color: #607d8b!important;
    }
    
    .H-border-green,
    .H-hover-border-green:hover {
        border-color: #4CAF50!important;
    }
    
    .H-border-light-green,
    .H-hover-border-light-green:hover {
        border-color: #8bc34a!important;
    }
    
    .H-border-indigo,
    .H-hover-border-indigo:hover {
        border-color: #3f51b5!important;
    }
    
    .H-border-khaki,
    .H-hover-border-khaki:hover {
        border-color: #f0e68c!important;
    }
    
    .H-border-lime,
    .H-hover-border-lime:hover {
        border-color: #cddc39!important;
    }
    
    .H-border-orange,
    .H-hover-border-orange:hover {
        border-color: #ff9800!important;
    }
    
    .H-border-deep-orange,
    .H-hover-border-deep-orange:hover {
        border-color: #ff5722!important;
    }
    
    .H-border-pink,
    .H-hover-border-pink:hover {
        border-color: #e91e63!important;
    }
    
    .H-border-purple,
    .H-hover-border-purple:hover {
        border-color: #9c27b0!important;
    }
    
    .H-border-deep-purple,
    .H-hover-border-deep-purple:hover {
        border-color: #673ab7!important;
    }
    
    .H-border-red,
    .H-hover-border-red:hover {
        border-color: #f44336!important;
    }
    
    .H-border-sand,
    .H-hover-border-sand:hover {
        border-color: #fdf5e6!important;
    }
    
    .H-border-teal,
    .H-hover-border-teal:hover {
        border-color: #009688!important;
    }
    
    .H-border-yellow,
    .H-hover-border-yellow:hover {
        border-color: #ffeb3b!important;
    }
    
    .H-border-white,
    .H-hover-border-white:hover {
        border-color: #fff!important;
    }
    
    .H-border-black,
    .H-hover-border-black:hover {
        border-color: #000!important;
    }
    
    .H-border-grey,
    .H-hover-border-grey:hover,
    .H-border-gray,
    .H-hover-border-gray:hover {
        border-color: #9e9e9e!important;
    }
    
    .H-border-light-grey,
    .H-hover-border-light-grey:hover,
    .H-border-light-gray,
    .H-hover-border-light-gray:hover {
        border-color: #f1f1f1!important;
    }
    
    .H-border-dark-grey,
    .H-hover-border-dark-grey:hover,
    .H-border-dark-gray,
    .H-hover-border-dark-gray:hover {
        border-color: #616161!important;
    }
    
    .H-border-pale-red,
    .H-hover-border-pale-red:hover {
        border-color: #ffe7e7!important;
    }
    
    .H-border-pale-green,
    .H-hover-border-pale-green:hover {
        border-color: #e7ffe7!important;
    }
    
    .H-border-pale-yellow,
    .H-hover-border-pale-yellow:hover {
        border-color: #ffffcc!important;
    }
    
    .H-border-pale-blue,
    .H-hover-border-pale-blue:hover {
        border-color: #e7ffff!important;
    }
    
    .H-third.img {
        padding: 30px;
        transform: scale(1);
        transition: all 0.5s;
    }
    
    .H-third img:hover {
        transform: scale(1.1);
    }
</style>

<body>
    <?php echo $alert; ?>
    <!-- Navbar -->
    <div class="H-top">
        <div class="H-bar H-black H-card">
            <a class="H-bar-item H-button H-padding-large H-hide-medium H-hide-large H-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="H-bar-item H-button H-padding-large">TRANG CHỦ</a>
            <a href="#band" class="H-bar-item H-button H-padding-large H-hide-small">GIỚI THIỆU</a>
            <a href="#tour" class="H-bar-item H-button H-padding-large H-hide-small">SẢN PHẨM</a>
            <a href="#contact" class="H-bar-item H-button H-padding-large H-hide-small">GMAIL</a>
            <div class="H-dropdown-hover H-hide-small">
                <button class="H-padding-large H-button" title="More">LIÊN HỆ <i class="fa fa-caret-down"></i></button>
                <div class="H-dropdown-content H-bar-block H-card-4">
                    <a href="https://facebook.com/hoanhit2001" class="H-bar-item H-button"><i class="fa ti-facebook"></i> Facebook</a>
                    <a href="https://instagram.com/25only_hoan/" class="H-bar-item H-button"><i class="fa ti-instagram"></i> Intagarm</a>
                    <a href="https://m.me/hoanhit2001" class="H-bar-item H-button"><i class="fa ti-email"></i> Messenger</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="H-padding-large H-hover-red H-hide-small H-right"><i class="fa fa-search"></i></a>
        </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="H-bar-block H-black H-hide H-hide-large H-hide-medium H-top" style="margin-top:46px">
        <a href="#band" class="H-bar-item H-button H-padding-large" onclick="myFunction()">GIỚI THIỆU</a>
        <a href="#tour" class="H-bar-item H-button H-padding-large" onclick="myFunction()">SẢN PHẨM</a>
        <a href="#contact" class="H-bar-item H-button H-padding-large" onclick="myFunction()">GMAIL</a>
        <a href="#" class="H-bar-item H-button H-padding-large" onclick="myFunction()">LIÊN HỆ</a>
    </div>

    <!-- Page content -->
    <div class="H-content" style="max-width:2000px;margin-top:0px">

        <!-- Automatic Slideshow Images -->
        <div class="mySlides H-display-container H-center">
            <img src="./img/blue-banner_060831733.jpeg" style="width:100%" height="500px">
            <div class="H-display-bottommiddle H-container H-text-white H-padding-32 H-hide-small">
                <h3></h3>
                <p><b></b></p>
            </div>
        </div>
        <div class="mySlides H-display-container H-center">
            <img src="./img/banner-blue-technology_060828435.jpeg" style="width:100%" height="500px">
            <div class="H-display-bottommiddle H-container H-text-white H-padding-32 H-hide-small">
                <h3></h3>
                <p><b></b></p>
            </div>
        </div>
        <div class="mySlides H-display-container H-center">
            <img src="./img/9e05f930e4cb3855169205c469cf3b99.jpeg" style="width:100%" height="500px">
            <div class="H-display-bottommiddle H-container H-text-white H-padding-32 H-hide-small">
                <h3></h3>
                <p><b></b></p>
            </div>
        </div>

        <!-- The Band Section -->
        <div class="H-container H-content H-center H-padding-64" style="max-width:800px" id="band">
            <h2 class="H-wide">Nguyễn Duy Hoan</h2>
            <p class="H-opacity"><i>We love music</i></p>
            <p class="H-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="H-row H-padding-32">
                <div class="H-third">
                    <p>ÂM NHẠC</p>
                    <a href="./source/musi.html">
                        <img src="./img/1556606092-13369328185cc7ec8c953c42-80801675-500x500.png" class="H-round H-margin-bottom" alt="Random Name" style="width:60%" height="155px">
                    </a>
                </div>
                <div class="H-third">
                    <p>VIDEO</p>
                    <img src="./img/KHO VIDEO TUYỂN CHỌN (1).png" class="H-round H-margin-bottom" alt="Random Name" style="width:60%">
                </div>
                <div class="H-third">
                    <p>DANG NGHĨ</p>
                    <img src="./img/h.jpeg" class="H-round H-margin-bottom" alt="Random Name" style="width:60%">
                </div>
            </div>
        </div>

        <!-- The Tour Section -->
        <div class="H-black" id="tour">
            <div class="H-container H-content H-padding-64" style="max-width:800px">
                <h2 class="H-wide H-center">SẢN PHẨM</h2>
                <p class="H-opacity H-center"><i>Remember to book your tickets!</i></p><br>

                <ul class="H-ul H-border H-white H-text-grey">
                    <li class="H-padding">September <span class="H-tag H-red H-margin-left">Sold out</span></li>
                    <li class="H-padding">October <span class="H-tag H-red H-margin-left">Sold out</span></li>
                    <li class="H-padding">November <span class="H-badge H-right H-margin-right">3</span></li>
                </ul>

                <div class="H-row-padding H-padding-32" style="margin:0 -16px">
                    <div class="H-third H-margin-bottom">
                        <img src="/img/newyork.jpeg" alt="New York" style="width:100%" class="H-hover-opacity">
                        <div class="H-container H-white">
                            <p><b>New York</b></p>
                            <p class="H-opacity">Fri 27 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="H-button H-black H-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Mua sản phẩm</button>
                        </div>
                    </div>
                    <div class="H-third H-margin-bottom">
                        <img src="/img/paris.jpeg" alt="Paris" style="width:100%" class="H-hover-opacity">
                        <div class="H-container H-white">
                            <p><b>Paris</b></p>
                            <p class="H-opacity">Sat 28 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="H-button H-black H-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Mua sản phẩm</button>
                        </div>
                    </div>
                    <div class="H-third H-margin-bottom">
                        <img src="/img/sanfran.jpeg" alt="San Francisco" style="width:100%" class="H-hover-opacity">
                        <div class="H-container H-white">
                            <p><b>San Francisco</b></p>
                            <p class="H-opacity">Sun 29 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="H-button H-black H-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Mua sản phẩm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ticket Modal -->
        <div id="ticketModal" class="H-modal">
            <div class="H-modal-content H-animate-top H-card-4">
                <header class="H-container H-teal H-center H-padding-32">
                    <span onclick="document.getElementById('ticketModal').style.display='none'" class="H-button H-teal H-xlarge H-display-topright">&times;</span>
                    <h2 class="H-wide"><i class="fa fa-suitcase H-margin-right"></i>Giá vé</h2>
                </header>
                <div class="H-container">
                    <p><label><i class="fa fa-shopping-cart"></i> Giá,150.000đ</label></p>
                    <input class="H-input H-border" type="text" placeholder="How many?">
                    <p><label><i class="fa fa-user"></i> Ghi thông tin</label></p>
                    <input class="H-input H-border" type="text" placeholder="Enter email">
                    <button class="H-button H-block H-teal H-padding-16 H-section H-right">MUA <i class="fa fa-check"></i></button>
                    <button class="H-button H-red H-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
                    <p class="H-right">Need <a href="#" class="H-text-blue">help?</a></p>
                </div>
            </div>
        </div>

        <!-- The Contact Section -->
        <div class="H-container H-content H-padding-64" style="max-width:800px" id="contact">
            <h2 class="H-wide H-center">GỬI GÓP Ý</h2>
            <p class="H-opacity H-center"><i>Fan? Drop a note!</i></p>
            <div class="H-row H-padding-32">
                <div class="H-col m6 H-large H-margin-bottom">
                    <i class="fa fa-map-marker" style="width:30px"></i> Hà Nội, VN<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +096.969.3428<br>
                    <i class="fa fa-envelope" style="width:30px"> </i> Email: duyhoannv@mail.com<br>
                </div>
                <div class="H-col m6">
                    <form class="contact" action="" method="post">
                        <div class="H-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="H-half">
                                <input type="text" name="name" class="H-input H-border" placeholder="Your Name" required>
                            </div>
                            <div class="H-half">
                                <input type="email" name="email" class="H-input H-border" placeholder="Your Email" required>
                            </div>
                        </div>
                        <textarea class="H-input H-border" name="message" rows="5" placeholder="Your Message" required></textarea>
                        <input type="submit" name="submit" class="H-input H-border" value="Send">
                    </form>
                </div>
            </div>
        </div>

        <!-- End Page Content -->
    </div>

    <!-- Image of location/map -->
    <img src="/img/z2489048764467_5dcbf2d4e842a72f99c1d0355752edd8.jpg" class="H-image H-greyscale-min" style="width:100%">

    <!-- Footer -->
    <footer class="H-container H-padding-64 H-center H-opacity H-light-grey H-xlarge">
        <i class="fa fa-facebook-official H-hover-opacity"></i>
        <i class="fa fa-instagram H-hover-opacity"></i>
        <i class="fa fa-snapchat H-hover-opacity"></i>
        <i class="fa fa-pinterest-p H-hover-opacity"></i>
        <i class="fa fa-twitter H-hover-opacity"></i>
        <i class="fa fa-linkedin H-hover-opacity"></i>
        <p class="H-medium">Powered by <a href="#" target="_blank">DUY HOAN</a></p>
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("H-show") == -1) {
                x.className += " H-show";
            } else {
                x.className = x.className.replace(" H-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </script>
    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>