<?php
session_start();
include('db.php');


if( isset($_POST['user_id']) && isset($_POST['pass1'])  )
{
  // 보안을 더욱 강화
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);

    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);

  // 에러를 체크

    if(empty($user_id))
    {
       header("location: login_view.php?error= 아이디를 입력해주세요.");
        exit();
    }
    else if (empty($pass1))
    {
        header("location: login_view.php?error= 비밀번호를 입력해주세요.");
        exit();
    }
     else
    {
       $sql = "select * from member where mb_id = '$user_id'";
       $result = mysqli_query($db, $sql);

       if(mysqli_num_rows($result) === 1 )
        {
                //1. 해당열을 가져왔다.
                //2. 가져올때 배열의 형태로 가져온다
                //3. print_r 배열을 출력해주는 함수
               $row = mysqli_fetch_assoc($result);
               $hash = $row['password'];


               if( password_verify($pass1, $hash))
               {
                  $_SESSION['mb_id']=$row['mb_id'];
                  $_SESSION['mb_nick']=$row['mb_nick'];
				          $_SESSION['password']=$_POST['pass1'];
                  $_SESSION['mb_no']=$row['no'];

                if($_SESSION['mb_id'] == 'admin'){
                  echo "<script>alert('관리자님 안녕하세요.') </script>";


                  echo "<meta http-equiv='refresh'content='0; url=admin.php'>";
                }
                else{
                  echo "<script>alert('$user_id 님 안녕하세요.') </script>";
                  echo "<meta http-equiv='refresh'content='0; url=home.php'>";
                }
               }
               else
               {
               header("location: login_view.php?error=비밀번호를 다시 입력해주세요.");
               exit();
                }

        }
        else
        {
            //에러

            header("location: login_view.php?error=존재하지 않는 아이디입니다.");
            exit();
        }
    }

}
else
{
  //에러메세지
    header("location: login_view.php?error=알수없는 오류가 발생하였습니다.");
    exit();
}



?>
