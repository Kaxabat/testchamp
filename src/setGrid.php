<?php

function setGrid1()
{
    for ($i = 1; $i <= 20; $i++) {
        for ($k = 1; $k <= 20; $k++) {
            if ($i > $k) {
                continue;
            }
            if ($i == $k) {
                continue;
            }
            if ($k == 20) {
                if ($i*2 <= 20) {
                    $n = $i*2 - 1;
                    $match[$n][] = ($i-1);
                    $match[$n][] = ($k-1);
                    continue;
                }
                if ($i*2 > 20) {
                    $n = $i*2 - 20;
                    $match[$n][] = ($i-1);
                    $match[$n][] = ($k-1);
                    continue;
                }
            }
            if ($i + $k <= 20) {
                $n = $i + $k - 1;
                $match[$n][] = ($i-1);
                $match[$n][] = ($k-1);
            }
            if ($i + $k > 20) {
                $n = $k + $i - 20;
                $match[$n][] = ($i-1);
                $match[$n][] = ($k-1);
            }
        }
    }

    return $match;
}


function setGrid2()
{
    for ($i = 1; $i <= 20; $i++) {
        for ($k = 1; $k <= 20; $k++) {
            if ($k > $i) {
                continue;
            }
            if ($i == $k) {
                continue;
            }
            if ($k == 20) {
                if ($i*2 <= 20) {
                    $n = $i*2 - 1;
                    $match[$n][] = ($i-1);
                    $match[$n][] = ($k-1);
                    continue;
                }
                if ($i*2 > 20) {
                    $n = $i*2 - 20;
                    $match[$n][] = ($i-1);
                    $match[$n][] = ($k-1);
                    continue;
                }
            }
            if ($i + $k <= 20) {
                $n = $i + $k - 1;
                $match[$n][] = ($i-1);
                $match[$n][] = ($k-1);
            }
            if ($i + $k > 20) {
                $n = $k + $i - 20;
                $match[$n][] = ($i-1);
                $match[$n][] = ($k-1);
            }
        }
    }

    return $match;
}


function circle1()
{
    $n = 1;
    $match1 = setGrid1();
    $match2 = setGrid2();

    while ($n < 20){
        if ($n % 2 == 0) {
            $circle1["Тур $n"][] = $match1[$n];
            $n++;
        } elseif ($n % 2 != 0) {
            $circle1["Тур $n"][] = $match2[$n];
            $n++;
        }
    }

    return $circle1;
}


function circle2()
{
    $n = 1;
    $match1 = setGrid1();
    $match2 = setGrid2();
    while ($n < 20){
        if ($n % 2 != 0) {
            $circle2["Тур $n"][] = $match1[$n];
            $n++;
        } elseif ($n % 2 == 0) {
            $circle2["Тур $n"][] = $match2[$n];
            $n++;
        }
    }

    return $circle2;
}
