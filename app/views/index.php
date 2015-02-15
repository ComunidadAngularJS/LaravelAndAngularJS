
<!DOCTYPE html>
<html lang="en" ng-app="todoapp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">

  <title>TODO-LIST Angular</title>

  <!-- Bootstrap core CSS -->
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Custom styles for this template -->
  <style media="screen">
  /* Sticky footer styles
  -------------------------------------------------- */
  html {
    position: relative;
    min-height: 100%;
  }
  body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
  }
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    /* Set the fixed height of the footer here */
    height: 60px;
    background-color: #f5f5f5;
  }


  /* Custom page CSS
  -------------------------------------------------- */
  /* Not required for template or sticky footer method. */

  body > .container {
    padding: 60px 15px 0;
  }
  .container .text-muted {
    margin: 20px 0;
  }

  .footer > .container {
    padding-right: 15px;
    padding-left: 15px;
  }

  code {
    font-size: 80%;
  }

  .align-center{
    margin-top: 150px;
  }

  .panel-title{
    padding-top: 10px;
    padding-bottom: 0px;
    font-size: 20px;
    font-weight: 300;
    color: #777;

  }

  .panel{
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border: 1px solid #d8d8d8 !important;
    text-align: center;
  }

  .card-footer{
    padding: 11px;
    margin: 0;
    background-color: #f8f8f8;
  }


  .todolist{
    background-color:#FFF;
    padding:20px 20px 10px 20px;
    margin-top:0px;
  }
  .todolist h1{
    margin:0;
    padding-bottom:20px;
    text-align:center;
  }
  .form-control{
    border-radius:0;
  }
  li.ui-state-default{
    background:#fff;
    border:none;
    border-bottom:1px solid #ddd;
  }

  li.ui-state-default:last-child{
    border-bottom:none;
  }

  .todo-footer{
    background-color:#F4FCE8;
    margin:0 -20px -10px -20px;
    padding: 10px 20px;
  }
  #done-items li{
    padding:10px 0;
    border-bottom:1px solid #ddd;
    text-decoration:line-through;
  }
  #done-items li:last-child{
    border-bottom:none;
  }
  #checkAll{
    margin-top:10px;
  }
</style>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">TODO-LIST Angular</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->


        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <!-- Begin page content -->
  <div class="container">
    <div class="row">

      <div class="col-md-3">
      </div>

      <div class="col-md-6">
        <div class="panel panel-default align-center" style="border-radius: 0px;">
          <div class="panel-heading" style="background-color: #ffffff;">
            <h2 class="panel-title">TODO</h2>
          </div>
          <div class="panel-body" >

        <div class="todolist not-done">
          <div class="input-group">
            <input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Add!</button>
            </span>
          </div>
          <hr>
          <ul id="sortable" class="list-unstyled">
            <li class="ui-state-default">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />Take out the trash</label>
                </div>
              </li>
              <li class="ui-state-default">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="" />Buy bread</label>
                  </div>
                </li>
                <li class="ui-state-default">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="" />Teach penguins to fly</label>
                    </div>
                  </li>
                </ul>
                <div class="todo-footer">
                  <strong><span class="count-todos"></span></strong> Items
                </div>
              </div>

            </div>
            </div>
          </div>

          <div class="col-md-2">
          </div>

  </div>

  <footer class="footer">
    <div class="container">
      <p class="text-muted">TODO-LIST Angular © 2015 All Rights Reserved.</p>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  <!-- LOAD Angular -->
  <script charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>

  <script charset="utf-8">
    (function(){
      var todoapp = angular.module('todoapp', []);
    })();
  </script>
</body>
</html>
