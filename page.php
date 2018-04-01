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
	<?php
		$aimHabit = $_POST['aimHabit'];
		$date = date('Y-m-d', strtotime($_POST['dateFrom']));
		$wordsToMe = $_POST['wordsToMe'];
	?>
    <div data-role="page" id="form">
        <div data-role="header" data-add-back-btn="true" data-back-btn-text="이전">
            <h1>66일 습관 달력</h1>
        </div>
        <div data-role="content">
			<?php echo $aimHabit;?><br>
			<?php echo $date;?><br>
			<?php echo $wordsToMe;?><br>
			
			<button>삭제하기</button>
		</div>
		<div data-role="footer">
		</div>
    </div>
  </body>
</html>