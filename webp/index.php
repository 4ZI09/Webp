<!DOCTYPE html>
<html>
<body>
	<div class="register">
	<br/>
		<form action="register.php" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<label>Birth Date:</label>
				<input type="Date" name="date" id="Date" />
			</div>
			<div>
				<label>Gender:</label>
				<select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div>
				<input type="submit" value="register" class="button">
			</div>
		</form>
	</div>
</body>
</html>