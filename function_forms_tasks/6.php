<form method="post" action=""  enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <input type="submit" name="submit" title="download">
</form>

<?php
//$file=$_FILES;
//function fileUpload(){
//    $target_dir = "uploads/";
//    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//    $uploadOk = 1;
//    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//    if(isset($_POST["submit"])) {
//        if(move_uploaded_file($_FILES['file']['tmp_name'],"/gallery")){
//            echo "good";
//        }else{
//            echo "bad";
//        }
//    }
//}
//
//fileUpload();
// Каталог, в который мы будем принимать файл:
if($_POST['submit']){
    $uploaddir = './files/';
    $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

    // Копируем файл из каталога для временного хранения файлов:
    //var_dump($_FILES['file']['tmp_name']);
    $a=file_get_contents($_FILES['file']['tmp_name']);
    file_put_contents("./gallery/".$_FILES['file']['name'],$a,FILE_APPEND);
    $countFile=scandir("./gallery");
    //var_dump($countFile);
    allImg($countFile);

}

//if (copy($_FILES['file']['tmp_name'], $uploadfile))
//{
//    echo "<h3>Файл успешно загружен на сервер</h3>";
//}
//else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
//
//// Выводим информацию о загруженном файле:
//echo "<h3>Информация о загруженном на сервер файле: </h3>";
//echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['file']['name']."</b></p>";
//echo "<p><b>Mime-тип загруженного файла: ".$_FILES['file']['type']."</b></p>";
//echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['file']['size']."</b></p>";
//echo "<p><b>Временное имя файла: ".$_FILES['file']['tmp_name']."</b></p>";
function allImg($dir){
    foreach ($dir as $value){

        if(strpos($value,"jpg") or strpos($value,"jpeg")) {
            echo "<img src='./gallery/" . $value . "' width='150px' height='150px'>";
        }
        }
}