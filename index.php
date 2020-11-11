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
			<div id="initTablesSuccess"/>
			</div>
            <div class="op-container">
            <form method="GET" action="index.php">
                <input type="hidden" value="populateTables" name="populateTables">
                <input type="submit" class="button" value="Populate Tables" name="populateTables">
            </form>
            <div id="populateTablesSuccess"/>
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
			<div id="addCustomerSuccess"/>
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
                    <div>
                        <p>StartTime: </p>
                        <input type="text" name="startTime">
                    </div>
                    <div>
                        <p>EndTime: </p>
                        <input type="text" name="endTime">
                    </div>
                    <div>
                        <p>Duration: </p>
                        <input type="text" name="duration">
                    </div>
					<input type="submit" class="submit button" value="Add" name="addShift">
				</form>
				<div id="addShiftSuccess"/>

                <div class="op-container">
                    <h2>Add Business</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>url: </p>
                            <input type="text" name="url">
                        </div>
                        <div>
                            <p>name: </p>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <p>capacity: </p>
                            <input type="text" name="capacity">
                        </div>
                        <div>
                            <p>business ID: </p>
                            <input type="text" name="bid">
                        </div>
                        <div>
                            <p>Address: </p>
                            <input type="text" name="address">
                        </div>
                        <input type="submit" class="submit button" value="Add" name="addBusiness">
                    </form>
                    <div id="addBusinessSuccess"/>
                </div>

                <div class="op-container">
                    <h2>Add Transaction</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>transaction ID:</p>
                            <input type="text" name="tid">
                        </div>
                        <div>
                            <p>BusinessID:</p>
                            <input type="text" name="bid">
                        </div>
                        <div>
                            <p>amount:</p>
                            <input type="text" name="amount">
                        </div>
                        <div>
                            <p>date:</p>
                            <input type="text" name="date">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addTransaction">
                    </form>
                    <div id="addTransactionSuccess"/>
                </div>

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
				<div id="displayVisitingCustomerSuccess"/>
				<div id="visitingCustomerTable"/>
			</div>
			<div class="op-container">
				<h2>Display the Tuples in Scheduled Shift Table</h2>
				<form method="GET" action="index.php">
					<input type="hidden" id="displayScheduledShift" name="displayScheduledShift">
					<input type="submit" class="button" value="Get" name="displayScheduledShift"></p>
				</form>
				<div id="displayScheduledShiftSuccess"/>
			</div>

            <div class="op-container">
                <h2>Display the Tuples in Business Table</h2>
                <form method="GET" action="index.php">
                    <input type="hidden" id="displayBusinesses" name="displayBusinesses">
                    <input type="submit" class="button" value="Get" name="displayBusinesses"></p>
                </form>
                <div id="displayBusinessesSuccess"/>
            </div>

		</div>
	</body>

	 <script type="text/javascript">
		function printToElement(id, text) {
			id.innerHTML += text;
		}

		function resetElementText(id) {
			document.getElementById(id).innerHTML = '';
		}
	 </script>
