<?php

function satu()
{
    for($b=1; $b<=10; $b++)
    {
        if($b<4 || $b>7)
        {
            echo $b;
        }else
        {
            Null;
        }
    }
}

function dua()
{
    for($c=5; $c>=1; $c--)
    {
        if($c<3)
        {
            echo "* ";
        }else
        {
            echo $c." ";
        }
    }
} 

function tiga()
{ 
for($a=1; $a<=4; $a++)
{
    if($a%2!=0)
    {
        echo $a."a ";
    }else
    {
        echo $a."b ";
    }
}
}

function empat()
{
    for($x=1; $x<=7; $x++)
    {
        if($x>3 && $x<7)
        {
            echo "A";
            continue;
        }
            echo $x;
    }
}

function lima()
{
    for($y=4; $y>=0; $y--)
    {
        if($y==2 || $y==0)
        {
            echo "A";
        }else 
        {
            echo $y;
        }
    }
}

function enam()
{
    for($z=0; $z<=4; $z++)
    {
        if($z<2)
        {
            echo "A";
        }else
        {
            echo $z;
        }
    }
}

satu();

echo PHP_EOL;

dua();

echo PHP_EOL;

tiga();

echo PHP_EOL;

empat();

echo PHP_EOL;

lima();

echo PHP_EOL;

enam();