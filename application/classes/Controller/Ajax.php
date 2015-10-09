<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
    protected function  write_file_from_byte($base64_string, $name_file, $name_dir, $data_format)
    {
        $part = $_SERVER['DOCUMENT_ROOT'] . "/public/file/$name_dir";
        if (!is_dir($part)) {
            mkdir($part,0777, true);
        }
        $dataImg = base64_decode(preg_replace('#^data:' . $data_format . ';base64,#i', '', $base64_string));
        $result = file_put_contents($part . '/' . $name_file, $dataImg);
        if ($result) {
            return "http://" . $_SERVER['SERVER_NAME'] . "/public/file/$name_dir/$name_file";
        } else {
            return false;
        }
    }

    protected function revalue_array($v,$dirName)
    {

        foreach ($v as $k => &$val) {
            if (strpos($k, '_file')) {
                $newPhoto = $this->write_file_from_byte($val['base64'], $val['name'], $dirName, $val['type']);
                if ($newPhoto) {
                    $val = $newPhoto;
                } else {
                    unset($val);
                }
            }
        }
        return $v;
    }
    protected function adaptive_array(){

    }

    public function action_request()
    {
        if (is_array($_POST)) {
            foreach ($_POST as $k => $v) {
                switch ($k) {
                    case 'login-request':
                        $info = Model::factory('Users')->check_user($v);
                        if (!empty($info)) {
                            Session::instance()->set('user', $info[0]);
                            echo true;
                        }
                        break;
                    case 'add-edit-stuff':
                        $dirName = $v['data']['first_name'] . '_' . $v['data']['last_name'];
                        $v['data'] = $this->revalue_array($v['data'],$dirName);
                        if (!empty($v['id'])) {
                            Model::factory('Stuff')->edit_stuff($v['id'], $v['data']);
                            print_r($v);
                        } else {
                            print_r($v['data']);
                            Model::factory('Stuff')->add_stuff($v['data']);
                        }
                        print_r($v);
                        break;
                    case 'add-edit-truck':
                        $dirName = $v['data']['vin'];
                        $v['data'] = $this->revalue_array($v['data'],$dirName);
                        if (!empty($v['id'])) {
                            Model::factory('Truck')->edit_truck($v['id'], $v['data']);
                            print_r($v);
                        } else {
                            print_r($v['data']);
                            Model::factory('Truck')->add_truck($v['data']);
                        }
//                        print_r($v['data']);
                        break;
                    case 'add-edit-trailer':
                        $dirName = $v['data']['vin'];
                        $v['data'] = $this->revalue_array($v['data'],$dirName);
                        if (!empty($v['id'])) {
                            Model::factory('Trailer')->edit_trailer($v['id'], $v['data']);
                            print_r($v);
                        } else {
                            print_r($v['data']);
                            Model::factory('Trailer')->add_trailer($v['data']);
                        }
//                        print_r($v);
                        break;
                    case "get_stuff_info":
                        echo json_encode(Model::factory('Stuff')->get_stuff_info($v));
                        break;
                    case "get_truck_info":
                        echo json_encode(Model::factory('Truck')->get_truck_info($v));
                        break;
                    case "get_trailer_info":
                        echo json_encode(Model::factory('Trailer')->get_trailer_info($v));
                        break;
                }
            };
        }
    }


}
