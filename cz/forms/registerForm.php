
        
<div class="jumbotron">
    <div class="container" style="max-width:500px;">
        <h1>Registrace </h1>
        <hr>
        <form action="./queries/register.php" method="POST" class="form-horizontal register" id="registrace">

            <div class="form-group" >
                <label for="EmailFieldL" class="col-md-3 control-label">Email:</label>

                <div class="col-sm-7">
                    <input type="email" class="form-control" placeholder="Vložte email"  Id="EmailFieldL" autofocus
                           data-toggle="tooltip" data-placement="right" name="email">

                </div> 
            </div>

            <div class="form-group">
                <label for="PasswordFieldL" class="col-sm-3 control-label">Heslo:</label>
                <div class="col-sm-7 ">
                    <input type="password"  class="form-control" placeholder="Vložte heslo" Id="PasswordFieldL" name="heslo">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="PasswordCFieldL" class="col-sm-3 control-label">Kontrola hesla:</label>
                <div class="col-sm-7 ">
                    <input type="password"  class="form-control" placeholder="Vložte heslo" Id="PasswordCFieldL" name="heslo2">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="TelFieldL" class="col-sm-3 control-label">Telefon:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Vložte telefon" Id="TelFieldL" name="telefon">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="NameFieldL" class="col-sm-3 control-label">Jméno:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Vložte jméno" Id="NameFieldL" name="jmeno">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="SurnameFieldL" class="col-sm-3 control-label">Přijmení:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Vložte přijmení" Id="SurnameFieldL" name="prijmeni">                           
                </div>
            </div> 

            <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('registrace').submit();"> Registrovat</submit>
        </form>
    </div>



</div>



