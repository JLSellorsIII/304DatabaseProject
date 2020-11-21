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
				<h2>Add Customer Contact</h2>
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
						<select class="customerSelect" name="customer"> </select>
					</div>
					<div>
						<p>Business: </p>
						<select class="businessSelect" name="business">
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
                        <p>Business: </p>
                        <select class="businessSelect" name="business">
                        </select>
                    </div>
                    <div>
                        <p>Account: </p>
                        <select class="accountSelect" name="account">
                        </select>
                    </div>
					<div>
						<p>Wage: </p>
						<input type="text" name="Wage">
					</div>
                    <div>
                        <p>StartTime: </p>
                        <input type="datetime-local" name="startTime">
                    </div>
                    <div>
                        <p>EndTime: </p>
                        <input type="datetime-local" name="endTime">
                    </div>
					<input type="submit" class="submit button" value="Add" name="addShift">
				</form>
				<div id="addShiftSuccess"/>
            </div>
			<div class="op-container">
				<h2>Add Tracked Violation</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Business: </p>
						<select class="businessSelect" name="business">
                        </select>
					</div>
					<div>
						<p>Account: </p>
						<select class="accountSelect" name="account">
                        </select>
					</div>
					<div>
						<p>Violation: </p>
						<select class="violationSelect" name="violation">
                        </select>
					</div>
					<div>
						<p>Time: </p>
						<input type="datetime-local" name="time">
					</div>
                    <div>
                        <p>Paid? </p>
						<select id="paid" name="paid">
                            <option value=null>N/A</option>
                            <option value=1>Yes</option>
                            <option value=0>No</option>
                        </select>
                    </div>
					<input type="submit" class="submit button" value="Add" name="addTracks">
				</form>
				<div id="addTracksSuccess"></div>
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
                            <p>Business: </p>
                            <select class="businessSelect" name="business">
                            </select>
                        </div>
                        <div>
                            <p>amount:</p>
                            <input type="text" name="amount">
                        </div>
                        <div>
                            <p>date:</p>
                            <input type="datetime-local" name="date">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addTransaction">
                    </form>
                    <div id="addTransactionSuccess"/>
                </div>
				
				<div class="op-container">
                    <h2>Add Account</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>Email Address:</p>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <p>Password:</p>
                            <input type="text" name="password">
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addAccount">
                    </form>
                    <div id="addAccountSuccess"/>
                </div>
				
				<div class="op-container">
                    <h2>Add Write Permission to Account</h2>
                    <form method="POST" action="index.php">
                        <div>
                            <p>Email Address: </p>
                            <select class="accountSelect" name="account">
							</select>
                        </div>
                        <div>
                            <p>Business: </p>
                            <select class="businessSelect" name="business">
							</select>
                        </div>
						<div>
                            <p>Write Permission: </p>
                            <select id="permission" name="permission">
								<option value=null>N/A</option>
								<option value=1>Yes</option>
								<option value=0>No</option>
							</select>
                        </div>
                        <input class="submit button" type="submit" value="Add" name="addAccess">
                    </form>
                    <div id="addAccessSuccess"/>
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
                            <p>Business: </p>
                            <select class="businessSelect" name="business">
                            </select>
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
                            <p>Business: </p>
                            <select class="businessSelect" name="business">
                            </select>
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
                        <p>Business: </p>
                        <select class="businessSelect" name="business">
                        </select>
                    </div>
                    <input class="submit button" type="submit" value="Add" name="addNonPerishableConsumable">
                </form>
                <div id="addNonPerishableSuppliesSuccess"/>
            </div>

		</div>
		<div id="updates">
			<h1>Updates</h1>
			<div class="op-container">
				<h2>Update Paid Tracked Fine</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Violation: </p>
						<select class="trackedFineSelect" name="fine">
                        </select>
					</div>
                    <div>
                        <p>Paid? </p>
						<select id="paid" name="paid">
                            <option value=1>Yes</option>
                            <option value=0>No</option>
                        </select>
                    </div>
					<input type="submit" class="submit button" value="Update" name="updatePaid">
				</form>
				<div id="updatePaidSuccess"></div>
            </div>
            <div class="op-container">
				<h2>Update Fine Amount</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Violation: </p>
						<select class="fineSelect" name="fine">
                        </select>
					</div>
                    <div>
                        <p>New Amount: </p>
                        <input type="text" name="amount" />
                    </div>
					<input type="submit" class="submit button" value="Update" name="updateFineAmount">
				</form>
				<div id="updateFineAmountSuccess"></div>
            </div>
            <div class="op-container">
				<h2>Update Warning Level</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Violation: </p>
						<select class="warningSelect" name="warning">
                        </select>
					</div>
                    <div>
                        <p>New Level: </p>
                        <input type="text" name="severity" />
                    </div>
					<input type="submit" class="submit button" value="Update" name="updateWarningLevel">
				</form>
				<div id="updateWarningLevelSuccess"></div>
            </div>
            <div class="op-container">
				<h2>Update Violation Description</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Violation: </p>
						<select class="violationSelect" name="violation">
                        </select>
					</div>
                    <div>
                        <p>New Description: </p>
                        <input type="text" name="desc" />
                    </div>
					<input type="submit" class="submit button" value="Update" name="updateViolationDesc">
				</form>
				<div id="updateViolationDescSuccess"></div>
            </div>
			<div class="op-container">
				<h2>Update Business Address</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Business: </p>
						<select class="businessSelect" name="business">
                        </select>
					</div>
                    <div>
                        <p>New Address: </p>
                        <input type="text" name="address" />
                    </div>
					<input type="submit" class="submit button" value="Update" name="updateBusinessAddress">
				</form>
				<div id="updateBusinessAddressSuccess"></div>
            </div>
			<div class="op-container">
				<h2>Update Account Email</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Account: </p>
						<select class="accountSelect" name="account">
                        </select>
					</div>
                    <div>
                        <p>New Email: </p>
                        <input type="text" name="newEmail" />
                    </div>
					<input type="submit" class="submit button" value="Update" name="updateAccountEmail">
				</form>
				<div id="updateAccountEmailSuccess"></div>
            </div>
		</div>
		<div id="deletes">
			<h1>Deletes</h1>
			<div class="op-container">
				<h2>Delete Fine</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Fine: </p>
						<select class="fineSelect" name="fine">
						</select>
					</div>
					<input class="submit button" type="submit" value="Delete" name="deleteFine">
				</form>
				<div id="deleteFineSuccess"/>
			</div>
			<div class="op-container">
				<h2>Delete Warning</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Warning: </p>
						<select class="warningSelect" name="warning">
						</select>
					</div>
					<input class="submit button" type="submit" value="Delete" name="deleteWarning">
				</form>
				<div id="deleteWarningSuccess"/>
			</div>
			<div class="op-container">
				<h2>Delete Account</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Account: </p>
						<select class="accountSelect" name="account">
						</select>
					</div>
					<input class="submit button" type="submit" value="Delete" name="deleteAccount">
				</form>
				<div id="deleteAccountSuccess"/>
			</div>
			<div class="op-container">
				<h2>Delete Business</h2>
				<form method="POST" action="index.php">
					<div>
						<p>Business: </p>
						<select class="businessSelect" name="business">
						</select>
					</div>
					<input class="submit button" type="submit" value="Delete" name="deleteBusiness">
				</form>
				<div id="deleteBusinessSuccess"/>
			</div>

            <div class="op-container">
                <h2>Delete Shift</h2>
                <form method="POST" action="index.php">
                    <div>
                        <p>Shift: </p>
                        <select class="shiftSelect" name="shift">
                        </select>
                    </div>
                    <input class="submit button" type="submit" value="Delete" name="deleteShift">
                </form>
                <div id="deleteShiftSuccess"/>
            </div>

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
                            <option value="covidSupplies">CovidSupplies</option>
                            <option value="nonPerishableConsumables">NonPerishableConsumables</option>
                            <option value="perishableConsumables">PerishableConsumables</option>
							<option value="account">Account</option>
							<option value="tracksDate">TracksDate</option>
							<option value="tracksPaid">TracksPaid</option>
							<option value="accesses">Accesses</option>
						</select>
					<input type="submit" class="button" value="Get" name="displayTable">
				</form>
				<div id="displayTableSuccess"></div>
				<div id="mainTable"></div>
			</div>
            <div class="op-container">
                <h2>Get Covid Supplies with Quantity below X</h2>
				<form method="POST" action="index.php">
                    <div>
                        <p>X:</p>
                        <input type="text" name="x">
                    </div>
					<input type="submit" class="submit button" value="Get" name="getCovidSuppliesBelowX">
                </form>
                <div id="getCovidSuppliesBelowXSuccess"></div>
                <div id="getCovidSuppliesTable"></div>
            </div>
            <div class="op-container">
                <h2>Get All Customers who Visited Business</h2>
                <form method="POST" action="index.php">
                    <p>Business: </p>
                    <select class="businessSelect" name="business">
                    </select>
                    <input type="submit" class="submit button" value="Get" name="getCustomersWhoVisitedBusiness">
                </form>
                <div id="getCustomersWhoVisitedBusinessSuccess"></div>
                <div id="getCustomersWhoVisitedBusinessTable"></div>
            </div>
            <div class="op-container">
                <h2>Get Businesses With Capacity Between X And Y</h2>
                <form method="POST" action="index.php">
                    <div>
                        <p>X (Lower bound):</p>
                        <input type="number" name="x">
                    </div>
                    <div>
                        <p>Y (Upper bound):</p>
                        <input type="number" name="y">
                    </div>
                    <input type="submit" class="submit button" value="Get" name="getBusinessesWithCapacityBetweenXAndY">
                </form>
                <div id="getBusinessesWithCapacityBetweenXAndYSuccess"></div>
                <div id="getBusinessesWithCapacityBetweenXAndYTable"></div>
            </div>

            <div class="op-container">
                <h2>Get Customers Who visited all Businesses</h2>
                <form method="POST" action="index.php">
                    <input type="submit" class="submit button" value="Get" name="getCustomersWhoVisitedAllBusinesses">
                </form>
                <div id="getCustomersWhoVisitedAllBusinessesSuccess"></div>
                <div id="getCustomersWhoVisitedAllBusinessesTable"></div>
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

        function printToElements(classname, text) {
            var elements = document.getElementsByClassName(classname);
            for(var i = 0; i < elements.length; i++) {
                elements[i].innerHTML += text;
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

		$db_conn = OCILogon("ora_li4alex", "a46338117",  "dbhost.students.cs.ubc.ca:1522/stu");

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

        $result  = executeSQL("INSERT INTO customerPartyContact(pNumber, name) VALUES ('"
                              . $_POST['cNum'] . "', '"
                              . $_POST['cName'] . "')", "addCustomerSuccess");

        OCICommit($db_conn);
    }
	
	function handleAddShift() {
		global $db_conn;

        $startTime = date("d.m.Y:H:i:s", strtotime($_POST['startTime']));
        $endTime = date("d.m.Y:H:i:s", strtotime($_POST['endTime']));
        $duration = (strtotime($endTime) - strtoTime($startTime))/3600;

        $timeArray = OCI_Fetch_Array(executeSQL("SELECT *
                                FROM ScheduledTime
                                WHERE startTime='" . $startTime . "'
                                AND endTime='" . $endTime
                                . "')", null), OCI_NUM);
        if(count($timeArray) < 2) {
            $result = executeSQL("INSERT INTO ScheduledTime(startTime,endTime,duration)
            VALUES (TO_DATE('" . $startTime . "', 'DD.MM.YYYY:HH24:MI:SS'), TO_DATE('"
                                 . $endTime . "', 'DD.MM.YYYY:HH24:MI:SS'), " . $duration . ")","addShiftSuccess");
        }

		$result  = executeSQL("INSERT INTO ScheduledShift(shiftID, bid, email, Wage, startTime, endTime) VALUES ("
                              . $_POST['shiftID'] . ", "
                              . $_POST['business'] . ", '"
                              . $_POST['account'] . "', "
                              . $_POST['Wage'] . ", TO_DATE('"
                              . $startTime . "', 'DD.MM.YYYY:HH24:MI:SS'), TO_DATE('"
                              . $endTime . "', 'DD.MM.YYYY:HH24:MI:SS'))", "addShiftSuccess");
		OCICommit($db_conn);
	}


	function handleAddWarning() {
		global $db_conn;
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

	    $result = executeSQL("INSERT INTO Business(url, name, capacity, bid, address) VALUES ('"
                             . $_POST['url'] . " ', '"
                             . $_POST['name'] . "', '"
                             . $_POST['capacity'] . "', '"
                             . $_POST['bid'] . "', '"
                             . $_POST['address'] . "')", "addBusinessSuccess");

	    OCICommit($db_conn);
    }

    function handleAddTransaction() {
	    global $db_conn;
        $transactionDate = date("Y-m-d H:i:s", strtotime($_POST['startTime']));

	    $result = executeSQL("INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES ('" .
            $_POST['tid'] . "', '" . $_POST['bid'] . "', '" . $_POST['amount'] . "', '" . $transactionDate .  "')",
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
		executeSQL("INSERT INTO Violation(law, description)
					VALUES ('". $_POST['law'] . "', '" . $_POST['desc'] . "')",
					"addFineSuccess");
		executeSQL("INSERT INTO Fine(law, amount)
					VALUES ('". $_POST['law'] . "', " . $_POST['amount'] . ")",
					"addFineSuccess");
		OCICommit($db_conn);
	}

	function handleAddVisitor() {
		global $db_conn;
		$startTime = date("d.m.Y:H:i:s", strtotime($_POST['startTime']));
		$endTime = date("d.m.Y:H:i:s",
						(strtotime($_POST['startTime']) + $_POST["duration"] * 3600));
        $timeArray = OCI_Fetch_Array(executeSQL("SELECT *
                                FROM VisitedLength
                                WHERE VisitedLength.arrivalTime='" . $startTime . "'
                                AND VisitedLength.duration='" . $_POST["duration"]
                                . "'", null), OCI_NUM);
        if(count($timeArray) < 2) {
            executeSQL("INSERT INTO VisitedLength(arrivalTime, Duration, endTime)
                        VALUES (TO_DATE('"
                    . $startTime . "', 'DD.MM.YYYY:HH24:MI:SS'), '"
                    . $_POST['duration'] . "', TO_DATE('"
                    . $endTime . "', 'DD.MM.YYYY:HH24:MI:SS'))",
                        "addVisitorSuccess");
        }
		executeSQL("INSERT INTO VisitedTime(arrivalTime, pNumber, bid, duration)
					VALUES (TO_DATE('"
				   . $startTime . "', 'DD.MM.YYYY:HH24:MI:SS'), '"
				   . $_POST['customer'] . "', '"
				   . $_POST['business'] . "', '"
				   . $_POST['duration'] . "')",
					"addVisitorSuccess");
		OCICommit($db_conn);
	}
	
	function handleAddAccount() {
		global $db_conn;
		// TODO: Check if account already exists before setting it
		executeSQL("INSERT INTO Account(email, password)
					VALUES ('". $_POST['email'] . "', '" . $_POST['password'] . "')",
					"addAccountSuccess");
		OCICommit($db_conn);
	}

    function handleAddTracks() {
        global $db_conn;
		$time = date("Y-m-d H:i:s", strtotime($_POST['time']));
        executeSQL("INSERT INTO TracksDate(bid, email, law, violationDate)
                    VALUES (" . $_POST['business'] . ", "
                   . "'" . $_POST['account'] . "', "
                   . "'" . $_POST['violation'] . "', "
                   . "'" . $$time . "')", "addTracksSuccess");
        executeSQL("INSERT INTO TracksPaid(bid, email, law, paid)
                    VALUES (" . $_POST['business'] . ", "
                   . "'" . $_POST['account'] . "', "
                   . "'" . $_POST['violation'] . "', "
                   . $_POST['paid'] . ")", "addTracksSuccess");
        OCICommit($db_conn);
    }
	
	function handleAddAccess() {
        global $db_conn;
        executeSQL("INSERT INTO Accesses(email, bid, writePermission)
                    VALUES ('" . $_POST['account'] . "', 
                   ". "'" . $_POST['business'] . "', 
                   ". $_POST['permission'] . ")", "addAccessSuccess");
        OCICommit($db_conn);
    }

    function handleDeleteFine() {
        global $db_conn;
        executeSQL("DELETE FROM Fine WHERE law='" . $_POST['fine'] . "'",
                "deleteFineSuccess");
        executeSQL("DELETE FROM Violation WHERE law='" . $_POST['fine'] . "'",
                "deleteFineSuccess");
        OCICommit($db_conn);
    }

    function handleDeleteWarning() {
        global $db_conn;
        executeSQL("DELETE FROM Warning WHERE law='" . $_POST['warning'] . "'",
                "deleteFineSuccess");
        executeSQL("DELETE FROM Violation WHERE law='" . $_POST['warning'] . "'",
                "deleteFineSuccess");
        OCICommit($db_conn);
    }
		
	function handleDeleteAccount() {
        global $db_conn;
        executeSQL("DELETE FROM Account WHERE email='". $_POST['email'] . "'",
                "deleteAccountSuccess");
        OCICommit($db_conn);
    }
	
	function handleDeleteBusiness() {
        global $db_conn;
        executeSQL("DELETE FROM Business WHERE " . "bid=" . $_POST['business'],
                "deleteBusinessSuccess");
        OCICommit($db_conn);
    }

    function handleDeleteShift() {
	    global $db_conn;
	    executeSQL("DELETE FROM ScheduledShift WHERE shiftID='" . $_POST['shift'] . "'", "deleteShiftSuccess");
	    OCICommit($db_conn);
    }

    function handleUpdatePaid() {
        global $db_conn;
        $tracksInfo = preg_split("/_/", $_POST['fine']);
        $bid = $tracksInfo[0];
        $email = $tracksInfo[1];
        $law = $tracksInfo[2];
        executeSQL("UPDATE TracksPaid
                    SET paid=" . $_POST['paid'] . "
                    WHERE bid='" . $bid . "' AND "
                    . "email='" . $email . "' AND "
                    . "law='" . $law . "'", "updatePaidSuccess");
        OCICommit($db_conn);
    }

    function handleUpdateFineAmount() {
        global $db_conn;
        executeSQL("UPDATE Fine
                    SET amount=" . $_POST['amount'] .
                   " WHERE law='" . $_POST['fine'] . "'", "updateFineAmountSuccess");
        OCICommit($db_conn);
    }

    function handleUpdateWarningLevel() {
        global $db_conn;
        executeSQL("UPDATE Warning
                    SET severity=" . $_POST['severity'] .
                   " WHERE law='" . $_POST['warning'] . "'", "updateWarningLevelSuccess");
        OCICommit($db_conn);
    }

    function handleUpdateViolationDesc() {
        global $db_conn;
        executeSQL("UPDATE Violation
                    SET description='" . $_POST['desc'] .
                   "' WHERE law='" . $_POST['violation'] . "'", "updateViolationDescSuccess");
        OCICommit($db_conn);
    }

	function handleUpdateBusinessAddress() {
        global $db_conn;
        executeSQL("UPDATE Business
                    SET address='" . $_POST['address'] . "'
                    WHERE " . "bid=" . $_POST['business'],
                   "updateBusinessAddressSuccess");
        OCICommit($db_conn);
    }
	
	function handleUpdateAccountEmail() {
        global $db_conn;
        executeSQL("UPDATE Account
                    SET email='" . $_POST['newEmail'] . "'
                    WHERE email='" . $_POST['email'] . "'", "updateAccountEmailSuccess");
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
				$headers = ["shiftID", "bid", "email", "Wage", "startTime", "endTime"];
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
                $result = executeSQL("SELECT * FROM Business", "displayTableSuccess");
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
            case "covidSupplies":
                $result = executeSQL("SELECT * FROM CovidSupplies", "displayTableSuccess");
                $headers = ["quantity", "csid", "bid"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
            case "nonPerishableConsumables":
                $result = executeSQL("SELECT * FROM nonPerishableConsumables", "displayTableSuccess");
                $headers = ["cid", "bid"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
            case "perishableConsumables":
                $result = executeSQL("SELECT * FROM PerishableConsumables", "displayTableSuccess");
                $headers = ["expirationDate", "cid", "bid"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
			case "account":
				// For testing; probably should not display Password in production
				$result = executeSQL("SELECT * FROM Account", "displayTableSuccess");
				$headers = ["email", "password"];
				$altHeaders = ["Email Address", "Password"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
			case "accesses":
				$result = executeSQL("SELECT * FROM Accesses", "displayTableSuccess");
				$headers = ["email", "bid", "writePermission"];
				$altHeaders = ["Email Address", "Business ID", "Write Permission"];
				printTable($result, $headers, $altHeaders, "mainTable");
				break;
            case "tracksDate":
                $result = executeSQL("SELECT * FROM TracksDate", "displayTableSuccess");
                $headers = ["bid", "email", "law", "violationDate"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
            case "tracksPaid":
                $result = executeSQL("SELECT * FROM TracksPaid", "displayTableSuccess");
                $headers = ["bid", "email", "law", "paid"];
                $altHeaders = null;
                printTable($result, $headers, $altHeaders, "mainTable");
                break;
		}
	}

	function handleGetCovidSuppliesBelowX() {

	    $result = executeSQL("SELECT * FROM CovidSupplies
                            WHERE CovidSupplies.quantity<'"
                            . $_POST["x"] . "'" ,
                             "getCovidSuppliesBelowXSuccess");
	    $headers = ["csid", "quantity", "bid"];
	    $altHeaders = null;
	    printTable($result, $headers, $altHeaders, "getCovidSuppliesTable");
    }

    function handleGetBusinessesWithCapacityBetweenXAndY() {
	    $result = executeSQL("SELECT * FROM Business
                WHERE Business.capacity>='" . $_POST["x"] . "'AND  Business.capacity<='". $_POST["y"] . "'",
            "getBusinessesWithCapacityBetweenXAndYSuccess");
        $headers = ["name", "address", "capacity"];
        $altHeaders = null;
        printTable($result, $headers, $altHeaders, "getBusinessesWithCapacityBetweenXAndYTable");
    }

    function handleGetCustomersWhoVisitedAllBusinesses() {
	    $result = executeSQL("SELECT name FROM VisitedTime, CustomerPartyContact WHERE
            VisitedTime.pNumber = CustomerPartyContact.pNumber AND NOT EXISTS((SELECT bid FROM Business as b) 
            EXCEPT (SELECT bid FROM VisitedTime WHERE VisitedTime.bid = b.bid))" ,"getCustomersWhoVisitedAllBusinessesSuccess");
        $headers = ["name"];
        $altHeaders = null;
        printTable($result, $headers, $altHeaders, "getCustomersWhoVisitedAllBusinessesTable");
    }

    function handleGetCustomersWhoVisitedBusiness() {
	    $result = executeSQL("SELECT CustomerPartyContact.name, CustomerPartyContact.pNumber FROM VisitedTime, CustomerPartyContact WHERE
CustomerPartyContact.pNumber = VisitedTime.pNumber AND VisitedTime.bid = '". $_POST["business"] ."'", "getCustomersWhoVisitedBusinessSuccess");
	    $headers = ["name", "pNumber"];
	    $altHeaders = null;
        printTable($result, $headers, $altHeaders, "getCustomersWhoVisitedBusinessTable");

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
            } else if (array_key_exists("addAccount", $_POST)) {
				handleAddAccount();
			} else if (array_key_exists("addAccess", $_POST)) {
				handleAddAccess();
			} else if (array_key_exists("addTracks", $_POST)) {
				handleAddTracks();
			} else if (array_key_exists("deleteFine", $_POST)) {
				handleDeleteFine();
			} else if (array_key_exists("deleteWarning", $_POST)) {
				handleDeleteWarning();
			} else if (array_key_exists("deleteAccount", $_POST)) {
				handleDeleteAccount();
			} else if (array_key_exists("deleteBusiness", $_POST)) {
				handleDeleteBusiness();
			} else if (array_key_exists("deleteShift", $_POST)) {
                handleDeleteShift();
			} else if (array_key_exists("updatePaid", $_POST)) {
				handleUpdatePaid();
			} else if (array_key_exists("updateFineAmount", $_POST)) {
				handleUpdateFineAmount();
			} else if (array_key_exists("updateWarningLevel", $_POST)) {
				handleUpdateWarningLevel();
			} else if (array_key_exists("updateViolationDesc", $_POST)) {
				handleUpdateViolationDesc();
			} else if (array_key_exists("updateBusinessAddress", $_POST)) {
				handleUpdateBusinessAddress();
			} else if (array_key_exists("updateAccountEmail", $_POST)) {
				handleUpdateAccountEmail();
			} else if (array_key_exists("getCovidSuppliesBelowX", $_POST)) {
                handleGetCovidSuppliesBelowX();
            } else if (array_key_exists("getBusinessesWithCapacityBetweenXAndY", $_POST)) {
                handleGetBusinessesWithCapacityBetweenXAndY();
            } else if (array_key_exists( "getCustomersWhoVisitedAllBusinesses", $_POST)) {
                handleGetCustomersWhoVisitedAllBusinesses();
            } else if (array_key_exists("getCustomersWhoVisitedBusiness", $_POST)) {
                handleGetCustomersWhoVisitedBusiness();
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
			callJSFunc("printToElements('customerSelect', `" . $optionString . "`)");
		}
		disconnectDB();
	}

function fillAccountSelect() {
    if(connectDB()) {
        $result = executeSQL("SELECT * FROM Account", null);
        $optionString = "";
        while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            $optionString .= "<option value='" .$row["EMAIL"] . "'>" .
                $row["EMAIL"] . "</option>";
        }
        callJSFunc("printToElements('accountSelect', `" . $optionString . "`)");
    }
    disconnectDB();
}

function fillShiftSelect() {
    if(connectDB()) {
        $result = executeSQL("SELECT * FROM ScheduledShift", null);
        $optionString = "";
        while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            $optionString .= "<option value='" . $row["SHIFTID"] . "'>" .
                $row["ACCOUNT"] . " - " . $row["BUSINESS"] . " - " . $row["STARTTIME"] . "</option>";
        }
        callJSFunc("printToElements('shiftSelect', `" . $optionString . "`)");
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
			callJSFunc("printToElements('businessSelect', `" . $optionString . "`)");
		}
		disconnectDB();
	}

    function fillFineSelect() {
        if(connectDB()) {
            $result = executeSQL(
                "SELECT *
                FROM Fine, Violation
                WHERE Fine.law=Violation.law",null);
            $optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='" . $row["LAW"] . "'>" .
					$row["LAW"] . " - amount: " . $row["AMOUNT"] . "</option>";
			}
			callJSFunc("printToElements('fineSelect', `" . $optionString . "`)");
        }
        disconnectDB();
    }

    function fillWarningSelect() {
        if(connectDB()) {
            $result = executeSQL(
                "SELECT *
                FROM Warning, Violation
                WHERE Warning.law=Violation.law", null);
            $optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='" . $row["LAW"] . "'>" .
					$row["LAW"] . " - severity: " . $row["SEVERITY"] . "</option>";
			}
			callJSFunc("printToElements('warningSelect', `" . $optionString . "`)");
        }
        disconnectDB();
    }

    function fillViolationSelect() {
        if(connectDB()) {
            $result = executeSQL(
                "SELECT *
                FROM Violation", null);
            $optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='" . $row["LAW"] . "'>" .
					$row["LAW"] . " - " . $row["DESCRIPTION"] . "</option>";
			}
			callJSFunc("printToElements('violationSelect', `" . $optionString . "`)");
        }
        disconnectDB();
    }

    function fillTrackedFineSelect() {
        if(connectDB()) {
            $result = executeSQL(
                "SELECT *
                FROM TracksPaid, Fine
                WHERE TracksPaid.law=Fine.law", null);
            $optionString = "";
			while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
				$optionString .= "<option value='"
                                  . $row["BID"]
                                  . "_" . $row["EMAIL"]
                                  . "_" . $row["LAW"] . "'> BID: "
                                  . $row["BID"]
                                  . " - " . $row["LAW"]
                                  . " - "
                                  . $row["EMAIL"] . "</option>";
			}
			callJSFunc("printToElements('trackedFineSelect', `" . $optionString . "`)");
        }
        disconnectDB();
    }

	fillCustomerSelect();
	fillBusinessSelect();
    fillFineSelect();
    fillWarningSelect();
    fillViolationSelect();
    fillAccountSelect();
    fillTrackedFineSelect();
    fillShiftSelect();
?>
</html>
