<?php
if (!isset($_SESSION['username']) && (isset($_SESSION['intruder']))) { ?>
	<div class="modal fade" id="intruderModal" tabindex="-1" role="dialog" aria-labelledby="intruderModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabel">Intruder alert!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><?php echo $_SESSION['intruder']; ?></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
