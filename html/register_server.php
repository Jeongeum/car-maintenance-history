<?php
include('db.php');


if( isset($_POST['user_id']) && isset($_POST['user_nick'])  && isset($_POST['pass1'])&& isset($_POST['pass2'])   )
{
  // 보안을 더욱 강화
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_nick = mysqli_real_escape_string($db, $_POST['user_nick']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

  // 에러를 체크

    if(empty($user_id))
    {
       header("location: register_view.php?error= 아이디를 입력해주세요.");
        exit();
    }else if(empty($user_nick))
    {
        header("location: register_view.php?error= 닉네임을 입력해주세요.");
        exit();
    }    else if (empty($pass1))
    {
        header("location: register_view.php?error= 비밀번호를 입력해주세요.");
        exit();
    }    else if(empty($pass2))
    {
        header("location: register_view.php?error= 비밀번호를 입력해주세요.");
        exit();
    }else if($pass1 !== $pass2)
    {
        header("location: register_view.php?error= 비밀번호가 일치하지 않습니다.");
        exit();
    }
    else
    {
        //암호화
        $pass1 = password_hash($pass1, PASSWORD_DEFAULT); // 단방향암호

        //중복체크
        $sql_same = "SELECT * FROM member where mb_id ='$user_id' or mb_nick ='$user_nick' ";
        $order = mysqli_query($db, $sql_same);

        if(mysqli_num_rows($order) > 0 )
        {
            header("location: register_view.php?error=사용할 수 없는 아이디 또는 닉네임 입니다.");
            exit();
        }
        else
        {
		   	    $sql_save = "insert into member(mb_id, mb_nick, password) values('$user_id','$user_nick','$pass1')";
            $result = mysqli_query($db, $sql_save);

            if($result)
            {
                header("location: register_view.php?success=성공적으로 가입되었습니다.");
                exit();
            }
            else
            {
                header("locations: register_view.php?error=회원가입에 실패하였습니다.");
                exit();
            }
        }

        // 저장시킨다고합니다
    }

}
else
{
  //에러메세지
    header("location: register_view.php?error=알수없는 오류가 발생하였습니다.");
}



?>
