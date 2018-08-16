@echo off

set my="C:\xampp\mysql\bin\mysql.exe"
set curr=%~dp0

set db=siswa
set user=admin
set password=admin
set host=localhost

set init=%curr%dml\initdb-core.sql
set core=%curr%dml\student-mysql.sql
set data=%curr%dml\init-data.sql

%my% -u %user% -p%password% -h %host% < %init%
%my% -u %user% -p%password% -h %host% %db% < %core%
%my% -u %user% -p%password% -h %host% %db% < %data%

echo done....

pause