
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head><!-- Created by Artisteer v4.3.0.60745 -->
    <meta charset="utf-8">
    <title>صفحة جديدة</title>
</head>
<body>

<center>
<div class="result">
<form class="search" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="search book"></label>
<input type ="text" name="bookid" autocomplete="off" placeholder="write your book" required='required'/>
<button class="btn btn-primary" type ="submit"  name="submit">submit</button>
</div>
</form>

<?php

if(isset($_POST['bookid'])){
$mysqli = new mysqli("localhost", "root", "", "library");

if ($mysqli->connect_errno) {
    printf("Connect failed:", $mysqli->connect_error);
    exit();
}

$mysqli->query("SET NAMES utf8");
$mysqli->query("SET CHARACTER SET utf8");



if ($result = $mysqli->query("SELECT * FROM  books  where
   books.bookid = \"$_POST[bookid]\" or `title` like \"%".$_POST['bookid']."%\"")) {
$books=$result->fetch_all(MYSQLI_ASSOC);
//var_dump($books)


echo '

<table border="5">
<tr>
<td>المؤلف</td>
<td> العنوان</td>
<td>التصنيف </td>
<td>عدد النسخ</td>
<td>القسم</td>
</tr>';
foreach ($books as $key => $book) {

echo '
<tr>
<td>'.$book['auther'].'</td>
<td>'.$book['Title'].'</td>
<td>'.$book['classified'].'</td>
<td>'.$book['copies'].'</td>
<td>'.$book['dept'].'</td>


</tr>
';

}
echo '</table>';
}}
?>
</center>
</body>
</html>
