<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{

    public function action_request()
    {
        if (is_array($_POST)) {
            foreach ($_POST as $k => $v) {
                switch ($k) {
                    case 'login-request':
                        $info = Model::factory('Users')->check_user($v);
                        if (!empty($info)) {
                            Session::instance()->set('user', $info[0]);
                            //Session::instance()->delete('user');
                            echo true;
                        }
                        break;
                    case 'add-stuff':
                        function write_file_from_byte($base64_string,$name_file,$format_file,$name_dir){
                            $part = $_SERVER['DOCUMENT_ROOT']."/public/file/$name_dir";
                            if (!is_dir($part)) {
                                mkdir($part,0700,true);
                            }

                            $dataImg = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64_string));
                            $result = file_put_contents($part.'/'.$name_file.'.'.$format_file, $dataImg);
                            if($result){
                                return "http://".$_SERVER['SERVER_NAME']."/public/file/$name_dir/$name_file.$format_file";
                            } else {
                                return false;
                            }
                        }
                        $dirName = $v['first_name'].'_'.$v['last_name'];
                        foreach($v as $k => &$val){
                            if(strpos($k,'_file')){
                                $arrFile = explode('.',$val['name']);
                                $newPhoto = write_file_from_byte($val['base64'],$arrFile[0],$arrFile[1],$dirName);
                                if($newPhoto){
                                    $val = $newPhoto;
                                } else {
                                    $val = 'http://'.$_SERVER['SERVER_NAME'].'/public/img/no-avatar.jpg';
                                }
                            }
                        }
                        foreach ($v as $key => $value) {
                            $array_key[] = $key;
                            $values[] = $v[$key];
                        }
                        Model::factory('Stuff')->add_stuff($array_key,$values);
                        print_r([$array_key,$values]);
                        break;
                }
            };
        }
    }


}
