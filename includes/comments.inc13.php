<?php
function setComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $firstName = $_POST['firstName'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO csharpvid1_comments(firstName, date, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstName, $date, $message);
        $stmt->execute();
        $stmt->close();

        // Redirect to avoid form resubmission on page refresh
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}

function getComments($conn) {
    $sql = "SELECT * FROM csharpvid1_comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id = $row['firstName'];
        $sql2 = "SELECT * FROM user WHERE id='$id'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo"<div class='comment-box'>";
            echo"<p style='font-weight: bold'>".$row2['firstName']. " | ";
            echo $row['date']."<br>"."</p>";
            echo "<p style='font-size: 10pt; margin-top:4px;'>".nl2br($row['message']);
            echo "</p>";
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id'] ){
                    echo "<form class='delete-form' method= 'POST' action= '".deleteComments($conn)."'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <button name='commentDelete' type='submit'>Delete</button>
                    </form>
                    <form class='edit-form' method= 'POST' action='../../includes/edit/editcomment13.php'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <input type='hidden' name='firstName' value='".$row['firstName']."'>
                        <input type='hidden' name='date' value='".$row['date']."'>
                        <input type='hidden' name='message' value='".$row['message']."'>
                        <button>Edit</button>
                    </form>";
                        }
            }
            
        echo"</div>";
        }

       
    } 
}

function editComments($conn) {
    if (isset($_POST['commentEdit'])) {
        $cid = $_POST['cid'];
        $firstName = $_POST['firstName'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE csharpvid1_comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: ../../videos/csharp/csharpvid1.php");
    }
}

function deleteComments($conn) {
    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];

        $sql = "DELETE FROM csharpvid1_comments WHERE cid='$cid'";
        $result = $conn->query($sql);
        echo "<script>
                window.location.href = '../../videos/csharp/csharpvid1.php';
              </script>";
    }
}

