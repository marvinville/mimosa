<?php echo $nav; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Dashboard</h5>
      </div>
      <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">Serial Number</th>
      <th scope="col">IP</th>
      <th scope="col">MAC</th>
      <th scope="col">Software Version</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $tr='';

  foreach ($devices as $row) {
      $tr.='<tr>
      <td>'.$row->name.'</td>
      <td>'.$row->model.'</td>
      <td>'.$row->type.'</td>
      <td>'.$row->serial_number.'</td>
      <td><a href='.base_url().'devices/view/'.$row->id.'>'.$row->ip_address.'</td>
      <td>'.$row->mac_address.'</td>
      <td>'.$row->software_version.'</td>
      <td>'.$row->status.'</td>
      </tr>';
  }

  echo $tr;
  ?>
  </tbody>
</table>


    </main>