<html>
<style>
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-image: url(admin.jpg);
}

/* Control the right side */
.right {
  right: 0;
  background-image: url(cv.jpg);
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}
.button
{background-color: #4CAF50;
  padding: 15px 100px;
  font-size: 16px;
   min-width:  100px;
  min-height: 20px;
}


</style>


<div class="split left">
  <div class="centered">
    <img src="avatar2.jpg" alt="Avatar woman">
    <h2><form action = "login.php">
<button class="button" type="submit" value="submit">Login</button>

    </form></h2>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="avatar1.jpg" alt="Avatar man">
    <h2><form action = "Main2.php">
<button class="button" type="submit" value="submit">Register for PHD or Masters Degree</button>

    </form></h2>

  </div>
</div>
</html>
