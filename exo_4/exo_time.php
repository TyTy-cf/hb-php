<?php

function timeConverter(int $milliSecs): string {
    print_r('Conversion de ' . $milliSecs . '...<br>');
    $ms = $milliSecs % 1000;
    $secondsMinutes = floor($milliSecs / 1000);
    $seconds = $secondsMinutes % 60;
    $minutes = floor($secondsMinutes / 60);
    $minutes = $minutes % 60;
    if ($minutes < 10) {
        $minutes = '0' . $minutes;
    }
    if ($ms < 10) {
        $ms = '00' . $ms;
    } else if ($ms < 100) {
        $ms = '0' . $ms;
    }
    if ($seconds < 10) {
        $seconds = '0' . $seconds;
    }
    return $minutes. ':' . $seconds . '"' . $ms;
}

print_r(timeConverter(900000));
