<?php
// class Blog_model {
// //     private $blog = [
// //         ["penulis" => "Linux","judul" => "Belajar PHP MVC","tulisan" => " "],
// //         ["penulis" => "Linux","judul" => "Belajar OOP PHP","tulisan" => "Tutorial PHP OOP"] ,
// //         ["penulis" => "Linux","judul" => "Belajar PHP Dasar","tulisan" => "Tutorial PHP Dasar"]
// //     ];
// //     public function getAllBlog() {
// //         return $this->blog;
// //     }
// private $dbh;
// private $stmt;
// public function __construct() {
//     //data source name$dsn = "mysql:host=localhost;dbname=mvcpwpb";
//     try {
//         $this->dbh = new PDO($dsn, "root","");
//     } catch(PDOException $e) {
//         die($e->getMessage());
//     }
// }
// public function getAllBlog() {
//     $this->stmt = $this->dbh->prepare("SELECT * FROM blog");
//     $this->stmt->execute();
//     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
// }
//  }

class Blog_model {
    private $table = 'blog';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllBlog() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }
    public function getBlogById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataBlog($data) {
        $query = "INSERT INTO blog VALUES (NULL, :penulis, :judul, :tulisan)";
        $this->db->query($query);
        $this->db->bind("penulis", $data["penulis"]);
        $this->db->bind("judul", $data["judul"]);
        $this->db->bind("tulisan", $data["tulisan"]);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function hapusDataBlog($id) {
        $query = "DELETE FROM blog WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataBlog($data) {
        $query = "UPDATE blog SET
                        penulis = :penulis,
                        judul = :judul,
                        tulisan = :tulisan
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind("penulis", $data["penulis"]);
        $this->db->bind("judul", $data["judul"]);
        $this->db->bind("tulisan", $data["tulisan"]);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }


    public function cariDataBlog() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM blog WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
?>