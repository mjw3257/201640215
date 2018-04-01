<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <div data-role="page" id="form">
        <div data-role="header" data-add-back-btn="true" data-back-btn-text="이전">
            <h1>66일 습관 달력</h1>
        </div>
        <div data-role="content">
			<form action="page.php" method="post">
				<legend>목표습관:</legend>
					<input type="text" name="aimHabit"><br>
				<legend>시작일:</legend>
					<input type="date" name="date" value="<?php echo date('Y-m-d');?>" /><br>
				<legend>종료일:</legend>
				<legend>매일 나에게 전하고 싶은 말:</legend>
					<input type="text" name="wordsToMe"><br>
				<input type="submit" value="추가하기">
			</form>
		</div>
		<div data-role="footer">
		</div>
    </div>
  </body>
</html>