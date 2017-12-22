<br>
      <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Vartotojai <small>Administruoti vartotojų paskyras</small></h1>
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
        <!-- Website overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h6>Vartotojai</h6>
            </div>
            <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filtruoti vartotojus...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Vardas, pavardė</th>
                        <th>El. Paštas</th>
                        <th>Sukūrimo data</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>Petras Petraitis</td>
                        <td>test1@gmail.com</td>
                        <td>2017-05-18 01:34:14</td>
                        <td><a class="btn btn-default" href="edit.html">Redaguoti</a> <a class="btn btn-danger" href="#">Trinti</a></td>
                      </tr>
                      <tr>
                        <td>Jonas Jonaitis</td>
                        <td>test2@gmail.com</td>
                        <td>2017-05-18 01:34:14</td>
                        <td><a class="btn btn-default" href="edit.html">Redaguoti</a> <a class="btn btn-danger" href="#">Trinti</a></td>
                      </tr>
                      <tr>
                        <td>Juozas Juozaitis</td>
                        <td>test3@gmail.com</td>
                        <td>2017-05-18 01:34:14</td>
                        <td><a class="btn btn-default" href="edit.html">Redaguoti</a> <a class="btn btn-danger" href="#">Trinti</a></td>
                      </tr>
                      <tr>
                        <td>Liepa Liepaitė</td>
                        <td>test4@gmail.com</td>
                        <td>2017-05-18 01:34:14</td>
                        <td><a class="btn btn-default" href="edit.html">Redaguoti</a> <a class="btn btn-danger" href="#">Trinti</a></td>
                      </tr>
                  </table>              
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>