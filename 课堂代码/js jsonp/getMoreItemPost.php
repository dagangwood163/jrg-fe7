<?php
    $start = $_POST['start']; //1
    $len = $_POST['len'];  //3 
    $items = array();
    

    for($i = 0; $i < $len; $i++){
        array_push($items, '内容' + ($start+$i));
    }
    $ret = array('status'=>'success', 'items'=>$items);

    //{status: 'success', items: ['内容1','内容2','内容3']}
    sleep(1);
    echo json_encode($ret);
    