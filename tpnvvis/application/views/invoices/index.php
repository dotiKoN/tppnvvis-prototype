<br>
      <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Sąskaitos <small><?php if($this->session->userdata('logged_in') && $this->session->userdata('username') == 'admin') : ?>Administruoti sąskaitų įrašus</small></h1>
            </div>
            <div class="col-md-2">
              <div class="dropdown create">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Kurti naują
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="<?php echo base_url(); ?>posts/create">Naujienos įrašą</a></li>
                  <li><a href="<?php echo base_url(); ?>categories/create">Naujienos kategorijos įrašą</a></li>
                  <li><a href="<?php echo base_url(); ?>transport/create">Transporto įrašą</a></li>
                  <li><a href="<?php echo base_url(); ?>classes/create">Transporto klasės įrašą</a></li>
                </ul>
              </div>
            </div>
          <?php endif; ?>
          </div>
      </div>

<?php if($this->session->userdata('logged_in') && $this->session->userdata('username') == 'admin') : ?>
    <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="index.html" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Administratoriaus panelė
            </a>
            <a href="transport" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transportas <span class ="badge"><?php echo $this->db->count_all_results('transports'); ?></span></a>
            <a href="posts" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Naujienos <span class ="badge"><?php echo $this->db->count_all_results('posts'); ?></span></a>
            <a href="users" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Vartotojai <span class ="badge"><?php echo $this->db->count_all_results('users'); ?>
            </span></a>
          </div>


<?php 
                    $query = $this->db
                                  ->select('count(t_availability) as test')
                                  ->where('t_availability = 0')
                                  ->get('transports');
foreach ($query->result() as $row)
                $max = $this->db->count_all_results('transports')/100;

              $unavailable = $row->test / $max;
              $available = 100 - $unavailable;
                ?>


          <div class="well">
            <h4>Užsakytas transportas </h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo round($unavailable,3); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($unavailable,3); ?>%;">
                <?php echo round($unavailable,3); ?>%
              </div>
            </div>           
          <h4>Laisvas transportas </h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo round($available,3); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($available,3); ?>%;">
                <?php echo round($available,3); ?>%
              </div>          
            </div>
          </div>
        </div>
    <div class="col-md-9">
<?php endif; ?>

<?php if(!$this->session->userdata('logged_in') || $this->session->userdata('username') != 'admin') : ?>
    <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <div class="panel-heading main-color-bg">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Transporto paieška
            </div>
                            <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Paieška...">
                      </div>
                </div>
                <br>
                          <div class="list-group">

        </div>
        </div>
        </div>
    <div class="col-md-9">
<?php endif; ?>
            <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h6><?= $title;?></h6>
            </div>
            <div class="panel-body">
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Transportas</th>
                        <th>Statusas</th>
                        <th>Sukurtas</th>
                        <th>Klasė</th>
                        <th></th>
                      </tr>
    <?php foreach($invoices as $invoice) : ?>
                      <tr>
                        <td><?php echo $invoice['i_id']; ?></td>
                        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                        <td><?php echo $invoice['i_total']; ?></td>
                        <td><?php echo $invoice['i_startdate']; ?></td>
                        <td><a class="btn btn-default" href="<?php echo site_url('/invoices/'.$invoice['i_id']); ?>">Žiūrėti plačiau</a> </td>
                      </tr>
<?php endforeach; ?>
  </table>    
          </div>
        </div>
      </div>
  </section>