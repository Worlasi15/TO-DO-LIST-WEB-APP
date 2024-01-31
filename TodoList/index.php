
<?php

  require "conn.php";
  

  $data = $conn->query("SELECT * FROM tasks");
  $data->execute();
  $rows = $data->fetchAll(PDO::FETCH_OBJ);


?>

<?php include "header.php"; ?>
        <div class="container">
		<form method="POST" action="insert.php" class="form-inline" id="user_form">
		 
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task">
              <input name="time" type="text" class="form-control" id="time" placeholder="enter time">
		  </div>
		   
		      <input type="submit" name="submit" class="btn btn-primary" value="Insert" />
		</form>

		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Task Name</th>
                <th>Time</th>
		      <th>Delete</th>
		      <th>Update</th>

		    </tr>
		  </thead>
		  <tbody>
		  	 <?php foreach($rows as $row): ?>   
		    <tr>
		   
		     <td><?php echo $row->id; ?></td>
		     <td><?php echo $row->name; ?></td>
                <td><?php echo $row->time; ?></td>
		     <td><a href="delete.php?del_id=<?php echo $row->id; ?>" class="btn btn-danger">delete</a></td>
				<td><a href="update.php?upd_id=<?php echo $row->id; ?>" class="btn btn-warning">update</a></td>
		    </tr>
		<?php endforeach; ?>


		  </tbody>
		</table>
	</div>



		
<?php include "footer.php"; ?>