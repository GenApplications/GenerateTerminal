<style>
.rounded {
  border: 2px solid black;
  padding: 10px;
  margin: 10px;
  border-radius: 2px;
}
</style>
<fieldset>
<legend> Result </legend><p> Step 1. Create file called <?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?>.bat (MAKE SURE FILE EXTENSIONS ARE ENABLED.)
<br> Step 2. Open your text editor or Notepad and Copy the code below <br>
<p class="rounded">
<code>


@echo off
<br>
setlocal enabledelayedexpansion
<br>
SET PROGRAMNAME=<?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?>
<br>
color <?php
if(isset($_POST['backcolor']))
{
echo '' . htmlspecialchars($_POST["backcolor"]) . '';
} else {
	echo '0';
}
?><?php
if(isset($_POST['forecolor']))
{
echo '' . htmlspecialchars($_POST["forecolor"]) . '';
} else {
	echo 'F';
}
?>
<br>
::name of command prompt
<br>
SET PROGRAMVERSION=<?php
if(isset($_POST['version']))
{
echo '' . htmlspecialchars($_POST["version"]) . '';
} else {
	echo 'v1.0.0';
}
?><?php
if ($_POST['branding'] == "simple") {
    echo " - Powered by $gcmdname";
} elseif ($_POST['branding'] == "none") {
} else {
    echo "<br>SET var=%cd%^^^>";
}
?>
<br>
::version of command prompt
<br>
title %PROGRAMNAME%
<br>
:$Home
<br>
cls
<br>
echo.
<br>
ECHO %PROGRAMNAME% %PROGRAMVERSION%
<br>
echo.
<br>
:CMD
<br>
SET input=
<br>
CLS
<br>
ECHO %PROGRAMNAME% %PROGRAMVERSION%
<br>
ECHO.
<br>
goto $Count
<br>
goto $CommandPrompt
<br>
:$CommandPrompt
<?php
if ($_POST['pathtype'] == "path") {
    echo "<br>SET var=%cd%^^^>";
} elseif ($_POST['pathtype'] == "dollarsign") {
    echo "<br>SET var=$";
} else {
    echo "<br>SET var=%cd%^^^>";
}
?>
<br>
set /p input=%var%
<br>
%INPUT%
<?php 
if(isset($_POST['pretitle']))
{
echo "<br> if defined input (title %PROGRAMNAME% - %INPUT%) else (title %PROGRAMNAME%) ";
}
?>
<br>
SET input=
<br>
goto $Count
<br>
:$Count
<br>
goto $CommandPrompt
<br>
:Crash
<br>
exit
</code>
</p>
<br>
Step 3. Run file called <?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?>.bat. 
<br>
Step 4. And you're done! You have built a real command prompt without coding!
</p>
</fieldset>
