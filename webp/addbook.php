<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="register">
	<br/>
		<form action="addbookprocess.php" method="post">
			<div>
				<label>Image:</label>
				<input type="file" name="image" id="image" />
			</div>
			<div>
				<label>Title:</label>
				<input type="text" name="title" id="title" />
			</div>			
			<div>
				<label>Author:</label>
				<input type="text" name="author" id="author" />
			</div>
			<div>
				<label>Price:</label>
				<input type="number" name="price" id="price" />
			</div>
			<div>
				<label>ISBN:</label>
				<input type="number" name="isbn" id="isbn" />
			</div>
			<div>
				<label>Category:</label>
				<select name="category" id="category">
				  <option value="Art-Photography">Art-Photography</option>
					<option value="Biography">Biography</option>
					<option value="Business-Finance-Law">Business-Finance-Law</option>
					<option value="Childrens-Books">Childrens-Books</option>
					<option value="Computing">Computing</option>
					<option value="Crafts-Hobbies">Crafts-Hobbies</option>
					<option value="Crime-Thriller">Crime-Thriller</option>
					<option value="Dictionaries-Languages">Dictionaries-Languages</option>
					<option value="Entertainment">Entertainment</option>
					<option value="Food-Drink">Food-Drink</option>
					<option value="Graphic-Novels-Anime-Manga">Graphic-Novels-Anime-Manga</option>
					<option value="Health">Health</option>
					<option value="History-Archaeology">History-Archaeology</option>
					<option value="Home-Garden">Home-Garden</option>
					<option value="Humour">Humour</option>
					<option value="Medical">Medical</option>
					<option value="Mind-Body-Spirit">Mind-Body-Spirit</option>
					<option value="Natural-History">Natural-History</option>
					<option value="Personal-Development">Personal-Development</option>
					<option value="Poetry-Drama">Poetry-Drama</option>
					<option value="Reference">Reference</option>
					<option value="Religion">Religion</option>
					<option value="Romance">Romance</option>
					<option value="Science-Fiction-Fantasy-Horror">Science-Fiction-Fantasy-Horror</option>
					<option value="Science-Geography">Science-Geography</option>
					<option value="Society-Social-Sciences">Society-Social-Sciences</option>
					<option value="Sport">Sport</option>
					<option value="Stationery">Stationery</option>
					<option value="Teaching-Resources-Education">Teaching-Resources-Education</option>
					<option value="Technology-Engineering">Technology-Engineering</option>
					<option value="Teen-Young-Adult">Teen-Young-Adult</option>
					<option value="Transport">Transport</option>
					<option value="Travel-Holiday-Guides">Travel-Holiday-Guides</option>
				</select>

			</div>
			<div>
				<input type="submit" value="Submit" class="button">
			</div>
		</form>
	</div>
</body>
</html>