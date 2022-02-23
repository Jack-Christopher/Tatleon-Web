@REM Bootstrap
cd ../../
if exist "public/bootstrap" rmdir /S/Q "public/bootstrap"
mkdir "public/bootstrap"
Xcopy "vendor/twbs/bootstrap/dist" "public/bootstrap" /E/H/C/I