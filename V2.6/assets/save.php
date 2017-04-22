<?php
/***********************************
$_FILES[]数组保存着上传信息。其每一个元素对应于客户端的一个上传文件，如$_FILES['upload'] => <input name="userfile" type="file" />

$_FILES['upload']['name']
    上传文件在客户端的原名称。

$_FILES['upload']['type']
    文件的 MIME 类型，由浏览器提供该信息，例如“image/gif”。

$_FILES['upload']['size']
    已上传文件的大小，单位为字节。

$_FILES['upload']['tmp_name']
    文件被上传后在服务端储存的临时文件名。

$_FILES['upload']['error']
    和该文件上传相关的错误代码。
  0：没有错误发生，文件上传成功
  1：上传的文件超过了 php.ini 中upload_max_filesize 选项限制的值。
  2：上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。
  3：文件只有部分被上传。
  4： 没有文件被上传。

***********************************/
require_once '../inc/session.php';

print_r($_FILES);
// 获取文件名,若为中文文件，由于客户端与服务端的编码不一致的问题，会有乱码
$file = strtolower($_FILES['upload']['name']);

// 重新对上传文件命名，规避乱码问题，避免文件名唯一性冲突
$path_parts = pathinfo( $_FILES['upload']['name'] );
$ext = $path_parts['extension'];
$file = 'asset-' . mt_rand() . '.' . $ext;

//获取已上传的文件
$tmp_file_path = $_FILES['upload']['tmp_name'];


//设置文件上传被保存到的目录与名字，注意包含'/'
//注意处理上传文件名与服务器现有文件名存在冲突时
$dest_dir = "../uploads/";
$dest_file_path = $dest_dir . $file;
//set_notice($dest_dir);
set_notice($dest_file_path);



//判断文件是否已成功通过http post方式上传到临时目录
//判断文件是否能正确的从临时目录移动到指定目录,linux下失败的原因一般为对指定目录无读写权限
if( !is_uploaded_file($tmp_file_path) || !move_uploaded_file($tmp_file_path,$dest_file_path) ){
  //set_notice("文件上传失败！请联系站点管理员！");
  redirect_to("./");
  exit();
}


$sql = "insert into assets(title,file) values(:title, :file);" ;  
$query = $db->prepare($sql);
$query->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindParam(':file',$file,PDO::PARAM_STR);


$created_at = time();  //CURRENT_TIMESTAMP
if (!$query->execute()) { 
  print_r($query->errorInfo());
}else{
  set_notice('upload success! ');  
  redirect_to("./");
};


?>

