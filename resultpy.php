<div class="p-5 text-center bg-light">
 <h1><?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?> is generated</h1>
  <p>Follow the instructions below on how to get the terminal.</p> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gcmd-generator">
Create Another Terminal  </button>

</div>
<style>
.rounded {
  border: 2px solid black;
  padding: 10px;
  margin: 10px;
  border-radius: 2px;
}
</style>
<fieldset>

<p> <i class="fa-solid fa-file"></i> Create a file called <?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?>.py (MAKE SURE FILE EXTENSIONS ARE ENABLED.)
<br> Step 2. Open your text editor or Notepad and Copy the code below <br>
<p class="rounded">
<code>
import os
<br>
while True:
<br>
 programdetails = "<?php
if(isset($_POST['name']))
{
echo '' . htmlspecialchars($_POST["name"]) . '';
} else {
	echo 'My Command Prompt';
}
?> <?php
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
?>"
<br>
 print(programdetails)
<br>
<?php
if ($_POST['pathtype'] == "path") {
    echo " cmdgetdir = os.path.dirname(__file__)";
} elseif ($_POST['pathtype'] == "dollarsign") {
    echo " cmdgetdir = '$'";
} else {
    echo " cmdgetdir = os.path.dirname(__file__)";
}
?>
<br>
 zerocmd = input(cmdgetdir)
<br>
 os.system('cmd /c "' + zerocmd + '"')
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
?>.py. 
<br>
Step 4. And you're done! You have built a real command prompt without coding!
</p>
</fieldset>
