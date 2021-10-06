<?php
header('Content-Type: text/css');
?>

#main{
    color: darkred;
}

.barchart {
    //cellspacing: 0px;
    border-spacing: 0;
    margin: 0 auto;
}

.bar{
    background-color: green;
    width: 9px;
    border-left: 1px solid black;
    border-top: 1px solid black;

}

.bar_label {
    -webkit-transform: rotate(90deg) scale(1, 0.8);
    -moz-transform: rotate(90deg) scale(1, 0.8);
    -o-transform: rotate(90deg) scale(1, 0.8);
    -ms-transform: rotate(90deg) scale(1, 0.8);
}

.barchart_label {
    max-width: 9px;
    padding: 0;
    font-family: sans-serif;
    font-size: 12px;
    cursor: pointer;
}

.barchart_bar {
    vertical-align: bottom;
    padding: 0;
    font-size: 0;
}

.barchart_label_anchor {
    text-decoration: none;
    color: black;
}

.center{
    text-align: center;
}