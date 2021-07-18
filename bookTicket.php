<div class="flex-container">
    <div>
    <h2>Book Ticket</h2>
    <h4>Fare: Php 50.00 </h4>
    <h3 style="color: red;"><?php echo htmlspecialchars($error) ?></h3>
        <div class="myForm">
            <form action="index.php" method="POST">
                <label>Passenger Name:</label><input type="text" name="name" required/>
                <br />
                <label>Passenger Destination:</label><input type="text" name="destination" required />
                <br />
                <label>Bus Number:</label>
                <br />
                <select name="busNumber" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                </select>
                <br />
                <input type="hidden" name="price" value="50" />
                <input type="submit" name="submit" value="Book Ticket" />
            </form>
        </div>

        <?php if (!empty($passengers)) { ?>
            <table class="info">
                <tr>
                    <th colspan=2>Passenger Ticket</th>
                </tr>
                <tr>
                    <td>
                        Passenger Name:
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passengers['name']) ?>
                    </td>
                </tr>
                <tr>
                <td>
                        Passenger Destination:
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passengers['dest']) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ticket Number:
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passengers['ticketNum']) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bus Number:
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passengers['bus']) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Total Fare:
                    </td>
                    <td>
                        Php <?php echo htmlspecialchars($passengers['fare']) ?>.00
                    </td>
                </tr>
            </table>
        <?php } ?>
    </div>