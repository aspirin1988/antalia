<?php //get_header();

header('Content-Type: application/json');
//echo json_encode($_POST);
//Добавление новой группы
if (isset($_POST['add_group']))
{
    $subjects='';
    if ($_POST['subjects_type']==1)
    {
        $subjects=$_POST['subjects_1'];
    }
    else
    {
        $subjects=$_POST['subjects_2'];
    }
$ins=[
'add_group'=>$_POST['add_group'],
'address_parish'=>$_POST['address_parish'],
'age_from'=>$_POST['age_from'],
'age_to'=>$_POST['age_to'],
'city'=>$_POST['city'],
'name_boss'=>$_POST['name_boss'],
'name_confessor'=>$_POST['name_confessor'],
'name'=>$_POST['name_gr'],
'name_parish'=>$_POST['name_parish'],
'number_of_persons'=>$_POST['number_of_persons'],
'region'=>$_POST['region'],
'san_confessor'=>$_POST['san_confessor'],
'subjects'=>$subjects,
'subjects_type'=>$_POST['subjects_type'],
'total_number_of_persons'=>$_POST['total_number_of_persons']];

    global $current_user;
    get_currentuserinfo();
    //print_r($ins);
    $res=add_group($current_user,$ins['name'],$current_user->ID,$ins['name_boss'],$ins['name_confessor'],$ins['san_confessor'],$ins['region'],$ins['city'],$ins['address_parish'],$ins['name_parish'],$ins['number_of_persons'],$ins['age_from'],$ins['age_to'],$ins['total_number_of_persons'],$ins['subjects'],$ins['subjects_type']);
    echo json_encode($res);
}

if (isset($_POST['subjects_type'])&& !isset($_POST['add_group']))
{
    echo json_encode(show_all_directory((int)$_POST['subjects_type']));
}

if (isset($_POST['reg_in_group']))
{
    global $current_user;
    get_currentuserinfo();
    $res=add_group($current_user,$_POST['id_gr']);
    echo json_encode($res);
}