<?php
	$success = True;
	$db_conn = NULL;
	$show_alerts = False;

	function showAlert($alert) {
		global $show_alerts;

		if($show_alerts) {
			echo "<script type='text/javascript'>alert('$alert')</script>";
		}
	}

	function callJSFunc($func) {
		echo "<script type='text/javascript'>" . $func. "</script>";
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

	function executeSQL($sql, $successElement) {
		global $db_conn, $success;

		$statement = OCIParse($db_conn, $sql);

		if (!$statement) {
			$e = OCI_Error($db_conn);
			callJSFunc("printToElement(" . $successElement .
					   ", `<p class='error'> Error parsing request.<br>" .
					   htmlentities($e['message']) . "</p>`);");
			return $statement;
		}

		$r = OCIExecute($statement, OCI_DEFAULT);
		if(!$r) {
			$e = oci_error($statement);
			callJSFunc("printToElement(" . $successElement .
					   ", `<p class='error'> Error executing request.<br>" .
					   htmlentities($e['message']) . "</p>`);");
			return $statement;
		}

		callJSFunc("printToElement(" . $successElement . ", `<p class='success'> Your request was executed successfully.</p>`)");
		return $statement;

	}

	function initTables() {
		global $db_conn;
		$result = executeSQL("ALTER USER ora_omurovec quota unlimited on USERS");
		$result = executeSQL("grant select, insert on customer to user;")

		$initFile = fopen("tables.sql", 'r') or showAlert("Unable to open file tables.sql");
		$fileString = fread($initFile, filesize("tables.sql"));
		$sqlArr = preg_split("/;/", $fileString);

		foreach($sqlArr as &$statement) {
			if(strlen($statement) > 1) {
				callJSFunc("resetElementText('initTablesSuccess')");
				executeSQL($statement, "initTablesSuccess");
			}
		}

		fclose($initFile);
		OCICommit($db_conn);
	}

	function populateTables() {
        global $db_conn;
        $popFile = fopen("InsertionsForPopulation.sql", 'r') or showAlert("Unable to open file tables.sql");
        $fileString = fread($popFile, filesize("InsertionsForPopulation.sql"));
        $sqlArr = preg_split("/;/", $fileString);

        foreach($sqlArr as &$statement) {
            if(strlen($statement) > 1) {
                executeSQL($statement, "populateTablesSuccess");
            }
        }

        fclose($popFile);
        OCICommit($db_conn);
    }

	function handleAddCustomer() {
        global $db_conn;

        $result  = executeSQL("INSERT INTO customerPartyContact(pNumber, name)
		VALUES ('" . $_POST['cNum'] . "', '" . $_POST['cName'] . "')", "addCustomerSuccess");

        OCICommit($db_conn);
    }
	
	function handleAddShift() {
		global $db_conn;

		$result  = executeSQL("INSERT INTO ScheduledShift(shiftID, bid, email, Wage)
		VALUES ('" . $_POST['shiftID'] . "', '" . $_POST['bid'] . "', '" . $_POST['email'] . "', '" . $_POST['Wage'] . "')",
		"addShiftSuccess");
		$result = exectuteSQL("INSERT INTO ScheduledTime(shiftID,startTime,endTime,duration)","addShiftSuccess");
		OCICommit($db_conn);
	}

	function handleAddBusiness() {
	    global $db_conn;

	    $result = executeSQL("INSERT INTO Business(url, name, capacity, bid, address) VALUES ('" . $_POST['url'] . "
	    ', '" . $_POST['name'] . "', '" . $_POST['capacity'] . "', '" . $_POST['bid'] . "', '" . $_POST['address'] . "')",
	    "addBusinessSuccess");

	    OCICommit($db_conn);
    }

    function handleAddTransaction() {
	    global $db_conn;

	    $result = executeSQL("INSERT INTO Business(url,name,capacity,bid,address) VALUES (" .
            $_POST['tid'] . "," . $_POST['bid'] . "," . $_POST['amount'] . "," . $_POST['date'] .  ")",
            "AddTransactionSuccess");

	    OCICommit($db_conn);
    }

	function displayScheduledShift() {
		$result = executeSQL("SELECT * FROM ScheduledShift", "displayScheduledShiftSuccess");
		echo "<table>";
		echo "<tr><th>ID</th><th>Name</th></tr>";

		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
		}

		echo "</table>";
	}

	function displayVisitingCustomer() {
		$result = executeSQL("SELECT * FROM customerPartyContact", "displayVisitingCustomerSuccess");
		$elementID = "visitingCustomerTable";
		$tableString = "";

		$tableString .= '<table><tr><th>Name</th><th>Phone Number</th></tr>';
		while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			$tableString .= '<tr><td>' . $row[0] . '</td><td>' . $row[1] . '</td></tr>';
		}
		$tableString .= '</table>';

		callJSFunc("printToElement(" . $elementID . ", '" . $tableString . "');");
	}

	function displayBusinesses() {
	    $result = executeSQL("SELECT * FROM Business", "displayBusinessesSuccess");
	    $elementID = "BusinessesTable";
	    $tableString = "";

        $tableString .= '<table><tr><th>url</th><th>name</th><th>capacity</th><th>bid</th><th>address</th></tr>';
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            $tableString .= '<tr><td>' . $row[0] . '</td><td>' . $row[1] . '</td>
                <td>' . $row[2] . '</td><td>' . $row[3] . '</td><td>' . $row[4] . '</td></tr>';
        }
        $tableString .= '</table>';

        callJSFunc("printToElement(" . $elementID . ", '" . $tableString . "');");
    }

	function handlePOSTRequest() {
		if(connectDB()) {
			if(array_key_exists("addCustomer", $_POST)) {
				handleAddCustomer();
			} else if(array_key_exists("addShift", $_POST)) {
				handleAddShift();
			} else if(array_key_exists("addBusiness", $_POST)) {
			    handleAddBusiness();
            } else if(array_key_exists("addTransaction" , $_POST)) {
			    handleAddTransaction();
            }
			disconnectDB();
		}
	}

	function handleGETRequest() {
		if(connectDB()) {
			if(array_key_exists('initTables', $_GET)) {
				initTables();
			} else if (array_key_exists('populateTables', $_GET)) {
			    populateTables();
			}else if (array_key_exists('displayScheduledShift', $_GET)) {
				displayScheduledShift();
			} else if (array_key_exists('displayVisitingCustomer', $_GET)) {
				displayVisitingCustomer();
			} else if (array_key_exists('displayBusinesses', $_GET)) {
			    displayBusinesses();
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
