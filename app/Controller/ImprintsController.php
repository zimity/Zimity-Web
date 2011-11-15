<?php
    define('__ROOT__', dirname(dirname(__FILE__))); 

    // Include Amazon AWS Library
    require_once(__ROOT__ . '/Lib/sdk-1.4.7/sdk.class.php');
    include(__ROOT__ . '/webroot/SimpleImage.php');

    // Perhaps we should remove characters that look too similar
    // ie. zero and letter 0, letter l and one, etc
    function genRandomString() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';    
        while (strlen($string) < 6) {
            $string .= $characters[mt_rand(0, strlen($characters))];
        }
        return $string;
    }

    class ImprintsController extends AppController {
        var $name = 'Imprints';
        var $components = array('Session', 'RequestHandler');

        function index() {
            $this->set('imprints', $this->Imprint->find('all'));
        }

        function view($id = null) {
            $row = $this->Imprint->findBySlug($id);
            if ($row) {
                $this->set('imprint', $this->Imprint->findBySlug($id));
            } else {
                $this->Session->setFlash('FAIL WHALE');
                $this->redirect(array('controller' => 'imprints', 'action' => 'index', 'index'));
            }
        }

        function add() {
            if (!empty($this->data)) {
                // Make sure that the slug is unique!
                $slug = genRandomString();
                $post = $this->Imprint->findBySlug($slug);
                while ($post) {
                    $slug = genRandomString();
                    $post = $this->Imprint->findBySlug($slug);
                }

                $this->data['Imprint']['slug'] = $slug;

                if (!isset($this->data['Imprint']['extra'])) {
                    if ($this->Imprint->save($this->data)) {
                        $this->Session->setFlash('Your post has been saved.');
                        $this->redirect(array('action' => 'index'));
                    }
                } else {
                    $s3 = new AmazonS3();

                    $bucket = 's3.zimity.me';
					$smallname = $slug . '_s.jpg';
					$mediumname = $slug . '_m.jpg';
					$fullname = $slug . '.jpg';
                    $temp = $this->data['Imprint']['extra'];
                    $fullsize = $temp["tmp_name"];

					$small = new SimpleImage();
					$small->load($temp["tmp_name"]);
					$small->resize(100, 100);
					$small->save($temp["tmp_name"] . '_s');
					
					$medium = new SimpleImage();
					$medium->load($temp["tmp_name"]);
					$medium->resize(300, 300);
					$medium->save($temp["tmp_name"] . '_m');
					

     $s3->batch()->create_object($bucket, $smallname, array('fileUpload' => $temp["tmp_name"] . '_s', 'acl' => AmazonS3::ACL_PUBLIC, 'contentType' => 'image/jpg'));
					$s3->batch()->create_object($bucket, $mediumname, array('fileUpload' => $temp["tmp_name"] . '_m', 'acl' => AmazonS3::ACL_PUBLIC, 'contentType' => 'image/jpeg'));
					$s3->batch()->create_object($bucket, $fullname, array('fileUpload' => $fullsize, 'acl' => AmazonS3::ACL_PUBLIC, 'contentType' => 'image/jpeg'));
					
					$file_upload_response = $s3->batch()->send();

                    if ($this->Imprint->save($this->data)) {
                        $this->Session->setFlash('Your post has been saved.' . $response . '---' . print_r($response));
                        $this->redirect(array('action' => 'index'));
                    }
                }
            } else {
                $this->Session->setFlash('Nothing happened.');
            }
        }
    }
?>