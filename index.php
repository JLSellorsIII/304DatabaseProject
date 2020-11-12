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
				<h2>Add Visiting Customer</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Time: </p>
						<input type="datetime-local" name="startTime">
					</div>
					<div>
						<p>Duration (hours): </p>
						<input type="number" name="duration">
					</div>
					<div>
						<p>Customer: </p>
						<select id="customerSelect" name="customer"> </select>
					</div>
					<div>
						<p>Business: </p>
						<select id="businessSelect" name="business">
						</select>
					</div>
					<input class="submit button" type="submit" value="Add" name="addVisitor">
				</form>
				<div id="addVisitorSuccess"/>
			</div>
			<div class="op-container">
				<h2>Add Warning Violation</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Law: </p>
						<input type="text" name="law">
					</div>
					<div>
						<p>Description: </p>
						<input type="textarea" name="desc">
					</div>
					<div>
						<p>Level: </p>
						<input type="text" name="severity">
					</div>
					<input class="submit button" type="submit" value="Add" name="addWarning">
				</form>
				<div id="addWarningSuccess"/>
			</div>
			<div class="op-container">
				<h2>Add Fine Violation</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Law: </p>
						<input type="text" name="law">
					</div>
					<div>
						<p>Description: </p>
						<input type="textarea" name="desc">
					</div>
					<div>
						<p>Amount</p>
						<input type="text" name="amount">
					</div>
					<input class="submit button" type="submit" value="Add" name="addFine">
				</form>
				<div id="addFineSuccess"/>
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
            </div>

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
                            <p>date(dd.mmm.yyyy:hh:mm:ss):</p>
                            <input type="text" name="date">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addTransaction">
                    </form>
                    <div id="addTransactionSuccess"/>
                </div>

                <div class="op-container">
                    <h2>Add Covid Supplies</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>Quantity:</p>
                            <input type="text" name="quantity">
                        </div>
                        <div>
                            <p>CovidSupplies ID:</p>
                            <input type="text" name="csid">
                        </div>
                        <div>
                            <p>Business ID:</p>
                            <input type="text" name="bid">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addCovidSupplies">
                    </form>
                    <div id="addCovidSuppliesSuccess"/>
                </div>

                <div class="op-container">
                    <h2>Add Perishable Consumable</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>Expiration Date (dd.mmm.yyyy:hh:mm:ss):</p>
                            <input type="text" name="expirationDate">
                        </div>
                        <div>
                            <p>ID:</p>
                            <input type="text" name="cid">
                        </div>
                        <div>
                            <p>Business ID:</p>
                            <input type="text" name="bid">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addPerishableConsumable">
                    </form>
                    <div id="addPerishableSuppliesSuccess"/>
                </div>

            <div class="op-container">
                <h2>Add nonPerishable Consumable</h2>
                <form method="POST" action="index.php">
                    <div>
                        <p>ID:</p>
                        <input type="text" name="cid">
                    </div>
                    <div>
                        <p>Business ID:</p>
                        <input type="text" name="bid">
                    </div>
                    <input class="submit button" type="submit" value="Add" name="addNonPerishableConsumable">
                </form>
                <div id="addNonPerishableSuppliesSuccess"/>
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
				<h2>Display the Tuples in Selected Table</h2>
				<form method="POST" action="index.php">
					<input type="hidden" id="displayTable" name="displaySelectedTable">
						<select id="tableSelect" name="table">
							<option value="scheduledShift">ScheduledShift</option>
							<option value="customerPartyContact">CustomerPartyContact</option>
							<option value="violation">Violation</option>
							<option value="warning">Warning</option>
							<option value="fine">Fine</option>
							<option value="visitedLength">VisitedLength</option>
							<option value="visitedTime">VisitedTime</option>
                            <option value="business">Business</option>
                            <option value="transaction">Transaction</option>
						</select>
					<input type="submit" class="button" value="Get" name="displayTable"></p>
				</form>
				<div id="displayTableSuccess"/>
				<div id="mainTable"/>
			</div>
		</div>
	</body>

	 <script type="text/javascript">
		function printToElement(id, text) {
			if(typeof id === "string") {
				document.getElementById(id).innerHTML += text;
			}else {
				id.innerHTML += text;
			}
		}

		function resetElementText(id) {
			if(typeof id === "string") {
				document.getElementById(id).innerHTML = '';
			}else {
			id.innerHTML = '';
			}
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
			if($successElement != null) {
				callJSFunc("printToElement(" . $successElement .
						", `<p class='error'> Error parsing request.<br>" .
						htmlentities($e['message']) . "</p>`);");
			}
			return $statement;
		}

		$r = OCIExecute($statement, OCI_DEFAULT);
		if(!$r) {
			$e = oci_error($statement);
			if($successElement != null) {
				callJSFunc("printToElement(" . $successElement .
						", `<p class='error'> Error executing request.<br>" .
						htmlentities($e['message']) . "</p>`);");
			}
			return $statement;
		}

		if($successElement != null) {
			callJSFunc("printToElement(" . $successElement . ", `<p class='success'> Your request was executed successfully.</p>`)");
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


	function handleAddWarning() {
		global $db_conn;
		// TODO: Check if law already exists before setting it
		executeSQL("INSERT INTO Violation(law, description)
					VALUES ('". $_POST['law'] . "', '" . $_POST['desc'] . "')",
					"addWarningSuccess");
		executeSQL("INSERT INTO Warning(law, severity)
					VALUES ('". $_POST['law'] . "', " . $_POST['severity'] . ")",
					"addWarningSuccess");
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

	    $result = executeSQL("INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES ('" .
            $_POST['tid'] . "', '" . $_POST['bid'] . "', '" . $_POST['amount'] . "', '" . $_POST['date'] .  "')",
            "addTransactionSuccess");

	    OCICommit($db_conn);
    }

    function handleAddCovidSupplies() {
        global $db_conn;

        $result = executeSQL("INSERT INTO CovidSupplies(quantity, csid, bid) VALUES ('" .
            $_POST['quantity'] . "', '" . $_POST['csid'] . "', '" . $_POST['bid'] . "')",
            "addCovidSuppliesSuccess");

        OCICommit($db_conn);
    }

function handleAddNonPerishableConsumable() {
    global $db_conn;

    $result = executeSQL("INSERT INTO CovidSupplies(cid, bid) VALUES (
 '" . $_POST['csid'] . "', '" . $_POST['bid'] . "')",
        "addNonPerishableConsumableSuccess");

    OCICommit($db_conn);
}

