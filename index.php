<html>
	<link rel="stylesheet" href="styles.css"/>
	<head>
		<title>CPSC Group 92 Project</title>
	</head>

	<body>
		<div class="header">
			<a href="#home">Home</a>
			<a href="#additions">Add</a>
			<a href="#updates">Update</a>
			<a href="#deletes">Delete</a>
			<a href="#queries">Query</a>
		</div>
		<div id="home">
			<h1>Home</h1>
			<div class="op-container">
				<form method="GET" action="index.php">
					<input type="hidden" value="initTables" name="initTables">
					<input type="submit" class="button" value="Reset Tables" name="initTables">
				</form>
			</div>
		</div>
		<div id="additions">
			<h1>Additions</h1>
			<div class="op-container">
				<h2>Add Visiting Customer</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Name:</p>
						<input type="text" name="cName">
					</div>
					<div>
						<p>Number:</p>
						<input type="text" name="cNum">
					</div>
					<input class="submit button" type="submit" value="Add" name="addCustomer">
				</form>
			</div>
			<div class="op-container">
				<h2>Add Shift</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Shift ID: </p>
						<input type="text" name="shiftID">
					</div>
					<div>
						<p>Business ID: </p>
						<input type="text" name="bid">
					</div>
					<div>
						<p>Email: </p>
						<input type="text" name="email">
					</div>
					<div>
						<p>Wage: </p>
						<input type="text" name="Wage">
					</div>
					<input type="submit" class="submit button" value="Add" name="addShift">
				</form>
			</div>
		</div>
		<div id="updates">
			<h1>Updates</h1>
		</div>
		<div id="deletes">
			<h1>Deletes</h1>
		</div>
		<div id="queries">
			<h1>Queries</h1>
			<div class="op-container">
				<h2>Display the Tuples in Visiting Customer Table</h2>
				<form method="GET" action="index.php">
					<input type="hidden" id="displayVisitingCustomer" name="displayVisitingCustomer">
					<input type="submit" class="button" value="Get" name="displayVisitingCustomer"></p>
				</form>
			</div>
			<div class="op-container">
				<h2>Display the Tuples in Scheduled Shift Table</h2>
				<form method="GET" action="index.php">
					<input type="hidden" id="displayScheduledShift" name="displayScheduledShift">
					<input type="submit" class="button" value="Get" name="displayScheduledShift"></p>
				</form>
			</div>
		</div>
	</body>

<?php
	$success = True;
	$db_conn = NULL;
	$show_alerts = True;

	function showAlert($alert) {
		global $show_alerts;

		if($show_alerts) {
			echo "<script type='text/javascript'>alert('$alert')</script>";
		}
	}

	function connectDB() {
		global $db_conn;

		$db_conn = OCILogon("ora_omurovec", "a89448617",  "dbhost.students.cs.ubc.ca:1522/stu");

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
			echo "Could not parse statement " . $sql . "<br>";
			$e = OCI_Error($db_conn);
			echo htmlentities($e['message']);
			$success = False;
		}

		$r = OCIExecute($statement, OCI_DEFAULT);
		if(!$r) {
			echo "<br>Could not execute statement " . $sql . "<br>";
			$e = oci_error($statement);
			echo htmlentities($e['message']);
			$success = False;
		}

		return $statement;

	}

	function initTables() {
		global $db_conn;
		$initFile = fopen("tables.sql", 'r') or showAlert("Unable to open file tables.sql");
		$fileString = fread($initFile, filesize("tables.sql"));
		$sqlArr = preg_split("/;/", $fileString);

		foreach($sqlArr as &$statement) {
			if(strlen($statement) > 1) {
				executeSQL($statement);
			}
		}

		fclose($initFile);
		OCICommit($db_conn);
	}

	function handleAddCustomer() {
		global $db_conn;

		$result  = executeSQL("INSERT INTO customerPartyContact(pNumber, name)
		VALUES (" . $_POST['cNum'] . ", " . $_POST['cName'] . ")");
		OCICommit($db_conn);
	}
	
	function handleAddShift() {
		global $db_conn;

		$result  = executeSQL("INSERT INTO ScheduledShift(shiftID, bid, email, Wage)
		VALUES (" . $_POST['shiftID'] . ", " . $_POST['bid'] . ", " . $_POST['email'] . ", " . $_POST['Wage'] . ")");
		OCICommit($db_conn);
	}

	function handlePOSTRequest() {
		if(connectDB()) {
			if(array_key_exists("addCustomer")) {
				handleAddCustomer();
			} else if(array_key_exists("addShift")) {
				handleAddShift();
			}
			disconnectDB();
		}
	}

	function handleGETRequest() {
		if(connectDB()) {
			if(array_key_exists('initTables', $_GET)) {
				initTables();
			} else if (array_key_exists('displayScheduledShift', $_GET)) {
				$result = executePlainSQL("SELECT * FROM ScheduledShift");
				printResult($result);
			} else if (array_key_exists('displayVisitingCustomer', $_GET)) {
				$result = executePlainSQL("SELECT * FROM customerPartyContact");
				printResult($result);
			} 
			disconnectDB();
		}

	}

	if($_POST) {
		handlePOSTRequest();
	}else if($_GET) {
		handleGETRequest();
	}
?>
</html>
