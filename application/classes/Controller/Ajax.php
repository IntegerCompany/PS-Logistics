<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
    public function  write_file_from_byte($base64_string, $name_file, $name_dir, $data_format)
    {
        $part = $_SERVER['DOCUMENT_ROOT'] . "/public/file/$name_dir";
        if (!is_dir($part)) {
            mkdir($part, 0777, true);
        }
        $dataImg = base64_decode(preg_replace('#^data:' . $data_format . ';base64,#i', '', $base64_string));
        $result = file_put_contents($part . '/' . $name_file, $dataImg);
        if ($result) {
            return "http://" . $_SERVER['SERVER_NAME'] . "/public/file/$name_dir/$name_file";
        } else {
            return false;
        }
    }

    public function revalue_array($v)
    {
        $dirName = $v['first_name'] . '_' . $v['last_name'];
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
                        $v['data'] = $this->revalue_array($v['data']);
//                        if(!isset($v['data']['avatar_file'])){
//                            $v['data']['avatar_file'] = "http://".$_SERVER['SERVER_NAME']."/public/img/no-avatar.jpg";
//                        }
                        if (!empty($v['id'])) {
                            Model::factory('Stuff')->edit_stuff($v['id'], $v['data']);
                            print_r($v);
                        } else {
                            foreach ($v['data'] as $key => $value) {
                                $array_key[] = $key;
                                $values[] = $v['data'][$key];
                            }
                            print_r([$array_key, $values]);
                            Model::factory('Stuff')->add_stuff($array_key, $values);
                        }
                        print_r($v);
                        break;
                    case "get_stuff_info":
                        echo json_encode(Model::factory('Stuff')->get_stuff_info($v));
                        break;
                }
            };
        }
    }


}