function handleAddPerishableConsumable() {
    global $db_conn;

    $result = executeSQL("INSERT INTO PerishableConsumable(expirationDate, cid, bid) VALUES ('" .
        $_POST['expirationDate'] . "', '" . $_POST['cid'] . "', '" . $_POST['bid'] . "')",
        "addPerishableConsumableSuccess");

    OCICommit($db_conn);
}

	function handleAddFine() {
		global $db_conn;
		// TODO: Check if law already exists before setting it
		executeSQL("INSERT INTO Violation(law, description)
					VALUES ('". $_POST['law'] . "', '" . $_POST['desc'] . "')",
					"addFineSuccess");
		executeSQL("INSERT INTO Fine(law, amount)
					VALUES ('". $_POST['law'] . "', " . $_POST['amount'] . ")",
					"addFineSuccess");
		OCICommit($db_conn);
	}

	function handleAddVisitor() {
		//TODO: debug "not a valid month", waiting for addBusiness
		global $db_conn;
		$endTime = $_POST['startTime'] + $_POST['duration'];
		$startTime = date("Y-m-d H:i:s", strtotime($_POST['startTime']));
		$endTime = date("Y-m-d H:i:s",
						(strtotime($_POST['startTime']) + $_POST["duration"] * 3600));
		executeSQL("INSERT INTO VisitedTime(arrivalTime, pNumber, bid, duration)
					VALUES ('"
				   . $startTime . "', '"
				   . $_POST['customer'] . "', '"
				   . $_POST['business'] . "', '"
				   . $_POST['duration'] . "')",
					"addVisitorSuccess");
		executeSQL("INSERT INTO VisitedLength(arrivalTime, Duration, endTime)
					VALUES ('"
				   . $startTime . "', '"
				   . $_POST['duration'] . "', '"
				   . $endTime . "')",
					"addVisitorSuccess");
		OCICommit($db_conn);
	}

	function printTable($result, $headers, $altHeaders, $elem) {
		$tableString = "<table><tr>";
		if($altHeaders != null) {
			foreach($altHeaders as &$header) {
				$tableString .= "<th>" . $header . "</th>";
			}
		}else {
			foreach($headers as &$header) {
				$tableString .= "<th>" . $header . "</th>";
			}
		}
		$tableString .= "</tr>";

		while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
			$tableString .= "<tr>";
			foreach($headers as &$header) {
				$tableString .= "<td>" . $row[strtoupper($header)] . "</td>";
			}
			$tableString .= "</tr>";
		}
		$tableString .= "</table>";
		callJSFunc("printToElement(" . $elem . ", '" . $tableString . "')");
	}

	function handleDisplayTable() {
		switch($_POST['table']) {
			case "scheduledShift":
				$result = executeSQL("SELECT * FROM ScheduledShift", "displayTableSuccess");
				$headers = ["shiftID", "bid", "Email", "Wage"];
				$altHeaders = null;
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "customerPartyContact":
				$result = executeSQL("SELECT * FROM CustomerPartyContact", "displayTableSuccess");
				$headers = ["name", "pNumber"];
				$altHeaders = ["Name", "Phone Number"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "violation":
				$result = executeSQL("SELECT * FROM Violation", "displayTableSuccess");
				$headers = ["law", "description"];
				$altHeaders = ["Law", "Description"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "warning":
				$result = executeSQL("SELECT * FROM Warning", "displayTableSuccess");
				$headers = ["law", "severity"];
				$altHeaders = ["Law", "Severity"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "fine":
				$result = executeSQL("SELECT * FROM Fine", "displayTableSuccess");
				$headers = ["law", "amount"];
				$altHeaders = ["Law", "Amount"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "visitedLength":
				$result = executeSQL("SELECT * FROM VisitedLength", "displayTableSuccess");
				$headers = ["arrivalTime", "Duration", "endTime"];
				$altHeaders = ["Start Time", "Duration", "End Time"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "visitedTime":
				$result = executeSQL("SELECT * FROM VisitedTime", "displayTableSuccess");
				$headers = ["arrivalTime", "pNumber", "bid", "Duration"];
				$altHeaders = ["Start Time", "Phone Number", "Business ID", "Duration"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
            case "business":
                $result = executeSQL("SELECT * FROM Business" , "displayTableSuccess");
                $headers = ["url", "name", "capacity", "bid", "address"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
            case "transaction":
                $result = executeSQL("SELECT * FROM RecordedTransaction", "displayTableSuccess");
                $headers = ["tid", "bid", "amount", "transactionDate"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
		}
	}


	function handlePOSTRequest()
    {
        if (connectDB()) {
            if (array_key_exists("addCustomer", $_POST)) {
                handleAddCustomer();
            } else if (array_key_exists("addShift", $_POST)) {
                handleAddShift();
            } else if (array_key_exists('displayTable', $_POST)) {
                handleDisplayTable();
            } else if (array_key_exists('addWarning', $_POST)) {
                handleAddWarning();
            } else if (array_key_exists('addFine', $_POST)) {
                handleAddFine();
            } else if (array_key_exists('addVisitor', $_POST)) {
                handleAddVisitor();
            } else if (array_key_exists("addBusiness", $_POST)) {
                handleAddBusiness();
            } else if (array_key_exists("addTransaction", $_POST)) {
                handleAddTransaction();
            } else if (array_key_exists("addCovidSupplies", $_POST)) {
                handleAddCovidSupplies();
            } else if (array_key_exists("addNonPerishableConsumable", $_POST)) {
                handleAddNonPerishableConsumable();
            } else if (array_key_exists("addPerishableConsumable", $_POST)) {
                handleAddPerishableConsumable();
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
			}
			disconnectDB();
		}
	}

	if($_POST) {
		handlePOSTRequest();
	}else if($_GET) {
		handleGETRequest();
	}

	function fillCustomerSelect() {
		if(connectDB()) {
			$result = executeSQL("SELECT * FROM CustomerPartyContact", null);
			$optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='" . $row["PNUMBER"] . "'>" .
								$row["NAME"] . " - " . $row["PNUMBER"] . "</option>";
			}
			callJSFunc("printToElement('customerSelect', `" . $optionString . "`)");
		}
		disconnectDB();
	}

	function fillBusinessSelect() {
		if(connectDB()) {
			$result = executeSQL("SELECT * FROM Business", null);
			$optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='" . $row["BID"] . "'>" .
					$row["NAME"] . " - " . $row["ADDRESS"] . "</option>";
			}
			callJSFunc("printToElement('businessSelect', `" . $optionString . "`)");
		}
		disconnectDB();
	}

	fillCustomerSelect();
	fillBusinessSelect();
?>
</html>
