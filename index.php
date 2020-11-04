<html>
	<head>CPSC Group 92 Project</head>

	<body>
		<div class="op-container">
			<h2>Add Visiting Customer</h2>
			<form method="POST" action="index.php">
				Name: <input type="text" name="cName"><br>
				Number: <input type="text" name="cNum"><br>
				<input type="submit" value="Add" name="addCustomer">
			</form>
		</div>
	</body>
<?php
	$success = True;
	$db_conn = NULL;
	$show_alerts = true;

	function showAlert($alert) {
		global $show_alerts;

		if($show_alerts) {
			echo "<script type='text/javascript'>alert('$alert')</script>";
		}
	}

	function connectDB() {
		global $db_conn;

		$db_conn = OCILogon("ora_cwl", "aSTUNUM",  "dbhost.students.cs.ubc.ca:1522/stu");

		if($db_conn) {
			showAlert("DB Connected");
			return true;
		} else {
			showAlert("DB Connection Failed");
			$e = OCI_Error();
			echo htmlentities($e['message']);
			return false;
		}
	}

	function disconnectDB() {
		global $db_conn;
		showAlert("Disconnected From DB");
		OCILogoff($db_conn);
	}

	function executeSQL($sql) {
		global $db_conn, $success;

		$statement = OCIParse($db_conn, $sql);

		if (!$statement) {
			echo "Could not parse statement '$sql'<br>";
			$e = OCIError();
			echo htmlentities($e['message']):
			$success = False;
		}

		$r = OCIExecute($sql, OCI_DEFAULT);
		if(!$r) {
			echo "Could not execute statement '$sql'<br>";
			$e = OCIError();
			echo htmlentities($e['message']);
			$success = False;
		}

		return $statement;

	}

	function initTables() {
		global $db_conn;

		executeSQL("CREATE TABLE CustomerPartyContact
					(pNumber		VARCHAR(13),
					name			VARCHAR(20),
					PRIMARY KEY (pNumber))");
		OCICommit($db_conn);
	}

	function handleAddCustomer() {
		global $db_conn;

		$result  = executeSQL("INSERT INTO customerPartyContact(pNumber, name)
		VALUES (" . $_POST['cNum'] . ", " . $_POST['cName'] . ")");
		OCICommit($db_conn);
	}

	function handlePOSTRequest() {
		if(connectDB()) {
			if(array_key_exists("addCustomer")) {
				handleAddCustomer();
			}
			disconnectDB();
		}
	}

	function handleGETRequest() {

	}

	if($_POST) {
		handlePOSTRequest();
	}else if($_GET) {
		handleGETRequest();
	}
?>
</html>
