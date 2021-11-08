<?php
function arrayTable()
{
    $numArgs = func_num_args();
    $arg_list = func_get_args();

    echo
    '<table class="tftable" border="1">
        <tr>
            <th style= "width:100px;">Elemento</th>
            <th style= "width:100px;">Valor</th>
        </tr>';

    for ($i = 0; $i < $numArgs; $i++) {
        echo '<tr style= "text-align:center;"><td>' . $i . '</td><td>' . $arg_list[$i] . '</td></tr>';
    }
    echo '</table>';
}

function arrayList()
{
    $numArgs = func_num_args();
    $arg_list = func_get_args();

    echo'<ul>';

    for ($i = 0; $i < $numArgs; $i++) {
        echo '<li>' . $arg_list[$i] . '</li>';
        
    }
    echo '</ul>';
}
