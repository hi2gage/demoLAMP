<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once 'header.php';
// echo  gethostname();
$keySelected = 0;


if(isset($_POST['submit'])){
    if(!empty($_POST['key-select'])) {
      $keySelected = $_POST['key-select'];
    }
}


function major(int $root, int $note){
    if($note == 0 + $root) {return true;}
    elseif($note == 2 + $root) {return true;}
    elseif($note  == 4 + $root) {return true;}
    elseif($note  == 5 + $root) {return true;}
    elseif($note == 7 + $root) {return true;}
    elseif($note == 9 + $root) {return true;}
    elseif($note == 11 + $root) {return true;}
    elseif($note == 13 + $root) {return true;}

    elseif($note == 15 + $root) {return true;}
    elseif($note  == 17 + $root) {return true;}
    elseif($note  == 18 + $root) {return true;}
    elseif($note == 20 + $root) {return true;}
    elseif($note == 22 + $root) {return true;}
    elseif($note == 24 + $root) {return true;}
    elseif($note == 26 + $root) {return true;}

    else {return false;}
}


$keyArray = array('key white c',
                  'key black c_sharp',
                  'key white d',
                  'key black d_sharp',
                  'key white e',
                  'key white f',
                  'key black f_sharp',
                  'key white g',
                  'key black g_sharp',
                  'key white a',
                  'key black a_sharp',
                  'key white b',
                  'key black b_sharp',

                  'key white c',
                  'key black c_sharp',
                  'key white d',
                  'key black d_sharp',
                  'key white e',
                  'key white f',
                  'key black f_sharp',
                  'key white g',
                  'key black g_sharp',
                  'key white a',
                  'key black a_sharp',
                  'key white b',
                  'key black b_sharp'
                  );

$keyNameArray = array('C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B');



for($x = 0; $x <= 24; $x++) {
    if(major($keySelected, $x)) {
        $keyArray[$x] .= ' hit';
    }


}


echo <<<_keyBoard


<div class="key-container">
    <div class="float-child">
        <div id="keyboard">

          <div class="$keyArray[13]"><div class="key-letter">C</div></div>
          <div class="$keyArray[14]"></div>
          <div class="$keyArray[15]"><div class="key-letter">D</div></div>
          <div class="$keyArray[16]"></div>
          <div class="$keyArray[17]"><div class="key-letter">E</div></div>
          <div class="$keyArray[18]"><div class="key-letter">F</div></div>
          <div class="$keyArray[19]"></div>
          <div class="$keyArray[20]"><div class="key-letter">G</div></div>
          <div class="$keyArray[21]"></div>
          <div class="$keyArray[22]"><div class="key-letter">A</div></div>
          <div class="$keyArray[23]"></div>
          <div class="$keyArray[24]"><div class="key-letter">B</div></div>
          <div class="$keyArray[13]"><div class="key-letter">C</div></div>
          <div class="$keyArray[14]"></div>
          <div class="$keyArray[15]"><div class="key-letter">D</div></div>
          <div class="$keyArray[16]"></div>
          <div class="$keyArray[17]"><div class="key-letter">E</div></div>
          <div class="$keyArray[18]"><div class="key-letter">F</div></div>
          <div class="$keyArray[19]"></div>
          <div class="$keyArray[20]"><div class="key-letter">G</div></div>
          <div class="$keyArray[21]"></div>
          <div class="$keyArray[22]"><div class="key-letter">A</div></div>
          <div class="$keyArray[23]"></div>
          <div class="$keyArray[24]"><div class="key-letter">B</div></div>

        </div>
    </div>


    <div class="float-child form-thing">
            <div id="key-select">
                <form action="" method="post">
                    <select class="form-select" aria-label="Default select example" name="key-select">
                        <option selected>$keyNameArray[$keySelected]</option>
                        <option value="0">C</option>
                        <option value="1">C#</option>
                        <option value="2">D</option>
                        <option value="3">E</option>
                        <option value="4">F</option>
                        <option value="5">F#</option>
                        <option value="6">G</option>
                        <option value="7">G#</option>
                        <option value="8">A</option>
                        <option value="9">A#</option>
                        <option value="10">B</option>
                        <option value="11">B#</option>
                    </select>

                    <input type="submit" name="submit" value="Select Key">
                </form>
            </div>
        </div>

<div class="spacer"></div>

</div>
_keyBoard;

echo <<<_END
    </div><br>
_END;



require_once 'footer.php';
?>