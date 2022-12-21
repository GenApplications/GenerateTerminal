
<div class="jumbotron text-center">
 <h1><?php echo "$gcmdname"; ?></h1>
  <p>Start a Windows Command Prompt in minutes! <?php echo "$gcmdname"; ?> helps you create the basis for your own awesome command prompt!</p> 
    <button type="button" class="btn btn-primary" data-toggle="modal" style="text-transform:uppercase;" data-target="#gcmd-generator">
Create Now  </button>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Free</h3>
      <p>Never pay for terminal generation again. <?php echo "$gcmdname"; ?> is completely free and generates .bat files which you can share. </p>
    </div>
    <div class="col-sm-4">
      <h3>No code</h3>
      <p>No need to write any code.</p>
    </div>
    <div class="col-sm-4">
      <h3>Redistributable</h3>        
      <p>You can convert the .bat to .exe using third party tools.</p>
    </div>
  </div>
</div>
<div class="modal fade" id="gcmd-generator">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Command Prompt Wizard</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

<form method="POST">
  <label for="name">Command Prompt Name</label><br>
  <input type="text" id="name" name="name" value="My Command Prompt" required><br>
  <label for="name">Command Prompt Version</label><br>
  <input type="text" id="version" name="version" value="0.0.1" required><br>
  <input type="checkbox" id="pretitle" name="pretitle"> <label for="pretitle">Previous Command in Title</label>
  <br>
  <label for="pathtype"> Path Type </label>
  <br>
  <select name="pathtype" id="pathtype">
  <option value="path" selected>Windows Path - C:\Users\<?php echo "$gcmdowner"; ?>\<?php echo "$gcmdname"; ?></option>
  <option value="dollarsign">Dollar Sign - $</option>
</select>
<br>
 <label for="backcolor"> Background Color </label>
  <br>
  <select name="backcolor" id="backcolor">
  <option value="0" selected>Black</option>
  <option value="1">Navy</option>
    <option value="2">Green</option>
    <option value="3">Teal</option>
    <option value="4">Maroon</option>
    <option value="5">Purple</option>
    <option value="6">Olive</option>
    <option value="7">Silver</option>
    <option value="8">Gray</option>
    <option value="9">Blue</option>
    <option value="A">Lime</option>
    <option value="B">Aqua</option>
    <option value="C">Red</option>
    <option value="D">Fuchsia</option>
    <option value="E">Yellow</option>
    <option value="F">White</option>

</select>
<br>
 <label for="forecolor"> Foreground Color </label>
  <br>
  <select name="forecolor" id="forecolor">
  <option value="0" >Black</option>
  <option value="1">Navy</option>
    <option value="2">Green</option>
    <option value="3">Teal</option>
    <option value="4">Maroon</option>
    <option value="5">Purple</option>
    <option value="6">Olive</option>
    <option value="7">Silver</option>
    <option value="8">Gray</option>
    <option value="9">Blue</option>
    <option value="A">Lime</option>
    <option value="B">Aqua</option>
    <option value="C">Red</option>
    <option value="D">Fuchsia</option>
    <option value="E">Yellow</option>
    <option value="F" selected>White</option>

</select>
<br>
  <label for="branding"> Branding </label>
  <br>
  <select name="branding" id="pathtype">
  <option value="simple" selected>Simple: Powered by <?php echo "$gcmdname"; ?></option>
  <option value="none">None</option>
</select>
  <br>
  <br>
  		  

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">

           <button type="submit" class="btn btn-primary"> Build Now! </button> 
       </form> </div>
        
      </div>
    </div>
  </div>
