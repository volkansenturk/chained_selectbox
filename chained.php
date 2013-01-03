<?php
	$id      = $_POST['id'][0];
	$result  = array(1, 2, 3, 4, 5);
	$options = ''; 


    foreach ($result as $value)
    {
      $options .= '<option value="'. $id . '_' . $value . '">' . $id . '_' . $value . '</option>';
    }

    echo $options;