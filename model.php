<?php
//change the first char in a string to upper or lower
function  changeFirstCharState($text, $fun): string
{
    if ($text == "") {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else if (strtolower($fun) == "lower") {
        $text[0] = strtolower($text[0]);
        return $text;
    } else if (strtolower($fun) == "upper") {
        $text[0] = strtoupper($text[0]);
        return $text;
    } else {
        return "You Should enter the function Lower Or Upper";
    }
}

//function to repeat string 
function repeatStringText($text, $num, $spacer = " ")
{
    $txt = "";
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else if (!empty($text) && $num != 0) {
        for ($i = 0; $i < $num; $i++) {
            if ($i == $num - 1) {
                $txt .= "$text";
            } else {
                $txt .= "$text$spacer";
            }
        }
        return $txt;
    } else {
        return "$txt $spacer $txt $spacer $txt $spacer";
    }
}

function convertStrToLowerCase($text)
{
    $txtLen = strlen($text);
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else if (!empty($text)) {
        for ($i = 0; $i < $txtLen; $i++) {
            $text[$i]  = strtolower($text[$i]);
        }
        return $text;
    }
}

function convertStrToUpperCase($text)
{
    $txtLen = strlen($text);
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else if (!empty($text)) {
        for ($i = 0; $i < $txtLen - 1; $i++) {
            $text[$i]  = strtoupper($text[$i]);
        }
        return $text;
    }
}