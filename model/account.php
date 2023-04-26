<?php
function checkuser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0)
        return $kq[0]['role'];
    else
        return 0;
}

function getcheckuserinfo($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_all_accounts() {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_account($id) {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id=".$id);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function delete_account($id) {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();

    // sql to delete a record
    $sql = "DELETE FROM tbl_user WHERE id=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}
function insert_user($username, $email, $numberphone, $user, $pass)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (user, pass, username, email, numberphone) VALUES ('$user', '$pass', '$username', '$email', '$numberphone')";
    $conn->exec($sql);
}
function update_account($id, $user, $role) {
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET user='".$user."', role='".$role."' WHERE id=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function update_information($id, $username, $email, $numberphone, $pass) {
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET username='".$username."', email='".$email."', numberphone='".$numberphone."', pass='".$pass."' WHERE id=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
?>