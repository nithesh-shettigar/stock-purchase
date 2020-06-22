<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>


body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 95%;
  width: 200px;
  position: fixed;
  z-index: 1;
  
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  font-family:cursive;
 left: 0.5%;
 
 top: 2%;

 border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1.0);
  background:black;
  color:white;
  
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
 border-bottom:1px solid #007bff;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px;
  font-size: 28px;
  padding: 0px 10px;
  
}

:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}


body {
  background: #007bff;
  
  
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1.0);
  background:black;
  
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
  align:center;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;

}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
 
  
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.container{
padding-right: 30px;
    padding-left:-6px;
    margin-left: 500px;
	margin-top: 10%;
	
}



input[type=password]:hover
{
border-color:#0ff;
border:solid:

}



input[type=email]:hover
{
border-color:#0ff;
border:solid:

}















</style>

</head>
<body>
 <div class="container ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto ">
        <div class="card card-signin my-5">
          <div class="card-body ">
            <h2 class="card-title text-center" style=" color:white;font-family:cursive;font-size:25px;"> CREATE POST</h2>


 <form class="form-signin" action="postinert" method="GET">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="title" name="title" value="" required autofocus/>
                <label for="inputEmail"></label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputPassword" class="form-control" placeholder="description" size=50 name="description" value="" required/>
                <label for="inputPassword"></label>
              </div>

            <div class="form-label-group"><input type="file" name="thumbnail" ><br></br></div>
              <input  type="submit" value="submit"  name="submit" class="btn btn-lg btn-primary btn-block text-uppercase"/>
             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </form>


 </div>
 @foreach($var as $v)
 {{$v->name}}
 @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="sidenav">
  <h1 style="font-size:50px;color:white;font-weight:bold;text-align:center;">Menu</h1>
  <a href="create_post.php">create post</a><br>
  <a href="view_post.php">view post</a><br>
  <a>create product</a><br>
  <a >view product</a><br>
  <a href="contact_info.php">contact info</a><br>
   <a href="view_info.php">view info</a><br>
</div>
  
  
<script>
/*

*/
</script>
</body>
<html>



