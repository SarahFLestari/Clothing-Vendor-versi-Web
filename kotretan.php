	<div>
						<?php
							$connection = mysql_connect("localhost", "root","") or die(mysql_error()); mysql_select_db("impal", $connection) or die(mysql_error());
							$sql = mysql_query("SELECT * FROM daftarJasa ORDER BY namaJasa");
						?>	
					</div>
					<div id ="container">
						<form action="" method="">
							<select name="jasa">
						
							<?php if (mysql_num_rows($sql) > 0) { ?>
							<?php while ($row = mysql_fetch_array($sql)) { ?> 
							<option>
								<?php echo $row['namaJasa'] ?>
							</option>
							<?php } ?>
							<?php } ?>
							</select>
							<button type="submit" id="submit" name="submit" class="btn btn-info">Kirim</button>
					</div>
					<div>
						
					</div>

					<div>
						<select name = "jasa">
							<option>Masukkan Jenis Jasa</option>
							<?php 
							mysql_connect("Localhost","root","");
							mysql_select_db("impal");
							$sql = mysql_query("SELECT * FROM daftarJasa ORDER BY namaJasa ");
							if(mysql_num_rows($sql) != 0 ){
								while($data = mysql_fetch_assoc($sql)){
									echo '<option>'.$data['namaJasa'].'</option>';
								}
							}
							?>
						</select>
						<input type="submit" name="submit" value="Kirim">
					</div>