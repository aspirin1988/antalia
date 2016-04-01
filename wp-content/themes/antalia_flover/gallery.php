<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 26.02.16
 * Time: 13:23
 */
function get_gall($name)
{
    $gl = array();
    $res = array();
    $path = wp_upload_dir();
    $path = $path['baseurl'] . '/img-collections/';
    $mu = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $mu->set_charset("utf8");
    if ($mu) {

        if ($gl = $mu->query('Select i.*,(SELECT g.coll_name FROM wp_abcfic_collections g where g.coll_id=i.coll_id) as gal from wp_abcfic_images i')) {

            while ($row = $gl->fetch_array(MYSQLI_ASSOC)) {
                $row['path'] = $path . $row['gal'] . '/' . $row['filename'];
                $res[$row['gal']][] = $row;
            }
        }

    }
    return $res[$name];
}

function get_gall_matrix($name,$col=4,$page=0,$offset=0)
{
    $gl = array();
    $res = array();
    $path = wp_upload_dir();
    $path = $path['baseurl'] . '/img-collections/';
    $mu = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $mu->set_charset("utf8");
    if ($mu) {

        if ($gl = $mu->query('Select i.*,(SELECT g.coll_name FROM wp_abcfic_collections g where g.coll_id=i.coll_id) as gal from wp_abcfic_images i')) {

            while ($row = $gl->fetch_array(MYSQLI_ASSOC)) {
                $row['path'] = $path . $row['gal'] . '/' . $row['filename'];
                $res[$row['gal']][] = $row;
            }
        }

    }
    $matrix=$res[$name];
    $count=0;
    $row=0;
    $res=array();
    for($i=$offset;$i<$offset+$page;$i++)
    {
        if (isset($matrix[$i])) {
            $res[] = $matrix[$i];
        }
    }
    $matrix=$res;
    $res=array();

    foreach($matrix as $value){
            if ($count == $col) {
                $count = 0;
                $row++;
            }
            $res[$row][] = $value;
            $count++;
    }
    return $res;
}

function get_gall_count($name)
{
    $gl = array();
    $res = array();
    $path = wp_upload_dir();
    $path=$path['baseurl'] . '/img-collections/';
    $mu = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $mu->set_charset("utf8");
    if ($mu) {

        if ($gl = $mu->query('Select i.*,(SELECT g.coll_name FROM wp_abcfic_collections g where g.coll_id=i.coll_id) as gal from wp_abcfic_images i')) {

            while ($row = $gl->fetch_array(MYSQLI_ASSOC)) {
                $row['path'] = $path . $row['gal'] . '/' . $row['filename'];
                $res[$row['gal']][] = $row;
            }
        }

    }
    return count($res[$name]);
}

function get_logo($name)
{
    $gl = array();
    $res = array();
    $path = wp_upload_dir();
    $path=$path['baseurl'] . '/img-collections/';
    $mu = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $mu->set_charset("utf8");
    if ($mu) {

        if ($gl = $mu->query('Select i.*,(SELECT g.coll_name FROM wp_abcfic_collections g where g.coll_id=i.coll_id) as gal from wp_abcfic_images i where alt=\''.$name.'\'')) {

            while ($row = $gl->fetch_array(MYSQLI_ASSOC)) {
                $row['path'] = $path . $row['gal'] . '/' . $row['filename'];
                $res = $row;
            }
        }

    }
    return $res;
}
