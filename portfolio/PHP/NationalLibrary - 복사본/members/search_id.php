<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복확인</title>
    <style type="text/css">
    body, input, button{font-size:20px}
    button{cursor:pointer}
    input[type=text]{border:1px solid #999;padding:3px}
    .label_txt{display:inline-block;width:120px}
    .btn{width:120px;height:30px;border:1px solid #999;font-size:14px;box-sizing:border-box;padding:0;background:#eee}
    </style>
</head>
<body>
    <form name="search_id_form" action="search_id_result.php" method="post">
        <fieldset>
            <legend>아이디 입력</legend>
            <p>
                <label for="u_id" class="label_txt">아이디 입력</label>
                <input type="text" name="u_id" id="u_id">
                <button type="submit" class="btn">검색</button>
            </p>
        </fieldset>
    </form>
</body>
</html>