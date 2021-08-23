<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Member Registration</title>
</head>
<body>
    <style>
        body{
            margin: 10px;
        }
    </style>
    <center><h2>Member Registration</h2></center><br>
    <form method="" action="#">

        <div class="row">
        <!-- first name and last name -->
            <div class="form-group col-md-6">
                <label for="First Name">First Name</label>
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
                <label for="Last Name">Last Name</label>
              <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div> <br>
        <!-- contact no. -->
        <div class="form-group col-md-6">
            <label for="inputContact4">Contact</label>
            <input type="email" class="form-control" id="inputContact4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAltContact4">Alternate contact</label>
            <input type="email" class="form-control" id="inputAltContact4" placeholder="Email">
          </div><br>
        <!-- email -->
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <!-- Password -->
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Re-Enter Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Re-Enter Password">
          </div>
        </div><br>
        <!-- gender -->
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios1" value="Male" >
                  <label class="form-check-label" for="genderRadios1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios2" value="Female">
                  <label class="form-check-label" for="genderRadios2">
                    Female
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios3" value="Transgender">
                  <label class="form-check-label" for="genderRadios3">
                    Transgender
                  </label>
                </div>
              </div>
            </div>
          </fieldset><br>
          <!-- add profile pic -->
          <div class="form-group">
            <Label for="uploadProflie">Upload Profile</Label><br>
            <input type="file" class="form-control-file" id="uploadProfile">
          </div><br>
          <!-- date of birth -->
          <div class="form-group">
          <label for="inputDob">Date of birth</label>
          <input type="date" class="form-control" id="inputDob">
        </div><br>
        <!-- address -->
        <div class="form-group">
          <label for="inputAddress">Adress line 1</label>
          <input type="text" class="form-control" id="inputAddress1">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address line 2</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Country</label>
            <input type="text" class="form-control" id="inputCountry">
          </div>
        </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div><br>
          <!-- submit button -->
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
    </form>
    

</body>
</html>
