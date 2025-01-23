<?php

echo "<div id='alerttw' class='alert {$type}'>";
echo    "<div class='alert-container'>" .$this->render('svg/'.$type.'.php');
echo    "{$message} </div>
            <button type='button' class='closeButton' data-bs-dismiss='alert' aria-label='Close'></button>  
        </div>";