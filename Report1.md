#Report1-디렉토리 리스트 숨기기

1).htaccess 내용

디렉토리내의 모든 자원에 대한 접근을 거부하지만 “index.php”라는 파일에 한해서만 접근을 허용한다는 설정
--------------------
Order Deny,Allow
Deny from all

<Files /index.php>
Order Allow,Deny
Allow from all
</Files>
--------------------

2)어디에 복사해 두면되는지

영향을 미치고 싶은 특정 디렉토리 안에 복사.
그러면 해당 디렉토리와 하위 디렉토리 모두 .htaccess파일의 영향을 받음