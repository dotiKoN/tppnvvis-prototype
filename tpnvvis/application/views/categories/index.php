<br>
      <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h1><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Naujienų kategorijos <small>Administruoti įrašų kategorijas</small></h1>
            </div>
            <div class="col-md-2">
              <div class="dropdown create">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Kurti naują
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a type="button" data-toggle="modal" data-target="#addPage">Automobilio įrašą</a></li>
                  <li><a href="#">Kainoraščio įrašą</a></li>
                  <li><a href="#">Vartotojo paskyrą</a></li>
                  <li><a href="#">Naujienos įrašą</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>

    <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="index.html" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Administratoriaus panelė
            </a>
            <a href="transport" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transportas <span class ="badge">10</span></a>
            <a href="posts" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Naujienos <span class ="badge">10</span></a>
            <a href="users" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Vartotojai <span class ="badge">4
            </span></a>
          </div>

          <div class="well">
            <h4>Užsakytas transportas </h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                40%
              </div>
            </div>           
          <h4>Laisvas transportas </h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
              </div>          
            </div>
          </div>
        </div>
    <div class="col-md-9">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Sukurtos įrašų kategorijos</h3>
            </div>
            <div class="panel-body">
                            <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Paieška..."><br>
                      </div>
                </div>
                <table class="table table-striped table-hover">
<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item"><a class="kategorijos-text" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></li>
<?php endforeach; ?>
</ul>
                  </table>         
            </div>
          </div>
        </div>
      </div>
    </div>
</section>