<!DOCTYPE html>
<html>
	<head>
		<title>My First Form</title>
	</head>
	<body>

	<?php
	var_dump($_GET);
	var_dump($_POST);
	?>
	<h2>User Login</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="your name">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="enter your password">
			</p>
			<p>
				<button>Login</button>
			</p>
		</form>
	<h2>Compose an Email</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="to">To</label>
				<input id="to" name="to" type="text" placeholder="to">
			</p>
			<p>
				<label for="to">From</label>
				<input id="from" name="from" type="text" placeholder="from">
			</p><p>
				<label for="to">Subject</label>
				<input id="subject" name="subject" type="text" placeholder="subject">
			</p>
			<p>
				<label for="to">Body</label>
				<textarea id="body" name="body" type="text"></textarea>
			</p>
			
			<div>
				<input type="checkbox" id="copy" name="copy" value="yes" checked>
				<label for="copy">Do you want to save a copy to your sent folder?</label>
			</div>

			<p>
				<button>Send Email</button>
			</p>
		</form>
	<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my_first_form.php">
			<p>Which state is smallest?</p>
				<label>
					<input type="radio" name="q1" value="Connecticut">Connecticut
				</label>
				<label>
					<input type="radio" name="q1" value="Rhode Island">Rhode Island
				</label>
				<label>
					<input type="radio" name="q1" value="Vermont">Vermont
				</label>
				<label>
					<input type="radio" name="q1" value="Maine">Maine
				</label>

				<p>Which state is largest?</p>
					<label>
						<input type="radio" name="q2" value="texas">Texas
					</label>
					<label>
						<input type="radio" name="q2" value="alaska">Alaska
					</label>
					<label>
						<input type="radio" name="q2" value="california">California
					</label>
					<label>
						<input type="radio" name="q2" value="oregon">Oregon
					</label>

				<p>Which colors do you like?</p>
					<label>
						<input type="checkbox" id="colors" name="os[]" value="blue"> Blue</label>
					<label>
						<input type="checkbox" id="colors" name="os[]" value="red"> Red</label>
					<label>	
						<input type="checkbox" id="colors" name="os[]" value="yellow"> Yellow</label>
					<div>
						<button>Send</button>
					</div>

				<label>Which cities have you visited?</label>
					<select id="cities" name="cities[]" multiple>
					    <option value="1">Houston</option>
					    <option value="2">New York</option>
					    <option value="3">Los Angeles</option>
					</select>

					<div>
						<button>Submit</button>
					</div>

		</form>

	</body>
</html>
