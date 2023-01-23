<div class="p-5 text-center bg-light">
 <h1><?php echo htmlspecialchars($gcmdname); ?></h1>
  <p>Start a terminal in minutes! <?php echo htmlspecialchars($gcmdname); ?> helps you create the basis for your own awesome terminal!</p> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gcmd-generator">
Create Terminal  </button>

</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Free</h3>
      <p>Never pay for terminal generation again. <?php echo htmlspecialchars($gcmdname); ?> is completely free and generates terminals in supported programming languages which you can share. </p>
	  <b>Supported programming languages:</b>
<ul class="fa-ul">
    <li><span class="fa-li"><i class="fa-solid fa-terminal"></i></span>Batch </li>
    <li><span class="fa-li"><i class="fa-brands fa-python"></i></span>Python (partial) </li>
</ul>
    </div>
    <div class="col-sm-4">
      <h3>No code</h3>
      <p>No need to write any code.</p>
    </div>
    <div class="col-sm-4">
      <h3>Redistributable</h3>        
      <p>You can compile the terminal as .exe using third party tools.</p>
    </div>
  </div>
</div>
<div class="modal fade" id="gcmd-generator">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Terminal Wizard</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

<form method="POST">
  <label for="name">Terminal name</label><br>
  <input type="text" id="name" name="name"  class="form-control" value="My Terminal" required><br>
  <label for="name">Terminal version</label><br>
  <input type="text" id="version"  class="form-control" name="version" value="0.0.1" required><br>
      <div class="form-check mb-3">
      <label class="form-check-label">
  <input type="checkbox" id="pretitle" name="pretitle"> Previous command in title
  </label>
    </div>
  <br>
  <label for="pathtype"> Path type </label>
  <br>
  <select name="pathtype" id="pathtype"  class="form-control">
  <option value="path" selected> C:\Users\<?php echo "$gcmdowner"; ?>\<?php echo htmlspecialchars($gcmdname); ?> </option>
  <option value="dollarsign"> $ </option>
</select>
<br>
 <label for="backcolor"> Background color </label>
  <br>
  <select name="backcolor"  class="form-control" id="backcolor">
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
 <label for="forecolor"> Foreground color </label>
  <br>
  <select name="forecolor" class="form-control" id="forecolor">
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
  <select name="branding"  class="form-control" id="pathtype">
  <option value="simple" selected>Enable</option>
  <option value="none">Disable</option>
</select>
<br>
  <label for="branding"> Programming language </label>
  <br>
  <select name="plmethod"  class="form-control" id="plmethod">
  <option value="bat" selected>Batch</option>
  <option value="py">Python</option>
</select>
  <br>
  <br>
  		  

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">

           <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-terminal"></i> Build now! </button> 
       </form> </div>
        
      </div>
    </div>
  </div>
