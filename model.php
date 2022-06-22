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
function repeatStringText(string $text, int $repeat = 3, string $spacer = " ")
{
    $txt = "";
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else {
        for ($i = 0; $i < $repeat; $i++) {
            if ($i == $repeat - 1) {
                $txt .= "$text";
            } else {
                $txt .= "$text$spacer";
            }
        }
        return $txt;
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

function reverseString($text): string
{
    $index = 0;
    $txtLen = strlen($text);
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else {
        for ($i = $txtLen - 1; $i >= 0; $i--) {
            if ($i  >= $index) {
                $temp = $text[$i];
                $text[$i] = $text[$index];
                $text[$index] = $temp;
                $index++;
            }
        }
        return $text;
    }
}
function reverseString2($text): string
{
    $reveText = "";
    $txtLen = strlen($text);
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else {
        for ($i = $txtLen - 1; $i >= 0; $i--) {
            // Hello
            $reveText .= $text[$i];
        }
        return $reveText;
    }
}
function getStringLength($text)
{
    $counter = 0;
    if (empty($text)) {
        return "<h2>Please Make Sure You Enter The Text</h2>";
    } else {
        for ($i = 0; $i >= 0; $i++) {
            if (!isset($text[$i])) {
                break;
            }
            $counter++;
        }
        return $counter;
    }
}

function explodeString($text, string $spacer = " ")
{
    $arrayofTxt = array();
    $currWord = "";
    $txtLen = getStringLength($text);
    if (empty($text)) {
        return $arrayofTxt;
    } else {
        for ($i = 0; $i <= $txtLen - 1; $i++) {
            if ($text[$i] === $spacer) {
                $arrayofTxt[] = $currWord;
                $currWord = "";
            } else {
                $currWord .= $text[$i];
            }
        }
        $arrayofTxt[] = $currWord;
        return $arrayofTxt;
    }
}
function implodeString($arrayofTxt, string $spacer)
{

    $currWord = "";
    $len = count($arrayofTxt);
    if (empty($arrayofTxt)) {
        return $arrayofTxt;
    } else {
        for ($i = 0; $i < count($arrayofTxt); $i++) {
            if (empty($spacer)) {
                $currWord .= $arrayofTxt[$i];
            } else {
                $currWord .= $arrayofTxt[$i] . $spacer;
            }
        }

        return $currWord;
    }
}