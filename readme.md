<h>Laravel Mathematical Coding Challenge</h><br> 
Coding Instructions:<br>
The following German words represent a mathematical formula:<br>
HIER + GIBT + ES = NEUES<br>
<br>
Conditions:<br>
– every letter symbolizes one digit [0..9]<br>
– the 10 different letters have to be 10 different digits<br>
– every word is an unsigned integer number (no leading zeros)<br>
<br>
Challenge:<br>
– create a PHP class containing a private method that solves the problem mentioned<br>
– “worst case” solution: brute force (10^10 iterations = 10,000,000,000 iterations)<br>
– “best case” solution: use mathematical rules to reduce the amount of iterations of the problem (“if then continue”)<br>
– use a counter variable to measure the amount of loops needed to find possible results<br>
<br>
$iterations = 0;<br>
[loops to assign digits to the letters]<br>
    e.g.: H=9;I=8;E=7;R=6;G=5;B=4;T=3;S=2;N=1;U=0<br>
    9876 + 5843 + 72 !== 17072  // not a correct solution<br>
    $iterations++<br>
[/loops]<br>
<br>
– the method should output all results – if there are any – including the amount if iterations needed<br>
– use comments to describe the mathematical rules used to reduce the complexity of the task<br>
– the first place goes to the correct solution having the least iterations<br>
