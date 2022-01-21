@REM cd ../ 
@REM cd public

@REM for %%f in (*.*) do @ ncftpput -R -v -u "epiz_29440885" -p "YD0FdeMPKhs" ftpupload.net /htdocs %%f
@REM for /d %%f in (*.*) do @ ncftpput -R -v -u "epiz_29440885" -p "YD0FdeMPKhs" ftpupload.net /htdocs %%f

cd ../

for /F "tokens=*" %%f in (folders.txt) do @ ncftpput -R -v -u "epiz_29440885" -p "YD0FdeMPKhs" ftpupload.net /htdocs/laravel %%f
for /F "tokens=*" %%f in (files.txt) do @ ncftpput -R -v -u "epiz_29440885" -p "YD0FdeMPKhs" ftpupload.net /htdocs/laravel %%f
