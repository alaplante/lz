
	
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h1>Create Task</h1>
			<?php 
				$attributes = array('role' => 'form');
				echo form_open('index.php/tasks/create', $attributes); 
			?>
				<div class="form-group">
					<input name="title" type="text" class="form-control" placeholder="Enter Name">
				</div>
				<div class="form-group">
					<textarea name="content" class="form-control" rows="3" placeholder="Enter Task Description"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			<?php echo form_close(); ?>
		</div>


		<div class="col-sm-6">
			<h1>Tasks</h1>
			<?php if(isset($tasks)) : foreach($tasks as $task): ?>
				<h3><?php echo $task->title; ?> <small><?php echo $task->date; ?></small></h3>
				<p><?php echo $task->content; ?></p>
				<p><?php echo anchor('index.php/tasks/delete/'.$task->id, '<i class="fa fa-minus-circle"></i>'); ?></p>
				<p><?php echo anchor('index.php/tasks/update/'. $task, '<i class="fa fa-minus-circle"></i>'); ?></p>



				<?php endforeach; ?>
			<?php else : ?>
				<p>There are no tasks available</p>
			<?php endif; ?>
		</div>
	</div>
</div>