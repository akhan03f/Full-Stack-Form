<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" type="text/css"
    href="formStyle.css">

    <meta http-equiv="content-type" content ="text/html; charset-iso=8859-1" />

    <div id="heading">
      <h1> COSC 630</h1>
      <h2> CSS Form</h2>
      <h3> Asim Khan</h3>
    </div>
  <head>


<body>
  <?php include 'include.htm';?>

  <div class="container">

    <div id="intro">
      <p> Please fill out this form: </p>
    </div>

    <form action="storeinputs.php" method="post">

      <fieldset>
        <table>
          <tr>
            <td>First Name: </td>
            <td><input type="text" name="fname"></td>
          </tr>
          <tr>
            <td>Last Name: </td>
            <td><input type="text" name="lname"></td>
          </tr>
          <tr>
            <td>Address: </td>
            <td><input type="text" name="address"></td>
          </tr>
          <tr>
            <td>City: </td>
            <td><input type="text" name="city"></td>
          </tr>
          <tr>
            <td>State: </td>
            <td><input type="text" name="state"></td>
          </tr>
          <tr>
            <td>Zip Code: </td>
            <td><input type="text" name="zip"></td>
          </tr>
        </table>
      </fieldset>

      <p>Favorite color: </p>
      <fieldset>
      <table>
        <tr>
          <td style="background-color:#d10000">&emsp;</td>
          <td>Red</td>
          <td>&emsp;&emsp;</td>
          <select name="color" style="margin-left: 25%;> <!-- override-->
              <option value="">Select</option>
              <div id="choose" style="color:gray">
                <option value="choose">Select a color</option>
              </div>
            <option value="red">Red</option>
            <option value="orange">Orange</option>
            <option value="yellow">Yellow</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="indigo">Indigo</option>
            <option value="violet">Violet</option>
          </select></td>
        </tr>
        <tr>
          <td style="background-color:#ff6622">&emsp;</td>
          <td>Orange</td>
        </tr>
        <tr>
          <td style="background-color:#ffda21">&emsp;</td>
          <td>Yellow</td>
        </tr>
        <tr>
          <td style="background-color:#33dd00">&emsp;</td>
          <td>Green</td>
        </tr>
        <tr>
          <td style="background-color:#1133cc">&emsp;</td>
          <td>Blue</td>
        </tr>
        <tr>
          <td style="background-color:#2E2B5F">&emsp;</td>
          <td>Indigo</td>
        </tr>
        <tr>
          <td style="background-color:#8B00FF">&emsp;</td>
          <td>Violet</td>
        </tr>
      </table>
    </fieldset>


    <div class="radios">

      <p>Favorite day of the week: </p>

      <fieldset>
      <div style="margin: 0 auto; width:100px; text-align:left;">
        <input type="radio" id="monday" name="day" value="Monday" checked="checked">
        <label for="monday">Monday</label><br>
        <input type="radio" id="tuesday" name="day" value="Tuesday">
        <label for="tuesday">Tuesday</label><br>

        <input type="radio" id="wednesday" name="day" value="Wednesday">
        <label for="wednesday" style="font-size:11px">Wednesday</label><br> <!-- overridden -->

        <input type="radio" id="thursday" name="day" value="Thursday">
        <label for="thursday">Thursday</label><br>
        <input type="radio" id="friday" name="day" value="Friday">
        <label for="friday">Friday</label><br>
        <input type="radio" id="saturday" name="day" value="Saturday">
        <label for="saturday">Saturday</label><br>
        <input type="radio" id="sunday" name="day" value="Sunday">
        <label for="sunday">Sunday</label><br>
      </div>
    </div>

  </fieldset>

      <br>
      <p>


          <label for="number">Favorite number: </label>
    <div id="div5">
  <fieldset>
      <input name="number" id="number">
    </div>
  </fieldset>

      </p>
      <br>


        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <button type="submit" style="height:30px;width:90px">Submit</submit>
        </button><br>

  </div>

  </form>

</body>

</html>
