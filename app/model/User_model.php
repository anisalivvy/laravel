<?php
class User_model {
    private $table= 'user';
    private $db;

    // private $nama = "Nisa";
    // public function getUser() {
    //     return $this->nama;
    // }

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllUser() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }
    public function getUserById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataUser($data) {
        $query = "INSERT INTO user VALUES (NULL, :username, :nama, :email, :password)";
        $this->db->query($query);
        $this->db->bind("username", $data["username"]);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("password", $data["password"]);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function hapusDataUser($id) {
        $query = "DELETE FROM user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data) {
        $query = "UPDATE user SET
                        username = :username,
                        nama = :nama,
                        email = :email,
                        password = :password
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind("username", $data["username"]);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("password", $data["password"]);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function cariDataUser() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM user WHERE username LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
?>