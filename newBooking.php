<html>
    <body>
        <form method="post" action="createNewBooking.php">
            Member ID: <?php include("createMemberDropdown.php");?><br>
            Court ID: <input type="ID" name="courtID"/><br>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
</html>