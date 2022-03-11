<?php
function acc(string $url) : string
{
    $url2 = explode('.', $url);
    return end($url2);
}