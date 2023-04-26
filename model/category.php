<?php
    function add_category($category_name, $category_description) {
        $conn = connectdb();
        $sql = "INSERT INTO tbl_category (category_name, category_description) VALUES ('".$category_name."', '".$category_description."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function update_category($id, $category_name, $category_description) {
        $conn = connectdb();
        $sql = "UPDATE tbl_category SET category_name='".$category_name."', category_description='".$category_description."' WHERE id=".$id;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

    }
    function get_catalog($id) {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_category WHERE id=".$id);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function delete_category($id) {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_category");
        $stmt->execute();

        // sql to delete a record
        $sql = "DELETE FROM tbl_category WHERE id=".$id;

        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function get_all_categories() {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_category");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>