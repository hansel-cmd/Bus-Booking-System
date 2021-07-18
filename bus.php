<div>
    <h2>Buses</h2>


    <?php if (!empty($_SESSION['bus1'])) { ?>
        <table class="bus">
            <tr>
                <th colspan=3 style="text-align: center;">
                    Bus 1 Passengers
                </th>
            </tr>
            <tr>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Passenger Destination</th>
            </tr>
            <?php foreach($_SESSION['bus1'] as $passenger) {?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($passenger['ticketNum']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['name']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['dest']) ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <br />
    <?php } ?>


    <?php if (!empty($_SESSION['bus2'])) { ?>
        <table class="bus">
            <tr>
                <th colspan=3 style="text-align: center;">
                    Bus 2 Passengers
                </th>
            </tr>
            <tr>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Passenger Destination</th>
            </tr>
            <?php foreach($_SESSION['bus2'] as $passenger) {?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($passenger['ticketNum']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['name']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['dest']) ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <br />
    <?php } ?>


    <?php if (!empty($_SESSION['bus3'])) { ?>
        <table class="bus">
            <tr>
                <th colspan=3 style="text-align: center;">
                    Bus 3 Passengers
                </th>
            </tr>
            <tr>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Passenger Destination</th>
            </tr>
            <?php foreach($_SESSION['bus3'] as $passenger) {?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($passenger['ticketNum']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['name']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['dest']) ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <br />
    <?php } ?>


    <?php if (!empty($_SESSION['bus4'])) { ?>
        <table class="bus">
            <tr>
                <th colspan=3 style="text-align: center;">
                    Bus 4 Passengers
                </th>
            </tr>
            <tr>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Passenger Destination</th>
            </tr>
            <?php foreach($_SESSION['bus4'] as $passenger) {?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($passenger['ticketNum']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['name']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['dest']) ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <br />
    <?php } ?>
    

    <?php if (!empty($_SESSION['bus5'])) { ?>
        <table class="bus">
            <tr>
                <th colspan=3 style="text-align: center;">
                    Bus 5 Passengers
                </th>
            </tr>
            <tr>
                <th>Ticket Number</th>
                <th>Passenger Name</th>
                <th>Passenger Destination</th>
            </tr>
            <?php foreach($_SESSION['bus5'] as $passenger) {?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($passenger['ticketNum']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['name']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($passenger['dest']) ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
    <?php } ?>
    

    </div>
</div>
