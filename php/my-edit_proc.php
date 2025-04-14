<?php
include("db_conn.php");
session_start();
$id;

if (!isset($_SESSION['id'])) {
    ?>
    <script>
        alert("잘못된 접근입니다.");
        location.href = "../main/index.php";
    </script>
    <?php
}
else {
    $id = $_SESSION['id'];
}

$name = $_POST['user_name'];
$grade = $_POST['user_grade'];
$class = $_POST['user_class'];

$sql = "SELECT * FROM mirimi_users WHERE user_id = '$id'";
$result1 = mysqli_query($db_conn, $sql);
$row1 = mysqli_fetch_array($result1);

if (in_array($id, $row1)) {
    $sql = "UPDATE mirimi_users SET user_name = '$name', user_grade = '$grade', user_class = '$class' WHERE user_id = '$id'";
} else {
    ?>
    <script>
        alert("잘못된 접근입니다.");
        location.href = "../main/index.php";
    </script>
    <?php
}

$result2 = mysqli_query($db_conn, $sql);

$_SESSION['name'] = $name;
$_SESSION['grade'] = $grade;
$_SESSION['class'] = $class;

mysqli_close($db_conn);

echo "<script>
    alert(\"정보가 수정되었습니다.\")
    location.href = \"../main/my-page.php\";
</script>";
?>